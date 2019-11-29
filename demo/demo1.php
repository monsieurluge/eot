<?php

require __DIR__ . '/../vendor/autoload.php';

use monsieurluge\EOT\Demo\AllTests;
use monsieurluge\EOT\Output\SimpleString;

$output = new SimpleString();

(new AllTests())->run($output);

echo $output->__toString();
