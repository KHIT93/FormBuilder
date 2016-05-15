<?php

namespace LaracoreComponent\FormBuilder\Components;

use LaracoreComponent\FormBuilder\BaseFormComponent;
use LaracoreComponent\FormBuilder\Exceptions\InvalidComponentTypeException;

class TextField extends BaseFormComponent
{
	protected $type = 'select';
	protected $view = 'components.select';
	protected $list = [];

	public function validate()
	{
		if($this->type != 'select')
		{
			throw new InvalidComponentTypeException("", 0, null, $this);
		}
	}

	public function options_list($list = null)
	{
		if(is_array($list))
		{
			$this->list = $list;
			return $this;
		}
		return $this->list;
	}
}