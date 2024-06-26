@extends('Layout.app')

@section('login')
    <div class="banner d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto mt-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>LOGIN</h2>
                            <span class="text-muted">Don't have an account? <a href="{{ url('register') }}">Register
                                    Here</a></span>
                        </div>
                        <div class="card-body">
                            @if (Session::has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ Session::get('error') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <form action="{{ url('authenticate') }}" method="POST" autocomplete="off">
                                @csrf
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email Address" name='email' value="{{ old('email') }}">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remenber">
                                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success form-control"><i
                                            class="fa fa-unlock-alt mr-3" aria-hidden="true"></i> Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
