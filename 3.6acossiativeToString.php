<?php

$student = array(
   'fname' => 'jamal',
   'lname' => 'hasan',
   'age' => '15',
    'section' => 'B',
);

print_r($student);

echo $student['fname']." ".$student['lname']."\n";

printf("%s %s \n",$student['fname'],$student['lname']);

echo join(",",$student);

echo serialize($student);

$serialized = serialize($student);

$newStudent = unserialize($serialized);

print_r($newStudent);