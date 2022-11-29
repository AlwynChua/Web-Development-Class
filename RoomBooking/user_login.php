<?php
require 'config.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' ");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header('Location: loggedhome.php');
        } else {
            print "<script> alert('Wrong Password!'); </script>";
        }
    } else {
        print "<script> alert('User not found!'); </script>";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>The Blitz-Carlson</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/login.css"/>
        <script src="https://kit.fontawesome.com/8bbe2c347b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="login-box">

            <h1>Login</h1>

            <form action="" method="post" autocomplete="off">
                <div class="textbox">
                    <i class="fa-solid fa-user"></i>
                    <input type="email" name="email" placeholder="Email" required/>
                </div>

                <div class="textbox">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password"/ required>
                </div>

                <input class="btn" type="submit" name="submit" value="Sign in"/>
            </form>

            <a href="user_register.php">
                <button class="btn">Register an Account</button>
            </a>

        </div>
    </body>
</html>
