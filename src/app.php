<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/3/10
 * Time: 下午5:38
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('leap_year',new Routing\Route('/is_leap_year/{year}',array(
	'year' => null,
	'_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));




$routes->add('hello',new Routing\Route('/hello/{name}',array(
	'name'=>'World',
	'_controller'=>function(\Symfony\Component\HttpFoundation\Request $request){

		// $foo 将在模板里可见
		$request->attributes->set('foo','bar');
		$response = render_template($request);

		//改变一些头信息
		$response->headers->set('Content-Type','text/html');
		return $response;
	}
)));
$routes->add('bye',new Routing\Route('/bye',array(
	'_controller'=>'render_template'
)));



return $routes;
