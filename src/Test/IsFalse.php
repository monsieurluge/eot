<?php

namespace monsieurluge\EOT\Test;

use Closure;
use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\Test\Test;

/**
 * A test which "is false".
 */
final class IsFalse implements Test
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
        false === ($this->expression)()
            ? $output->write('vrai ;)')
            : $output->write('faux!!');
    }
}
