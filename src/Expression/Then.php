<?php

namespace monsieurluge\EOT\Expression;

use Closure;
use monsieurluge\EOT\Expression\Expression;

final class Then implements Expression
{
    /** @var Closure */
    private $func;

    public function __construct(Closure $func)
    {
        $this->func = $func;
    }

    public function evaluate(Closure $next): void
    {
        ($next)(($this->func)());
    }
}
