@extends('admin.layout.structure')

@section('content')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">edit Categories</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">edit Categories</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <form method="POST" action="{{ url('/update_categories/'.$data->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <!-- Category Name -->
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <input type="text" class="form-control p-4" name="cate_name" id="cate_name" placeholder="Category Name" required />
                </div>
            </div>

            <!-- Description -->
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <input type="text" name="description" class="form-control p-4" id="description" placeholder="Category Description" required />
                </div>
            </div>

            <!-- Image Upload -->
            <div class="form-row mb-4">
                <div class="col-sm-12">
                    <input type="file" class="form-control p-4" id="img" name="img" required />
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-row">
                <div class="col-sm-12">
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit" name="add_category">save</button>
                </div>
            </div>
        </div>
    </form>

@endsection
