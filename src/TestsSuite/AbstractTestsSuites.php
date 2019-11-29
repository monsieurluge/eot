<?php

namespace monsieurluge\EOT\TestsSuite;

use Closure;
use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\TestsSuite\TestsSuite;
use monsieurluge\EOT\TestsSuite\TestsSuites;

abstract class AbstractTestsSuites implements TestsSuites
{
    public function filter(Closure $constraint): TestsSuites
    {
        return self;
    }

    public function map(Closure $transformation): TestsSuites
    {
        return self;
    }

    public function run(Output $output): void
    {
        array_map(
            function (TestsSuite $testSuite) use ($output) { $testSuite->run($output); },
            $this->testsSuites()
        );
    }

    abstract protected function testsSuites(): array;
}
