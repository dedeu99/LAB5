<?php

header('Content-Type: text/html; charset=utf-8');
require_once "HTML/Template/IT.php";


$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['ERROR'];
//{MESSAGE_HIDDEN}

// Cria um novo objecto template
$template = new HTML_Template_IT('.'); 


$template->loadTemplatefile('register_template.html',true, true); 



$template->setCurrentBlock("REGISTERFORM");

$template->setVariable('NAME', $name );
$template->setVariable('EMAIL', $email);
$template->setVariable('MESSAGE', $message);
$template->setVariable('MESSAGE_HIDDEN',"hidden");



$template->parseCurrentBlock();



$template->show();


//$response = http_get("./", "asd"), $info);


//header("Location:register.php?error=1&name=Joao%20Silva");
//header("Location: register_success.html"); 

?>