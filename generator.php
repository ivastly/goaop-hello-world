<?php declare(strict_types=1);

$classCode = file_get_contents(__DIR__ . '/src/BankingSystem/Ancient/Bank1.php');

$totalAmountOfClassesToGenerate = 1000;

for ($i = 2; $i <= $totalAmountOfClassesToGenerate; ++$i)
{
	file_put_contents(__DIR__ . "/src/BankingSystem/Ancient/Bank$i.php", str_replace('Bank1', "Bank$i", $classCode));
}

$classCode = file_get_contents(__DIR__ . '/src/BankingSystem/Modern/Bank1.php');

for ($i = 2; $i <= $totalAmountOfClassesToGenerate; ++$i)
{
	file_put_contents(__DIR__ . "/src/BankingSystem/Modern/Bank$i.php", str_replace('Bank1', "Bank$i", $classCode));
}
