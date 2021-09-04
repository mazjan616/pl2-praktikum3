<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$kode_mk= $_GET['kode_mk'];

$query=mysqli_query($con,"DELETE FROM matkul WHERE kode_mk=$kode_mk")or die(mysql_error());

header('location:latihan9.php');
?>