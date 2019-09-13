<?php

namespace monsieurluge\EOT\Output;

/**
 * Output interface.
 */
interface Output
{
    /**
     * Writes some text.
     *
     * @param string $text
     */
    public function write(string $text): void;
}
