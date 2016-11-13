<?php

namespace DesignPatterns\Behavioral\Strategy;

class Budget
{
	private $value;

	public function __construct(float $newValue)
	{
		$this->value =  $newValue;
	}

	public function getValue(): float
	{
		return $this->value;
	}
}