<?php

namespace Bermuda\HTTP\Contracts;

use Psr\Http\Message\ServerRequestInterface;

trait ServerRequestAwareTrait
{
    public readonly ?ServerRequestInterface $serverRequest = null;
    public function setServerRequest(ServerRequestInterface $serverRequest): ServerRequestAwareInterface 
    {
      $this->serverRequest = $serverRequest;
      return $this;
    }
}
