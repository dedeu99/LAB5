<?php


$name=$_POST['name'];
$email=$_POST['email'];

header("Location:register.php?error=1&name=".$name."&email=".$email);


?>