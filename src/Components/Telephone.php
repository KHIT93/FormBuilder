<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Telephone extends BaseFormComponent
{
	protected $type = 'tel';

	public function validate()
	{
		if($this->type != 'tel')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.telephone');
	}
}