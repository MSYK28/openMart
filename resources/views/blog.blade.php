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



    <section id="blog">
        <h2>Our Stories</h2>
        <h4>It's what makes us who we are.</h4>


    </section>



    <section id="product1" class="section-p1">
        <h3>The Holiday Special</h3>
        <p>
            My dad used to make me pancakes almost every morning when I was in school. He would do fun shapes and letters. As an adult I don’t know how he did it, he’s super dad! I love making breakfast foods but we are usually running out the door eating breakfast in the car a lot of the times haha. Come weekends though I always make a good breakfast on Sundays, and leading up to holidays I like to do themes. Valentine’s is one of my favorites because you know how much I love the pink color scheme 😉<br>

            I saw this idea online so I ordered some food coloring, berries, sprinkles, and a few other details on Walmart+ to save me a trip to the store. As much as I wish I was a planner and able to plan out a full grocery list and order once a week, most of the time I’m having last minute ideas like this or I remember something I forgot, so I love being able to order groceries for right when I need them.<br>

            I also got these cute plastic flutes to make a cotton candy mocktail which was no question the kids’ favorite part haha. We added some White Cran-Strawberry juice and a pink sugar rim – loved the idea for a cute, festive kids drink. With a Walmart+ membership you get free same-day delivery from your store and  free shipping with no order minimum. (Free Same-Day Delivery- $35 order min. Restrictions apply.; Free Shipping, No order minimum- Excludes most Marketplace items, location & freight surcharges.<br>

            <br>
            RECIPE:

            I used Bisquick pancake mix and followed the instructions on the back. I made the first handful of pancakes with just the normal pancake mix, then separated 4 bowls for other colors. I added a couple drops of pink food coloring to the batter. The pink from this set is SO bright and rich, I’m obsessed! You can just eyeball the amount of drops you want to add since it will depend on how big a batch you’re making. Just start with a drop or two and mix to get an idea of the color. A little goes a long way – Then after cooking the next ‘shade’ pancakes, you’ll add a few more drops of the food coloring and repeat.<br>

            You can repeat as many times as you want and go as slowly/gradually as you want but the more you do, the bigger your pancake stack haha. We just did mini stackers because I knew the kids wouldn’t be able to eat that many if they were full sized. I also used this cute little mold (works for pancakes, eggs, etc) that has a circle or heart shaped option. So cute for Valentine’s Day or just to use throughout the year for fun. It also made it so much easier for the stack to do multiple at once. These are AMAZING!!<br>

            We topped with berries, syrup, whipped cream and sprinkles. I also ordered these edible flower petals that would be so pretty for a Valentine’s Day brunch with your partner or even a baby shower/bridal shower brunch. I forgot to put them on when we did this so I’m going to use them when I make it again they are SO PRETTY!!
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
