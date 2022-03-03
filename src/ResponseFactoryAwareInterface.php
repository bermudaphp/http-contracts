<?php

namespace Bermuda\HTTP\Contracts;

use Psr\Http\Message\ResponseFactoryInterface;

interface ResponseFactoryAwareInterface 
{
    public function setResponseFactory(ResponseFactoryInterface $factory): ResponseFactoryAwareInterface ;
}
