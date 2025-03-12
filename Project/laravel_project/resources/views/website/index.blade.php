@extends('website.layout.structure')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('website/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Authentic & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Traditional Mithai Since 1950</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ url('website/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Authentic & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">Made With Pure Desi Ghee</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Authentic & Delicious Mithai Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Bringing joy with every bite, our sweets are crafted with love and tradition.</h5>
                    <p>From the finest ingredients to time-tested recipes, we create sweets that celebrate every occasion. Enjoy our range of Mithai made with purity and perfection.</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ url('website/img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Specialties</h4>
                    <p>Enjoy a variety of traditional sweets, handcrafted with love and the finest ingredients.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Pure Desi Ghee Sweets</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Handmade with Love</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Perfect for Every Occasion</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ url('website/img/promotion.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">₹299</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Delicious Kaju Katli</h3>
                    <p class="text-white mb-4">Savor the rich taste of our premium Kaju Katli, made with the finest cashews and pure ghee.</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->

@endsection
