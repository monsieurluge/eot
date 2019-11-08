<?php

namespace monsieurluge\EOT\Expression;

use Closure;

interface Expression
{
    public function evaluate(Closure $next): void;
}
