<?php
namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;
use LaracoreComponent\FormBuilder\Exceptions\PropertyNotSupportedException;

class FileField extends BaseFormComponent
{
	protected $type = 'file';
	protected $view = 'components.filefield';

	public function validate()
	{
		if($this->type != 'file')
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