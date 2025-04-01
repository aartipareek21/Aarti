@extends('website.layout.structure')

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Signup</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Signup</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Signup Form Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Signup For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5 shadow-sm">
                        <form method="post" action="{{ url('/insert_signup') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group mb-3">
                                    <input type="text" name="name" class="form-control p-4" id="name" placeholder="Your Name" />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-6 control-group mb-3">
                                    <input type="email" name="email" class="form-control p-4" id="email" placeholder="Your Email" />
                                </div>
                                <div class="col-sm-6 control-group mb-3">
                                    <input type="password" name="password" class="form-control p-4" id="password" placeholder="Your Password" />
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-sm-12 control-group">
                                    <label class="form-label">Gender:</label><br>
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender" value="Male" id="male" class="mr-2">
                                    <label for="female">Female</label>
                                    <input type="radio" name="gender" value="Female" id="female" class="mr-2">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-sm-12 control-group">
                                    <label class="form-label">Languages Known:</label><br>
                                    <label for="hindi">Hindi</label>
                                    <input type="checkbox" name="lag[]" value="Hindi" id="hindi" class="mr-2">
                                    <label for="english">English</label>
                                    <input type="checkbox" name="lag[]" value="English" id="english" class="mr-2">
                                    <label for="gujarati">Gujarati</label>
                                    <input type="checkbox" name="lag[]" value="Gujarati" id="gujarati" class="mr-2">
                                </div>
                            </div>

                            <div class="form-row mb-3">
                                <div class="col-sm-12 control-group">
                                    <input type="file" name="img" class="form-control p-4" id="img" />
                                </div>
                            </div>

                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>

                            <div class="form-row mt-3">
                                <div class="col-sm-12 control-group text-center">
                                    <a href="login">Already Registered? Login Here</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup Form End -->
@endsection
