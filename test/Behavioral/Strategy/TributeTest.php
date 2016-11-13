<?php

namespace StrategyTest;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Behavioral\Strategy\TributeCalculate;
use DesignPatterns\Behavioral\Strategy\Budget;
use DesignPatterns\Behavioral\Strategy\Tributies\ICMS;
use DesignPatterns\Behavioral\Strategy\Tributies\ISS;
use DesignPatterns\Behavioral\Strategy\Tributies\IPTU;
use DesignPatterns\Behavioral\Strategy\Tributies\ICCC;

class TributeTest extends TestCase
{
	public function testICMSDescount()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(500);
		$this->assertEquals(
			50,
			$tributeCalculate->calculate($budget, new ICMS)
		);
	}

	public function testISSDescount()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(500);
		$this->assertEquals(
			100,
			$tributeCalculate->calculate($budget, new ISS)
		);
	}

	public function testIPTUDescount()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(500);
		$this->assertEquals(
			200,
			$tributeCalculate->calculate($budget, new IPTU)
		);
	}

	public function testICCCDescount5Porcent()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(500);
		$this->assertEquals(
			25,
			$tributeCalculate->calculate($budget, new ICCC)
		);
	}

	public function testICCCDescount7Porcent()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(2000);
		$this->assertEquals(
			140,
			$tributeCalculate->calculate($budget, new ICCC)
		);
	}

	public function testICCCDescount8Porcent()
	{
		$tributeCalculate = new TributeCalculate();
		$budget = new Budget(5000);
		$this->assertEquals(
			400,
			$tributeCalculate->calculate($budget, new ICCC)
		);
	}
}
