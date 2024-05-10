<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <Link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .banner {
            background-image: url('image/pharmacy-bg2.jpg');
            background-size: cover;
            background-position: center;
            height: 600px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="../image/pharmacy-logo.png" alt="" width="40" height="30" loading="lazy"
                        class="d-inline-block align-top">
                    <span class="text-info fw-bold">Phar<span class="text-success">macy</span></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('login') }}" class="nav-link text-black">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('register') }}" class="nav-link text-black">Register</a>
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
<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5>About Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in velit sit amet nisi convallis
                    tincidunt et sit amet magna.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li>123 Main Street, City</li>
                    <li>Email: example@example.com</li>
                    <li>Phone: +1234567890</li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Follow Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-white"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i
                                class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-white"><i
                                class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="navbar-brand">
                    <img src="../image/pharmacy-logo.png" alt="" width="40" height="30" loading="lazy"
                        class="d-inline-block align-top">
                    <span class="text-info fw-bold">Phar<span class="text-success">macy</span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p>&copy; 2024 Pharmacy. All rights reserved.</p>
    </div>
</footer>

</html>
