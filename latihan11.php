<center>
<h1>Ubah Data Mata Kuliah</h1>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();
$kode_mk= $_GET['kode_mk'];

$query=mysqli_query($con,"SELECT * FROM matkul WHERE kode_mk='$kode_mk'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

if(isset($_POST['proses']))
{
$nama_mk= $_POST['nama_mk'];
$semester= $_POST['semester'];
$query=mysqli_query($con,"UPDATE matkul SET kode_mk='$kode_mk', nama_mk='$nama_mk', semester=$semester WHERE kode_mk='$kode_mk'");
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
            <td>
                <input type="text" name="kode_mk" value="<?php echo $data['kode_mk'] ?>" disabled>
            </td>    
            <td>
                <input type="text" name="nama_mk" value="<?php echo $data['nama_mk'] ?>">
            </td>
            <td>
                <input type="text" name="semester" value="<?php echo $data['semester'] ?>">
            </td>
            <td>
                <input type="submit" name="proses" value="Simpan">
            </td>
            <td>
                <input type='button' onclick=location.href='latihan9.php' value='Batal' />
            </td>
        </form>
    </tr>
</table>

<?php } ?>
</center>