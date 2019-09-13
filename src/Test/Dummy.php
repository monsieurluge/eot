<?php

namespace monsieurluge\EOT\Test;

use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\Test\Test;

final class Dummy implements Test
{
    /** @var Output */
    private $output;

    /**
     * @param Output $output
     */
    public function __construct(Output $output)
    {
        $this->output = $output;
    }

    /**
     * @inheritDoc
     */
    public function run(): void
    {
        $this->output->write('test');
    }
}
