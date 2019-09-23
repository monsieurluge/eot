<?php

namespace monsieurluge\EOT\Tests\Test;

use PHPUnit\Framework\TestCase;
use monsieurluge\EOT\Test\IsTrue;
use monsieurluge\EOT\TestFake\Output\Dummy as DummyOutput;

/**
 * "is true" Test tests suite.
 */
final class IsTrueTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Test\IsTrue::run
     */
    public function testFixme()
    {
        // GIVEN the test
        $test = new IsTrue();

        // WHEN the test is requested to run
        $test->run(new DummyOutput());

        // THEN ??
        // fixme
    }
}
