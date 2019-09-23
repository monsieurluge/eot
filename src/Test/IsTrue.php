<?php

namespace monsieurluge\EOT\Test;

use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\Test\Test;

final class IsTrue implements Test
{
    /**
     * @inheritDoc
     */
    public function run(Output $output): void
    {
        $output->write('fixme');
    }
}
