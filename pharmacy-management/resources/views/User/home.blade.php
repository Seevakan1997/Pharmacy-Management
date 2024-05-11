<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/user-home.css">
</head>

<body>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid font-weight-bold">
                <a href="#" class="navbar-brand d-lg-block ms-5">
                    <img src="../image/pharmacy-logo.png" alt="" width="40" height="30" loading="lazy"
                        class="d-inline-block align-top">
                    <span class="text-info fw-bold">Phar<span class="text-success">macy</span></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if (Auth::user()->user_image)
                                    <img src="{{ asset(Auth::user()->user_image) }}" alt="" width="30"
                                        height="30" loading="lazy" class="d-inine-block rounded-circle">
                                @else
                                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt=""
                                        width="30" height="30" loading="lazy" class="d-inine-block">
                                @endif
                                {{ Auth::user()->name }}

                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ url('user-profile') }}">My Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-2 bg-light border-right" style="min-height: 100vh">
                <div class="row border-bottom mb-4 mt-4 bg-white">
                    <div class="col-12 text-center">
                        <img src="../image/dashboard-img.jpg" width="160px" height="60px" alt=""
                            class="rounded img-fluid">
                    </div>
                </div>

                <div class="navigation-links">
                    <div class="row bg-white mt-4">
                        <a href="{{ url('user-dashboard') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-tachometer mr-2" aria-hidden="true"></i> Dashboard
                        </a>
                        <a href="{{ url('upload-prescription') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-upload mr-2" aria-hidden="true"></i> Upload Prescription
                        </a>
                        <a href="{{ url('prescription-history') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-history mr-2" aria-hidden="true"></i> Prescription History
                        </a>
                    </div>

                    <div class="row border-bottom bg-white border-top mt-4">
                        <a href="{{ url('prepared-quotation') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold">
                            <i class="fa fa-history mr-2" aria-hidden="true"></i> Prepared Quotation
                        </a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center">
                        <a href="{{ url('logout') }}" class="btn btn-danger w-75 font-weight-bold">Logout</a>
                    </div>
                </div>
            </div>


            <div class="col-10">
                <div class="row mt-3 px-3 mb-3">
                    <div class="col-12 shadow-sm p-3 bg-body rounded">
                        @yield('bar')
                    </div>
                </div>
                @yield('connect')

            </div>
        </div>
    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
