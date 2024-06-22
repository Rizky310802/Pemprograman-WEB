<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Route Definitions
$routes->get('/', 'Home::index');

// Routes untuk halaman contact
$routes->get('/contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');
$routes->get('/contact/list', 'ContactController::index'); // Menampilkan daftar kontak (contact_list.php)

// Routes untuk CRUD Registrations
$routes->get('/registrations', 'RegistrationController::index');
$routes->get('/registrations/create', 'RegistrationController::create');
$routes->post('/registrations/store', 'RegistrationController::store');
$routes->get('/registrations/show/(:num)', 'RegistrationController::show/$1');
$routes->get('/registrations/edit/(:num)', 'RegistrationController::edit/$1');
$routes->post('/registrations/update/(:num)', 'RegistrationController::update/$1');
$routes->get('/registrations/delete/(:num)', 'RegistrationController::delete/$1');

// Additional Routing
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

