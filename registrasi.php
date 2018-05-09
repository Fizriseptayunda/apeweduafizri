<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Mahasiswa</title>
</head>
<body>
<?php
$Kabupaten=[
				[
				'id'=>1,
				'nama_kab'=>"Pontianak"
				],
				[
				'id'=>2,
				'nama_kab'=>"Mempawah"
				],
				[
				'id'=>3,
				'nama_kab'=>"Sintang"
				]
			];
?>

<h1>Registrasi</h1>
<form method="POST" action="proses.php">
<table>
	
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>:</td>
		<td><input type="number" name="no_hp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td>
		<textarea name="alamat"></textarea>
		</td>
		
	</tr>
	<tr>
		<td>Kabupaten</td>
		<td>:</td>
		<td>
			<select name="Kabupaten">
	<?php foreach ($Kabupaten as $kab): ?>
		
				<option value="<?php echo $kab ["id"]?>"><?php echo $kab['nama_kab']; ?></option>
	<?Php endforeach; ?>
				
			</select>
		</td>
	</tr>
	<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td><input type="radio" name="Jenis_Kelamin">Pria
    <input type="radio" name="Jenis_Kelamin">Wanita</td>
</tr>
<tr>
		<td>Prodi Pilihan </td>
		<td>:</td>
		<td>
			<input type="checkbox" name="prodipil">Sistem Informasi<br>
			<input type="checkbox" name="prodipil">Sistem Komputer<br>
			<input type="checkbox" name="prodipil">Informatika

		</td>
</tr>
<tr>
<td>
	<input type="submit" name="submit" value="simpan">
</td>
</tr>
</form>
</table>

</body>
</html>