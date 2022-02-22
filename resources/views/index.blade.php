@extends('layouts.app')

@section('content')

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABIDAS</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<body> --}}

    <section id="header">
        

        {{-- <div>
            <ul id="navbar">
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li>
                </li>
                <li>
                    <a href="{{ url('/cart') }}">
                        <i class='bx bx-shopping-bag'></i>
                    </a>
                </li>
            </ul>
        </div> --}}
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On all Products</h1>
        <p>Use coupons for up to 70% off</p>
        <button onclick="location.href='{{ url('shop') }}'">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="/assets/images/img/features/f1.png" alt="">
            <h6>Free shipping</h6>
        </div>
        <div class="fe-box">
            <img src="/assets/images/img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="/assets/images/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="/assets/images/img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="/assets/images/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="/assets/images/img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>New Summer Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="/assets/images/img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off </span> on New Arrivals & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>New Modern Designs</p>
        <div class="pro-container">
            <div class="pro">
                <img src="/assets/images/img/products/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>

            <div class="pro">
                <img src="/assets/images/img/products/n8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <h4>Ksh. 780</h4>
                </div>
                <a href=""><i class='bx bx-cart-alt cart'></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at Cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcoming season</h2>
            <span>The best classic dress is on sale at Cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection 50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New trendy prints</h3>
        </div>
    </section>

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
            <img src="assets/images/img/logo.png" alt="">
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

    <script src="{{ asset('js/script.js') }}"></script>
@endsection

{{-- </body>

</html> --}}
