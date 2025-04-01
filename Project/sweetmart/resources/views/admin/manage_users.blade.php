@extends('admin.layout.structure')

@section('content')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Manage Products</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Manage Products</p>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Manage Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Products</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <a href="add_services" class="btn btn-primary float-right mb-2">Add Products</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Lag</th>
                                    <th>Img</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->password }}</td>
                                    <td>{{ $d->gender }}</td>
                                    <td>{{ $d->lag }}</td>
                                    <td>{{ $d->img }}</td>
                                    <td>{{ $d->status }}</td>
                                    <td>{{ $d->created_at }}</td>
                                    <td>{{ $d->updated_at }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{url('userprofile/'.$d->id)}}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                            <a href="{{ url('manage_users/'.$d->id) }}" class="btn btn-primary btn-sm">Delete</a>
                                        </div>
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
<!-- Manage Products End -->
@endsection
