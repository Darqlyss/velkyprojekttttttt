<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::stranka');
$routes->get('komponenty/(:segment)', 'Main::detail/$1');
$routes->get('komponenty/detail/(:num)', 'Main::detailKomponent/$1');
$routes->get('taby', 'Main::taby');


