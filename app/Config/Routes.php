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
$routes->setDefaultController('Login');
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

//Login
$routes->get('/', 'Login::index');
$routes->post('/Login', 'Login::session');
$routes->get('/Login', 'Login::destroy_session');
//pedidos
$routes->post('/Pedidos', 'Pedidos::Insertar');
$routes->get('/Pedidos/Obtenerpedido/(:any)', 'Pedidos::Obtenerpedido/$1');
$routes->post('/Pedidos', 'Pedidos::Actualizar');
$routes->get('/Pedidos/Eliminar/(:any)', 'Pedidos::Eliminar/$1');
//Rastreo
$routes->post('/Rastreo', 'Rastreo::Insertarhrastreo');
$routes->get('/Rastreo/Obtenerrastreo/(:any)', 'Rastreo::Obtenerrastreo/$1');
$routes->post('/Rastreo', 'Rastreo::Insertarpallet');
$routes->get('/Rastreo/EliminarPallet/(:any)', 'Rastreo::EliminarPallet/$1');
$routes->get('/Rastreo/Obtenerpallet/(:any)', 'Rastreo::Obtenerpallet/$1');
$routes->post('/Rastreo', 'Rastreo::Actualizarpallet');
$routes->post('/Rastreo', 'Rastreo::Actualizarhrastreo');
$routes->get('/Rastreo/Eliminarhrastreo/(:any)', 'Rastreo::Eliminarhrastreo/$1');
$routes->get('/Rastreo/pdf/(:any)', 'Rastreo::pdf/$1');
//Lotes
$routes->post('/Lotes', 'Lotes::Insertar');
$routes->get('/Lotes/Obtenerlote/(:any)', 'Lotes::Obtenerlote/$1');
$routes->post('/Lotes', 'Lotes::Actualizar');
$routes->get('/Lotes/Eliminar/(:any)', 'Lotes::Eliminar/$1');
//Embarques
$routes->get('/', 'Embarques::agregarembarque');
$routes->post('/Embarques', 'Embarques::insertarhembarque');
$routes->get('/Embarques/Agregarpallet/(:any)', 'Embarques::Agregarpallet/$1');
$routes->post('/Embarques', 'Embarques::Insertarpallet');

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
