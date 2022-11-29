<?php

$userid = $_POST['users'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'room_booking';

$connection = new mysqli($servername, $username, $password, $database);

$delete_row = $connection->query("DELETE from users WHERE id = $userid");

if($delete_row){
    echo"Deleted User";
    header('Location: deleteUsers.php');
}else{
    $connection->error;
}

?>
