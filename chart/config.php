<?php 
$databaseHost='localhost';
$databaseName='pmb';
$databaseUsername='root';
$databasePassword='';

$conn=new mysqli($databaseHost, $databaseUsername,$databasePassword,$databaseName);
if($conn -> connect_error){
	echo die ("Gagal Menghubungkan ke Database".$conn->connect_error);
}

 ?>