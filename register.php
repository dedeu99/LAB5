<?php
header('Content-Type: text/html; charset=utf-8');
require_once "HTML/Template/IT.php";


$name="nome1";
$email="email1";

// Cria um novo objecto template
 template = new HTML_Template_IT('.'); 


 // Carrega o template Filmes2_TemplateIT.tpl
 $template->loadTemplatefile('index_template.html',true, true); 



$template->setCurrentBlock("POSTS");
$template->setVariable('NAME', $name );
$template->setVariable('EMAIL', $email);



$template->parseCurrentBlock();



$template->show();


//$response = http_get("./", "asd"), $info);
//echo "<script type='text/javascript'>alert('$info / &response');</script>";

//header("Location:register.php?error=1&name=Joao%20Silva");
//header("Location: register_success.html"); 

?>