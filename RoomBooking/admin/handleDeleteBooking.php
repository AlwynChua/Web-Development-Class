<?php

$bookid = $_POST['booking'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'room_booking';

$connection = new mysqli($servername, $username, $password, $database);

$delete_row = $connection->query("DELETE from user_booking WHERE id = $bookid");

if($delete_row){
    echo"Deleted Booking";
    header('Location: deleteBooking.php');
}else{
    $connection->error;
}

?>
