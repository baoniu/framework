<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/3/14
 * Time: 下午9:55
 */

namespace Simplex;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;

class StringResponseListener implements EventSubscriberInterface
{
    public function onView(GetResponseForControllerResultEvent $event)
    {
        $response = $event->getControllerResult();

        if(is_string($response))
        {
            $event->setResponse(new Response($response));
        }
    }
    public static function getSubscribedEvents()
    {
        return array('kernel.view'=>'onView');
    }
}