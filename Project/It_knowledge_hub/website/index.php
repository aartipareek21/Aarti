<?php
include_once('header.php');
?>

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="min-height: 400px;">
                <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-center">
                    <div class="p-5" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 font-weight-bold">Best IT Knowledge Website</h5>
                        <h1 class="display-4 text-white mb-4">Let Begin Your IT Career</h1>
                        <a href="signup.php" class="btn btn-info py-md-3 px-md-5 font-weight-bold mt-3">Learn More</a>
                    </div>
                </div>
            </div>  
            <div class="carousel-item" style="min-height: 400px;">
                <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-center">
                    <div class="p-5" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 font-weight-bold">Best Online Courses</h5>
                        <h1 class="display-4 text-white mb-4">Make a Future In IT</h1>
                        <a href="signup.php" class="btn btn-info py-md-3 px-md-5 font-weight-bold mt-3">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="min-height: 400px;">
                <img class="position-relative w-100" src="img/carousel-3.jpg" style="min-height: 400px; object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-center">
                    <div class="p-5" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 font-weight-bold">Best Online Courses</h5>
                        <h1 class="display-4 text-white mb-4">New Way To Learn From Home</h1>
                        <a href="signup.php" class="btn btn-info py-md-3 px-md-5 font-weight-bold mt-3">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg mb-4 mb-lg-0" src="img/about.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="text-left mb-4">
                    <h5 class="text-info text-uppercase mb-3" style="letter-spacing: 2px;">About Us</h5>
                    <h2 class="text-dark font-weight-bold">About IT Knowledge Hub</h2>
                    <p class="lead text-dark">IT Knowledge Hub is designed to guide beginners and non-IT professionals towards building a successful career in the IT industry. With easy-to-follow tutorials, detailed career paths, and up-to-date market insights, you’ll have everything you need to make informed decisions about your future in tech.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Featured Programming Languages Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-12 text-center mb-5">
            <h2 class="text-dark font-weight-bold">Featured Programming Languages</h2>
        </div>

        <!-- Language Cards -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg border-0">
                <div class="card-body">
                    <i class="fas fa-code fa-3x text-info mb-3"></i>
                    <h4 class="text-dark font-weight-bold">PHP</h4>
                    <p>Learn how to build dynamic websites and applications with PHP, one of the most popular server-side languages.</p>
                    <a href="php.php" class="btn btn-info py-md-2 px-md-4 font-weight-bold">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg border-0">
                <div class="card-body">
                    <i class="fab fa-python fa-3x text-info mb-3"></i>
                    <h4 class="text-dark font-weight-bold">Python</h4>
                    <p>Python is known for its simplicity and versatility. Explore web development, data science, and automation.</p>
                    <a href="python.php" class="btn btn-info py-md-2 px-md-4 font-weight-bold">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg border-0">
                <div class="card-body">
                    <i class="fab fa-js fa-3x text-info mb-3"></i>
                    <h4 class="text-dark font-weight-bold">JavaScript</h4>
                    <p>Master JavaScript and learn how to build interactive and responsive web applications for users worldwide.</p>
                    <a href="javascript.php" class="btn btn-info py-md-2 px-md-4 font-weight-bold">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Programming Languages End -->

<!-- Career Paths Section Start -->
<div class="container-fluid bg-light py-5">
    <div class="container text-center">
        <h2 class="mb-5 text-dark font-weight-bold">Explore Career Paths in IT</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-3 shadow-lg border-0">
                    <h4 class="text-dark font-weight-bold">Web Development</h4>
                    <p>Learn the ins and outs of web development and become a professional full-stack developer.</p>
                    <a href="webdev.php" class="btn btn-outline-info">Explore Path</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 shadow-lg border-0">
                    <h4 class="text-dark font-weight-bold">Data Science</h4>
                    <p>Understand the power of data and how it drives business decisions across industries.</p>
                    <a href="datascience.php" class="btn btn-outline-info">Explore Path</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 shadow-lg border-0">
                    <h4 class="text-dark font-weight-bold">Cybersecurity</h4>
                    <p>Protect networks, systems, and data from cyberattacks in this critical field of IT.</p>
                    <a href="cybersecurity.php" class="btn btn-outline-info">Explore Path</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Career Paths Section End -->

<!-- Testimonials Start -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="text-dark font-weight-bold">What Our Users Say</h2>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="testimonial bg-light p-4 text-center shadow-lg">
                <p class="text-dark">"IT Knowledge Hub helped me transition into a full-time IT career. The resources are amazing!"</p>
                <h5 class="text-dark">- Jane Doe</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="testimonial bg-light p-4 text-center shadow-lg">
                <p class="text-dark">"The detailed career paths and tutorials guided me every step of the way. Highly recommended!"</p>
                <h5 class="text-dark">- John Smith</h5>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="testimonial bg-light p-4 text-center shadow-lg">
                <p class="text-dark">"A perfect resource for beginners. I learned everything I needed to land my first job in IT!"</p>
                <h5 class="text-dark">- Sarah Johnson</h5>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->

<!-- Blog Section Start -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="text-dark font-weight-bold">Latest Blog Posts</h2>
    </div>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <img class="card-img-top" src="img/blog1.jpg" alt="Blog Post 1">
                <div class="card-body">
                    <h5 class="card-title text-dark">How to Start Your IT Career</h5>
                    <p class="card-text">A step-by-step guide for beginners to start their journey in the IT industry.</p>
                    <a href="blog1.php" class="btn btn-outline-info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <img class="card-img-top" src="img/blog2.jpg" alt="Blog Post 2">
                <div class="card-body">
                    <h5 class="card-title text-dark">Top Programming Languages to Learn in 2024</h5>
                    <p class="card-text">Discover the most in-demand programming languages and how to get started.</p>
                    <a href="blog2.php" class="btn btn-outline-info">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <img class="card-img-top" src="img/blog3.jpg" alt="Blog Post 3">
                <div class="card-body">
                    <h5 class="card-title text-dark">Why Cybersecurity is a Growing Field</h5>
                    <p class="card-text">Learn why cybersecurity is becoming one of the most crucial areas in IT today.</p>
                    <a href="blog3.php" class="btn btn-outline-info">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->
<?php
include_once('footer.php');
?>