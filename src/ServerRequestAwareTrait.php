<?php

namespace Bermuda\HTTP\Contracts;

use Psr\Http\Message\ServerRequestInterface;

trait ServerRequestAwareTrait
{
    private ?ServerRequestInterface $serverRequest = null;
    public function setServerRequest(ServerRequestInterface $serverRequest): ServerRequestAwareInterface 
    {
      $this->serverRequest = $serverRequest;
      return $this;
    }
}
