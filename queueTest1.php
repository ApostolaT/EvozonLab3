<?php

define('__ROOT__', dirname(__FILE__));

require_once __ROOT__."/Queue/SimpleIntQueue.php";

$queue = new SimpleIntQueue();

echo $queue . PHP_EOL;
echo $queue->empty() . PHP_EOL;

try {
    $queue->dequeue();
} Catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

$queue->enqueue(1);
echo $queue;
$queue->enqueue(2);
echo $queue;
$queue->enqueue(3);
echo $queue;
$queue->enqueue(4);
echo $queue;

try {
    $queue->dequeue();
} Catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

echo $queue;
