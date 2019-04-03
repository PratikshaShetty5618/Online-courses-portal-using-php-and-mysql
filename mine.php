<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<title> Attainment  | Home </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	
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
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['id'];
                        $query = "SELECT courses.st_date AS sd,courses.end_date AS ed, courses.course_id AS crs_id, courses.course_name AS Name FROM st_crs JOIN courses ON st_crs.crs_id = courses.course_id WHERE st_crs.st_id='$user_id' and status='Enrolled'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Course Number</th>
                                    <th>Course Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    $id = $row["crs_id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["crs_id"] . "</td><td>" . $row["Name"] . "</td><td> " . $row["sd"] . "</td><td> " . $row['ed'] . "</td><td><a href='mine-detail.php?id={$row['crs_id']}'> Go To Course </a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Enrol to the courses first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
     
    </body>
</html>