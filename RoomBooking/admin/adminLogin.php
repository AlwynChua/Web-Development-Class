<?php

function authenticate() {
    if ($_SERVER['PHP_AUTH_USER'] !== 'admin' && $_SERVER['PHP_AUTH_PW'] !== 'admin') {
        header("WWW-Authenticate: Basic realm=\"adminpage\"");
        header("HTTP\ 1.0 401 Unauthorized");
        echo 'There was an error';
        exit;
    }
}

authenticate();

require 'admin_config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE name='$name' ");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header('Location: adminHome.php');
        } else {
            print "<script> alert('Wrong Password!'); </script>";
        }
    } else {
        print "<script> alert('Admin not found!'); </script>";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="CSS/adminLogin.css"/>
    </head>
    <body>

        <form action="" method="post">
            <h2>Admin Login</h2>

            <label>User Name</label>
            <input type="text" name="name" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button class="btn" type="submit" name="submit">Login</button>

        </form>


    </body>
</html>
