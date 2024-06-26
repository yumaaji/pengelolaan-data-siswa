<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login');
$routes->post('/', 'Auth::logout');
$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/dashboard/datasiswa', 'Siswa::index');
$routes->get('/dashboard/datasiswa/(:segment)', 'Siswa::detail');
$routes->get('/dashboard/datasiswa/edit/(:segment)', 'Siswa::edit');
$routes->get('/dashboard/datasiswa/update/(:segment)', 'Siswa::update');

$routes->get('/dashboard/datakelas', 'Kelas::index');
$routes->get('/dashboard/datakelas/(:segment)', 'Kelas::detail');
$routes->get('/dashboard/datakelas/edit/(:segment)', 'Kelas::edit');
$routes->get('/dashboard/datakelas/update/(:segment)', 'Kelas::update');

$routes->get('/dashboard/dataguru', 'Guru::index');
$routes->get('/dashboard/dataguru/(:segment)', 'Guru::detail');
$routes->get('/dashboard/dataguru/edit/(:segment)', 'Guru::edit');
$routes->get('/dashboard/dataguru/update/(:segment)', 'Guru::update');

