<?php

namespace App;

class Request
{
    /**
     * @var array
     */
    private $get;
    /**
     * @var array
     */
    private $post;
    /**
     * @var array
     */
    private $server;

    public function __construct(array $get, array $post, array $server)
    {
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
    }

    public function isPost():bool
    {
        return $this->server['REQUEST_METHOD'] === 'POST';
    }

    public function get(?string $name = null)
    {
        if ($name === null) {
            return $this->get;
        }
        return $this->get[$name];
    }

    public function post(?string $name = null)
    {
        if ($name === null) {
            return $this->post;
        }
        return $this->post[$name];
    }
}