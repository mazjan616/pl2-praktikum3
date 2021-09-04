<center>
<h1>Input Data Nilai</h1>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into nilai values(
'".$_POST['id']."',
'".$_POST['npm']."',
'".$_POST['nama_mhs']."',
'".$_POST['kode_mk']."',
'".$_POST['nama_mk']."',
'".$_POST['uts']."',
'".$_POST['uas']."',
'".$_POST['quiz']."',
'".$_POST['tugas']."',
'".$_POST['kehadiran']."',
'".$_POST['pertemuan']."',
'".$_POST['absensi']."',
'".$_POST['nilai']."',
'".$_POST['grade']."'
)");


header('location:latihan13.php');
}
?>

<table border="2">
    <form action="" method="POST">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td><input type="text" name="npm"></td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td><input type="text" name="nama_mhs"></td>
        </tr>
        <tr>
            <td>Kode Mata Kuliah</td>
            <td><input type="text" name="kode_mk"></td>
        </tr>
        <tr>
            <td>Nama Mata Kuliah</td>
            <td><input type="text" name="nama_mk"></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td><input type="text" name="uts"></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td><input type="text" name="uas"></td>
        </tr>
        <tr>
            <td>Quiz</td>
            <td><input type="text" name="quiz"></td>
        </tr>
        <tr>
            <td>Tugas</td>
            <td><input type="text" name="tugas"></td>
        </tr>
        <tr>
            <td>Kehadiran</td>
            <td><input type="text" name="kehadiran"></td>
        </tr>
        <tr>
            <td>Pertemuan</td>
            <td><input type="text" name="pertemuan"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="proses" value="Simpan">
                <input type='button' onclick=location.href='latihan13.php' value='Batal' />
            </td>
        </tr>
    </form>
</table>
</center>