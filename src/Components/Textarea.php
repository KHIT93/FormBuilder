<?php

namespace LaracoreComponent\FormBuilder\Components;


use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Textarea extends BaseFormComponent
{
    protected $type = 'textarea';
    protected $view = 'components.textarea';

    public function validate()
    {
        if($this->type != 'textarea')
        {
            throw new InvalidComponentTypeException("", 0, null, $this);
        }
		return true;
    }
}