<center>
<h1>Ubah Data Dosen</h1>

<?php
include 'connection.php';
$db = new Database();
$con=$db->Connect();
$nip_dosen= $_GET['nip_dosen'];

$query=mysqli_query($con,"SELECT * FROM dosen WHERE nip_dosen='$nip_dosen'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

if(isset($_POST['proses']))
{
$nama_dosen= $_POST['nama_dosen'];
$query=mysqli_query($con,"UPDATE dosen SET nip_dosen='$nip_dosen', nama_dosen='$nama_dosen' WHERE nip_dosen='$nip_dosen'");
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
            <td>
                <input type="text" name="nip_dosen" value="<?php echo $data['nip_dosen'] ?>" disabled>
            </td>    
            <td>
                <input type="text" name="nama_dosen" value="<?php echo $data['nama_dosen'] ?>">
            </td>
            <td>
                <input type="submit" name="proses" value="Simpan">
            </td>
            <td>
                <input type='button' onclick=location.href='latihan5.php' value='Batal' />
            </td>
        </form>
    </tr>
</table>

<?php 
} 
?>
</center>