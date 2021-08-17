<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'SessionAdmin' => \App\Filters\SessionAdminFilter::class //Añadimos el filtro para validar que el admin este logueado
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	//Si el admin no está logueado no se podrá acceder a las siguientes rutas
	public $filters = [
		"SessionAdmin" => [
			"before" => [
				"/admin",
				"/admin/lista_usuarios",
				"admin/añadir_usuario",
				"/admin/guardar_usuario",
				"/admin/eliminar_usuario/(:num)",
				"/admin/editar_usuario/(:num)",
				"/admin/actualizar_usuario",
				"/admin/lista_categorias",
				"admin/añadir_categoria",
				"/admin/guardar_categoria",
				"/admin/eliminar_categoria/(:num)",
				"/admin/editarcategoria/(:num)",
				"/admin/actualizar_categoria",
				"/admin/lista_noticias",
				"admin/añadir_noticia",
				"/admin/guardar_noticia",
				"/admin/eliminar_noticia/(:num)",
				"/admin/editar_noticia/(:num)",
				"/admin/actualizar_noticia"
			]
		]
	];
}
