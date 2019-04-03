<?php 
require 'includes/common.php';
?>
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
    color: green;
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
         <?php include 'includes/header.php'; ?>
        <br><br><br><br><br>
<div class="container">
                    <div class="row">
                        <div class="col-xs-5 col-xs-offset-1">
                            <div class="thumbnail">
                                <img src="images/cs.jpg">
                                <div class="caption">
                                    <h4><a href="comp.php">Computer Engg</a></h4>
                                </div></div></div>
                        <div class="col-xs-5 col-xs-offset-1">
                            <div class="thumbnail">
                                <img src="images/ee.jpg">
                                <div class="caption">
                                    <h4><a href="it.php">IT Engg</a></h4>
                                </div>  </div></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5 col-xs-offset-1">
                            <div class="thumbnail">
                                <img src="images/me.jpg" >
                                <div class="caption">
                                    <h4><a href="mech.php">Mechanical Engg</a></h4>
                                </div></div></div>
                        <div class="col-xs-5 col-xs-offset-1">
                            <div class="thumbnail">
                                <img src="images/ce.jpg">
                                <div class="caption">
                                    <h4><a href="civil.php">Civil Engg</a></h4>
                                </div></div></div>
                    </div></div>
</body>
</html>
    