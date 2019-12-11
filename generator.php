<?php declare(strict_types=1);

$classCode = file_get_contents(__DIR__ . '/BankingSystem/Ancient/Bank1.php');

for ($i = 2; $i < 101; ++$i)
{
	file_put_contents(__DIR__ . "/BankingSystem/Ancient/Bank$i.php", str_replace('Bank1', "Bank$i", $classCode));
}
