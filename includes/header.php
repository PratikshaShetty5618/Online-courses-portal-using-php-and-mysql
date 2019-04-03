<!-- header -->
	<section class="w3layouts-header py-2">
	<div class="container">
        <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">                 
                <span class="icon-bar" style="color:ghostwhite"></span>                 
                <span class="icon-bar" style="color:ghostwhite"></span>                 
                <span class="icon-bar" style="color:ghostwhite"></span>                                     
            </button>  
                    <h1>
                        <a class="navbar-brand" href="index.php">
                          Attainment    
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            
                                <?php                 
                                if (!isset($_SESSION['email'])) { ?>
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item dropdown mr-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Contacts
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">0250-2513998</a>
                                    <a class="dropdown-item" href="#">0250-2513997</a>
                                </div>
                            </li>
                           				 <li class="nav-item  mr-3">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            
							 <li class="nav-item  mr-3">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                                
                                                         </li>
                                                         <?php } else { ?>
                                                         
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="index.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
			
                            
                            <li class="nav-item dropdown mr-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Contacts
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">0250-2513998</a>
                                    <a class="dropdown-item" href="#">0250-2513997</a>
                                </div>
                            </li>
                           				 <li class="nav-item  mr-3">
                                <a class="nav-link" href="mine.php">My Courses</a>
                            </li>
                           
							 <li class="nav-item  mr-3">
                                <a class="nav-link" href="cart.php">WishList</a>
                                
                                                         </li>
                                                         <li class="nav-item  mr-3">
                                <a class="nav-link" href="logout.php">Logout</a>
                                
                                                         </li>
                                                         
                                                         <?php } ?>
                        </ul>
                    </div>
                </nav>
        </header>
        <!-- //header -->
		</div>
	</section>
	<!-- //header -->