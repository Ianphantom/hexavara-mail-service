<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/projectOpportunity', 'MailCtl::projectOpportunity');
$routes->get('/projectOpportunity', 'MailCtl::index');
