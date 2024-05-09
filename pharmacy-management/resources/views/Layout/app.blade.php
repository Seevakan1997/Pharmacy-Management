<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <Link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #007bff;">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="../image/logo.png" alt="" width="40" height="30" loading="lazy"
                        class="d-inline-block align-top">
                    <span class="text-white">Phar<span class="text-danger">macy</span></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('login') }}" class="nav-link text-white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('register') }}" class="nav-link text-white">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">

        @yield('login')

        @yield('register')

    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>

</html>
