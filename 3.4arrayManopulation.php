<?php

$students = [
    "rahim",
    "karim",
    123,
    "monir",
];

//immutable;
$N = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i]."\n";
}

$students [2] = "shafik";
$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i]."\n";
}

$student = array_pop($students);
$students = array_shift($students);
echo $student."\n";

$n = count($students);
for ($i = 0; $i < $n; $i++) {
    echo $students[$i]."\n";
}

$students[] = "jamal";
array_push($students, "kamal");

array_unshift($students, "salam");
array_unshift($students, "salma");

$n = count($students);
for($i = 0; $i < $n; $i++) {
    echo $students[$i] . "\n";
}
