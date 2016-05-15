<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class ResetButton extends Button
{
	protected $type = 'reset';
	protected $view = 'components.resetbutton';

	public function validate()
	{
		if($this->type != 'reset')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}
}