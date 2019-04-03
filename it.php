<?php require 'includes/common.php'; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<title> Attainment  | Home </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<link rel="stylesheet" href="Assign2.css" type="text/css">
        <link rel="stylesheet" href="Bootstrap/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="Bootstrap\bootstrap\js\bootstrap.min.js"></script>
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="css/JiSlider.css" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
 <style>
            /* unvisited link */
a:link {
    color: wheathite;
    text-decoration: none;
}

/* visited link */


/* mouse over link */
a:hover {
    color: hotpink;
    text-decoration: underline;
}

/* selected link */
a:active {
    color: blue;
    text-decoration: underline;
}

        </style>
</head>

    <body>
         <?php include 'includes/header.php'; 
         include "includes/check-if-added.php"; 
         ?>
        <br><br><br><br><br>
        <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="thumbnail">
                                <img src="images/g4.jpg" style="max-width: 100%" >
                                
                                <div class="caption">
                                    <h4> Software Development </h4>
                            <h4>Fees: Rs.2000 </h4>
                            
                            <?php 
                            if (!isset($_SESSION['email'])) { 
                                ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-success btn-block"> Enrol Me </a></p>                                 
                                
                                <?php                             
                                
                            } 
                            else 
                                {                                 
                                //We have created a function to check whether this particular product is added to cart or not.                                 
                                if (check_if_added_to_cart(3)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added To List</a>';                                 
                                        
                                    } 
                                    else if (check_if_enrolled(3)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Enrolled</a>';                                 
                                        
                                    } 
                                else {                                     ?>                                     
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-success">Enroll Me</a>                                     
                                <?php                                 
                                
                                }                             
                                
                                }                            
                                ?> 
                                </div></div></div>
                        <div  class="col-xs-6">
                            <center><h1><u> Software Development</u></h1></center>
                            <h3>Blaaab Blaab Blaab Blaaaaaaaaaaaaaaaaab Blaaaaaaaaaaab Blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaap</h3>
                        </div>
                    </div>
        <div class="row">
                        <div class="col-xs-5">
                            <div class="thumbnail">
                                <img src="images/g5.jpg" style="max-width: 100%" >
                                <div class="caption">
                                    <h4>Internet of Things </h4>
                            <h4>Fees: Rs.1499 </h4>
                            <?php 
                            if (!isset($_SESSION['email'])) { 
                                ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-success btn-block"> Enrol Me </a></p>                                 
                                
                                <?php                             
                                
                            } 
                            else 
                                {                                 
                                //We have created a function to check whether this particular product is added to cart or not.                                 
                                if (check_if_added_to_cart(4)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                      
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added To List</a>';                                 
                                        
                                    } 
                                    else if (check_if_enrolled(4)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Enrolled</a>';                                 
                                        
                                    } 
                                else {                                     ?>                                     
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-success">Enroll Me</a>                                     
                                <?php                                 
                                
                                }                             
                                
                                }                            
                                ?> 
                            
                            
                            
                                </div></div></div>
                        <div  class="col-xs-6">
                            <center><h1><u> Internet of Things </u></h1></center>
                            <h3>Blaaab Blaab Blaab Blaaaaaaaaaaaaaaaaab Blaaaaaaaaaaab Blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaap</h3>
                        </div>
                    </div>
        </div>
