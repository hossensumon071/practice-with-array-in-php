<?php
$fruits = array('apple', 'banana', 'orange', 'mango', 'dates', 'pulm');
$numbers = array(11,8,9,4,3,77,5);
sort($numbers);
print_r($numbers);


for($i=0;$i<count($numbers);$i++){
    echo $numbers [$i]."\n";
}