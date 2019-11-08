<?php

namespace monsieurluge\EOT\Expression\Fake;

use Closure;
use monsieurluge\EOT\Expression\Expression;

final class ReturnsBooleanAsResult implements Expression
{
    /** @var bool */
    private $result;

    public function __construct(bool $result)
    {
        $this->result = $result;
    }

    public function evaluate(Closure $next): void
    {
        ($next)($this->result);
    }
}
