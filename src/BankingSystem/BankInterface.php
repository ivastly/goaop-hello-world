<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem;

interface BankInterface
{
	public function transaction(int $amount): void;
}
