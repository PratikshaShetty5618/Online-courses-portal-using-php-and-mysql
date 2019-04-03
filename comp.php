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
    color: red;
    text-decoration: none;
}

/* visited link */
a:visited {
    color: white;
    text-decoration: none;
}

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
                                <img src="images/cs.jpg" style="max-width: 100%" >
                                
                                <div class="caption">
                                    <h4>Web Development </h4>
                            <h4>Fees: Rs.1000 </h4>
                            
                            
                            <?php 
                            if (!isset($_SESSION['email'])) { 
                                ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-success btn-block"> Enrol Me </a></p>                                 
                                
                                <?php                             
                                
                            } 
                            else 
                                {                                 
                                //We have created a function to check whether this particular product is added to cart or not.                                 
                                if (check_if_added_to_cart(1)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added To List</a>';                                 
                                        
                                    } 
                                    else if (check_if_enrolled(1)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Enrolled</a>';                                 
                                        
                                    } 
                                else {                                     ?>                                     
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-success">Enroll Me</a>                                     
                                <?php                                 
                                
                                }                             
                                
                                }                            
                                ?> 
                                </div></div></div>
                        <div  class="col-xs-6">
                            <center><h1><u> Web Development</u></h1></center>
                            <h3>Blaaab Blaab Blaab Blaaaaaaaaaaaaaaaaab Blaaaaaaaaaaab Blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaap</h3>
                        </div>
                    </div>
        <div class="row">
                        <div class="col-xs-5">
                            <div class="thumbnail">
                                <img src="images/cs.jpg" style="max-width: 100%" >
                                <div class="caption">
                                     <h4>Database Management </h4>
                            <h4>Fees: Rs.500 </h4>
                            <?php 
                            if (!isset($_SESSION['email'])) { 
                                ?>                                 
                            <p><a href="login.php" role="button" class="btn btn-success btn-block"> Enrol Me </a></p>                                 
                                
                                <?php                             
                                
                            } 
                            else 
                                {                                 
                                //We have created a function to check whether this particular product is added to cart or not.                                 
                                if (check_if_added_to_cart(2)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                      
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added To List</a>';                                 
                                        
                                    } 
                                    else if (check_if_enrolled(2)) 
                                    { 
                                        //This is same as if(check_if_added_to_cart != 0)                                     
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Enrolled</a>';                                 
                                        
                                    } 
                                else {                                     ?>                                     
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-success">Enroll Me</a>                                     
                                <?php                                 
                                
                                }                             
                                
                                }                            
                                ?> 
                            
                            
                            
                                </div></div></div>
                        <div  class="col-xs-6">
                            <center><h1><u> Database Management System</u></h1></center>
                            <h3>Blaaab Blaab Blaab Blaaaaaaaaaaaaaaaaab Blaaaaaaaaaaab Blaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaap</h3>
                        </div>
                    </div>
        </div>
