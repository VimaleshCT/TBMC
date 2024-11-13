<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('whos_who', 'Home::who');
$routes->get('e_governance', 'Home::egov');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::cont');