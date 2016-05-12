<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class Radio extends BaseFormComponent
{
	protected $type = 'radio';

	public function validate()
	{
		if($this->type != 'radio')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.radio');
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