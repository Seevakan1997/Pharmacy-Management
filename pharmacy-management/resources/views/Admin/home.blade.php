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
        <nav class="navbar navbar-expand navbar-light " style="background-color: #e3f2fd;">
            <div class="container-fluid font-weight-bold">
                <a href="#" class="navbar-brand d-lg-block ms-5">
                    <img src="../image/pharmacy-logo.png" alt="" width="40" height="30" loading="lazy"
                        class="d-inline-block align-top">
                    <span class="text-info fw-bold">Phar<span class="text-success">macy</span></span>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt=""
                                    width="30" height="30" loading="lazy" class="d-inline-block">

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


                <div>
                    <div class="row bg-white mt-4">
                        <a href="{{ url('admin-dashboard') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold"><i class="fa fa-tachometer mr-2"
                                aria-hidden="true"></i> Dashboard</a>

                        <a href="{{ url('sales') }}" class="btn border-bottom col-12 text-left font-weight-bold"><i
                                class="fa fa-money mr-2" aria-hidden="true"></i> Sales</a>

                        <a href="{{ url('customers') }}" class="btn border-bottom col-12 text-left font-weight-bold"><i
                                class="fa fa-users mr-2" aria-hidden="true"></i> Customers</a>

                        <a href="{{ url('medicine-list') }}"
                            class="btn border-bottom col-12 text-left font-weight-bold"><i class="fa fa-list-alt mr-2"
                                aria-hidden="true"></i> Medicine List</a>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col text-center mt-5 ">
                        <a href="{{ url('logout') }}" class="btn btn-danger w-100 mt-5 font-weight-bold">Logout</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="row mt-3 px-3 mb-3">
                    <div class="col-12 p-3 bg-light">
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
