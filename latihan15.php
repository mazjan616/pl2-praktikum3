<center>
<h1>Ubah Daftar Nilai Mahasiswa</h1>

<?php
include 'connection.php';
$db = new Database();
$con=$db->Connect();

$id= $_GET['id'];

$query=mysqli_query($con,"SELECT * FROM nilai WHERE id='$id'")or die(mysql_error());
while($data=mysqli_fetch_array($query)){

if(isset($_POST['proses']))
{

$uts= $_POST['uts'];
$uas= $_POST['uas'];
$quiz= $_POST['quiz'];
$tugas= $_POST['tugas'];
$kehadiran= $_POST['kehadiran'];
$pertemuan= $_POST['pertemuan'];

$query=mysqli_query($con,"UPDATE nilai SET uts='$uts', uas='$uas', quiz='$quiz', tugas='$tugas', kehadiran='$kehadiran', pertemuan='$pertemuan' WHERE id='$id'");
header('location:latihan13.php');
}

?>

<table border="2">
    <form action="" method="POST">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="<?php echo $data['id'] ?>" disabled></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="npm" value="<?php echo $data['npm'] ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="nama_mhs" value="<?php echo $data['nama_mhs'] ?>" disabled></td>
        </tr>
        <tr>
            <td>Kode Mata Kuliah</td>
            <td><input type="text" name="kode_mk" value="<?php echo $data['kode_mk'] ?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td><input type="text" name="nama_mk" value="<?php echo $data['nama_mk'] ?>" disabled></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td><input type="text" name="uts" value="<?php echo $data['uts'] ?>"></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td><input type="text" name="uas" value="<?php echo $data['uas'] ?>"></td>
        </tr>
        <tr>
            <td>Quiz</td>
            <td><input type="text" name="quiz" value="<?php echo $data['quiz'] ?>"></td>
        </tr>
        <tr>
            <td>Tugas</td>
            <td><input type="text" name="tugas" value="<?php echo $data['tugas'] ?>"></td>
        </tr>
        <tr>
            <td>Kehadiran</td>
            <td><input type="text" name="kehadiran" value="<?php echo $data['kehadiran'] ?>"></td>
        </tr>
        <tr>
            <td>Pertemuan</td>
            <td><input type="text" name="pertemuan" value="<?php echo $data['pertemuan'] ?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="proses" value="Simpan">
                <input type='button' onclick=location.href='latihan13.php' value='Batal' />
            </td>
        </tr>
    </form>
</table>

<?php } ?>
</center>