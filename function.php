<?php
function salam($nama, $pembelajaran){
    return "Selamat datang di belajar function," . $pembelajaran . ".". $nama;
}
function hitung_uang($nominal, $jumlah){
    $num = $nominal * $jumlah;
    $string_return = "Rp" . Number_format($num, 0, ',' ,'.');
    return $string_return;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
   <h1><?php echo salam('Deri','Belajar Programing'); ?></h1> 
   <h1><?php echo hitung_uang(50000, 5); ?></h1>
</body>
</html>