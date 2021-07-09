<?php


interface SetInterface
{
    public function addValue(int $value): void;

    public function isSet(int $value): bool;

    public function intersection(SetInterface $set): SetInterface;

    public function reunion(SetInterface $set): SetInterface;

    public function setSet(array $set): void;

    public function getSet(): array;
}