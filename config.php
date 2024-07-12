<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$con = mysqli_connect($server, $username, $password, $database);

if ($con) {

}
else
{
	die("connection failed:" .mysqli_connect_error());
}



?>
