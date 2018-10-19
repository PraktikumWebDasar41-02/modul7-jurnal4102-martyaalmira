<!DOCTYPE html>
<html>
<head>
	<title>Input Mahasiswa Baru</title>
</head>
<body>
	<table>
		<form method="POST">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis_kelamin">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td>
				<select name="prodi">
				<option>Pilih</option> 
				<option value="mi">Manajemen Informatika</option>
				<option value="if">Teknik Informatika</option>
				<option value="ikom">Ilmu Komunikasi</option>
				<option value="mbti">Manajemen Bisnis Telekomunikasi Informatika</option>
				<option value="ti">Teknik Industri</option>
				<option value="te">Teknik Elektro</option>
				</select><br>
				</td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td><input type="radio" name="fakultas" value="fit">FIT
					<input type="radio" name="fakultas" value="fte">FTE
					<input type="radio" name="fakultas" value="fkb">FKB
					<input type="radio" name="fakultas" value="feb">FEB
				</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal"></td>
		</tr>

		<tr>
			<td>Motto</td>
			<td><textarea name="motto_hidup"></textarea></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>

		</form>
	</table>

</body>
</html>

<?php
$con =mysqli_connect('localhost', 'root', '', 'jurnal7');

session_start();

if(isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$motto_hidup = $_POST['motto_hidup'];

	$cek = "INSERT INTO data VALUES('$nama', $nim, '$tgl_lahir', '$jenis_kelamin','$prodi', '$fakultas', '$asal', '$motto_hidup' )";
	$sql = mysqli_query($con,$cek);

	if($sql){
		//header("location:view.php");
		echo "Data berhasil";
	}else{
		echo "Data gagal";
	}
}


?>