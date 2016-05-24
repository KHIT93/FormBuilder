<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;
use LaracoreComponent\FormBuilder\Exceptions\PropertyNotSupportedException;

class StaticField extends BaseFormComponent
{
	protected $type = 'static';
	protected $view = 'components.staticfield';

	public function validate()
	{
		if($this->type != 'static')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
		return true;
	}

	public function defaultValue($default = null)
    {
        throw new PropertyNotSupportedException("The property default_value is not supported with the password field", 0, null, $this);
    }
}