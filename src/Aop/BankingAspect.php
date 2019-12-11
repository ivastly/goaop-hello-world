<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\Aop;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Around;

class BankingAspect implements Aspect
{
	/**
	 * Runs instead of transaction() method in Modern\Bank classes. Result is the same.
	 *
	 * @Around("execution(public Ivastly\GoAopHelloWorld\BankingSystem\Modern\*->transaction(*))")
	 */
	public function beforeMethodExecution(MethodInvocation $invocation): void
	{
		echo "\n calling {$invocation->getMethod()->getName()}",
		' with arguments: ',
		json_encode($invocation->getArguments()),
		"\n";

		$invocation->getThis()->_realTransaction($invocation->getArguments()[0]);
	}
}
