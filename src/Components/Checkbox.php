<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Checkbox extends BaseFormComponent
{
	protected $type = 'checkbox';

	public function validate()
	{
		if($this->type != 'checkbox')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.checkbox');
	}

	public function checked($checked = null)
	{
		if(!is_null($checked))
		{
			$this->checked = $checked;
			return $this;
		}
		return $this->checked;
	}
}