<?php

namespace Bermuda\HTTP\Contracts;

use Psr\Http\Message\ResponseFactoryInterface;

interface ResponseFactoryAwareTrait
{
    private ?ResponseFactoryInterface $responseFactory = null;
    public function setResponseFactory(ResponseFactoryInterface $factory): ResponseFactoryAwareInterface 
    {
      $this->responseFactory = $factory;
      return $this;
    }
}
