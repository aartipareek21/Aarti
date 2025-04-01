@extends('admin.layout.structure')

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Add Product</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Add Product</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Add Product</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control p-4" name="service_name" id="product_name" placeholder="Product Name" required="required" data-validation-required-message="Please enter Product name" />
                                    <input type="text" class="form-control p-4" name="service_name" id="product_name" placeholder="Product Name" required="required" data-validation-required-message="Please enter Product name" />
                                    <input type="text" class="form-control p-4" name="service_name" id="service_name" placeholder="Service Name" required="required" data-validation-required-message="Please enter Service name" />
                                    <input type="text" class="form-control p-4" name="description" id="description" placeholder="Service description" required="required" data-validation-required-message="Please enter Service description" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-12 control-group">
                                    <input type="text" name="price" class="form-control p-4" id="price" placeholder="Service Price" required="required" data-validation-required-message="Please enter Service Price decscriptions" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control p-4" name="price" id="price" placeholder="Service price" required="required" data-validation-required-message="Please enter Service Price" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="file" class="form-control p-4" id="img" name="img" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" name="submit" id="sendMessageButton">Add Categories</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @endsection