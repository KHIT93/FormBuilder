<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class ImageField extends BaseFormComponent
{
	protected $type = 'image';
	protectec $url;

	public function validate()
	{
		if($this->type != 'image')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.imagefield');
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