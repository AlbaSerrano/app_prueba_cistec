<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsCategoriesModel extends Model
{

    //Obtenemos la tabla correspondiente a noticias tiene categorías
    protected $table = 'tbl_noticias_tiene_categorias';

    protected $primaryKey = 'noticias_id';

    protected $allowedFields = ['id', 'noticias_id', 'noticias_categorias_id'];

    public function getStudentInfo($studentid){
        $db = \Config\Database::connect();
        $query = $this->$db->select("Titular")
                   ->from("tbl_noticias as tnews")
                   ->join("tbl_noticias_tiene_categorias as ntc", "ntc.noticias_id = tnews.id", "inner")
                   ->where("st.id", '')
                   ->get();
        return $query->result();        
    }
}
