<?php

namespace LaraCoreComponent\FormBuilder;

class BaseFormComponentFieldset
{
	protected $name;
	protected $display_name;
	protected $attributes = ['class' => 'form-control'];

	/**
	 * Validate that the component is structured correctly
	 */
	abstract public function validate();

	/**
	 * Renders the component using LaravelCollective\Html
	 */
	public function render()
	{
		return view('components.fieldset');
	}
	public function name($name = null)
	{
		if($name)
		{
			$this->name = $name;
			return $this;
		}
		return $this->name;
	}
	public function displayName($name = null)
	{
		if($name)
		{
			$this->display_name = $name;
			return $this;
		}
		return $this->display_name;
	}
	public function attributes(array $attributes = null)
	{
		if(is_array($attributes))
		{
			$this->attributes;
			return $this;
		}
		return $this->attributes;
	}
	public function render_attributes()
	{
		$output = '';
		foreach ($attributes as $name => $value) {
			$output .= $name . '="' . $value . '"';
		}
		return $output;
	}
}