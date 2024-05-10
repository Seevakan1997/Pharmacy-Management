@extends('user.home')

@section('bar')
    <span class="float-right">Home / Dashboard</span>
@endsection

@section('connect')
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Prescriptions</h5>
                    <p class="card-text">20</p>
                </div>
                <div class="card-footer bg-primary text-center font-weight-bold">
                    <a href="{{ url('prescription-history') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Accepted Prescriptions</h5>
                    <p class="card-text">0</p>
                </div>
                <div class="card-footer bg-success text-center font-weight-bold">
                    <a href="#" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card border-danger">
                <div class="card-body">
                    <h5 class="card-title">Rejected Prescriptions</h5>
                    <p class="card-text">6</p>
                </div>
                <div class="card-footer bg-danger text-center font-weight-bold">
                    <a href="#" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card border-warning">
                <div class="card-body">
                    <h5 class="card-title">Prepared Quotations</h5>
                    <p class="card-text">2</p>
                </div>
                <div class="card-footer bg-warning text-center font-weight-bold">
                    <a href="{{ url('prepared-quotation') }}" class="text-dark"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
