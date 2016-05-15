<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class TimeField extends BaseFormComponent
{
	protected $type = 'time';
	protected $view = 'components.timefield';

	public function validate()
	{
		if($this->type != 'time')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}
}