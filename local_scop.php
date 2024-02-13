<?php
$student_name = "Mamunur Rashid "; // global variable scop
$phone_number = " +8801881164650"; // global variable scop 

echo $student_name;

function getNumber(){
    $phone_number = "+8801881164650"; // local variable scop
    echo $phone_number;
}
getNumber();
?>