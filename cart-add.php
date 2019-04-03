<?php
require("includes/common.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $crs_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $query = "INSERT INTO st_crs(st_id,crs_id, status) VALUES('$user_id', '$crs_id', 'Added To List')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: cart.php');
}
?>   