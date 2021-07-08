<?php

require_once "/var/www/evozon2021/Lab3/Contracts/QueueInterface.php";

class CheezyIntQueue implements QueueInterface
{
    private array $queue;

    public function __construct()
    {
        $this->queue = array();
    }

    public function enqueue(int $element)
    {
        array_push($this->queue, $element);
    }

    /**
     * @throws Exception
     */
    public function dequeue(): int
    {
        if ($this->empty()) {
            throw new Exception("Queue is empty");
        }

        return array_shift($this->queue);
    }

    public function empty(): bool
    {
        return !(bool)count($this->queue);
    }

    public function __toString(): string
    {
        if ($this->empty()) {
            return "";
        }

        $queue = "";
        foreach ($this->queue as $value) {
            $queue .= $value. "->";
        }

        return $queue . PHP_EOL;
    }
}