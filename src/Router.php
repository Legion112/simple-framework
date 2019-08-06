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
     * @param string $uri
     * @return array
     * [App/SiteController, 'main']
     */
    public function getControllerNameAndMethod(string $uri):array
    {
        $pos = strpos($uri, '?');
        $path = $uri;
        if ($pos !== false) {
            $path = substr($uri, 0, $pos);
        }
        return $this->config[$path];
    }
}