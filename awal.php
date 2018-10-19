<!DOCTYPE html>
<html>
<head>
	<title>Data Awal</title>
</head>
<body>
	<center>
		<form>
			<h3>Tabel Mahasiswa</h3>
			<table border="1" cellpadding="5">
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto Hidup</th>
			</tr>

				<?php 
				while ($data = mysqli_fetch_array($sql)){
					echo"<tr>";
					echo"<td>".$data['nim']."</td>";
					echo"<td>".$data['nama']."</td>";
					echo"<td>".$data['tgl_lahir']."</td>";
					echo"<td>".$data['jenis_kelamin']."</td>";
					echo"<td>".$data['prodi']."</td>";
					echo"<td>".$data['fakultas']."</td>";
					echo"<td>".$data['asal']."</td>";
					echo"<td>".$data['motto_hidup']."</td>";
				}
				?>
				<a href="input.php">Input data baru</a>
</table>
</form>
</center>
</body>
</html>
