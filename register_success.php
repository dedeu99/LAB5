<?php

header('Content-Type: text/html; charset=utf-8');
header('Refresh: 5; url=index.php');
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require_once "HTML/Template/IT.php";


$referer = $_SERVER['HTTP_REFERER']; 
$domain = parse_url($referer);


$template = new HTML_Template_IT('.'); 
$template->loadTemplatefile('register_sucess.html',true, true); 

$template->setCurrentBlock("SUCESSFORM");





/*
echo $referer.PHP_EOL;
echo "-----".PHP_EOL;
print_r($domain);

echo PHP_EOL.basename($domain[path]).PHP_EOL*/

if(strcmp(basename($domain[path]),"register.php")==0){
	$template->setVariable('MSGBACKGROUND', 'success' );
	$name=$_GET['name'];
	$template->setVariable('MESSAGE',"User $name has been created sucessfully");
}
else{
	$template->setVariable('MSGBACKGROUND', 'danger' );
	$template->setVariable('MESSAGE',"You are not supposed to be here.");
}




$template->parseCurrentBlock();

$template->show();




?>