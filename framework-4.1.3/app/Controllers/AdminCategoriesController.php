<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//Cargamos el modelo que gestiona las categorías
use App\Models\CategoriesModel;

class AdmincategoriesController extends BaseController
{
    public function index()
    {
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        return view('admin/categories/categories_view', $data);
    }

    public function showAddCategory()
    {
        return view('admin/categories/add_category');
    }

    public function addCategory()
    {
        $category_model = new CategoriesModel();
        $data = [
            'Nombre' => $this->request->getVar('name')
        ];
        $category_model->insert($data);
        return $this->response->redirect(base_url('/admin/lista_categorias'));
    }

    public function deleteCategory($id = null)
    {
        $category_model = new CategoriesModel();
        $data['category'] = $category_model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/admin/lista_categorias'));
    }

    public function editCategory($id = null)
    {
        $category_model = new CategoriesModel();
        $data['category'] = $category_model->where('id', $id)->first();
        return view('admin/categories/edit_category', $data);
    }

    public function update()
    {
        $category_model = new CategoriesModel();
        $id = $this->request->getVar('id');
        $data = [
            'Nombre' => $this->request->getVar('name')
        ];
        $category_model->update($id, $data);
        return $this->response->redirect(base_url('/admin/lista_categorias'));
    }
}
