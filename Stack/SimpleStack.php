<?php

require_once "/var/www/evozon2021/Lab3/Contracts/StackInterface.php";

class SimpleStack implements StackInterface
{
    private array $stack;

        public function __construct()
    {
        $this->stack = [];
    }

    public function push(int $element)
    {
        $this->stack[] = $element;
    }

    /**
     * @throws Exception
     */
    public function pop(): int
    {
        if ($this->empty()) {
            throw new Exception("Stack is empty");
        }

        $buffer = $this->stack[count($this->stack) - 1];
        unset($this->stack[count($this->stack) - 1]);

        return $buffer;
    }

    public function empty(): bool
    {
        return empty($this->stack);
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