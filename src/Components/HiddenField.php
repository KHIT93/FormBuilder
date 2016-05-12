<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class HiddenField extends BaseFormComponent
{
	protected $type = 'hidden';

	public function validate()
	{
		if($this->type != 'hidden')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.hiddenfield');
	}
}