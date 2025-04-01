@extends('website.layout.structure')

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Our Delicious Dairy Mithai</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Services</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Our Traditional Dairy Mithai Services</h1>
                    <p class="font-weight-light mb-4">Indulge in the finest dairy sweets that bring the authentic taste of tradition right to your doorstep. We offer a wide variety of mithai (sweets) made with love and the finest ingredients.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <!-- Service 1 - Gajar Halwa -->
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ url('website/img/service-1.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Gajar Halwa</h5>
                                <p>Our Gajar Halwa is made with the finest carrots, full-fat milk, and ghee, cooked to perfection. A true delight for all sweet lovers.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <!-- Service 2 - Gulab Jamun -->
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ url('website/img/service-2.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Gulab Jamun</h5>
                                <p>Soft, warm, and soaked in sugar syrup, our Gulab Jamun is the perfect treat for any occasion.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <!-- Service 3 - Rasgulla -->
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ url('website/img/service-3.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Rasgulla</h5>
                                <p>Our Rasgullas are made with fresh chhena, a perfect balance of sweetness, and a smooth texture that melts in your mouth.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <!-- Service 4 - Kalakand -->
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ url('website/img/service-4.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Kalakand</h5>
                                <p>Made with pure milk and sugar, Kalakand is a rich, creamy delicacy that’s a must-try for any mithai lover.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                        <!-- Service 5 - Kheer -->
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="{{ url('website/img/service-5.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Kheer</h5>
                                <p>Our Kheer is made with fragrant basmati rice, full-fat milk, and cardamom, topped with slivers of almonds and pistachios for a royal touch.</p>
                                <a href="" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">What Our Customers Say</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"The best dairy mithai I have ever tasted! Each bite is pure bliss. Highly recommend the Gajar Halwa and Gulab Jamun."</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ url('website/img/testimonial-1.jpg')}}" alt="">
                            <h5 class="font-weight-bold m-0">Ravi Kumar</h5>
                            <span>Businessman</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"If you want to indulge in traditional sweets with a perfect taste, this is the place. Their Rasgulla is a dream!"</h4>
                            <img class="img-fluid mx-auto mb-3" src="{{ url('website/img/testimonial-2.jpg')}}" alt="">
                            <h5 class="font-weight-bold m-0">Anjali Sharma</h5>
                            <span>Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection
