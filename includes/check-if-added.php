<?php

//This code checks if the course is added to list. 
function check_if_added_to_cart($crs_id) {
    $con = mysqli_connect("localhost", "root", "", "attainment")or die($mysqli_error($con));
 // connecting to the database
    $user_id = $_SESSION['id']; //We'll get the user_id from the session
    
    // We will select all the entries from the user_items table where the item_id is equal to the item_id we passed to this function, user_id is equal to the user_id in the session and status is 'Added to cart'
    
    $query = "SELECT * FROM st_crs WHERE crs_id='$crs_id' AND st_id ='$user_id' and status='Added To List' ";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
function check_if_enrolled($crs_id){
    $con = mysqli_connect("localhost", "root", "", "attainment")or die($mysqli_error($con));
 // connecting to the database
   $user_id = $_SESSION['id']; //We'll get the user_id from the session    // We will select all the entries from the user_items table where the item_id is equal to the item_id we passed to this function, user_id is equal to the user_id in the session and status is 'Added to cart'
    
    $query = "SELECT * FROM st_crs WHERE crs_id='$crs_id' AND st_id ='$user_id' and status='Enrolled' ";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
// We'll check if the no.of rows in the result and no.of rows returned by the mysqli_num_rows($result) is true. If yes then it return 0 else it returns 0
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>