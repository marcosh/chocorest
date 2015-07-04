<?php

namespace Marcosh\Chocorest;

use Marcosh\Chocorest\Router\RouterInterface;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Stream;

class Middleware
{
    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     */
    public function __invoke(
        ServerRequestInterface $request,
        ResponseInterface $response)
    {
        $action = $this->router->route($request);

        return $action($request, $response);
    }
}
