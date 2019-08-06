<?php

namespace App\Form;

class CreateBookForm implements FormInterface
{

    public $name;

    public $nameError;

    public function validate(): bool
    {
        if ($this->name === null || $this->name === '') {
            $this->nameError = 'Name cannot be empty';
            return false;
        }
        return true;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return [
            'name' => $this->nameError,
        ];
    }
}