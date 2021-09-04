<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$id= $_GET['id'];

$query=mysqli_query($con,"DELETE FROM nilai WHERE id=$id")or die(mysql_error());

header('location:latihan13.php');
?>