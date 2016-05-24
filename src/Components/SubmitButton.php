<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class SubmitButton extends Button
{
	protected $type = 'submit';
	protected $view = 'components.submitbutton';

	public function validate()
	{
		if($this->type != 'submit')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
		return true;
	}
}