@extends('layouts.user-layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pb-4" style="background-color: rgb(0,0,0,0.9);">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid"
            style="padding: 0px 0px 0px 190px">
                <div class="row mb-2">
                    <!-- Errors Section -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-sm-6 text-white"">
                        <h1>Create City Manger</h1>
                    </div>
                    <div class="col-sm-6"
                    style="padding: 0px 190px 0px 0px">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">New City Manger</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <form action="{{ route('cityManager.store') }}" method="post" enctype="multipart/form-data"
                class="w-75 m-auto">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Adding</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" required class="form-control" placeholder="Your Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input type="password" required id="pass" class="form-control"
                                        placeholder="Your password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" required id="email" class="form-control" placeholder="your email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="image">Upload Image</label>
                                    <input type="file" class="form-control" id="image" name="profile_image">
                                </div>
                                <div class="  form-group">
                                    <label for="nationalID">National ID</label>
                                    <input type="text" required id="nationalID" class="form-control" name="national_id"
                                        placeholder="The national id must be between 10 and 17 digits.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="#" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
