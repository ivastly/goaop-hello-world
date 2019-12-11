<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem\Modern;


/**
 * This class is the same as its vis-a-vis from Ancient namespace, but calculation is done inside an aspect.
 */
class Bank81
{
	private $total = 0;

	public function _realTransaction(int $amount): void // this method will be called from aspect
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

	public function transaction(int $amount)
	{
	} // this is just a stub to avoid 'Call to undefined method' error. Execution will be intercepted by aspect, and _realTransaction will be called
}

