<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/3/10
 * Time: 下午9:39
 */
namespace Simplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing;

class Framework extends HttpKernel\HttpKernel
{
//	public function __construct(Routing\RouteCollection $routes)
//	{
//		$context = new Routing\RequestContext();
//		$matcher = new Routing\Matcher\UrlMatcher($routes,$context);
//		$resolver = new HttpKernel\Controller\ControllerResolver();
//
//		$dispatcher = new EventDispatcher();
//		$dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener($matcher,new RequestStack()));
////		$dispatcher->addSubscriber(new HttpKernel\EventListener\RouterListener('UTF-8'));
//		$dispatcher->addSubscriber(new \Simplex\StringResponseListener());
//		parent::__construct($dispatcher,$resolver);
//	}

//	protected $matcher;
//	protected $resolver;
//	protected $dispatcher;
//
//	public function __construct(EventDispatcher $dispatcher,UrlMatcherInterface $matcher,ControllerResolverInterface $resolver)
//	{
//		$this->dispatcher = $dispatcher;
//		$this->matcher = $matcher;
//		$this->resolver = $resolver;
//	}
//	public function handle(
//		Request $request,
//		$type = HttpKernelInterface::MASTER_REQUEST,
//		$catch = true
//	){
//		try{
//			$request->attributes->add($this->matcher->match($request->getPathInfo()));
//
//			$controller = $this->resolver->getController($request);
//			$arguments = $this->resolver->getArguments($request,$controller);
//
//			$response = call_user_func_array($controller,$arguments);
//		}catch (ResourceNotFoundException $e) {
//			$response = new Response('Not Found',404);
//		}catch (\Exception $e){
//			$response = new Response('An error occurred:'/*.$e->getTraceAsString().$e->getMessage()*/,500);
//		}
//
//		$this->dispatcher->dispatch('response',new ResponseEvent($response,$request));
//
//		return $response;
//	}
}
