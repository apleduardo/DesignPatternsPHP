<?php

namespace DesignPatterns\Behavioral\Strategy\Tributies;

use DesignPatterns\Behavioral\Strategy\Budget;

class ICMS implements TributeInterface
{
	public function calculate(Budget $budget): float
	{
		return $budget->getValue() * 0.1;
	}
}