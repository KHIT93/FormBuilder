<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Color extends BaseFormComponent
{
	protected $type = 'color';
	protected $view = 'components.color';

	public function validate()
	{
		if($this->type != 'color')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}
}