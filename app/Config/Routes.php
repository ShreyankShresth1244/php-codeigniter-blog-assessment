<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Blog routes
$routes->get('/', 'BlogController::index');
$routes->get('/blog/(:num)', 'BlogController::detail/$1');
$routes->post('/blog/addComment', 'BlogController::addComment');

// Admin panel routes
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/create', 'AdminController::create');
$routes->post('/admin/store', 'AdminController::store');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/update/(:num)', 'AdminController::update/$1');
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');
