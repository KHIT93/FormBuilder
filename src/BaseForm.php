<?php

namespace LaracoreComponent\FormBuilder;

class BaseForm
{
	protected $components;
	protected $model;
	protected $attributes;
	protected $method;
	public static $types = [
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
			//Process array and create FormComponemtObject
		}
		else if(is_object($component) && $component instanceof BaseFormComponent)
		{
			if( ! $component->validate())
			{
				return false;
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

	}

	public function method($method = 'POST')
	{
		if(in_array(strtoupper($method), self::types))
		{
			$this->method = $method;
		}
		return $this->method;
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
		return view('form', ['form' => $this]);
	}
}