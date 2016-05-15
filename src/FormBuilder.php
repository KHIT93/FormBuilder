<?php

namespace LaracoreComponent\FormBuilder;

class FormBuilder
{
	public static function create($method = FormMethods::POST, array $attributes = [], $model = null, array $components = [])
	{
		$form = new BaseForm($model);
		if(in_array(strtoupper($method), BaseForm::types))
		{
			$form->metod($method);
		}
		if(count($attributes))
		{
			$form->attributes($attributes);
		}
		if(count($components))
		{
			$form->addComponent($components);
		}

		return $form;
	}
}