<?php ob_start();

session_start();
$connection = mysqli_connect('localhost', 'root', '', 'caaz');
if($connection){
	// echo "we are connected";
}

error_reporting(0);

