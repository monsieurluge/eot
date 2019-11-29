<?php

namespace monsieurluge\EOT\Demo;

use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\TestsSuite\TestsSuite;

final class SimpleTestsSuite implements TestsSuite
{
    public function run(Output $output): void
    {
        $output->write('simple tests suite -> done');
    }
}
