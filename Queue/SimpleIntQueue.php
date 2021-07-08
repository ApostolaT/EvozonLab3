<?php

require_once "/var/www/evozon2021/Lab3/Contracts/QueueInterface.php";

class SimpleIntQueue implements QueueInterface
{
    private array $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function enqueue(int $element)
    {
        $this->queue[] = $element;
    }

    /**
     * @throws Exception
     */
    public function dequeue(): int
    {
        if ($this->empty()) {
            throw new Exception("Queue is empty");
        }

        $buffer = $this->queue[0];
        unset($this->queue[0]);
        $this->queue = array_values($this->queue);

        return $buffer;
    }

    public function empty(): bool
    {
        return empty($this->queue);
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

        var_dump($this->queue);

        return $queue . PHP_EOL;
    }
}