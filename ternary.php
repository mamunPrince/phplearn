<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How input data in php</title>
</head>
<body>
<form action="ternary.php" method="get">
<input type="number" name="age">
<input type="submit">
</form>
<br>
Your age is : <?php echo $_GET ["age"];
?>
<br><br>
<?php
$age = $_GET['age'];

if($age>=18){
    echo "Yes, you can cast your vote.";
}
else{
    echo "<h4 style = color:red;> you are not illegilble</h4>";
}
?> 
</body>
</html>