<?php

require_once "/var/www/evozon2021/Lab3/Contracts/StackInterface.php";

class CheezyStack implements StackInterface
{
    private array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push(int $element)
    {
        array_push($this->stack, $element);
    }

    /**
     * @throws Exception
     */
    public function pop(): int
    {
        if ($this->empty()) {
            throw new Exception("Queue is empty");
        }

        return array_pop($this->stack);
    }

    public function empty(): bool
    {
        return !(bool)count($this->stack);
    }

    public function __toString(): string
    {
        if ($this->empty()) {
            return "";
        }

        $stack = "";
        foreach ($this->stack as $value) {
            $stack .= $value. "->";
        }

        var_dump($this->stack);

        return $stack . PHP_EOL;
    }
}