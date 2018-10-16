<?php

$referrer = $_SERVER['HTTP_REFERER']; 

echo "<script type='text/javascript'>alert('referrer:$referrer.');</script>";
//$url=
header('Refresh: 5; URL='.base_url());

?>