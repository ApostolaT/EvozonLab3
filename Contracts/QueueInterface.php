<?php

interface QueueInterface
{
    public function enqueue(int $element);

    public function dequeue(): int;

    public function empty(): bool;
}