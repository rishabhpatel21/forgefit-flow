@extends('layouts.user-layout')
@section('content')
    <div class="content-wrapper   " style="background-color: rgb(0,0,0,0.9); padding: 0px 40px 4px 40px ;  ">
        <div class="container-fluid  pt-5" style="">
            <div class="row">
                {{-- # ======================================= # Total Revenue # ======================================= # --}}
                
                @role('admin|cityManager|gymManager')
                    <div class="col-lg-3 col-6 radi  ">
                        <div class="small-box bg-white  " style="">
                            <div class="inner  text-info">
                                <h3
                                style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $revenueInDollars }}</h3>
                                <p
                                style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 130px; padding:0px 8px; border-radius: 20px  ">Total Revenue</p>
                            </div>
                            <div class="icon ">
                                <i class="fas fa-dollar-sign text-info " style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                            </div>
                        </div>
                    </div>
                @endrole
                {{-- # ======================================= # Cities # ======================================= # --}}
                @role('admin')
                    <div class="col-lg-3 col-6">
                        <a href="{{ route('city.list') }}">
                            <div class="small-box bg-white">
                                <div class="inner text-success">
                                    <h3
                                    style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $cities }}</h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 63px; padding:0px 8px; border-radius: 20px  "
                                    >Cities</p>
                                </div>
                                <div class="icon ">
                                    <i class="fas fa-city text-success" style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- # ======================================= # Cities Managers # ======================================= # --}}
                    <div class="col-lg-3 col-6">
                        <a href="{{ route('cityManager.list') }}">
                            <div class="small-box bg-white">
                                <div class="inner text-secondary">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $citiesManagers }}<sup style="font-size: 20px"></sup></h3>
                                    <p 
                                    style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 145px; padding:0px 8px; border-radius: 20px  ">Cities Managers</p>
                                </div>
                                <div class="icon">
                                    {{-- <i class="fas fa-user-tie"></i> --}}
                                    <i class="fas fa-user-tie text-secondary" style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endrole
                {{-- # ======================================= # Gyms # ======================================= # --}}
                @role('admin|cityManager')
                    <div class="col-lg-3 col-6">
                        <a href="{{ route('gym.list') }}">
                            <div class="small-box bg-white">
                                <div class="inner text-danger">
                                    <h3
                                    style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $gyms }}</h3>
                                    <p
                                    style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 62px; padding:0px 8px; border-radius: 20px  ">Gyms</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dumbbell text-danger" style="font-size: 50px !important;text-shadow: 2px 4px 4px #c6c6c6; ""></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- # ======================================= # Gyms Managers # ======================================= # --}}
                    <div class="col-lg-3 col-6">

                        <a href="{{ route('gymManager.list') }}">
                            <div class="small-box bg-white">
                                <div class="inner text-warning">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $gymsManagers }}<sup style="font-size: 20px"></sup></h3>
                                    <p 
                                    style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6;  width: 143px; padding:0px 8px; border-radius: 20px  ">Gyms Managers</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user text-warning" style="font-size: 50px !important;text-shadow: 1px 3px 4px #c6c6c6;"></i>


                                </div>
                            </div>
                        </a>
                    </div>
                @endrole
                {{-- # ======================================= # Coaches # ======================================= # --}}
                @role('admin|cityManager|gymManager')
                    <div class="col-lg-3 col-6">
                        <a href="{{ route('coach.list') }}">
                            <div class="small-box bg-light">
                                <div class="inner text-dark">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $coaches }}<sup style="font-size: 20px"></sup></h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6;  width: 83px; padding:0px 8px; border-radius: 20px ">Coaches</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-ninja text-dark" style="font-size: 50px !important; text-shadow: 1px 3px 4px #c6c6c6;"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- # ======================================= # Users # ======================================= # --}}
                    <div class="col-lg-3 col-6" >
                        <a href="{{ route('allUsers.list') }}">
                            <div class="small-box bg-white " >
                                <div class="inner text-primary" >
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $users }}</h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6;  width: 62px; padding:0px 8px; border-radius: 20px  ">Users</p>
                                </div>
                                <div class="icon " >
                                    <i class="fas fa-users text-primary" style="font-size: 50px !important ; text-shadow: 1px 3px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </a>
                    </div>
                @endrole
                {{-- # ======================================= # if login Coaches  # ======================================= # --}}
                <div class="row justify-content-center">
                    @role('coach')
                        @foreach ($trainingSessions as $session)
                            <div class="col-lg-3 col-6 card mx-2">
                                <div class="card-header border-0 text-center font-weight-bold">{{ $session->name }}</div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                        <p class="d-flex flex-column text-center font-weight-bold">
                                            Starts at
                                            <span class="text-muted">{{ $session->starts_at }}</span>
                                        </p>
                                        <p class="d-flex flex-column text-center font-weight-bold">
                                            End AT
                                            <span class="text-muted">{{ $session->finishes_at }}</span>
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center mb-0">
                                        {{ $session->day }}</div>
                                </div>
                            </div>
                        @endforeach
                    @endrole
                </div>
            </div>
        </div>
    </div>
@endsection
