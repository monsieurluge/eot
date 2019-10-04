<?php

namespace monsieurluge\EOT\Test;

use Closure;
use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\Test\Test;

final class IsTrue implements Test
{
    /** @var Closure */
    private $expression;

    /**
     * @param Closure $expression
     */
    public function __construct(Closure $expression)
    {
        $this->expression = $expression;
    }

    /**
     * @inheritDoc
     */
    public function run(Output $output): void
    {
        true === ($this->expression)()
            ? $output->write('vrai ;)')
            : $output->write('faux!!');
    }
}
