<?php
// ini untuk menampilkan string
// gunakan \n untuk enter di terminal
// gunakan "<br/>" untuk di browser
// menyampungka 2 gunakan . dsb


    // d echo"deriyana (menggunakan echo)\n";

//cara kedua
    // d print"deriyana (menggunakan print)";

//print_r adalah fungsi build in dari php
//cara ketiga bigunakan untuk menampilkan data string, array, dsb

     //  d print_r("deriyana"."(menggunakan print_r)\n");

//var_dump adalah fungsi build ini dari php
//cara ketiga khusus untuk analisa data / untuk progamer

    // d var_dump("deriyana"." (mengguanakan var_dump)");

//=========

    // d echo "<br/>";

    // d $string1 = "Deriyana";
    // d $string2 = "(menggunakan variable terpisah)";
    // d echo $string1 . ' ' . $string2;

//=========
    // d echo 12 + 8 . "\n"; //integer

    // d echo "12" + 8; //string

//ket:
    // d $x = 3;
    // d $y = 3;

    // d $hasilxy = $x * $y;
    // d echo "hasil kali 3 x 3 = " . $hasilxy;

//====
    // d echo "\n";
    // d echo 25 + 5;
    // d echo "\n";
    // d echo 25 - 5;
    // d echo "\n";
    // d echo 25 * 5;
    // d echo "\n";
    // d echo 25 / 5;
    // d echo "\n";
    // d echo 25 % 5; //modulus untuk mencari nilai akhir apakah ada sisa atau tidak
    // d echo "\n";

//=====
// biasanya untuk menggunakan tag HTML pada logic
    // d $a = "deriyana";
    // d $a .= "(gunakan . untuk menghubungkan)";
    // d $a .= "sambungan lagi";
    // d $a .= "<p>sambungan lagi</p>";
    // d $a .= "</div>";

    // d echo $a;

//=====

//Boolean true / false 1/0

    // d var_dump(1=="1"); // true - karena hanya membandingkan value
    // d v   // d ar_dump(1==-"1");// false - karena membandingkan juga tipe datanya

//=====

// Operator logica && (and ) ||  or ! not

/**
 * Operator Logica
 * && (and)
 * || (or)
 * ! (not)
 * > (more than)
 * < (less than)
 * == (equal)
 * >= (more than and equal)
 * <= ( less more than and equal)
 * != (not equal)
 */

    //D $umur = 17;

    //D var_dump($umur  > 20 && $umur >= 16);

// $nama = "T.G"
 //var_dump($nama =="TG");

$nama = "Deriyana";
$umur = "34";
$birthday = "15-12-1990"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba php</title>
</head>
<body>
    <ul>
        <li>Nama : <?php echo $nama; ?></li>
        <li>Umur : <?php echo $umur; ?></li>
        <li>Tanggal Lahir : <?php echo $birthday; ?></li>
        <li>5 x 5 adalah : <?php echo 5 * 5; ?></li>
</ul>
</body>
</html>
