<?php

namespace LaracoreComponent\FormBuilder;

class BaseForm
{
	protected $components = [];
	protected $model;
	protected $attributes;
	protected $method;
	const types = [
		'GET',
		'POST',
		'PUT',
		'PATCH',
		'DELETE'
	];

	public function __construct($model = null)
	{
		if($model)
		{
			$this->model = $model;
		}
	}

	public function addComponent($component)
	{
		if(is_array($component))
		{
			foreach ($component as $entry)
			{
				$this->addComponent($entry);
			}
		}
		else if(is_object($component) && $component instanceof BaseFormComponent)
		{
			if( ! $component->validate())
			{
				return false;
			}
			else
			{
				$this->components[] = $component;
			}
		}
		else
		{
			return false;
		}
		return $this;
	}

	public function renderAttributes()
	{
		$render = $this->attributes;
		$render['method'] = $this->method;

		return $render;
	}

	public function method($method = 'POST')
	{
		if(in_array(strtoupper($method), self::types))
		{
			$this->method = $method;
			return $this;
		}
		return $this->method;
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

	public function getModel()
	{
		return $this->model;
	}

	public function getComponents()
	{
		return $this->components;
	}

	public function render()
	{
		return view('formbuilder::form', ['form' => $this]);
	}
}