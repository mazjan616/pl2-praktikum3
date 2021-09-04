<center>
<h1>Ubah Data Mahasiswa</h1>

<?php
include 'connection.php';
$db = new Database();
$con=$db->Connect();
$npm= $_GET['npm'];

$query=mysqli_query($con,"SELECT * FROM mahasiswa WHERE npm='$npm'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

if(isset($_POST['proses']))
{
$nama_mhs= $_POST['nama_mhs'];
$query=mysqli_query($con,"UPDATE mahasiswa SET npm='$npm', nama_mhs='$nama_mhs' WHERE npm='$npm'");
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
            <td>
                <input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled>
            </td>    
            <td>
                <input type="text" name="nama_mhs" value="<?php echo $data['nama_mhs'] ?>">
            </td>
            <td>
                <input type="submit" name="proses" value="Simpan">
            </td>
            <td>
                <input type='button' onclick=location.href='latihan1.php' value='Batal' />
            </td>
        </form>
    </tr>
</table>

<?php 
} 
?>
</center>