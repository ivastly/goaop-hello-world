<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem\Ancient;

require_once 'vendor/autoload.php';

$banks = [];
for ($i = 1; $i <= 1000; ++$i)
{
	$className = "Ivastly\\GoAopHelloWorld\\BankingSystem\\Ancient\\Bank$i";
	$banks []  = new $className();
}

foreach ($banks as $bank)
{
	$amount = 1;
	for ($iteration = 40; $iteration > -40; --$iteration)
	{
		$amount += $iteration;
		$bank->transaction($amount);
	}
}

//var_dump($banks[50]);
