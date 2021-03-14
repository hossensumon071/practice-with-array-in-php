<?php
$fruits = array('fruits','orange', 'banana', 'mango', 'dates', 'plum');

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,3,null,true);


$newFruits = array_merge($newfruits1, $newfruits2);
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);

$newFruitsPlus = $newFruits1 + $newFruits2;
print_r($newFruitsPlus);