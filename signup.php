<?php
    require "includes/common.php";
 ?>   
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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


        <style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: yellowgreen;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}


/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
    </head>
    <body>
       
            
        <?php 
    include "includes/header.php";
    ?>
            <br><br>
            
            <form action="signup_script.php" method="post">
                <div class="container" >
                    <h1><b>Register<b></h1>
                                <p><b>Please fill in this form to create an account.<b></p>
    <hr>

                            <?php if(isset($_GET['email_error'])==1)
                            {
                                echo "<br><br><span> ******Enter Valid Details*******</span><br><br>";
                            } ?>
                        
                            <label for="name"><b>Name</b></label>
                            <input type="text"   required="true" placeholder="Name" name="name" >
                        
                            
                            
                            <label for="course"><b>Course</b></label><br>
                            <select name="course" style="font-size: 20px;">
                                <option  value="comp" style="background-color: whitesmoke;">Computer Engg</option>
                                <option value="it" style="background-color: whitesmoke;">IT</option>
                                <option value="civil" style="background-color: whitesmoke;">Civil Engg</option>
                                <option value="mech" style="background-color: whitesmoke;">Mechanical Engg</option>

                            </select> 
                            <br><br>
                            
                            <label for="year"><b>Year</b></label><br>
                            <select name="year" style="font-size: 20px;">
                                <option  value="F.E" style="background-color: whitesmoke;">F.E</option>
                                <option value="S.E" style="background-color: whitesmoke;">S.E</option>
                                <option value="T.E" style="background-color: whitesmoke;">T.E</option>
                                <option value="B.E" style="background-color: whitesmoke;">B.E</option>

                            </select>   
                            <br><br>
                        
                            <label for="clg"><b>College Name</b></label>
                            <input type="text"   name="clg" placeholder="Enter College Name">
                        
                            <label for="mob_no"><b>Mobile Number</b></label>
                            <input type="text"   name="mob_no" placeholder="Enter Mobile Number">
                        
                            <label for="email"><b></b></label>
                            <input type="text"   name="email" placeholder="Email">
                        
                            <label for="password"><b>Password</b></label>
                            <input type="password"  required="true" name="password" placeholder="Password" >
                      
                            <input type="submit" value="Submit" class="btn btn-primary">
                        
    <hr>
    

    
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>


         <?php
                    include "includes/footer.php";
                    ?> 
    </body>
    

</html>