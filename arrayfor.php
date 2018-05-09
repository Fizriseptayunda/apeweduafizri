<!DOCTYPE html>
<html>
<head>
	<title>Tabel 1</title>
</head>
<body>

<?php 
$prodi = [
		["id"=>0,
		"nama"=>"kimia",
		"kouta"=>12,
		"kaprodi"=>"Andi"  
		],
		["id"=>1,
		"nama"=>"fisika",
		"kouta"=>14,
		"kaprodi"=>"Nurhasanah"
		],
		["id"=>2,
		"nama"=>"biologi",
		"kouta"=>12,
		"kaprodi"=>"Rizalinda"
		],
		["id"=>3,
		"nama"=>"sisfo",
		"kouta"=>32,
		"kaprodi"=>"Ilham"
		],
		["id"=>4,
		"nama"=>"kelautan",
		"kouta"=>11,
		"kaprodi"=>"Nora"
		],
		["id"=>5,
		"nama"=>"statistika",
		"kouta"=>15,
		"kaprodi"=>"Naomi"
		],
		["id"=>6,
		"nama"=>"matematika",
		"kouta"=>12,
		"kaprodi"=>"Mariatul"
		]
		];
?>
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
