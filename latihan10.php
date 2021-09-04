<center>
<h1>Input Data Mata Kuliah</h1>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into matkul values(
'".$_POST['kode_mk']."',
'".$_POST['nama_mk']."',
'".$_POST['semester']."'
)");

header('location:latihan9.php');
}
?>

<table border="2">
    <tr>
        <td>Kode Mata Kuliah</td>
        <td>Nama Mata Kuliah</td>
        <td>Semester</td>
    </tr>
        
    <tr>
        <form action="" method="POST">
            <td><input type="text" name="kode_mk"></td>
            <td><input type="text" name="nama_mk"></td>
            <td><input type="text" name="semester"></td>
            <td><input type="submit" name="proses" value="Simpan"></td>
            <td><input type='button' onclick=location.href='latihan9.php' value='Batal' /></td>
        </form>
    </tr>
</table>
</center>