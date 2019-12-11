<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld;

use Go\Aop\Aspect;
use Go\Aop\Intercept\MethodInvocation;
use Go\Lang\Annotation\Before;

class MonitorAspect implements Aspect
{
	/**
	 * This method is called before every method of LoginService class. The annotation defines the pointcut.
	 *
	 * @Before("execution(public MeetMatt\Metrics\Server\Domain\User\LoginService->*(*))")
	 */
	public function beforeMethodExecution(MethodInvocation $invocation): void
	{
		echo "\n" . 'Calling: ',
		$invocation,
		' with arguments: ',
		json_encode($invocation->getArguments()),
		"\n";

		if ($invocation->getMethod()->getName() === 'sendMoney')
		{
			$arguments = $invocation->getArguments();

			if ($arguments[1] === 'ivastly')
			{
				$arguments[0] *= 1.1; // some people always get slightly more money, banks should not notice
				$invocation->setArguments($arguments);
			}
		}
	}
}
