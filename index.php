<?php
    require "includes/common.php";
?>

<!DOCTYPE html>
<html lang="zxx">

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
	<?php    include 'includes/header.php'; ?>
	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
                                                            <h3>Convenience of Time</h3>
                                                            <p>The best place to study as per your schedule.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>Best knowledge</h3>
                        <p>Provides in depth overview of the available courses.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Certification</h3>
                        <p>Provides acknowledgement of the courses undertaken.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main bg-white">
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-clock pr-3" aria-hidden="true"></span> OPENING HOURS</h3>
								<p class="mt-3 pl-5">Monday - Friday 09.00 - 18.00</p>
								<p class="pl-5">Saturday 09.00 - 14.00</p>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-phone pr-3" aria-hidden="true"></span> CALL US ANYTIME</h3>
								<p class="mt-3 pl-5">5-222-434-7923</p>
								<p class="pl-5">5-222-434-7924</p>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
								<h3 class="mt-3"><span class="fas fa-envelope pr-3" aria-hidden="true"></span> EMAIL US</h3>
								<p class="mt-3 pl-5">Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								<p class="pl-5">Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
						</div>
				</div>
			</div>
		</section>
                <!-- //banner bottom --><br>
	<!-- courses -->
	<section class="wthree-row w3-about  py-5">
		<div class="container py-md-4 mt-md-3">
                    <h3 class="heading-agileinfo">CHOOSE YOUR COURSE <span>Providing Higher Education</span></h3><br><br><br><br>
			<div class="container">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="thumbnail">
                                <img src="images/cs.jpg">
                                <div class="caption">
                                    <h4><a href="comp.php">Computer Engg</a></h4>
                                </div></div></div>
                        <div class="col-xs-3">
                            <div class="thumbnail">
                                <img src="images/g7.jpg" style="height:194px;">
                                <div class="caption">
                                    <h4><a href="it.php">IT Engg</a></h4>
                                </div>  </div></div>
                        <div class="col-xs-3">
                            <div class="thumbnail">
                                <img src="images/me.jpg" style="height:194px; ">
                                <div class="caption">
                                    <h4><a href="mech.php">Mechanical Engg</a></h4>
                                </div></div></div>
                        <div class="col-xs-3">
                            <div class="thumbnail">
                                <img src="images/ce.jpg" style="height:194px; width:194px;">
                                <div class="caption">
                                    <h4><a href="civil.php.php">Civil Engg</a></h4>
                                </div></div></div>
                    </div>
                </div>
            
            			
                </div>
        </section>
<!-- //courses -->
	
<!-- categories --><br><br>
	<section class="categories_agile py-5">
		<div class="container py-md-4 mt-md-3">
                    <h3 class="heading-agileinfo">Categories <span>Providing Higher Education</span></h3><br><br><br><br>
			<div class="row categories-top mt-md-5 pt-5">
				<div class="col-md-4 categories-left1">
				</div>
				<div class="col-md-8 categories-left">
					<div class="row">
						<div class="col-md-6 col-sm-6 categories_sub cats">
							<div class="categories_sub1">
								<h3 class="mt-3">TEACHING</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub1">
								<h3 class="mt-3"> CLASSES</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub1">
								<h3 class="mt-3">AFFORDABLE</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 categories_sub cats1">
							<div class="categories_sub2">
								<h3 class="mt-3">CERTIFICATION</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub2">
								<h3 class="mt-3">MATERIALS</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
							<div class="categories_sub2">
								<h3 class="mt-3">TEACHING</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //categories -->

            

        <?php    include 'includes/footer.php'; ?>
	
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="js/JiSlider.js"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="js/bootstrap.js"></script>
</body>

</html>