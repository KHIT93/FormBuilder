<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class DateField extends BaseFormComponent
{
    protected $type = 'text';
    protected $view = 'components.textfield';

    public function validate()
    {
        if($this->type != 'text')
        {
            throw new InvalidComponentTypeException("", 0, null, $this);
        }
    }
}