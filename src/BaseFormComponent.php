<?php

namespace LaracoreComponent\FormBuilder;

abstract class BaseFormComponent
{
	protected $attributes = ['class' => 'form-control'];
	protected $required;
	protected $disabled;
	protected $type;
	protected $name;
	protected $display_name;
	protected $wrapper_attributes;
	protected $default_value = null;
	protected $view = 'components.component';
	/**
	 * Validate that the component is structured correctly
	 */
	abstract public function validate();

	/**
	 * Renders the component using LaravelCollective\Html
	 */
	public function render()
	{
		return view($this->view, $this);
	}

    public function defaultValue($default = null)
    {
        if($default)
        {
            $this->default_value = $default;
            return $this;
        }
        return $this->default_value;
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