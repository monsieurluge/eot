<?php

namespace monsieurluge\EOT\Output;

use monsieurluge\EOT\Output\Output;

/**
 * A simple implementation of an Output which can be used as a standard string.
 * Each write call acts as concatenating two strings.
 *  ex: echo (new SimpleString())->write('hello')->write(' world'); // returns "hello world"
 */
final class SimpleString implements Output
{
    /** @var string */
    private $content;

    /**
     * Creates the SimpleString object.
     */
    public function __construct()
    {
        $this->content = '';
    }

    /**
     * Returns the content.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @inheritDoc
     */
    public function write(string $text): void
    {
        $this->content = sprintf('%s%s', $this->content, $text);
    }
}
