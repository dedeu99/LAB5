<?php
echo "<script type='text/javascript'>alert('1');</script>";
header('Content-Type: text/html; charset=utf-8');
require_once "HTML/Template/IT.php";
echo "<script type='text/javascript'>alert('2');</script>";

$name="nome1";
$email="email1";
echo "<script type='text/javascript'>alert(3');</script>";
// Cria um novo objecto template
template = new HTML_Template_IT('.'); 

echo "<script type='text/javascript'>alert('4');</script>";
$template->loadTemplatefile('register_template.html',true, true); 


echo "<script type='text/javascript'>alert('5');</script>";
$template->setCurrentBlock("REGISTERFORM");
echo "<script type='text/javascript'>alert('6');</script>";
$template->setVariable('NAME', $name );
$template->setVariable('EMAIL', $email);

echo "<script type='text/javascript'>alert('7');</script>";

$template->parseCurrentBlock();

echo "<script type='text/javascript'>alert('8');</script>";

$template->show();


//$response = http_get("./", "asd"), $info);
echo "<script type='text/javascript'>alert('9');</script>";

//header("Location:register.php?error=1&name=Joao%20Silva");
//header("Location: register_success.html"); 

?>