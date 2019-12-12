<?php declare(strict_types=1);

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\OutputTimeUnit;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

class GoAopBench
{
	/**
	 * @Revs(100)
	 * @Iterations(3)
	 * @Warmup(2)
	 * @OutputTimeUnit("seconds", precision=3)
	 */
	public function benchOriginal(): void
	{
		require 'test_original.php';
	}

	/**
	 * @Revs(100)
	 * @Iterations(3)
	 * @Warmup(2)
	 * @OutputTimeUnit("seconds", precision=3)
	 */
	public function benchGoAop(): void
	{
		require 'test_modern.php';
	}
}
