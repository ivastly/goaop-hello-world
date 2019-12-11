<?php declare(strict_types=1);

use Ivastly\GoAopHelloWorld\BankingSystem\Bank;
use League\CLImate\CLImate;

require_once 'vendor/autoload.php';

$climate = new CLImate();
$bank    = new Bank($climate);

$climate->backgroundLightMagenta(
	"Dear everyone!
Now is the salary day. 
We are going to withdraw money from our company's bank account and send the money to our personal accounts!"
);

$bank->withdrawMoney(1000, 'Docler Holding (https://doclerholding.recruitee.com/)');

$bank->sendMoney(200, 'John');
$bank->sendMoney(200, 'Ivastly');
$bank->sendMoney(600, 'Miranda');

$climate->backgroundMagenta('done');
