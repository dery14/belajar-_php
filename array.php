<?php
// cara lama
$arr1 = array("senin", "selasa", "Rabu");

// cara baru
$arr2 = array("senin", "selasa", "Rabu");

// echo hanya bekerja untuk string/int
// var_dump () print_r

// var_dump($arr1);
// echo "<br/>";
// print_r($arr2);
// echo "<br/>";
// echo $arr2[1];

for($i = 0; $i < count($arr2); $i++){
    echo $arr2[$i]. "<br/>";

}
echo "<br/>";
// cara 2 
foreach($arr2 as $arr1){
    echo $arr1 . "<br/>";
}




?>