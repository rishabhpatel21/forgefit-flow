@extends('layouts.user-layout')
@section('content')
    <div class="content-wrapper pb-4 " style="background-color: rgb(0,0,0,0.9); padding: 0px  40px  ;">
        <div class="container-fluid pt-5" style=" ">
            <div class="row align-self-center d-flex">
                <div class="col-md-6">
                    <div class="row">
                        {{-- # ======================================= # Total Revenue # ======================================= # --}}
                        <div class="col-12">
                            <div class="small-box bg-white">
                                <div class="inner text-info">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $revenueInDollars }}</h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 145px; padding:0px 8px; border-radius: 20px  ">Total Revenue</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dollar-sign text-info" style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </div>
                        {{-- # ======================================= # Gyms # ======================================= # --}}
                        <div class="col-6">
                            {{-- <a href="{{ route('gym.list') }}"> --}}
                            <div class="small-box bg-white">
                                <div class="inner text-danger">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $gyms }}</h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 145px; padding:0px 8px; border-radius: 20px  ">Gyms</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-dumbbell text-danger" style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                            {{-- </a> --}}
                        </div>
                        {{-- # ======================================= # Gyms Managers # ======================================= # --}}
                        <div class="col-6">
                            <div class="small-box bg-white ">
                                <div class="inner text-warning" style="">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $gymsManagers }}<sup style="font-size: 20px ;  "></sup></h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 145px; padding:0px 8px; border-radius: 20px  ">Gyms Managers</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user text-warning " style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </div>
                        {{-- # ======================================= # Coaches # ======================================= # --}}
                        <div class="col-6">
                            {{-- <a href="{{ route('coach.list') }}"> --}}
                                <div class="small-box bg-white">
                                    <div class="inner text-success">
                                        <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $coaches }}<sup style="font-size: 20px"></sup></h3>
                                        <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6; width: 85px; padding:0px 8px; border-radius: 20px  ">Coaches</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-ninja text-success" style="font-size: 50px !important ; text-shadow: 2px 4px 4px #c6c6c6; "></i>
                                    </div>
                                </div>
                            {{-- </a> --}}
                        </div>
                        {{-- # ======================================= # Users # ======================================= # --}}
                        <div class="col-6">
                            <div class="small-box bg-white">
                                <div class="inner text-dark">
                                    <h3 style="text-shadow: 0px 3px 3px #c6c6c6;">{{ $users }}</h3>
                                    <p style="font-weight: 600 ; box-shadow: 0px 4px 8px #c6c6c6;  width: 62px; padding:0px 8px; border-radius: 20px  ">Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users text-dark" style="font-size: 50px !important ; text-shadow: 1px 3px 4px #c6c6c6; "></i>
                                </div>
                            </div>
                        </div>
                        {{-- # ======================================= # Cities Managers # ======================================= # --}}
                    </div>
                </div>
                <div class="col-6  small-box media text-center bg-white "  >
                    <div >
                        <div class="inner p-2" >
                            @if ($citiesManagers == null)
                                <figure class="mt-5">
                                    <i class="fas fa-user-tie" style="font-size: 100px !important"></i>
                                    <h3>This city have no city manager <sup style="font-size: 20px"></sup></h3>
                                </figure>
                            @else
                                <figure class="mt-3" style="">
                                    <img alt="Avatar"  src="{{ $citiesManagers->profile_image }}"
                                        style=" vertical-align: middle;width: 150px; height: 150px;border-radius: 50%;border-style: outset;border-width:5px;  border-color: rgb(182, 148, 197)">
                                </figure>
                                <h3>ID = {{ $citiesManagers->id }} <sup style="font-size: 20px"></sup></h3>
                                <h3>{{ $citiesManagers->name }} <sup style="font-size: 20px"></sup></h3>
                                <h3>{{ $citiesManagers->email }} <sup style="font-size: 10px"></sup></h3>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
