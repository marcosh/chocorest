<?php

namespace Marcosh\Chocorest;

use Marcosh\Chocorest\Router\RouterInterface;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Stream;

class Middleware
{
    public function __construct(RouterInterface $router)
    {

    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response)
    {
        $response->getBody()->write('ciao a tutti');

        return $response;
    }
}
