<?php

$current_Day = date("D");
 echo "Today is $current_Day<br>";

switch($current_Day){
    case $current_Day=="The":
        echo "No, this is Tuesday";
        break;

    case $current_Day=="Mon":
        echo "hi, This is Monday";
        break;
default:
echo "Its a normal day of a week";
}

?>