<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem;

use League\CLImate\CLImate;

class Bank
{
	/** @var CLImate */
	private $climate;

	public function __construct(CLImate $climate)
	{
		$this->climate = $climate;
	}

	public function sendMoney(int $amount, string $recipient): void
	{
		$this->climate->backgroundGreen("Bank: {$amount}€ was sent to $recipient");
	}

	public function withdrawMoney(int $amount, string $payer): void
	{
		$this->climate->backgroundRed("Bank: {$amount}€ was deducted from $payer account");
	}
}
