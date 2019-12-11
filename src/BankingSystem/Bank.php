<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem;

class Bank
{
	public function sendMoney(int $amount, string $recipient): void
	{
		echo "Bank: {$amount}€ was sent to $recipient\n";
	}

	public function withdrawMoney(int $amount, string $payer): void
	{
		echo "Bank: {$amount}€ was deducted from $payer's account\n";
	}
}
