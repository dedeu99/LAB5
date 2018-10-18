<?php

header('Refresh: 5; url=index.php');

$referrer = $_SERVER['HTTP_REFERER']; 
$base=$_SERVER['DOCUMENT_ROOT'];

echo $referrer;
echo "\n-----\n";
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;
//echo base_url();
//echo "http://all.deei.fct.ualg.pt/~a62362/LAB5/";
//if(strcmp($referrer,))
//	echo "<script type='text/javascript'>alert('referrer:$referrer.');</script>";
?>