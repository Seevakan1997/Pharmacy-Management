@extends('user.home')

@section('bar')
    <span class="text-muted float-right">Home / Prescription</span>
@endsection

@section('connect')
    <div class="col-8 mt-3 mx-auto">
        <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="font-weight-bold">Prescription</span>
                <a href="{{ url('user-dashboard') }}" class="btn btn-primary float-right">Back</a>
            </div>

            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" value="" name="user_id" hidden>
                    </div>

                    <div class="form-group">
                        <label for="">Note</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Delivery Address</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Upload Image - 01</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Upload Image - 02</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Upload Image - 03</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">Upload Image - 04</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="">Upload Image - 05</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">submit</button>
                        <button type="reset" class="btn btn-danger">reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
