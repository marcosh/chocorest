<?php

namespace Marcosh\Chocorest;

use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Server;

/**
 * class that bootstraps the service
 */
class App
{
    /**
     * @var Server $server
     */
    private $server;

    /**
     * @param Server $server
     */
    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    /**
     * initializes the application creating the configured server
     *
     * @return App
     */
    public static function init()
    {
        $request = ServerRequestFactory::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );

        $middleware = MiddlewareFactory::create();

        $server = Server::createServerFromRequest(
            $middleware,
            $request
        );

        return new App($server);
    }

    /**
     * set the server in listening mode
     */
    public function run()
    {
        $this->server->listen();
    }
}
