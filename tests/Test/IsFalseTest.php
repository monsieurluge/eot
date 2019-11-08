<?php

namespace monsieurluge\EOT\Tests\Test;

use monsieurluge\EOT\Expression\Fake\ReturnsBooleanAsResult;
use monsieurluge\EOT\Expression\Fake\ReturnsIntegerAsResult;
use monsieurluge\EOT\Test\IsFalse;
use monsieurluge\EOT\Output\SimpleString;
use PHPUnit\Framework\TestCase;

final class IsFalseTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Test\IsFalse::run
     */
    public function testFalseEvaluatedInputExpressionGeneratesSuccessfulTestOutput()
    {
        // GIVEN the test
        $test = new IsFalse(new ReturnsBooleanAsResult(false));
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('vrai ;)', $output->__toString());
    }

    /**
     * @covers monsieurluge\EOT\Test\IsFalse::run
     */
    public function testTrueEvaluatedInputExpressionGeneratesFailedTestOutput()
    {
        // GIVEN the test
        $test = new IsFalse(new ReturnsBooleanAsResult(true));
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('faux!!', $output->__toString());
    }

    /**
     * @covers monsieurluge\EOT\Test\IsFalse::run
     */
    public function testFalsyEvaluatedInputExpressionGeneratesFailedTestOutput()
    {
        // GIVEN the test
        $test = new IsFalse(new ReturnsIntegerAsResult(0));
        // AND an basic output
        $output = new SimpleString();

        // WHEN the test is requested to run
        $test->run($output);

        // THEN the output is as expected
        $this->assertSame('faux!!', $output->__toString());
    }
}
