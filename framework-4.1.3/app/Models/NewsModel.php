<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{

    //Obtenemos la tabla correspondiente a noticias
    protected $table = 'tbl_noticias';

    //Indicamos el campo que es PK
    protected $primaryKey = 'id';

    protected $allowedFields = ['id', 'Titular', 'Cuerpo', 'Fecha', 'Slug', 'usuarios_id'];


}
