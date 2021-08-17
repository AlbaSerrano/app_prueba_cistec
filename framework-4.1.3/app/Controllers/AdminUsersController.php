<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//Cargamos el modelo que gestiona los usuarios
use App\Models\UsersModel;

class AdminUsersController extends BaseController
{
    //Pasamos todos los usarios existentes a la vista
    public function index(){
        $user_model = new UsersModel();
        $data['users'] = $user_model->orderBy('id', 'ASC')->findAll();
        return view('admin/users/users_view', $data);
    }

    //Devuelve la vista añadir usuario
    public function showAddUser(){
        return view('admin/users/add_user');
    }

    //Añadimos el nuevo usuario con los datos que recibimos a través del método post del formulario 
    public function addUser(){
        $user_model = new UsersModel();
        $password = $this->request->getVar('password');
        $data = [
            'Usuario' => $this->request->getVar('user'),
            'Email' => $this->request->getVar('email'),
            'Contrasena' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $user_model->insert($data);
        return $this->response->redirect(base_url('/admin/lista_usuarios'));
    }

    //Recibimos el id del usuario a eliminar y se lo pasamos a la vista
    public function deleteUser($id=null){
        $user_model = new UsersModel();
        $data['user'] = $user_model->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/admin/lista_usuarios'));
    }

    //Recibimos el id del usuario a modificar y se lo pasamos a la vista
    public function editUser($id=null){
        $user_model = new UsersModel();
        $data['user'] = $user_model->where('id', $id)->first();
        return view('admin/users/edit_user', $data);
    }

    //Actualizamos el usuario seleccionado con los nuevos datos que recibimos a través del método post del formulario 
    public function update(){
        $user_model = new UsersModel();
        //Obtenemos los nuevos datos
        $id = $this->request->getVar('id');
        $password = $this->request->getVar('password');
        $data = [
            'Usuario' => $this->request->getVar('user'),
            'Email' => $this->request->getVar('email'),
            'Contrasena' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $user_model->update($id, $data);
        return $this->response->redirect(base_url('/admin/lista_usuarios'));
    }
}
