<?php

namespace LaracoreComponent\FormBuilder\Components;


use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class EmailField extends BaseFormComponent
{
    protected $type = 'email';

    public function validate()
    {
        if($this->type != 'email')
        {
            throw new InvalidComponentTypeException("", 0, null, $this);
        }
    }

    public function render()
    {
        return view('components.email');
    }
}