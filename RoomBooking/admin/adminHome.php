<?php
require 'admin_config.php';
if (!empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Homepage</title>
        <link rel="stylesheet" href="css/adminHome.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <!--navigation-->
        <nav style="background-color: linen">
            <!corner logo>
            <a href="adminHome.php" style="color: black; text-decoration: none;">
                Welcome, <?php print $row['name']; ?>
            </a>

            <!--menu-->
            <ul class="menu">
                <li><a href="adminHome.php" style="text-decoration: none;">Home</a></li>
                <li><a href="adminContact.php" style="text-decoration: none;">Users' Feedback</a></li>
            </ul>

            <div class="search">
                <a href="adminLogout.php" style="color: red; text-decoration: none;">Log out</a>
            </div>
        </nav>

        <section class="movies-heading" style="margin-top: 100px;">

        </section>

        <section id="movie-list">
            <!--box 1-->
            <div class="movies-box">
                <a href="viewUsers.php" style="text-decoration: none;">
                    View All Users
                </a>
            </div>
            <!--box 2-->
            <div class="movies-box">
                <a href="deleteUsers.php" style="text-decoration: none;">
                    Delete Users
                </a>
            </div>
            <!--box 3-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="viewAllBooking.php" style="text-decoration: none;">
                    View User Bookings
                </a>
            </div>
            <!--box 4-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="deleteBooking.php" style="text-decoration: none;">
                    Delete User Bookings
                </a>
            </div>
        </section>

        <section id="movie-list" style="margin-top: 100px;">

            <!--box 5-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="addUpdateRoom.php" style="text-decoration: none;">
                    Add/Update Rooms
                </a>
            </div>
            <!--box 6-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="deleteRoom.php" style="text-decoration: none;">
                    Delete Rooms
                </a>
            </div>
            <!--box 7-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="addUpdateCategory.php" style="text-decoration: none;">
                    Add/Update Room Categories
                </a>
            </div>
            <!--box 8-->
            <div class="movies-box">
                <!--Movie Name-->
                <a href="deleteCategory.php" style="text-decoration: none;">
                    Delete Room Categories
                </a>
            </div>
        </section>


    </body>

</html>