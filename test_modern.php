<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\BankingSystem\Modern;

use Ivastly\GoAopHelloWorld\Aop\ApplicationAspectKernel;

require_once 'vendor/autoload.php';

/* Initialize AOP engine */
$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(
	[
		'debug'        => false, // before benchmark is run, debug should be set to false
		'appDir'       => __DIR__ . '/..',
		'cacheDir'     => __DIR__ . '/cache',
		'includePaths' => [
			__DIR__ . '/src',
		],
	]
);
/* --- */

$banks = [];
for ($i = 1; $i <= 100; ++$i)
{
	$className = "Ivastly\\GoAopHelloWorld\\BankingSystem\\Modern\\Bank$i";
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

//var_dump($banks[50]); // class name here will be "Ivastly\GoAopHelloWorld\BankingSystem\Modern\Bank1__AopProxied"
