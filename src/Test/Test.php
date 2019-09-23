<?php

namespace monsieurluge\EOT\Test;

use monsieurluge\EOT\Output\Output;

/**
 * Test interface.
 */
interface Test
{
    /**
     * Runs the test.
     *
     * @param Output $output
     */
    public function run(Output $output): void;
}
