<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$nip_dosen= $_GET['nip_dosen'];

$query=mysqli_query($con,"DELETE FROM dosen WHERE nip_dosen=$nip_dosen")or die(mysql_error());
 

header('location:latihan5.php');
?>