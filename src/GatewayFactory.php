<?php

namespace BI;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

class GatewayFactory
{
    protected $gateways = [];

    public function __constuct()
    {
        # code...
    }

    public function all()
    {
        return $this->gateways;
    }

    public function create(string $class, ClientInterface $httpClient = null, RequestInterface $request = null)
    {
        if (! class_exists($class)) {
            throw new \BI\Exception\ClassNotFoundException;
        }

        $className = (new \ReflectionClass($class))->name;
        if (! isset($this->gateways[$className])) {
            $this->gateways[$className] = new $class($httpClient, $request);
        }

        return $this->gateways[$className];
    }
}
