<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pengkondisian</title>
</head>
<body>
  <?php 
  // if-else
  // if-else if-else
  // ternary
  // switch
  
  
$umur = 16;
//   if($umur == 20){
//     echo "umur kurang dari 20";
//   }else if ($umur < 20){
//     // true apabila kondisi pertama tidak terpenuhi
//     echo "umur sama dengan 20"; 
//   }else{
//     // false
//     echo "umur lebih dari 30";
//   }
// tenary
// echo($umur < 30 ? "umur kurang dari 30"  : "umur lebih dari 30");

// switch
switch($umur){
    case 15:
    case 16:
    case 17:
    case 18:
    case 19:
        
        echo "Umur dibawah 20 di atas 14";
        break;
        case 20:
        echo "Umur 20";
        break;
        default:
        echo "umur tidak didefinisikan ";



}
  
  ?>
</body>
</html>