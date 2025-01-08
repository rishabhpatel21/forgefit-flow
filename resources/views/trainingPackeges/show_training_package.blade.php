@extends('layouts.user-layout')
@section('content')
    <div class="content-wrapper pb-4" 
    style="background-color: rgb(0,0,0,0.9); padding: 0px  40px ;">
        <div class="container-fluid pt-5">
            <div class="row align-self-center d-flex">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="small-box bg-white">
                                <div class="inner text-info">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $package->name }}</h3>
                                    <p  style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 60px; padding:0px 8px; border-radius: 20px  ">Name</p>
                                </div>
                                <div class="icon">
                                    <i class="fas text-white" style="font-size: 50px !important"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            {{-- <a href="{{ route('gym.list') }}"> --}}
                            <div class="small-box bg-white">
                                <div class="inner text-danger">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $package->price }}</h3>
                                    <p
                                    style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 60px; padding:0px 8px; border-radius: 20px  ">Price</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dumbbell text-danger" style="font-size: 50px !important; text-shadow: 2px 4px 4px #c6c6c6;"></i>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div>
                        <div class="col-6">
                            <div class="small-box bg-white">
                                <div class="inner text-warning">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $package->sessions_number }} <sup style="font-size: 20px"></sup></h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 155px; padding:0px 8px; border-radius: 20px  ">Sessions Number</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user text-warning" style="font-size: 50px !important; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
