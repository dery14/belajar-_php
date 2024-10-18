<?php
if(!isset($_GET['nama']) ||
!isset($_GET['kota']) ||
!isset($_GET['no_telp']) ){
    header("Location: getpose.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hallo <?= $_POST
        ['txt_username']; ?>
    </h1>
    <h3><?php echo $_GET['nama']; ?></h3>
    <h3><?php echo $_GET['kota']; ?></h3>
    <h3><?php echo $_GET['no_telp']; ?></h3>
    <a href="./getpose.php">Kembali</a>
</body>
</html>