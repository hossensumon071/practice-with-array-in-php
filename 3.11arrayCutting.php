<?php
$fruits = array('fruits','orange', 'banana', 'mango', 'dates', 'plum');

$someFruits = array_splice($fruits,2,2);

print_r($someFruits);
print_r($fruits);