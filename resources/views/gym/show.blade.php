@extends('layouts.user-layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pb-4" style="background-color: rgb(0,0,0,0.9); padding: 0px  40px ;">
        <!-- Content Header (Page header) -->
        <section class="content-header pt-5">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 text-white">
                        <h1>Show </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h6 class="d-inline-block d-sm-none">gym Name</h6>
                            <img class="img-fluid" 
                            style="border-radius: 100%" src="{{ asset($singleGym->cover_image) }}">
                        </div>
                        <div class="col-12 col-sm-6 d-flex  align-items-center" style="display: flex; gap: 20px">
                            <div>
                                <p class="my-3">Id:</p>
                                <p class="my-3">Name:</p>
                                <p class="my-3">City:</p>
                                <p class="my-3">Date:</p>
                            </div>
                            <div>
                                <p class="my-3">{{ $singleGym->id }}</p>
                                <p class="my-3">{{ $singleGym->name }}</p>

                                @if ($singleGym->city == null)
                                    <p class="my-3">this gym has no city</p>
                                @else
                                    <p class="my-3">{{ $singleGym->city->name }}</p>
                                @endif
                                <p class="my-3">{{ $singleGym->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
