<?php

require_once "/var/www/evozon2021/Lab3/Contracts/SetInterface.php";

class SimpleSet implements SetInterface
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

        $this->set[] = $value;
    }

    public function isSet(int $value): bool
    {
        foreach ($this->set as $item) {
            if ($value == $item){
                return true;
            }
        }

        return false;
    }

    public function intersection(SetInterface $set): SetInterface
    {
        $intersection = new SimpleSet();
        $arrayChunk = array_merge($this->set, $set->getSet());

        foreach ($arrayChunk as $value) {
            if ($this->isSet($value) && $set->isSet($value) && !$intersection->isSet($value)) {
                $intersection->addValue($value);
            }
        }

        return $intersection;
    }

    public function reunion(SetInterface $set): SetInterface
    {
        $reunion = new SimpleSet();
        $reunion->setSet($this->getSet());

        foreach ($set->getSet() as $value) {
            if (!$reunion->isSet($value)) {
                $reunion->addValue($value);
            }
        }

        return $reunion;
    }

    public function getSet(): array
    {
        return $this->set;
    }

    public function setSet(array $set): void
    {
        $this->set = $set;
    }
}