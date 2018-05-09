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

	echo $prodi[2]['kaprodi'];
	foreach ($prodi as $prd) ;
	?>