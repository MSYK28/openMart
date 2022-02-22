@extends('layouts.app')

@section('content')
    {{--<section id="header">
         <div>
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
        </div>
    </section>--}}



    <section id="product1" class="section-p1">
        <h2>Meet the Brains Behind</h2>
        <p>The New Generation of Developers</p>
        <div class="pro-container">
            <div class="pro">
                <img src="/assets/images/img/people/p1.jpg" alt="">
                <div class="des">

                    <h5>Jim</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>

                </div>

            </div>

            <div class="pro">
                <img src="/assets/images/img/people/p3.jpg" alt="">
                <div class="des">

                    <h5>Stacy</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>

                </div>

            </div>

            <div class="pro">
                <img src="/assets/images/img/people/p2.jpg" alt="">
                <div class="des">

                    <h5>Alex</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>

                </div>

            </div>

            <div class="pro">
                <img src="/assets/images/img/people/p4.jpg" alt="">
                <div class="des">

                    <h5>Victoria</h5>
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>

                </div>

            </div>






        </div>
    </section>

    <section id="product1" class="section-p1">
        <h3>A Little About Ourselves</h3>
        <p>
            Welcome to Abidas, your number one source for all products, ie: shoes, bags, dog treats. We're dedicated to giving you the very best of everything, with a focus on dependability, customer service and uniqueness.
            Founded in 2022 by the developers, Abidas has come a long way from its beginnings in  HP Research Lab. When it first started out, the passion to be more eco-friendly and dependability drove them to  do intense research on customer's wants and needs and gave them the impetus to turn hard work and inspiration into to a booming online store. We now serve customers all over  the world and are thrilled to be a part of the quirky, eco-friendly and fair trade wing of the fashion industry.

            We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.

        </p>
        <p>
            Sincerely,
            Developers
        </p>

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
