<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem\Modern;

use Ivastly\GoAopHelloWorld\BankingSystem\BankInterface;

/**
 * This class is the same as its vis-a-vis from Ancient namespace, but transaction() is called inside an aspect.
 */
class Bank1 implements BankInterface
{
	private $total = 0;

	public function transaction(int $amount): void
	{
		// do $this->total += $amount, but very carefully, one by one
		for ($i = 0, $iterations = abs($amount); $i < $iterations; ++$i)
		{
			if ($amount < 0)
			{
				if ($this->total - 1 < 0)
				{
					// don't go bankrupt
					return;
				}

				--$this->total;
			}

			if ($amount > 0)
			{
				if ($this->total + 1 === PHP_INT_MAX)
				{
					// don't go bankrupt again, because of int overflow
					return;
				}

				++$this->total;
			}
		}
	}
}

