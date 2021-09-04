<center>
<h1>Input Data Mahasiswa</h1>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into mahasiswa values(
'".$_POST['npm']."',
'".$_POST['nama_mhs']."'
)");

header('location:latihan1.php');
}
?>

<table border="2">
    <tr>
        <td>NPM</td>
        <td>Nama</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="npm"></td>
            <td><input type="text" name="nama_mhs"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
            <td><input type='button' onclick=location.href='latihan1.php' value='Batal' /></td>
        </form>
    </tr>
</table>
</center>