<?php

$foods = [
    'vegetables' => 'brinjal, brocoli, carrot, capsicam',
    'fruits'=> 'orange, banana, apple ',
    'drinks'=> 'water, milk', 
];

$foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'].=", orange juice";

echo $foods['vegetables'];

for($i=0;$i<count($foods);$i++){
    echo $foos[$i];
}

foreach($foods as $key=>$value){
    echo $key."=".$value."\n";
}

$keys = array_keys($foods);
for($i=0;$i<count($keys);$i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
}

$values = array_values($foods);
for($i=0;$i<count($values);$i++){
    $value = $value[$i];
    echo $value."\n";
}