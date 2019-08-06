<?php

namespace App;

/**
 * Class ServiceLocator
 * @see https://en.wikipedia.org/wiki/Service_locator_pattern
 */
class ServiceLocator
{
    private static $instance;

    private $services = [];

    public static function getInstance(): self
    {
        if (!static::$instance) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    /**
     * get service
     */
    public function get(string $name)
    {
        $service = $this->services[$name];
        if (is_callable($service)) {
            $this->services[$name] = $service();
        }
        return $this->services[$name];
    }

    /**
     * register a service
     */
    public function register(string $name, callable $service): void
    {
        $this->services[$name] = $service;
    }
}