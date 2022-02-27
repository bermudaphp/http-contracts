<?php

namespace Bermuda\HTTP\Contracts;

use Psr\Http\Message\ServerRequestInterface;

Interface ServerRequestAwareInterface 
{
    public function setServerRequest(ServerRequestInterface $serverRequest): ServerRequestAwareInterface ;
}
