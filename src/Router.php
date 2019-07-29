<?php

namespace App;

class Router
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     * [App/SiteController, 'main']
     */
    public function getControllerNameAndMethod(string $uri):array
    {
        return $this->config[$uri];
    }
}