@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<x-allert/>
<div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-m font-weight-bold text-primary text-uppercase mb-1">
                            Users</div>
                        <div class="h5 mb-1 font-weight-bold text-gray-800">{{ $totalUser }}</div>
                        <a href="{{ route('adminusers.index') }}" class="text-s font-weight-bold">Details</a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-m font-weight-bold text-success text-uppercase mb-1">
                            Heroes</div>
                        <div class="h5 mb-1 font-weight-bold text-gray-800">{{ $totalHero }}</div>
                        <a href="{{ route('adminheroes.index') }}" class="text-s font-weight-bold">Details</a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-m font-weight-bold text-info text-uppercase mb-1">
                            Items
                        </div>
                        <div class="h5 mb-1 mr-3 font-weight-bold text-gray-800">511</div>
                        <a href="" class="text-s font-weight-bold">Details</a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-puzzle-piece fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-m font-weight-bold text-warning text-uppercase mb-1">
                            Skills
                        </div>
                        <div class="h5 mb-1 font-weight-bold text-gray-800">600</div>
                        <a href="" class="text-s font-weight-bold">Details</a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-cubes fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection