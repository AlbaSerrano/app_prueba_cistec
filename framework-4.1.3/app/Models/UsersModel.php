<?php

//Se incializará con la BD creada
namespace App\Models;

use CodeIgniter\Model;

//Modelo para gestionar los usuarios
class UsersModel extends Model
{

    //Obtenemos la tabla correspondiente a usuarios
    protected $table = 'tbl_usuarios';

    //Indicamos el campo que es PK
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['Usuario', 'Email', 'Contrasena'];

    /*Verificamos si el usuario recibido por POST existe en la bd*/
    public function obtainUser($data)
    {
        $user = $this->db->table('tbl_usuarios');
        $user->where($data);
        return $user->get()->getResultArray();
    }

    
}
