<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\Aop;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class BankingAspect implements Aspect
{
	/**
	 * Runs instead of transaction() method in Modern\Bank classes. Result is the same.
	 *
	 * @Before("execution(public Ivastly\GoAopHelloWorld\BankingSystem\Modern\Bank1->transaction(*))")
	 */
	public function beforeMethodExecution(MethodInvocation $invocation): void
	{
		echo "\n calling {$invocation->getMethod()->getName()}",
		' with arguments: ',
		json_encode($invocation->getArguments()),
		"\n";

		$invocation->getThis()->transaction($invocation->getArguments()[0]);
	}
}
