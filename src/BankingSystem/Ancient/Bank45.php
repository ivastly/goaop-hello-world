<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem\Ancient;

class Bank45
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
