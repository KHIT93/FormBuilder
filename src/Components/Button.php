<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;
use LaracoreComponent\FormBuilder\Exceptions\PropertyNotSupportedException;

class Button extends BaseFormComponent
{
	protected $type = 'button';
	protected $view = 'components.button';

	public function validate()
	{
		if($this->type != 'button')
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