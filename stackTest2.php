<?php

define('__ROOT__', dirname(__FILE__));

require_once __ROOT__ . "/Stack/CheezyStack.php";

$stack = new CheezyStack();

try {
    $stack->pop();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

$stack->push(1);
echo $stack;
$stack->push(2);
echo $stack;

try {
    $stack->pop();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

echo $stack;
