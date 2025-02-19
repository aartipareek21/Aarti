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
/*            background: url('img/about4.jpg') no-repeat center center;*/
            background-size: cover;
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        .section-title {
            font-size: 3rem; /* Bigger font size */
            color: #333;
            text-transform: uppercase;
            margin-bottom: 1rem;
            letter-spacing: 2px;
            text-align: center;
            font-weight: bold;
        }

        .lead {
            font-size: 1.5rem; /* Larger text for readability */
            line-height: 1.8;
            color: #555;
            text-align: justify;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            color: #fff;
            font-size: 1.2rem;
            padding: 12px 24px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }

        .team-member h4 {
            margin-top: 1rem;
            font-size: 1.5rem; /* Larger name font */
            color: #333;
        }

        .team-member p {
            font-size: 1.2rem; /* Larger role font */
            color: #777;
        }

        .testimonial-carousel {
            display: flex;
            overflow-x: auto;
            gap: 2rem;
        }

        .testimonial-carousel div {
            min-width: 300px;
            padding: 1.5rem;
            background: #f9f9f9;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .testimonial-carousel img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

<div class="container-fluid login-section">
    <h1 style="font-size: 4rem;">About Us</h1> <!-- Larger font for About Us header -->
</div>

<!-- About Start -->
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
<!-- About End -->

<!-- Vision Section -->
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

<!-- Team Section -->
<div class="container py-5 bg-light">
    <div class="text-center">
        <h2 class="section-title">Meet Our Team</h2>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-3 text-center team-member">
            <img src="img/team-1.jpg" alt="Team Member">
            <h4>Alex Johnson</h4>
            <p>Founder & CEO</p>
        </div>
        <div class="col-lg-3 text-center team-member">
            <img src="img/team-2.jpg" alt="Team Member">
            <h4>Emily Davis</h4>
            <p>Chief Technology Officer</p>
        </div>
        <div class="col-lg-3 text-center team-member">
            <img src="img/team-3.jpg" alt="Team Member">
            <h4>Michael Smith</h4>
            <p>Lead Educator</p>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<div class="container py-5">
    <div class="text-center">
        <h2 class="section-title">What Our Students Say</h2>
    </div>
    <div class="testimonial-carousel mt-5">
        <div>
            <i class="fa fa-quote-left text-primary mb-4"></i>
            <p>"The resources at IT Knowledge Hub are top-notch. I transitioned into IT with ease and confidence!"</p>
            <img src="img/testimonial-1.jpg" alt="Student Testimonial">
            <h5>John Doe</h5>
            <span>Software Developer</span>
        </div>
        <div>
            <i class="fa fa-quote-left text-primary mb-4"></i>
            <p>"A fantastic platform that helped me learn programming from scratch. Highly recommend!"</p>
            <img src="img/testimonial-2.jpg" alt="Student Testimonial">
            <h5>Jane Smith</h5>
            <span>Web Designer</span>
        </div>
        <div>
            <i class="fa fa-quote-left text-primary mb-4"></i>
            <p>"IT Knowledge Hub's resources are easy to follow and very practical. Perfect for beginners!"</p>
            <img src="img/testimonial-3.jpg" alt="Student Testimonial">
            <h5>Robert Brown</h5>
            <span>Data Analyst</span>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="container-fluid bg-primary py-5 text-white text-center">
    <h2>Start Your IT Journey Today!</h2>
    <p>Join thousands of learners who have transformed their careers with IT Knowledge Hub. Sign up now and unlock your potential!</p>
    <a href="signup.php" class="btn btn-dark btn-lg mt-3">Get Started</a>
</div>

<?php
include_once('footer.php');
?>
