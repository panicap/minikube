<?php

$dbhost = "10.110.231.143";
$dbuser = "root";
$dbpass = "panicap";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>
