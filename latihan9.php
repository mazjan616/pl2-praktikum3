<center>
<h1>Daftar Mata Kuliah</h1>
<table border="2px">
<tr>
<th> Kode Mata Kuliah </th>
<th> Nama Mata Kuliah </th>
<th> Semester </th>
<th> Aksi </th>
</tr>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$query=mysqli_query($con,"select * from matkul");
while($data=mysqli_fetch_array($query)){

echo "<tr>";
echo "<td>"; echo $data['kode_mk']; echo "</td>";
echo "<td>"; echo $data['nama_mk']; echo "</td>";
echo "<td>"; echo $data['semester']; echo "</td>";
echo "<td>"; echo "<a href='latihan11.php?kode_mk=$data[kode_mk]'>Ubah</a> | <a href='latihan12.php?kode_mk=$data[kode_mk]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}
?>

</table>
<h3>Input Data Mata Kuliah</h3>
<input type='button' onclick=location.href='latihan10.php' value='Insert Data' />
</center>