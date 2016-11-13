<?php

namespace DesignPatterns\Behavioral\Strategy\Tributies;

use DesignPatterns\Behavioral\Strategy\Budget;

interface TributeInterface
{
	public function calculate(Budget $budget): float;
}