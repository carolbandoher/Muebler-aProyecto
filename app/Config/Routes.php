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


$routes->get('/Usuario','UsuarioC::index');
$routes->get('/Usuario/salir','UsuarioC::salir');

$routes->post('/Usuario/acceder','UsuarioC::acceder');

//Rutas Admin muebles

$routes->get('/Muebles','MueblesC::index');
$routes->get('/Muebles/Add','MueblesC::add');
$routes->post('/Muebles/insert','MueblesC::insert');
$routes->get('/Muebles/delete/(:num)','MueblesC::delete/$1');

$routes->get('/Muebles/Edit/(:num)','MueblesC::Edit/$1');
$routes->post('/Muebles/update/','MueblesC::update/');

//Rutas Admin Ventas

$routes->get('/Ventas','VentaC::index');
$routes->get('/Ventas/Add','VentaC::add');
$routes->post('/Ventas/insert','VentaC::insert');
$routes->get('/Ventas/delete/(:num)','VentaC::delete/$1');

$routes->get('/Ventas/Edit/(:num)','VentaC::Edit/$1');
$routes->post('/Ventas/update/','VentaC::update/');

//Rutas Empleados Admin

$routes->get('/Empleados','EmpleadoC::index');
$routes->get('/Empleados/Add','EmpleadoC::add');
$routes->post('/Empleados/insert','EmpleadoC::insert');
$routes->get('/Empleados/delete/(:num)','EmpleadoC::delete/$1');

$routes->get('/Empleados/Edit/(:num)','EmpleadoC::Edit/$1');
$routes->post('/Empleados/update/','EmpleadoC::update/');

//Rutas Proveedores Admin

$routes->get('/Proveedores','ProveedorC::index');
$routes->get('/Proveedores/Add','ProveedorC::add');
$routes->post('/Proveedores/insert','ProveedorC::insert');
$routes->get('/Proveedores/delete/(:num)','ProveedorC::delete/$1');

$routes->get('/Proveedores/Edit/(:num)','ProveedorC::Edit/$1');
$routes->post('/Proveedores/update/','ProveedorC::update/');

//Rutas Compras Admin

$routes->get('/Compras','CompraC::index');
$routes->get('/Compras/Add','CompraC::add');
$routes->post('/Compras/insert','CompraC::insert');
$routes->get('/Compras/delete/(:num)','CompraC::delete/$1');

$routes->get('/Compras/Edit/(:num)','CompraC::Edit/$1');
$routes->post('/Compras/update/','CompraC::update/');

//Rutas ventas Empleado



//Rutas front

$routes->get('/front/Principal', 'PrincipalC::Front');


$routes->get('/Administrador','UsuarioC::index2');
$routes->get('/Administrador/Add','UsuarioC::add');
$routes->post('/Administrador/insert','UsuarioC::insert');
$routes->get('/Administrador/delete/(:num)','UsuarioC::delete/$1');

$routes->get('/Administrador/Edit/(:num)','UsuarioC::Edit/$1');
$routes->post('/Administrador/update/','UsuarioC::update/');
