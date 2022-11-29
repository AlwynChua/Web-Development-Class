<?php

$categoryid = $_POST['category'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'room_booking';

$connection = new mysqli($servername, $username, $password, $database);

$delete_row = $connection->query("DELETE from categories WHERE id = $categoryid");

if($delete_row){
    echo"Deleted Category";
    header('Location: deleteCategory.php');
}else{
    $connection->error;
}

?>



