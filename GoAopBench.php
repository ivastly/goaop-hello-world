<?php declare(strict_types=1);

use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\OutputTimeUnit;
use PhpBench\Benchmark\Metadata\Annotations\Revs;
use PhpBench\Benchmark\Metadata\Annotations\Warmup;

/**
 * @Revs(10)
 * @Iterations(4)
 * @Warmup(2)
 * @OutputTimeUnit("milliseconds", precision=1)
 */
class GoAopBench
{
	public function benchOriginal(): void
	{
		require 'test_original.php';
	}

	public function benchGoAop(): void
	{
		require 'test_modern.php';
	}
}
