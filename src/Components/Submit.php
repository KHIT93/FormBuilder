<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Submit extends Button
{
	protected $type = 'submit';

	public function validate()
	{
		if($this->type != 'submit')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.submit');
	}
}