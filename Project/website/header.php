<?php

function active($currect_page){
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
	  $url = end($url_array);  
	  if($currect_page == $url){
		  echo 'active'; //class name in css 
	  } 
	}
?>
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IT KNOWLEDGE HUB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IT Knowledge Hub - Your Gateway to an IT Career" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* General styles */
        

    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2">
        <div class="row align-items-center px-xl-5">
            <div class="col-lg-6">
                <a href="index.php" class="text-decoration-none">
                <h1 class="logo">
            <span class="highlight-lightblue">IT</span>
            <span class="neutral">KNOWLEDGE</span>
            <span class="highlight-darkblue">HUB</span>
        </h1>
                </a>
            </div>
            <div class="col-lg-6 text-right">
                <!-- Search Bar -->
               
                
                <!-- <a href="login" class="btn btn-outline-dark ml-3">Join</a> -->
            </div>
			 <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
				<?php
					if(isset($_SESSION['customer_id']))
					{
					?>
                    <i class="fa fa-2x fa-user text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">
							<?php echo $_SESSION['first_name']?>
						</h6>
                    </div>
					<?php	
					}
					?>
						
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="d-flex align-items-center justify-content-between bg-light w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px; color: #2980b9;">
                    <h5 class="m-0"><i class="fa fa-book-open mr-2"></i>Resources</h5>
                    <i class="fa fa-angle-down"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                    <div class="navbar-nav w-100">
                        <a href="programming.php" class="nav-item nav-link">Programming Languages</a>
                        <a href="career.php" class="nav-item nav-link">Career Paths</a>
                        <a href="resources.php" class="nav-item nav-link">Learning Resources</a>
                        <a href="market.php" class="nav-item nav-link">Market Insights</a>
                        <a href="community.php" class="nav-item nav-link">Community & Forums</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg navbar-light py-3">
                    <a href="index.php" class="d-block d-lg-none">
                        <h1 class="m-0" style="color: #2980b9;">IT KNOWLEDGE HUB</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index" class="nav-item nav-link">Home</a>
                            <a href="about" class="nav-item nav-link">About</a>
                            <a href="course" class="nav-item nav-link">Courses</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu m-0">
                                    <a href="blog" class="dropdown-item">Blog List</a>
                                    <a href="single.php" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div>
                            <a href="contact" class="nav-item nav-link">Contact</a>
                        </div>
                        
						<?php
						if(isset($_SESSION['customer_id']))
						{
						?>
							<a class="btn btn-dark py-2 px-4 ml-auto d-none d-lg-block" href="userlogout">Logout</a>
						<?php
						}
						else
						{
						?>
							<a class="btn btn-dark py-2 px-4 ml-auto d-none d-lg-block" href="login">Join Now</a>
						<?php
						}
						?>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
</body>
</html>
