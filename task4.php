<?php

// $ip=$_SERVER['REMOTE_ADDR'];
// echo $ip;
$ip=gethostbyname(gethostname());
echo $ip;
?>