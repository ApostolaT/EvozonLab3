<?php


class RandomNumberCollection implements Iterator
{
    private int $position;
    private array $randomNumbers;

    public function __construct()
    {
        $this->position = 0;
        $this->randomNumbers = [];
    }

    /**
     * @throws Exception
     */
    public function current(): int
    {
        if (!$this->valid()) {
            throw new Exception("Collection is empty!!!");
        }

        return $this->randomNumbers[$this->position];
    }

    public function next()
    {
        ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->randomNumbers[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function getIterator(int $count): Iterator
    {
        $this->randomNumbers = $this->generateRandomArray($count);

        return $this;
    }

    private function generateRandomArray(int $count): array
    {
        if ($count === 0) {
            return [];
        }

        $array = [];
        $min = 0;
        $max = 10;
        while ($count > 0 && $max < PHP_INT_MAX) {
            $array[] = mt_rand($min, $max);
            $min += 10;
            $max += 10;
            $count--;
        }

        return $array;
    }
}