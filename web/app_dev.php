<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$loader = require __DIR__.'/../app/autoload.php';

require_once __DIR__.'/../app/MicroKernel.php';

Debug::enable();

$app = new MicroKernel('dev', true);
$app->loadClassCache();
$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();
$app->terminate($request, $response);
