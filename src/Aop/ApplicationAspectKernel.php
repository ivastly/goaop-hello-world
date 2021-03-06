<?php declare(strict_types=1);

namespace Ivastly\GoAopHelloWorld\Aop;

use Go\Core\AspectContainer;
use Go\Core\AspectKernel;

class ApplicationAspectKernel extends AspectKernel
{
	protected function configureAop(AspectContainer $container)
	{
		$container->registerAspect(new BankingAspect());
	}
}
