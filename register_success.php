<?php

//header('Refresh: 5; url=index.php');

$referer = $_SERVER['HTTP_REFERER']; 
$domain = parse_url($referer);

echo $referer;
echo "\n-----\n";
print_r($domain);
?>