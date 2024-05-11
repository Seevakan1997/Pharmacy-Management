@extends('Layout.app')

@section('register')
    <div class="d-flex align-items-center justify-content-center"
        style="background-image: url('image/pharmacy-bg2.jpg'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-lg-4 col-lg-8 mx-auto mt-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>REGISTRATION</h2>
                            <span>Already have an account? <a href="{{ url('login') }}">Login Here</a></span>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Full Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name='email' value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Date of Birth <span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                        name='dob' value="{{ old('dob') }}">
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Mobile no</label>
                                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>

                                <div class="mb-3">
                                    <label for="Address" class="form-label">Address</label>
                                    <textarea class="form-control @error('address') is-invalid @enderror" id="Address" rows="3" name="address"></textarea>
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree terms and
                                        conditions</label>
                                </div>

                                <div class="text-center">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-external-link mr-1"
                                            aria-hidden="true"></i> Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="margin-bottom: 50px;"></div>

                </div>
            </div>
        </div>
    @endsection
