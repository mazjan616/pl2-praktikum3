<center>
<h1>Daftar Mahasiswa</h1>
<table border="2px">
<tr>
<th> NPM </th>
<th> Nama </th>
<th> Aksi </th>
</tr>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$query=mysqli_query($con,"select * from mahasiswa");
while($data=mysqli_fetch_array($query)){
	
echo "<tr>";
echo "<td>"; echo $data['npm']; echo "</td>";
echo "<td>"; echo $data['nama_mhs']; echo "</td>";
echo "<td>"; echo "<a href='latihan3.php?npm=$data[npm]'>Ubah</a> | <a href='latihan4.php?npm=$data[npm]'>Hapus</a>"; echo "</td>";
echo "</tr>";
}
?>

</table>

<h3>Input Data Mahasiswa</h3>
<input type='button' onclick=location.href='latihan2.php' value='Input Data' />
</center>