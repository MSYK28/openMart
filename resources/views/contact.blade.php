@extends('layouts.app')

@section('content')
    <section id="contact">
        <h4>Are You Experiencing Any Issues?</h4>
        <h2>We are here for you</h2>

    </section>


    <section id="product1" class="section-p1">
        <h2>Reach Out to Us</h2>
        <p>
            Are you experiencing any issues or having any challenges?
        </p>
        <h4><b>
                Email Us. <br><br>

            </b>
            adibas@gmail.com
        </h4>
        <br><br><br>
        <h4><b>
                Call Us. <br><br>

            </b>
            +254721000000
        </h4>


    </section>

    <section id="banner4">
        <div class="banner-box">

        </div>
        <div class="banner-box banner-box2">

        </div>
        <div class="banner-box banner-box3">

        </div>
    </section>

    <section id="product1" class="section-p1">
        <h3><u>What You Get When You Contact Us</u></h3>
        <p>
            Fast Response from our Customer Care.
        </p>

        <p>
            Thorough and Expert level advice from our Team.
        </p>

        <p>
            Follow Up Email to find our how you are doing.
        </p>




    </section>

    <section id="product1" class="section-p1">
        <h2>Meet the Brains Behind</h2>
        <p>The New Generation of Developers</p>
        <div class="pro-container">
            <div class="pro">
                <img src="/assets/images/img/people/p1.jpg" alt="">
                <div class="des">

                    <span>Front End Developer</span>
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

                    <span>Back End Developer</span>
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

                    <span>Back End Developer</span>
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

                    <span>Linking Developer</span>
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
