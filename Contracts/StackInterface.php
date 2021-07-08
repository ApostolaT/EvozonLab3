<?php

interface StackInterface
{
    public function push(int $element);

    public function pop(): int;

    public function empty(): bool;
}