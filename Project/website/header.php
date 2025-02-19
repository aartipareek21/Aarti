<?php

function active($current_page){
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);  
    if($current_page == $url){
        echo 'active'; //class name in CSS 
    } 
}
?>

<!DOCTYPE html>
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

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Customized Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo {
            font-size: 48px;
            font-weight: 700;
            color: #2c3e50;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
        }

        .highlight {
            color: #3498db;
        }

        .icon {
            font-size: 60px;
            color: #3498db;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .navbar {
            background-color: #2980b9;
            border-radius: 10px;
            padding: 0.8rem 1rem;
        }

        .navbar a {
            color: white !important;
            padding: 10px 20px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #1c4e80;
            border-radius: 30px;
        }

        .navbar .nav-link {
            font-size: 1rem;
            margin-right: 1rem;
            transition: color 0.3s ease;
        }

        .btn-info {
            background-color: #3498db;
            border-color: #3498db;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-info:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-dark {
            background-color: #2c3e50;
            border-color: #2c3e50;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
        }

        .btn-dark:hover {
            background-color: #1a242f;
            border-color: #1a242f;
        }

        /* Dropdown styles */
        .navbar .nav-item.dropdown .dropdown-menu {
            background-color: #2980b9;
            border-radius: 10px;
        }

        .dropdown-item {
            color: white !important;
        }

        .dropdown-item:hover {
            background-color: #1c4e80;
        }

        .navbar-toggler {
            border: 1px solid #fff;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Profile Section */
        .profile-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-section i {
            font-size: 2rem;
            color: #3498db;
        }

        .profile-section h6 {
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
        }

        .profile-section a {
            color: inherit;
            text-decoration: none;
        }

        .profile-section a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2">
        <div class="row align-items-center px-xl-5">
            <div class="col-lg-6">
                <a href="index.php" class="text-decoration-none">
                    <div class="logo-container">
                        <i class="fas fa-lightbulb icon"></i> <!-- Lightbulb icon -->
                        <div class="logo">
                            IT<span class="highlight">Knowledge</span>Hub
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12 text-right">
                <div class="d-inline-flex align-items-center">
                    <?php
                    if(isset($_SESSION['userid'])) {
                    ?>
                    <a href="profile" class="profile-section">
                        <i class="fa fa-2x fa-user text-primary mr-3"></i>
                        <h6 class="font-weight-semi-bold mb-1">Hi, <?php echo $_SESSION['username']; ?> / My Account</h6>
                    </a>
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
        <div class="row border-top px-xl-12">


            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light py-3">
                    <a href="index.php" class="d-block d-lg-none">
                        <h1 class="m-0" style="color: #2980b9;">IT KNOWLEDGE HUB</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index" class="nav-item nav-link active">Home</a>
                            <a href="about" class="nav-item nav-link">About</a>
                            <a href="course" class="nav-item nav-link">Courses</a>
                            
                             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Interview_preparation">Interview Preparations</a>
                            <a class="dropdown-item" href="career_path.php">Career Paths</a>
                            <a class="dropdown-item" href="community.php">Industry News</a>
                        </div>
                    </li>
                            <a href="contact" class="nav-item nav-link">Contact</a>
                        </div>
                        
                        <?php
                        if(isset($_SESSION['userid'])) {
                        ?>
                            <a class="btn btn-dark py-2 px-4 ml-auto d-none d-lg-block" href="userlogout">Logout</a>
                        <?php
                        } else {
                        ?>
                            <a class="btn btn-info py-2 px-4 ml-auto d-none d-lg-block" href="login">Join Now</a>
                        <?php
                        }
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Include Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<!-- Include Bootstrap JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>

</body>
</html>
