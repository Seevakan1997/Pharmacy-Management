@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Dashboard</span>
@endsection


@section('connect')
    <div class="row">
        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card border-danger">
                <div class="card-body">
                    <h5 class="card-title">New Prescription</h5>
                    <p class="card-text">New Prescription</p>
                </div>
                <div class="card-footer text-center font-weight-bold bg-danger">
                    <a href="{{ url('precribtion-list') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card border-info">
                <div class="card-body">
                    <h5 class="card-title">Total Customers</h5>
                    <p class="card-text">Total Customers</p>
                </div>
                <div class="card-footer text-center font-weight-bold bg-info">
                    <a href="{{ url('customers') }}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Accept Prescription</h5>
                    <p class="card-text">Accept Prescription</p>
                </div>
                <div class="card-footer text-center font-weight-bold bg-success">
                    <a href="{{ url('accept') }}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-lg-3">
        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title">Pending Prescription</h5>
                    <p class="card-text">Pending Prescription</p>
                </div>
                <div class="card-footer text-center font-weight-bold bg-warning">
                    <a href="{{ url('pending') }}" class="text-dark"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card" style="border-color: #e67e22">
                <div class="card-body">
                    <h5 class="card-title">Reject Prescription</h5>
                    <p class="card-text">Reject Prescription</p>
                </div>
                <div class="card-footer text-center font-weight-bold" style="background-color: #e67e22">
                    <a href="{{ url('reject') }}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card" style="border-color:#2980b9">
                <div class="card-body">
                    <h5 class="card-title">Total Medicines</h5>
                    <p class="card-text">Total Medicines</p>
                </div>
                <div class="card-footer text-center font-weight-bold" style="background-color: #2980b9">
                    <a href="{{ url('medicine-list') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
