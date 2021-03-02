<?php
$vegetables = 'brinjal, brocoli, carrot, capsicam';
$vegetables = explode(', ','brinjal, brocoli, carrot, capsicam');
//delimeter
var_dump($vegetables);
echo $vegetables[0];

$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;