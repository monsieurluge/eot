<?php

namespace monsieurluge\EOT\TestsSuite;

use monsieurluge\EOT\Output\Output;

interface TestsSuite
{
    public function run(Output $output): void;
}
