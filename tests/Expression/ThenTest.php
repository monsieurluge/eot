<?php

namespace monsieurluge\EOT\Tests\Test;

use monsieurluge\EOT\Expression\Then;
use PHPUnit\Framework\TestCase;

final class ThenTest extends TestCase
{
    public function testExpressionIsEvaluated()
    {
        // GIVEN a "then ..." expression
        $then = new Then(function () { return 'OK'; });
        // AND a text object which can be updated
        $text = $this->createText('to replace');
        // AND the callback which will replace the text with the expression result
        $next = function ($replacement) use ($text) { $text->replaceBy($replacement); };

        // WHEN the expression is evaluated
        $then->evaluate($next);

        // THEN the callback has been called with the expected content
        $this->assertSame('OK', $text->value());
    }

    private function createText(string $origin): object
    {
        return new class ($origin)
        {
            private $text;
            public function __construct($origin)
            {
                $this->text = $origin;
            }
            public function replaceBy(string $replacement): void
            {
                $this->text = $replacement;
            }
            public function value(): string
            {
                return $this->text;
            }
        };
    }
}
