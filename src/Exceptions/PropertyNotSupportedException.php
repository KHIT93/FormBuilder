<?php

namespace LaracoreComponent\FormBuilder\Exceptions;

use LaracoreComponent\FormBuilder\BaseFormComponent;

class PropertyNotSupportedException extends \Exception
{
	protected $component;
	public function __construct($message = "", $code = 0, \Exception $previous = null, BaseFormComponent $component)
	{
		$this->component = $component;
		parent::__construct((($message == "") ? "The component {$component->name()} uses and invalid type of {$component->getType()}" : $message ), $code, $previous);
	}
}