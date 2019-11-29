<?php

namespace monsieurluge\EOT\TestsSuite;

use Closure;
use monsieurluge\EOT\Output\Output;

interface TestsSuites
{
    public function filter(Closure $constraint): TestsSuites;

    public function map(Closure $transformation): TestsSuites;

    public function run(Output $output): void;
}
