<?php

header('Refresh: 5; url=index.php');


$referrer = $_SERVER['HTTP_REFERER']; 
echo $referrer;
//echo base_url();
//echo "http://all.deei.fct.ualg.pt/~a62362/LAB5/";
//if(strcmp($referrer,))
//	echo "<script type='text/javascript'>alert('referrer:$referrer.');</script>";
?>