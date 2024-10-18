<?php
session_start(); // untuk memulai sesi 
var_dump($_SESSION);

$user = 
[
  'admin1' => 'password123',
  'user1' => 'password321',
];

    
    if(isset($_POST['submit_login'])){

        // ini ambil data dari super globalvariable $_POST
        $username = $_POST['txt_username'];
        $password = $_POST['txt_password'];
    
        if(isset($user[$username]) && $user[$username] === $password){
            // kondisi true
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        }else{
            // kondidi false

            $arr="password atau username salah";
        }
    
    }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
<?php if(isset($arr)):?>
<p style="color: red margin-bottom: 16px;"><?= $arr; ?></p>
<?php endif;?>

<form method="POST">
    <div style= "margin_button: 16px;">
        <table style="margin-bottom: 8px; display=block">User name </table>
        <input type="text" name="txt_username" placeholder="user_name"/>
    </div>
    <br>
    <div style= "margin_button: 16px;">
        <table>Password</table>
        <input type="password" name="txt_password" placeholder="password"/>
    </div>
    <br>
    <div>
        <button type="submit" name="submit_login">Submit</button>
    </div>
</form>
</body>
</html>