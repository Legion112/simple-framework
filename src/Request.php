<?php

namespace App;

class Request
{
    public function isPost():bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}