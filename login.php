<?php
    
    require 'fungsi.php';

    ///  variable super global
    if(isset($_POST["login"])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

        if(mysqli_num_rows($query) == 1){
            $user = mysqli_fetch_assoc($query);

            if(password_verify($password, $user['password'])){
                $_SESSION['login'] = true;
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header("Location: index.php");
                exit;

            


            }else{
                echo "<script>alert('Username tidak ditemukan');</script";



            }



        }

    }
    ?>




<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
</head>
<body>

<h1>LOGIN</h1>

<form method="post">
    Username <br>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>






    