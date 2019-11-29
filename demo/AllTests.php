<?php

namespace monsieurluge\EOT\Demo;

use monsieurluge\EOT\TestsSuite\AbstractTestsSuites;
use monsieurluge\EOT\TestsSuite\TestsSuites;
use monsieurluge\EOT\Demo\SimpleTestsSuite;

final class AllTests extends AbstractTestsSuites implements TestsSuites
{
    protected function testsSuites(): array
    {
        return [
            new SimpleTestsSuite()
        ];
    }
}
