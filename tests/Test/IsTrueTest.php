<?php

namespace monsieurluge\EOT\Tests\Test;

use monsieurluge\EOT\Expression\Fake\ReturnsBooleanAsResult;
use monsieurluge\EOT\Expression\Fake\ReturnsIntegerAsResult;
use monsieurluge\EOT\Test\IsTrue;
use monsieurluge\EOT\Output\SimpleString;
use PHPUnit\Framework\TestCase;

/**
 * "is true" Test tests suite.
 */
final class IsTrueTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Test\IsTrue::run
     */
    public function testFalseEvaluatedInputExpressionGeneratesFailureTestOutput()
    {
        // GIVEN the test
        $test = new IsTrue(new ReturnsBooleanAsResult(false));
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
    public function testTrueEvaluatedInputExpressionGeneratesSuccessfulTestOutput()
    {
        // GIVEN the test
        $test = new IsTrue(new ReturnsBooleanAsResult(true));
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
    public function testTruthyEvaluatedInputExpressionGeneratesFailureTestOutput()
    {
        // GIVEN the test
        $test = new IsTrue(new ReturnsIntegerAsResult(1));
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('faux!!', $output->__toString());
    }
}
