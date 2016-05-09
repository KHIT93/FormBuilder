<?php
namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;

class TextField extends BaseFormComponent
{
	protected $type = 'text';

	public function validate()
	{
		if($this->type != 'text')
		{
			throw new LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function render()
	{
		return view('components.textfield');
	}
}