<?php

namespace monsieurluge\EOT\TestFake\Output;

use monsieurluge\EOT\Output\Output;

/**
 * A dummy Output implementation. Does nothing.
 */
final class Dummy implements Output
{
    /**
     * @inheritDoc
     */
    public function write(string $text): Output
    {
        return $this;
    }
}
