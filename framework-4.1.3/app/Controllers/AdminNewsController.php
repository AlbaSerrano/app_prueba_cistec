<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\NewsModel;
use App\Models\NewsCategoriesModel;
use App\Models\CategoriesModel;

class AdminNewsController extends BaseController
{

    public function index()
    {
        $new_model = new NewsModel();
        $data['news'] = $new_model->orderBy('id', 'ASC')->findAll();
        return view('admin/news/news_view', $data);
    }

    //METODO PUBLIC!!!!!!!!!!!!!!!
    public function showNewsByCategory(){
        $new_category_model = new NewsCategoriesModel();
        $category_model = new CategoriesModel();
        $new_model = new NewsModel();

        $data = $category_model->findAll();
        $i = 0;
        if ($data) {
            foreach ($data as $category) {
                
                $query = $new_category_model->select('noticias_id')->where('noticias_categorias_id', $category['id'])->findAll();
                if ($query) {
                    $nombre = $category['Nombre'];
                    for($j = 0; $j < count($query); $j++){
                        $id_new = $query[$j]['noticias_id'];
                        $list_new_category[$j] = array($new_model->select('Titular')->where('id', $id_new)->First() , $nombre); 
                                            
                    }
                    $new['new'][$i] = $list_new_category;                   
                    $i++;
                }              
            }
        }
        return view('listado_noticias_categoria', $new);
    }

    public function showAddNew()
    {
        //Obtenemos todas las categorías para pasarlas a la vista
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        return view('admin/news/add_new', $data);
    }

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

    public function getNew($headline = null)
    {
        $new_model = new NewsModel();
        $data = $new_model->where('Titular', $headline)->first();
        $id_new = $data['id'];
        return $id_new;
    }

    public function deleteNew($id = null)
    {
        $new_model = new NewsModel();
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->where('noticias_id', $id)->delete($id);
        $data['new'] = $new_model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/admin/lista_noticias'));
    }

    public function editNew($id = null)
    {
        $new_model = new NewsModel();
        //Obtenemos todas las categorías para pasarlas a la vista
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        $data['new'] = $new_model->where('id', $id)->first();
        return view('admin/news/edit_new', $data);
    }

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

    public function addNewAndCategory($data = null)
    {
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->insert($data);
    }

    public function deleteNewAndCategory($id = null)
    {
        $new_category_model = new NewsCategoriesModel();
        $new_category_model->where('noticias_id', $id)->delete($id);
    }

    public function removeSpecialChar($str)
    {
        $res = str_replace(array(',', "'", ";", "´"), '', $str);
        return $res;
    }
}
