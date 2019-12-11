<?php declare(strict_types=1);

use Ivastly\GoAopHelloWorld\BankingSystem\Modern\Bank1;

require_once 'vendor/autoload.php';

$bank1 = new Bank1();

$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(100);
$bank1->transaction(-97);

var_dump($bank1);
