<?php

require_once "/var/www/evozon2021/Lab3/Contracts/SetInterface.php";

class CheezySet implements SetInterface
{
    private array $set;

    public function __construct()
    {
        $this->set = [];
    }

    public function addValue(int $value): void
    {
        if ($this->isSet($value)) {
            return;
        }

        $this->set[$value] = 1;
    }

    public function isSet(int $value): bool
    {
        return isset($this->set[$value]);
    }

    public function intersection(SetInterface $set): SetInterface
    {
        $intersection = new CheezySet();
        $intersection->setSet(array_intersect_key($this->set, $set->getSet()));

        return $intersection;
    }

    public function reunion(SetInterface $set): SetInterface
    {
        $reunionSet = new CheezySet();
        $reunionSet->setSet($this->getSet() + $set->getSet());

        return $reunionSet;
    }

    public function setSet(array $set): void
    {
        $this->set = $set;
    }

    public function getSet(): array
    {
        return $this->set;
    }
}