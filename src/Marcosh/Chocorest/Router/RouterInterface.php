<?php

namespace Marcosh\Chocorest\Router;

use Marcosh\Chocorest\Actions\ActionInterface;

use Psr\Http\Message\ServerRequestInterface;

interface RouterInterface
{
    /**
     * assigns to a uri the correct action
     *
     * @param ServerRequestInterface $request
     * @return ActionInterface
     */
    public function route(ServerRequestInterface $request);
}
