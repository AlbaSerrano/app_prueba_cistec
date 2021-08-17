<?php

//Se incializará con la BD creada
namespace App\Models;

use CodeIgniter\Model;

//Modelo para gestionar las categorías de noticias de la BD
class CategoriesModel extends Model {

    //Obtenemos la tabla correspondiente a categorías
    protected $table = 'tbl_noticias_categorias';

    //Indicamos el campo que es PK
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['id','Nombre'];
}







?>