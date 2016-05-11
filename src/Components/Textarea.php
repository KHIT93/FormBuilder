<?php

namespace LaracoreComponent\FormBuilder\Components;


use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Textarea extends BaseFormComponent
{
    protected $type = 'textarea';

    public function validate()
    {
        if($this->type != 'textarea')
        {
            throw new InvalidComponentTypeException("", 0, null, $this);
        }
    }
    //{!! Form::textarea('content[body]', null, ['class' => 'form-control ckeditor', 'required']) !!}
    public function render()
    {
        return view('components.textarea');
    }
}