<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\NewsModel;
use App\Models\NewsCategoriesModel;
use App\Models\CategoriesModel;

class AdminNewsController extends BaseController
{

    //Pasamos todas las noticias existentes a la vista
    public function index()
    {
        $new_model = new NewsModel();
        $data['news'] = $new_model->orderBy('id', 'ASC')->findAll();
        return view('admin/news/news_view', $data);
    }


    public function showAddNew()
    {
        //Obtenemos todas las categorías para pasarlas a la vista
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        return view('admin/news/add_new', $data);
    }

    //Añadimos la nueva noticia con los datos que recibimos a través del método post del formulario 
    public function addNew()
    {
        $new_model = new NewsModel();

        $headline = $this->request->getVar('headline');
        $headline_correct = $this->removeSpecialChar($headline);
        $slug = str_replace(' ', '-', $headline_correct);
        $id_user = session('id');
        $id_category = $_POST['selectCategory'];

        $data_new = [
            'Titular' => $headline,
            'Cuerpo' => $this->request->getVar('body'),
            'Fecha' => $this->request->getVar('date'),
            'Slug' => $slug,
            'usuarios_id' => $id_user
        ];

        $new_model->insert($data_new);

        $id_new = $this->getNew($headline);
        $data_new_category = [
            'noticias_id' => $id_new,
            'noticias_categorias_id' => $id_category
        ];

        $this->addNewAndCategory($data_new_category);
        return $this->response->redirect(base_url('/admin/lista_noticias'));
    }

    //Obtenemos la noticia a través de un titular
    public function getNew($headline = null)
    {
        $new_model = new NewsModel();
        $data = $new_model->where('Titular', $headline)->first();
        $id_new = $data['id'];
        return $id_new;
    }

    //Eliminamos la noticia con el id recibido a través del método post
    public function deleteNew($id = null)
    {
        $new_model = new NewsModel();
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->where('noticias_id', $id)->delete($id);
        $data['new'] = $new_model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/admin/lista_noticias'));
    }

    //Obtenemos de la noticia con el id recibido a través del método post
    public function editNew($id = null)
    {
        $new_model = new NewsModel();
        //Obtenemos todas las categorías para pasarlas a la vista
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        $data['new'] = $new_model->where('id', $id)->first();
        return view('admin/news/edit_new', $data);
    }

    //Actualizamos la noticia con los nuevos datos que recibimos a través del método post del formulario 
    public function update()
    {
        $new_model = new NewsModel();
        $headline = $this->request->getVar('headline');
        $headline_correct = $this->removeSpecialChar($headline);
        $slug = str_replace(' ', '-', $headline_correct);
        $id = $this->request->getVar('id');
        $id_category = $_POST['selectCategory'];

        $data = [
            'Titular' => $this->request->getVar('headline'),
            'Cuerpo' => $this->request->getVar('body'),
            'Fecha' => $this->request->getVar('date'),
            'Titular' => $this->request->getVar('headline'),
            'Slug' => $slug,
            'usuarios_id' => session('id')
        ];

        $new_model->update($id, $data);
        $this->deleteNewAndCategory($id);

        $data_new_category = [
            'noticias_id' => $id,
            'noticias_categorias_id' => $id_category
        ];

        $this->addNewAndCategory($data_new_category);
        return $this->response->redirect(base_url('/admin/lista_noticias'));
    }

    //Insertamos el id de la noticia y de la categoría
    public function addNewAndCategory($data = null)
    {
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->insert($data);
    }

    //Eliminamos el id de la noticia y de la categoría
    public function deleteNewAndCategory($id = null)
    {
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->where('noticias_id', $id)->delete($id);
    }

    //Elimina los caracteres especiales 
    public function removeSpecialChar($str)
    {
        $res = str_replace(array(',', "'", ";", "´"), '', $str);
        return $res;
    }
}
