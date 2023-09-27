<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <style>
    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(9959.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.6);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    color: #fafafa;
    margin-bottom: 30px;
    text-align: center;
    text-transform: uppercase;
    border-bottom: 4px solid #2979ff;
}
.container label{
    text-align: left;
    color: #90caf9;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff; 
    color: #fff;
    font-size: 20px;
}
.container input[type="submit"]{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
    </style>
</style>
<body>
<?php
function cekLogin($username, $password) {
    if ($username === 'admin' && $password === 'mimin') {
        return true;
    } else {
        return false;
    }
}

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (cekLogin($username, $password)) {
        header('Location: function5.php');
        exit;
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
<div class="container">
          <h1>Login</h1>
            <form method="post">
                <label>Username</label><br>
                <input type="text" id="username" name="username" required><br><br>
                <label>Password</label><br>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Login">
            </form>
        </div>    
</body>
</html>




