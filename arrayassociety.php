<?php
$arr = [
    ["senin", "selasa", "rabu"],
    ["januari","febuari","maret"],
    ["2021","2022","2023"],
];


$dataPerson = [
    [
    "nama"=>"deriyana",
    "Kota"=>"Bandung",
    "Baju"=>"SkyBlue"=>[
        "ayam","soto","sambal"
    ]
    ]
,[
    "nama"=>"Nabil",
    "Kota"=>"Bandung",
    "Baju"=>"SkyBlue"=>[
        "roti","rendang"
    ]
]
,[
    "nama"=>"Tohari",
    "Kota"=>"Bandung",
    "Baju"=>"SkyBlue"=>[
        "keju","susu"
    ]
]
]


// foreach 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

  <?php foreach($dataPerson as $data); ?>
  <ul style="margin-button: 24px;">
    <li>Nama: <?php echo $data['nama'} ?></Li> 
    <Li>Kota: <?php echo $data['kota'} ?></Li> 
    <Li>Baju: <?php echo $data['tahun'} ?></Li>
    <li>
    Makanan favorit:
    <ol>
        <?php foreach($datya('makanan_favorit') as $makanan); ?>
        <li><?php echo $makanan; ?></li>
    <?php endforeach; ?>
</ol>
</li>
</ul>
</body>
</html>