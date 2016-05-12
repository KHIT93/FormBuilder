<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Button extends Button
{
	protected $type = 'reset';

	public function validate()
	{
		if($this->type != 'reset')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.reset');
	}
}