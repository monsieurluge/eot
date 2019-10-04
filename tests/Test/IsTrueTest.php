<?php

namespace monsieurluge\EOT\Tests\Test;

use PHPUnit\Framework\TestCase;
use monsieurluge\EOT\Test\IsTrue;
use monsieurluge\EOT\Output\SimpleString;

/**
 * "is true" Test tests suite.
 */
final class IsTrueTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Test\IsTrue::run
     */
    public function testFalseInputExpressionFixme()
    {
        // GIVEN the test
        $test = new IsTrue(function () { return false; });
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('faux!!', $output->__toString());
    }

    /**
     * @covers monsieurluge\EOT\Test\IsTrue::run
     */
    public function testTrueInputExpressionFixme()
    {
        // GIVEN the test
        $test = new IsTrue(function () { return true; });
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('vrai ;)', $output->__toString());
    }

    /**
     * @covers monsieurluge\EOT\Test\IsTrue::run
     */
    public function testTruthyInputExpressionFixme()
    {
        // GIVEN the test
        $test = new IsTrue(function () { return 1; });
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('faux!!', $output->__toString());
    }
}
