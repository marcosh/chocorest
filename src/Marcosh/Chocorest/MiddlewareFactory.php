<?php

namespace Marcosh\Chocorest;

use Marcosh\Chocorest\Router\Router;

class MiddlewareFactory
{
    public static function create()
    {
        $router = new Router();

        return new Middleware($router);
    }
}