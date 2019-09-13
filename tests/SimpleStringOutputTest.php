<?php

namespace monsieurluge\EOT\Tests;

use PHPUnit\Framework\TestCase;
use monsieurluge\EOT\Output\SimpleString as SimpleStringOutput;

final class SimpleStringOutputTest extends TestCase
{
    /**
     * @covers monsieurluge\EOT\Output\SimpleString::write
     */
    public function testOutputCanBeWritten()
    {
        // GIVEN the output
        $output = new SimpleStringOutput();

        // WHEN he is requested to be written
        $output->write('test');

        // THEN the content is as expected
        $this->assertSame('test', strval($output));
    }
}
