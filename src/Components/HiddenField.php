<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class HiddenField extends BaseFormComponent
{
	protected $type = 'hidden';
	protected $view = 'components.hiddenfield';

	public function validate()
	{
		if($this->type != 'hidden')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
		return true;
	}
}