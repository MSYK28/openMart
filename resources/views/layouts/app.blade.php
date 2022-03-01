<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Abidas</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- Abidas --}}
                    <img src="/assets/images/img/logo.png" alt="logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        @auth
                
                        <li><a href="{{ url('/admin/dashboard/') }}">Admin</a></li>
                       
                        @endauth
                        <li><a href="{{ url('/shop') }}">Shop</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>

                        @if(\Cart::getcontent()->count() > 0)

                        <li>
                            <a href="{{ route('cart.cart') }}">
                                <i style="font-size:20px" class='bx bx-cart'></i>

                                Cart <span class="badge badge-warning">{{ \Cart::getcontent()->count() }}</span>

                            </a>
                        </li>
                        @endif
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Sign up for newsletter</h4>
                <p>Get Email updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="assets/images/img/logo.png" alt="">
                <h4>Contact</h4>
                <p>
                    <strong>Address: </strong>
                    Strathmore University, Ole Sangale Link Road, Nairobi, P. O. BOX 41362,Kenya
                </p>
                <p>
                    <strong>Phone: </strong>
                    +254 (7)111 222 333
                </p>
                <p>
                    <strong>Hours: </strong>
                    Mon - Fri : 8:00 am - 17:00 pm
                </p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icon">
                        <i class='bx bxl-meta'></i>
                        <i class='bx bxl-instagram'></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-youtube'></i>
                        <i class='bx bxl-linkedin'></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="{{ url('/about') }}">About us</a>
                <a href="#">Delivery Information</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="{{ url('/contact') }}">Contact Us</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="{{ url('/login') }}">Sign In</a>
                <a href="{{ url('/register') }}">Sign Up</a>
                <a href="{{ url('/cart') }}">Cart</a>
                <a href="{{ url('/wishlist') }}">My Wishlist</a>
                <a href="{{ url('/items') }}">Track My Order</a>
                <a href="{{ url('/contact') }}">Help</a>
            </div>

            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play</p>
                <div class="row">
                    <img src="assets/images/img/pay/app.jpg" alt="">
                    <img src="assets/images/img/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="assets/images/img/pay/pay.png" alt="">
            </div>

            <div class="copyright">
                <p>2022, ABIDAS ECOMMERCE, HP LAB - STRATHMORE UNIVERSITY</p>
            </div>
        </footer>
    </div>
    @yield('scripts')
</body>

<script src="{{ asset('js/script.js') }}" defer></script>

</html>
