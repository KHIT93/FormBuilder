<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Telephone extends BaseFormComponent
{
	protected $type = 'tel';
	protected $view = 'components.telephone';

	public function validate()
	{
		if($this->type != 'tel')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
		return true;
	}
}