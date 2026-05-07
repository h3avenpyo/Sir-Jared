<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dictionary::index');
$routes->get('/dictionary', 'Dictionary::index');
$routes->get('/dictionary/create', 'Dictionary::create');
$routes->post('/dictionary/store', 'Dictionary::store');
$routes->get('/dictionary/edit/(:num)', 'Dictionary::edit/$1');
$routes->post('/dictionary/update/(:num)', 'Dictionary::update/$1');
$routes->get('/dictionary/delete/(:num)', 'Dictionary::delete/$1');
