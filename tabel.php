<!DOCTYPE html>
<html>
<head>
	<title>Tabel 1</title>
</head>
<body>
	<h1>ini latihan tabel</h1>
	<table border="1"; cellspacing="0" style="border: solid;"> 
<tr>
	<td>Id</td>
	<td>Nama Prodi</td>
	<td>Kouta</td>
	<td>Kaprodi</td>
</tr>
<?php 
	for ($i=1; $i <= 100 ; $i++):
	
?>
<tr>
	<td><?php echo $i ?></td>
	<td>Sisfo</td>
	<td><?php echo $i*3 ?></td>
	
<?php if ($i%2):?>
	<td>ilhamsyah</td>
<?php else :?>
	<td>Renny</td>
<?php endif; ?>

</tr>

<?php
		endfor;
	
 ?>
</table>
 
</body>
</html>
