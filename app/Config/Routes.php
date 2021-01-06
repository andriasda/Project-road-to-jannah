<?php namespace Config;

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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'HalamanUtama::index');
$routes->get('/about', 'HalamanUtama::about');
$routes->get('/contact', 'HalamanUtama::contact');
$routes->get('/loginuser', 'HalamanUtama::loginuser');
$routes->get('/HalamanUtama/insertContact', 'HalamanUtama::insertContact');

$routes->get('/Admin', 'Admin::index');
$routes->get('/pesan', 'Admin::pesan');
$routes->get('/materi', 'Admin::materi');
$routes->get('/user', 'Admin::user');
$routes->get('/detail/(:segment)', 'Admin::detail/$1');
$routes->get('/loginadmin', 'LoginAdminC::index');
$routes->get('/Admin/insertMateri', 'Admin::insertMateri');
$routes->get('/Admin/insertUser', 'Admin::insertUser');
$routes->get('/detailuser/(:segment)', 'Admin::detailuser/$1');

$routes->get('/dashboard', 'UserController::index');
$routes->get('/fiqih', 'UserController::fiqih');
$routes->get('/mengaji', 'UserController::mengaji');
$routes->get('/KelasSholat', 'UserController::Sholat');
$routes->get('/Tajwid', 'UserController::tajwid');
$routes->get('/Aqidah', 'UserController::Aqidah');
$routes->get('/belajar/(:segment)', 'UserController::belajar/$1');

/**
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
