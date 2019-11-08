<?php

namespace monsieurluge\EOT\Expression\Fake;

use Closure;
use monsieurluge\EOT\Expression\Expression;

final class ReturnsIntegerAsResult implements Expression
{
    /** @var int */
    private $result;

    public function __construct(int $result)
    {
        $this->result = $result;
    }

    public function evaluate(Closure $next): void
    {
        ($next)($this->result);
    }
}
