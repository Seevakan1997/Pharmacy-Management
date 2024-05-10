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
                            <form action="#" method="POST" autocomplete="off">

                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" placeholder="Email Address"
                                            name='email'>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
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
