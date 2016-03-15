<?php
require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;

$request = Request::createFromGlobals();
$sc = include __DIR__.'/../src/container.php';
$sc->setParameter('routes',include __DIR__.'/../src/app.php');
$sc->setParameter('charset','UTF-8');

$response = $sc->get('framework')->handle($request);
$response->send();
