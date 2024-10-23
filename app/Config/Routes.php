<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  // Default route
$routes->get('language/switchLanguage/(:any)', 'Language::switchLanguage/$1');  // Language switch route
