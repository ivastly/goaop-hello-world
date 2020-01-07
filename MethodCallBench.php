<?php declare(strict_types=1);

use PhpBench\Benchmark\Metadata\Annotations\BeforeMethods;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

/*
 * to run:
 * php vendor/bin/phpbench run MethodCallBench.php --report=aggregate
 *  */

/**
 * @Revs(1000000)
 * @Iterations(1000)
 * @Warmup(10)
 * @BeforeMethods("init")
 */
class MethodCallBench
{
	/** @var EmptyClass */
	private $object;

	public function init(): void
	{
		require_once __DIR__ . '/EmptyClass.php';

		$this->object = new EmptyClass();
	}

	public function benchPureMethodCallOverhead(): void
	{
		$this->object->m();
	}
}
