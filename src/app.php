<?php

use Symfony\Component\Routing;


$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index',
)));

$routes->add('abstract_factory', new Routing\Route('/abstract-factory', array(
    '_controller' => 'Patterns\Creational\AbstractFactoryConcept\AbstractFactoryController::index',
)));


return $routes;