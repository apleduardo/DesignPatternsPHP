<?php

namespace DesignPatterns\Behavioral\Strategy\Tributies;

use DesignPatterns\Behavioral\Strategy\Budget;

class ICCC implements TributeInterface
{
	public function calculate(Budget $budget): float
	{
		if ($budget->getValue() < 1000) {
			return $budget->getValue() * 0.05;
		}

		if ($budget->getValue() >= 1000 && $budget->getValue() <= 3000) {
			return $budget->getValue() * 0.07;
		}

		return $budget->getValue() * 0.08; 		
	}
}
