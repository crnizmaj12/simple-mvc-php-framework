<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('folder1', new Route(constant('URL_SUBFOLDER') . '/folder1/{id}', array('controller' => 'PageController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('folder2', new Route(constant('URL_SUBFOLDER') . '/folder2/{id}', array('controller' => 'PageController', 'method'=>'showAction'), array('id' => '[0-9]+')));