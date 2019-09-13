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
     *
     * @return Output
     */
    public function write(string $text): Output;
}
