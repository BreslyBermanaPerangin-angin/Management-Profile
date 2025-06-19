<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Public routes
$routes->get('/', 'PageController::home');
$routes->get('about', 'PageController::about');

// Auth routes
$routes->get('login', 'Auth::login');
$routes->post('do-login', 'Auth::doLogin');

// Dashboard
$routes->get('/dashboard', 'Dashboard::dashboard');
$routes->get('/dashboard/logout', 'Auth::logout');

// Profile group with auth filter
$routes->group('profile', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'Profile::index');
    $routes->get('create', 'Profile::create');
    $routes->post('store', 'Profile::store');
    $routes->get('edit/(:num)', 'Profile::edit/$1');
    $routes->post('update/(:num)', 'Profile::update/$1');
    $routes->get('delete/(:num)', 'Profile::delete/$1');
});