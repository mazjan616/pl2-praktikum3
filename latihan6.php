<center>
<h1>Input Data Dosen</h1>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into dosen values(
'".$_POST['nip_dosen']."',
'".$_POST['nama_dosen']."'
)");

header('location:latihan5.php');
}
?>

<table border="2">
    <tr>
        <td>NIP Dosen</td>
        <td>Nama Dosen</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="nip_dosen"></td>
            <td><input type="text" name="nama_dosen"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
            <td><input type='button' onclick=location.href='latihan5.php' value='Batal' /></td>
        </form>
    </tr>
</table>
</center>