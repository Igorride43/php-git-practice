<?php

require_once 'Calculator.php';

$calculator = new Calculator();

echo $calculator->add(10, 5) . PHP_EOL;
echo $calculator->subtract(10, 5) . PHP_EOL;
echo $calculator->multiply(10, 5) . PHP_EOL;
echo $calculator->divide(10, 5) . PHP_EOL;