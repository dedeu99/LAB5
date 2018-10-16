<?php

include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['passwordConfirmation'];


// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
// criar query numa string
$query = "SELECT email FROM users WHERE email='".$email."'";

//echo "<script type='text/javascript'>alert('SELECT count(*) FROM users WHERE email=\'".$email."\'');</script>";
// executar a query
$result = @ mysql_query($query,$db ); 
//var_dump($result);
$nrows = mysql_num_rows($result); 
//echo "<script type='text/javascript'>alert('\'".$password."\'');</script>";
echo "<script type='text/javascript'>alert('".$password.");</script>";
echo "<script type='text/javascript'>alert('".$password2.");</script>";
if(empty(password) || empty(password2) || strcmp(password,password2)!=0)
	header("Location:register.php?error=2&name=".$name."&email=".$email."");
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	header("Location:register.php?error=1&name=".$name."&email=".$email."");


	header("Location: register_success.html"); //TO REMOVE



/*
if(nrows==0)
{
	$query = "INSERT INTO users (name,email,created_at,updated_at,password_digest,remember_digest,admin) VALUES ('".$name."','".$email."',NOW(),NOW(),'".$password."','".$password2."',1);"	

	$result = @ mysql_query($query,$db ); 
	$nrows = mysql_num_rows($result); 
	if(nrows==1)
		header("Location: register_success.html"); 
	else
	{
		header("Location:register.php?error=4&name=".$name."&email=".$email);
	}
}else
{
	header("Location:register.php?error=3&name=".$name."&email=".$email);
}
*/
//header("Location:register.php?error=1&name=".$name."&email=".$email);


?>