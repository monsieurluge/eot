<?php

namespace monsieurluge\EOT\Tests;

use PHPUnit\Framework\TestCase;
use monsieurluge\EOT\Output\SimpleString as SimpleStringOutput;
use monsieurluge\EOT\Test\Dummy as DummyTest;

/**
 * Dummy Test tests suite.
 */
final class DummyTestPrintsResultTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Test\Dummy::run
     */
    public function testCanRunDummyTest()
    {
        // GIVEN an output
        $output = new SimpleStringOutput();
        // AND the dummy test
        $test = new DummyTest($output);

        // WHEN the test is requested to run
        $test->run();

        // THEN the output is as expected
        $this->assertSame('test', strval($output));
    }
}
