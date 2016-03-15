<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/3/14
 * Time: 下午9:28
 */
namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception;
class ErrorController
{
    public function exceptionAction(Exception\HttpException $flattenException)
    {
        $msg = 'Something went wrong!('.$flattenException->getMessage().')';
        return new Response($msg,$flattenException->getCode());
    }
}