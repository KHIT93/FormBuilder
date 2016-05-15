<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Number extends BaseFormComponent
{
    protected $type = 'number';
    protected $view = 'components.number';

    public function validate()
    {
        if($this->type != 'number')
        {
            throw new InvalidComponentTypeException("", 0, null, $this);
        }
    }
}