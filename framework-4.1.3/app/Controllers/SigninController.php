<?php

namespace App\Controllers;

use CodeIgniter\Controller;

//Agregamos nuestro modelo de usuarios
use App\Models\UsersModel;

//Agregamos nuestro modelo de noticias
use App\Models\NewsModel;



class SigninController extends BaseController
{

    public function login()
    {
        //Obtenemos el mensaje en el caso de login incorrecto para pasarselo a la vista
        $message = session('mensaje');
        return view('login', ["message" => $message]);
    }
    
    public function signin()
    {
        //Obtenemos el usuario y la contraseña introducidos por el usuario
        $usuario = $this->request->getPost('user');
        $password = $this->request->getPost('password');

        $userModel = new UsersModel();

        //Obtenemos los datos del usuario que hace login
        $userData = $userModel->obtainUser(['Usuario' => $usuario]);

        //Si existe el usuario en la bd, verificamos si la contraseña es correcta o no
        if (count($userData) > 0 && password_verify($password, $userData[0]['Contrasena'])) {

            //Creamos un array donde vamos a mandar los datos de usuario (usuario e email)
            $data = [
                "user" => $userData[0]['Usuario'],
                "email" => $userData[0]['Email'],
                "id" => $userData[0]['id']
            ];

            //Creamos una sesión
            $session = session();
            //Agregamos los datos obtenidos del usuario a la sesión
            $session->set($data);

            //Redireccionamos a la ruta admin
            return redirect()->to(base_url('/admin'));
        } else { //Si el usuario o la contraseña no son válidos
            return redirect()->to(base_url('/login'))->with('mensaje', 'Usuario y/o contraseña incorrectos');
        }
    }

    public function admin(){
        $new_model = new NewsModel();
        $data['news'] = $new_model->orderBy('fecha', 'DESC')->findAll();
        return view('admin/admin_view', $data);
    }

    public function signout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
}
