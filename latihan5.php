<center>
<h1>Daftar Dosen</h1>
<table border="2px">
<tr>
<th> NIP Dosen </th>
<th> Nama </th>
<th> Aksi </th>
</tr>

<?php

include 'connection.php';
$db = new Database();
$con=$db->Connect();

$query=mysqli_query($con,"select * from dosen");
while($data=mysqli_fetch_array($query)){

echo "<tr>";
echo "<td>"; echo $data['nip_dosen']; echo "</td>";
echo "<td>"; echo $data['nama_dosen']; echo "</td>";
echo "<td>"; echo "<a href='latihan7.php?nip_dosen=$data[nip_dosen]'>Ubah</a> | <a href='latihan8.php?nip_dosen=$data[nip_dosen]'>Hapus</a>"; echo "</td>";
echo "</tr>";
}
?>

</table>

<h3>Input Data Dosen</h3>
<input type='button' onclick=location.href='latihan6.php' value='Insert Data' />
</center>