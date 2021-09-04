<center>
<h1>Daftar Nilai Mahasiswa</h1>
<table border="2px">
<tr>
<th> No </th>
<th> NPM </th>
<th> Nama Mahasiswa </th>
<th> Kode Mata Kuliah </th>
<th> Nama Mata Kuliah </th>
<th> UTS </th>
<th> UAS </th>
<th> Quiz </th>
<th> Tugas </th>
<th> Abensi </th>
<th> Nilai  </th>
<th> Grade </th>
<th> Aksi </th>
</tr>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();


function grades($nilai)

{
 if($nilai <= 100 ) { $grade = "A"; }
 if($nilai <  80 )  { $grade = "B"; }
 if($nilai <  70 )  { $grade = "C"; }
 if($nilai <  60 )  { $grade = "D"; }
 if($nilai <  50 )  { $grade = "E"; }

 return $grade;
}

$query=mysqli_query($con,"select * from nilai");
while($data=mysqli_fetch_array($query)){

$kehadiran = $data['kehadiran'];
$pertemuan = $data['pertemuan'];

$absensi= ($kehadiran/$pertemuan)*100;

$nilai  = ($data['uts']*0.3)+ ($data['uas']*0.4)+ ($data['quiz']*0.1)+ ($data['tugas']*0.1)+ ($absensi*0.1);

$grade  = grades($nilai);
$npm = $data['npm'];
$kode_mk = $data['kode_mk'];

echo "<tr>";
echo "<td>"; echo $data['id']; echo "</td>";
echo "<td>"; echo $data['npm']; echo "</td>";
echo "<td>"; echo $data['nama_mhs']; echo "</td>";
echo "<td>"; echo $data['kode_mk']; echo "</td>";
echo "<td>"; echo $data['nama_mk']; echo "</td>";
echo "<td>"; echo $data['uts']; echo "</td>";
echo "<td>"; echo $data['uas']; echo "</td>";
echo "<td>"; echo $data['quiz']; echo "</td>";
echo "<td>"; echo $data['tugas']; echo "</td>";
echo "<td>"; echo $absensi; echo "</td>";
echo "<td>"; echo $nilai; echo "</td>";
echo "<td>"; echo $grade; echo "</td>";
echo "<td>"; echo "<a href='latihan15.php?id=$data[id]'>Ubah</a> | <a href='latihan16.php?id=$data[id]'>Hapus</a>"; echo "</td>";
echo "</tr>";
}
?>

</table>
<h3>Input Data Nilai</h3>
<input type='button' onclick=location.href='latihan14.php' value='Tambah Data' />
</center>