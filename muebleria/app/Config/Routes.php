<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Clientes','ClienteC::index');
$routes->get('/Clientes/Add','ClienteC::add');
$routes->post('/Clientes/insert','ClienteC::insert');
$routes->get('/Clientes/delete/(:num)','ClienteC::delete/$1');

$routes->get('/Clientes/Edit/(:num)','ClienteC::Edit/$1');
$routes->post('/Clientes/update/','ClienteC::update/');

$routes->post('/Clientes/update/','ClienteC::update/');

$routes->get('/Usuario','UsuarioC::index');
$routes->get('/Usuario/salir','UsuarioC::salir');

$routes->post('/Usuario/acceder','UsuarioC::acceder');