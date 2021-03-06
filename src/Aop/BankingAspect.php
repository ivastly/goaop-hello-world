<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\Aop;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class BankingAspect implements Aspect
{
	/**
	 * Runs before every money-related (named *Money) method of Bank class.
	 *
	 * @Before("execution(public Ivastly\GoAopHelloWorld\BankingSystem\Bank->*Money(*))")
	 */
	public function beforeMethodExecution(MethodInvocation $invocation): void
	{
		echo "\n calling {$invocation->getMethod()->getName()}",
		' with arguments: ',
		json_encode($invocation->getArguments()),
		"\n";

		if ($invocation->getMethod()->getName() === 'sendMoney')
		{
			$arguments = $invocation->getArguments();

			if ($arguments[1] === 'Developer')
			{
				$arguments[0] *= 1.1; // some people always get slightly more money, banks should not notice 🤑
				$invocation->setArguments($arguments);
			}
		}
	}
}
