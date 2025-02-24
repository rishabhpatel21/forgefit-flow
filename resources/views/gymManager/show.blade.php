@extends('layouts.user-layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: rgb(0,0,0,0.9);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6  text-white" style="padding: 0px 0px 0px 100px"">
                    <h4>Show Gym Manager Number {{$singleUser->id}}</h4>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content" style="padding: 30px 100px">

        <!-- Default box -->
        <div class="card">

            <div class="card-body p-0">
                <table class="table table-striped projects" >
                <thead>
                        <tr>
                            <th>ID</th>
                            <th> Gym Manager Name</th>
                            <th>Email</th>
                            <th>Profile Picture</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                            <td>{{$singleUser->id}}</td>
                            <td>{{$singleUser->name}} </td>
                            <td>{{$singleUser->email}} </td>
                            <td><img alt="Avatar" class="table-avatar" src="{{$singleUser->profile_image}}"></td>
                        </tr>
                    </tbody>
                    <tbody>

                       
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
</div>
<!-- /.content-wrapper -->
@endsection

