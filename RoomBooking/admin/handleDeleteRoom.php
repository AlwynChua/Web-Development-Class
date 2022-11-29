<?php

$roomid = $_POST['room'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'room_booking';

$connection = new mysqli($servername, $username, $password, $database);

$delete_row = $connection->query("DELETE from rooms WHERE id = $roomid");

if($delete_row){
    echo"Deleted Booking";
    header('Location: deleteRoom.php');
}else{
    $connection->error;
}

?>


