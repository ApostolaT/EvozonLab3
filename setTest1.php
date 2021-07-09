<?php

define('__ROOT__', dirname(__FILE__));

require_once __ROOT__ . "/Set/SimpleSet.php";

$set = new SimpleSet();
$set2 = new SimpleSet();

var_dump($set->isSet(10));

$set->addValue(1);
$set->addValue(2);
$set->addValue(3);
$set->addValue(4);
$set->addValue(5);

$set2->addValue(7);
$set2->addValue(8);
$set2->addValue(3);
$set2->addValue(4);
$set2->addValue(5);

//var_dump($set->getSet());
//var_dump($set2->getSet());

//var_dump($set->reunion($set2));
var_dump($set->intersection($set2));