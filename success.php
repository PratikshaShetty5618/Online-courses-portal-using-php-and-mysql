<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['crsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE st_crs SET status='Enrolled' WHERE st_id=" . $user_id . " AND crs_id IN (" . $item_ids_string . ") and status='Added to List'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">You are enrolled successfully. Thank you for choosing us for learning. Hope to provide you with best of the learning.</h3><hr>
                      <p align="center">Click <a href="courses.php">here</a> to enrol to any other course.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>