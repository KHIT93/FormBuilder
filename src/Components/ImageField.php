<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;
use LaracoreComponent\FormBuilder\Exceptions\PropertyNotSupportedException;

class ImageField extends BaseFormComponent
{
	protected $type = 'image';
	protected $view = 'components.imagefield';
	protected $url;

	public function validate()
	{
		if($this->type != 'image')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
		return true;
	}

	public function url($url = null)
	{
		if($url)
		{
			$this->url = $url;
			return $this;
		}
		return $this->url;
	}
	
	public function defaultValue($default = null)
    {
        throw new PropertyNotSupportedException("The property default_value is not supported with the password field", 0, null, $this);
    }
}