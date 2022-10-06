<?php

$dbhost = "172.17.0.2";
$dbuser = "root";
$dbpass = "panos";
$dbname = "k8sdb";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$con){
	echo "failed\n";
	exit();
	} 
	
?>
