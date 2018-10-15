<?php

include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];


// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
// criar query numa string
$query = "SELECT email FROM users WHERE email=".$email;

echo "<script type='text/javascript'>alert('SELECT count(*) FROM users WHERE email=\'".$email."\'');</script>";
// executar a query
$result = @ mysql_query($query,$db ); 
var_dump($result);
$nrows = mysql_num_rows($result); 
echo "<script type='text/javascript'>alert('".$nrows."');</script>";


//header("Location:register.php?error=1&name=".$name."&email=".$email);


?>