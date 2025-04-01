<?php
include_once('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - IT Knowledge Hub</title>
    <meta name="description" content="Learn about IT Knowledge Hub, our mission, vision, and why we are the best platform for IT learning and development.">
    <meta name="keywords" content="IT Knowledge Hub, IT learning, IT resources, programming, technology education">
    <meta name="author" content="IT Knowledge Hub">
    <style>
        .login-section {
            background: url('img/About-Us_1.jpg') no-repeat center center;
            background-size: cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            filter: none; /* Removed blur to make the background clearer */
        }

        .section-title {
            font-size: 3rem;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 1rem;
            letter-spacing: 2px;
            text-align: center;
            font-weight: bold;
        }

        .lead {
            font-size: 1.5rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #2980b9; /* Updated color */
            border: none;
            color: #fff;
            font-size: 1.2rem;
            padding: 12px 24px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #21618c; /* Darker shade for hover effect */
        }
    </style>
</head>
<body>

<div class="container-fluid login-section">
    <h1 style="font-size: 4rem; color:white;">About Us</h1>
</div>

<div class="container py-5">
    <div class="text-center">
        <h1 class="section-title">Welcome to IT Knowledge Hub</h1>
        <p class="lead">Empowering Individuals with Knowledge and Skills to Succeed in the IT World</p>
    </div>
    <div class="row align-items-center mt-5">
        <div class="col-lg-5">
            <img class="img-fluid rounded" src="img/about.jpg" alt="About Us">
        </div>
        <div class="col-lg-7">
            <h2 style="font-size: 2.5rem;">Our Mission</h2>
            <p class="lead">At IT Knowledge Hub, our mission is to make learning IT accessible, enjoyable, and practical for everyone. Whether you are a beginner or a seasoned professional, our platform provides comprehensive resources to support your growth in the tech industry. We strive to foster a community of learners who are inspired to innovate and create.</p>
            <a href="explore.php" class="btn btn-primary mt-3">Explore More</a>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <h2 style="font-size: 2.5rem;">Our Vision</h2>
            <p class="lead">We envision a future where IT knowledge is universally accessible, helping individuals from all walks of life to embrace technology confidently. By equipping people with the right tools and guidance, we aim to build a community of innovators ready to shape the future of the digital world.</p>
            <a href="community.php" class="btn btn-primary mt-3">Join Our Community</a>
        </div>
        <div class="col-lg-5">
            <img class="img-fluid rounded" src="img/vision2.png" alt="Our Vision">
        </div>
    </div>
</div>

<div class="container-fluid" style="padding: 50px; text-align: center;">
    <h2>Start Your IT Journey Today!</h2>
    <p>Join thousands of learners who have transformed their careers with IT Knowledge Hub. Sign up now and unlock your potential!</p>
    <a href="signup.php" class="btn btn-dark btn-lg mt-3">Get Started</a>
</div>

<?php
include_once('footer.php');
?>
