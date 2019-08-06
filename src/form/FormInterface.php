<?php

namespace App\Form;

interface FormInterface
{
    /**
     * @return bool whether data is valid or not
     */
    public function validate(): bool;

    /**
     * @return array
     */
    public function getErrors(): array;
}