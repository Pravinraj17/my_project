<?php
$hostname='localhost';
$username='root';
$password='';
$database='veniteck_solution';

$con=mysqli_connect($hostname,$username,$password,$database);
if (!$con) {
	die(mysqli_error($con));
}

?>