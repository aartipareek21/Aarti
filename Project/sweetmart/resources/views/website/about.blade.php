@extends('website.layout.structure')

@section('content')

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">About</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">About</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Mithai Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Crafting authentic and premium dairy mithai, blended with tradition and taste.</h5>
                    <p>For decades, we have been bringing the finest quality sweets from the heart of India. Our mithai is handcrafted with the purest ingredients and crafted with generations of expertise. With every bite, we deliver not only the flavor but also a rich cultural experience.</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ url('website/img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Offerings</h4>
                    <p>We provide a wide variety of premium dairy sweets, from traditional classics to modern innovations, ensuring there's a sweet for every palate. Our mithai is carefully crafted to perfection, ensuring that each piece offers an indulgent experience.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Freshly Made from Pure Dairy Ingredients</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Classic and Contemporary Mithai Varieties</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Packaged for Gifting and Special Occasions</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Commitment to Quality Start -->
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Our Commitment to Quality</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="font-weight-bold mb-3">Pure Ingredients</h4>
                    <p>We believe in delivering only the best, which is why we source our ingredients from trusted farms and suppliers. Each ingredient is carefully selected for its quality, ensuring that every mithai is of the highest standard.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Fresh Cow Milk</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Organic Sugar</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Pure Natural Flavors</h5>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-bold mb-3">Traditional Craftsmanship</h4>
                    <p>Our mithai is crafted using age-old techniques that have been passed down through generations. Every piece is prepared with precision and care to ensure a perfect balance of flavor, texture, and aroma.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Handcrafted with Generational Expertise</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Attention to Detail in Every Piece</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Preserving the Authentic Taste of India</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Commitment to Quality End -->

@endsection
