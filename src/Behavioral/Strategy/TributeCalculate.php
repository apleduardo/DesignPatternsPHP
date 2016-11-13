<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Budget;

class TributeCalculate
{
	public function calculate(Budget $budget, $tribute): float
	{
		return $tribute->calculate($budget);
	}
}