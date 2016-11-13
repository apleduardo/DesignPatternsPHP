<?php

namespace DesignPatterns\Behavioral\Strategy\Tributies;

use DesignPatterns\Behavioral\Strategy\Budget;

class ISS implements TributeInterface
{
	public function calculate(Budget $budget): float
	{
		return $budget->getValue() * 0.2;
	}
}