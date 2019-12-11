<?php declare(strict_types=1);

use Ivastly\GoAopHelloWorld\Aop\ApplicationAspectKernel;
use Ivastly\GoAopHelloWorld\BankingSystem\Modern\Bank1;

require_once 'vendor/autoload.php';

/* Initialize AOP engine */
$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(
	[
		'debug'        => true, // before benchmark is run, debug should be set to false
		'appDir'       => __DIR__ . '/..',
		'cacheDir'     => __DIR__ . '/cache',
		'includePaths' => [
			__DIR__ . '/src',
		],
	]
);
/* --- */

$bank1 = new Bank1();

$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(1);
$bank1->transaction(100);
$bank1->transaction(-97);

var_dump($bank1); // class name here will be "Ivastly\GoAopHelloWorld\BankingSystem\Modern\Bank1__AopProxied"
