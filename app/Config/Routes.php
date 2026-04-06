<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::index');
$routes->get('login', 'Admin::login');
$routes->post('post_login', 'Admin::post_login');
$routes->get('logout', 'Admin::logout');
$routes->get('usuario/', 'Usuario::index');
$routes->get('usuario/detalle/(:num)', 'Usuario::detalle/$1');
$routes->get('usuario/nuevo', 'Usuario::nuevo');
