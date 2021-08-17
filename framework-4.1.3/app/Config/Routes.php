<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('DashboardController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'DashboardController::index');
$routes->get('/login', 'SigninController::login');
$routes->post('/signin', 'SigninController::signin');

//LOGIN
$routes->get('/admin', 'SigninController::admin');
$routes->get('/signout', 'SigninController::signout');

//EL TIEMPO
$routes->get('/eltiempo', 'DashboardController::weather');

//USERS
$routes->get('/admin/lista_usuarios', 'AdminUsersController::index');
$routes->get('/admin/añadir_usuario', 'AdminUsersController::showAddUser');
$routes->post('/admin/guardar_usuario', 'AdminUsersController::addUser');
$routes->get('/admin/eliminar_usuario/(:num)', 'AdminUsersController::deleteUser/$1');
$routes->get('/admin/editar_usuario/(:num)', 'AdminUsersController::editUser/$1');
$routes->post('/admin/actualizar_usuario', 'AdminUsersController::update');

//CATEGORIES
$routes->get('/admin/lista_categorias', 'AdmincategoriesController::index');
$routes->get('/admin/añadir_categoria', 'AdmincategoriesController::showAddCategory');
$routes->post('/admin/guardar_categoria', 'AdmincategoriesController::addCategory');
$routes->get('/admin/eliminar_categoria/(:num)', 'AdmincategoriesController::deleteCategory/$1');
$routes->get('/admin/editar_categoria/(:num)', 'AdmincategoriesController::editCategory/$1');
$routes->post('/admin/actualizar_categoria', 'AdmincategoriesController::update');

//NEWS
$routes->get('/admin/lista_noticias', 'AdminNewsController::index');
$routes->get('/admin/añadir_noticia', 'AdminNewsController::showAddNew');
$routes->post('/admin/guardar_noticia', 'AdminNewsController::addNew');
$routes->get('/admin/eliminar_noticia/(:num)', 'AdminNewsController::deleteNew/$1');
$routes->get('/admin/editar_noticia/(:num)', 'AdminNewsController::editNew/$1');
$routes->post('/admin/actualizar_noticia', 'AdminNewsController::update');

//PUBLIC
$routes->get('/noticias/ultimas_noticias', 'DashboardController::showLastFiveNews');
$routes->get('/noticias/categorias', 'DashboardController::loadCategories');
$routes->get('/noticias/categorias/(:any)', 'DashboardController::showNewsByCategory');
$routes->post('/vernoticias', 'DashboardController::showNewsByCategory');

 

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
