@extends('admin.layout.structure')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Manage Orders</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Manage Orders</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Orders</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <a href="add_orders" class="btn btn-primary float-right mb-2">Add Orders</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id#</th>
                                    <th>Product Id</th>
                                    <th>User Id</th>
                                    <th>Quantity</th>
                                    <th>Total Ammount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($data as $d) 
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->prod_id}}</td>
                                    <td>{{$d->user_id}}</td>
                                    <td>{{$d->qty}}</td>
                                    <td>{{$d->total_ammount}}</td>
                                    <td>
                                        <a href="edit_categories" class="btn btn-primary">Edit</a>
                                        <a href="delete_categories" class="btn btn-primary">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection