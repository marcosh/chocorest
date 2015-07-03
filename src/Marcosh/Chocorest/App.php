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
     * @var \Zend\Diactoros\Server $server
     */
    private $server;

    public function __construct(Server $server)
    {
        $this->server = $server;
    }

    public static function init()
    {
        $request = ServerRequestFactory::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );

        $server = Server::createServerFromRequest(
            function ($request, $response, $done) {
                echo $request->getUri();
            },
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
