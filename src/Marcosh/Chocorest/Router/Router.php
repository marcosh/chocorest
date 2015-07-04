<?php

namespace Marcosh\Chocorest\Router;

use Marcosh\Chocorest\Actions\ChocolatesAction;

use Psr\Http\Message\ServerRequestInterface;

class Router implements RouterInterface
{
    /**
     * {@inheritDoc}
     */
    public function route(ServerRequestInterface $request)
    {
        return new ChocolatesAction();
    }
}
