<?php
// example.com/web/front.php
require_once __DIR__.'/../vendor/autoload.php';

use Simplex\StringResponseListener;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\Request;


$routes = include __DIR__.'/../src/app.php';
$sc = include __DIR__.'/../src/container.php';

$sc->register('listener.string_response', StringResponseListener::class);
$sc->getDefinition('dispatcher')
    ->addMethodCall('addSubscriber', array(new Reference('listener.string_response')))
;
$sc->setParameter('debug', true);

$request = Request::createFromGlobals();

$response = $sc->get('framework')->handle($request);

$response->send();