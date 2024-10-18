<?php
// $_GET & $_POST adalah variable super global
// variable ini membawa banyak data yang terjadi di aplikasi

//  $_GET passing melalui url

// $_GET["nama"] = "Deriyana";
// $_GET["alamat"] = "Bandung";

$arr = [
    [
    "nama" => "Deriyana",
    "kota" => "Bandung",
    "no_telp" => "8123456"
]
    ,
    [
    "nama" => "Nabil",
    "kota" => "Batam",
    "no_telp" => "8123456"
]
]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($arr as $person): ?>
        <li>
            <a href="./get.php?nama=<?= $person['nama']; ?>
            &kota=<?= $person ['kota'] ?> 
            &no_telp=<?= $person['no_telp']; ?>">
            <?= $person['nama']; ?>
            </a>
        </li>
    <?php endforeach; ?>
    <br>

<Form method="POST">
    <input type="text" 
    name="txt_username"
    placeholder="username"/>

    <input type="pasword"
    name="txt_pasword"
    placeholder="pasword"/>

    <button type="submit">Submit</button>
</form>

<?php if(isset($_POST['txt_username'])): ?>
    <h3>Hallo, <?php echo $_POST['txt_username'] ?></h3>
</php endif; ?>
</body>
</html>