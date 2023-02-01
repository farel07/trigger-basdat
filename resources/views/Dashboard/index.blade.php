@extends('app')
@section('title', "Dashboard")
@section('title-header', "Dashboard")

@section('konten')

<div class="row">
    <div class="col-xl-4 col-md-4 mb4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Member</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $username }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4 mb4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Komputer</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $unit }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa fa-desktop fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-4 mb4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Pembooking</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $booking }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection