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
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best IT Knowledge Website</h5>
                            <h1 class="display-3 text-white mb-md-4">Let Begin Your IT Career</h1>
                            <a href="signup.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>  
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">Make a Future In IT</h1>
                            <a href="signup.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg" style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">Best Online Courses</h5>
                            <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                            <a href="signup.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
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
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                        <h2 class="text-dark">About IT Knowledge Hub</h2>
                <p class="lead text-dark">IT Knowledge Hub is designed to guide beginners and non-IT professionals towards building a successful career in the IT industry. With easy-to-follow tutorials, detailed career paths, and up-to-date market insights, you’ll have everything you need to make informed decisions about your future in tech.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
	


   <!-- Featured Programming Languages Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="mb-5 text-dark">Featured Programming Languages</h2>
            </div>

            <!-- Language Cards -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-code fa-3x text-cyan mb-3"></i><
                        <h4>PHP</h4>
                        <p>Learn how to build dynamic websites and applications with PHP, one of the most popular server-side languages.</p>
                        <a href="php.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fab fa-python fa-3x text-cyan mb-3"></i>
                        <h4>Python</h4>
                        <p>Python is known for its simplicity and versatility. Explore web development, data science, and automation.</p>
                        <a href="python.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fab fa-js fa-3x text-cyan mb-3"></i>
                        <h4>JavaScript</h4>
                        <p>Master JavaScript and learn how to build interactive and responsive web applications for users worldwide.</p>
                        <a href="javascript.php" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Programming Languages End -->

    <!-- Career Paths Section Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-5 text-dark">Explore Career Paths in IT</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4 class="text-dark">Web Development</h4>
                        <p>Learn the ins and outs of web development and become a professional full-stack developer.</p>
                        <a href="webdev.php" class="btn btn-outline-primary">Explore Path</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4 class="text-dark">Data Science</h4>
                        <p>Understand the power of data and how it drives business decisions across industries.</p>
                        <a href="datascience.php" class="btn btn-outline-primary">Explore Path</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h4 class="text-dark">Cybersecurity</h4>
                        <p>Protect networks, systems, and data from cyberattacks in this critical field of IT.</p>
                        <a href="cybersecurity.php" class="btn btn-outline-primary">Explore Path</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Career Paths Section End -->

    <!-- Testimonials Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="text-dark">What Our Users Say</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial bg-light p-4 text-center">
                    <p class="text-dark">"IT Knowledge Hub helped me transition into a full-time IT career. The resources are amazing!"</p>
                    <h5 class="text-dark">- Jane Doe</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial bg-light p-4 text-center">
                    <p class="text-dark">"The detailed career paths and tutorials guided me every step of the way. Highly recommended!"</p>
                    <h5 class="text-dark">- John Smith</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial bg-light p-4 text-center">
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
            <h2 class="text-dark">Latest Blog Posts</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/blog-1.jpg" class="card-img-top" alt="Blog Post 1">
                    <div class="card-body">
                        <h5 class="card-title text-dark">How to Choose the Right Programming Language</h5>
                        <p class="card-text">Learn how to pick the perfect language based on your career goals.</p>
                        <a href="blog-post-1.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
			
            <div class="col-md-4">
                <div class="card">
                    <img src="img/blog-2.jpg" class="card-img-top" alt="Blog Post 2">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Top IT Careers in 2024</h5>
                        <p class="card-text">Explore the most in-demand IT jobs and how to start your career in them.</p>
                        <a href="blog-post-2.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
			
            <div class="col-md-4">
                <div class="card">
                    <img src="img/blog-3.jpg" class="card-img-top" alt="Blog Post 3">
                    <div class="card-body">
                        <h5 class="card-title text-dark">The Future of Cybersecurity</h5>
                        <p class="card-text">Understand how cybersecurity is evolving and why it matters more than ever.</p>
                        <a href="blog-post-3.php" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
           
            
        </div>
    </div>
   <?php
   include_once('footer.php');
   ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>