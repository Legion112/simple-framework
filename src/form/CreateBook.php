<?php

namespace App\Form;

class CreateBook implements FormInterface
{

    public $name;

    public function validate(): bool
    {

    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        // TODO: Implement getErrors() method.
    }
}