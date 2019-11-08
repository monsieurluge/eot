<?php

namespace monsieurluge\EOT\Test;

use monsieurluge\EOT\Expression\Expression;
use monsieurluge\EOT\Output\Output;
use monsieurluge\EOT\Test\Test;

/**
 * A test which "is false".
 */
final class IsFalse implements Test
{
    /** @var Expression */
    private $expression;

    /**
     * @param Expression $expression
     */
    public function __construct(Expression $expression)
    {
        $this->expression = $expression;
    }

    /**
     * @inheritDoc
     */
    public function run(Output $output): void
    {
        $this->expression->evaluate(function ($result) use ($output) {
            false === $result
                ? $output->write('vrai ;)')
                : $output->write('faux!!');
        });
    }
}
