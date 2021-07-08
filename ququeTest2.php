<?php

define('__ROOT__', dirname(__FILE__));

require_once __ROOT__ . "/Queue/CheezyIntQueue.php";

$queue = new CheezyIntQueue();

$queue->enqueue(1);
echo $queue;
$queue->enqueue(2);
echo $queue;

try {
    $queue->dequeue();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

echo $queue;
