<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//Cargamos el modelo que gestiona los usuarios
use App\Models\UsersModel;

use App\Models\NewsModel;
use App\Models\CategoriesModel;
use App\Models\NewsCategoriesModel;

use App\DataBase\Seeds\Admin;

class DashboardController extends BaseController
{

    public function index()
    {
        $new_model = new NewsModel();
        $data['news'] = $new_model->orderBy('fecha', 'DESC')->findAll();
        return view('index', $data);
    }

    public function showLastFiveNews()
    {
        $new_model = new NewsModel();
        $data['news'] = $new_model->orderBy('fecha', 'DESC')->findAll(5);
        return view('last_five_news', $data);
    }

    public function loadCategories(){
        //Obtenemos todas las categorías para pasarlas a la vista
        $category_model = new CategoriesModel();
        $data['categories'] = $category_model->orderBy('id', 'ASC')->findAll();
        return view('categories', $data);
    }

    public function showNewsByCategory(){
        $category_model = new CategoriesModel();
        $new_category_model = new NewsCategoriesModel();
        $new_model = new NewsModel();
        $id_category = $_POST['selectCategory'];
        $data['category'] = $category_model->where('id', $id_category)->First();
        $news = $new_category_model->select('noticias_id')->where('noticias_categorias_id', $id_category)->findAll();
        if ($news){
            $i = 0;
           foreach ($news as $new){
               $data['news'][$i] = $new_model->select('Titular')->where('id', $new['noticias_id'])->First();
               $i++;
           } 
        }
        return view('list_news_by_category', $data);
    }

    public function showDetailNew($slug = null){
        $new_model = new NewsModel();
        $data['new'] = $new_model->where('Slug', $slug)->First();
        return view('new_detail', $data);
    }

    /*Obtenemos el tiempo real de Pamplona a través de la API open weather map y pasamos los datos a la vista 'tiempo'*/
    public function weather()
    {
        $apiKey = "35b7633f13c307ae8f1b5f73c253aa17";
        $city = "Pamplona";
        $lang = "es";
        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&APPID=" . $apiKey . "&units=metric&lang=" . $lang;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $weather = json_decode($response);

        date_default_timezone_set('Europe/Madrid');
        setlocale(LC_TIME, 'spanish'); //Windows
        $date = time();
        $date_es = strtotime($date);
        $date_es = strftime("Estamos a %d de %B de %Y", $date);
        $time_es = strftime("A día %A a las %H:%M H", $date);

        $data = [
            "weather" => $weather,
            "date_es" => $date_es,
            "time_es" => $time_es
        ];

        return view('tiempo', $data);
    }
}
