<?php
$hostname='localhost';
$username='root';
$password='';
$databaseName='CSEB2020'

if (mysqli_connect($hostname,$username,$password,$databaseName))
{
	echo'connections success';
}
else
{
	echo 'failed'+mysqli_connect_error();
}
?>