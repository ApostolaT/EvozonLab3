<?php

require_once "/var/www/evozon2021/Lab3/Iterable/RandomNumberCollection.php";

$randomNumbersCollection = new RandomNumberCollection();

//Quite interesting to see in how much time it will end.
//It did end to be a quite bad JOKE, even if I escaped
// this case in my conditions
//$arrayCount = PHP_INT_MAX;
$arrayCount = 20;

foreach ($randomNumbersCollection->getIterator($arrayCount) as $value) {
    echo "$value ";
}

echo PHP_EOL;