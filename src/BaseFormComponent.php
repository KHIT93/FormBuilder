<?php

namespace LaracoreComponent\FormBuilder;

abstract class BaseFormComponent
{
	protected array $attributes = ['class' => 'form-control'];
	protected bool $required;
	protected bool $disabled;
	abstract protected string $type;
	protected string $name;
	protected string $display_name;
	protected array $wrapper_attributes;
	/**
	 * Validate that the component is structured correctly
	 */
	abstract public function validate();

	/**
	 * Renders the component using LaravelCollective\Html
	 */
	public function render()
	{
		return view('components.component');
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

	public function wrapper_attributes(array $attributes = null)
	{
		if(is_array($attributes))
		{
			$this->wrapper_attributes;
			return $this;
		}
		return $this->wrapper_attributes;
	}

	public function render_attributes(array $attributes)
	{
		$output = '';
		foreach ($attributes as $name => $value) {
			$output .= $name . '="' . $value . '"';
		}
		return $output;
	}

	public function getType()
	{
		return $this->type;
	}

}