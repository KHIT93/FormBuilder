<?php
namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;
use LaracoreComponent\FormBuilder\Exceptions\PropertyNotSupportedException;

class PasswordField extends BaseFormComponent
{
	protected $type = 'password';

	public function validate()
	{
		if($this->type != 'password')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.passwordfield');
	}

	public function defaultValue($default = null)
    {
        throw new PropertyNotSupportedException("The property default_value is not supported with the password field", 0, null, $this);
    }
}