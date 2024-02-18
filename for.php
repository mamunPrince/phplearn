<?php
    $post = 15;
    $init = 0;
for($init=0;$init<=$post;$init++){
    echo "init". $init."<br>";
}
$info=array("Mamun","01881164650","01535","01643313734");
$count_array_value=count($info);
// var_dump ($info);
echo $count_array_value."<br>";
for($i=0;$i<$count_array_value;$i++){
    echo $info[$i]."<br>";
}
?>