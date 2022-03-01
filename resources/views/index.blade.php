@extends('layouts.app')

@section('content')
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
            @foreach ($products as $product)

                @if($product->category == 'featured')
                <div class="pro" onclick="window.location.href='/product';">
                    <img src="/assets/images/img/products/{{ $product->item_img }}" alt="">
                    <div class="des">
                        {{--                    <span>{{ $product->brand }}</span>--}}
                        <h5>{{ $product->name }}</h5>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <h4>Ksh. {{ $product->price }}</h4>
                    </div>

                    @if ($cart->where('id', $product->id)->count())
                    <p class="btn btn-success btn-block text-center"> In cart</p>

                    @elseif($product->quantity <= '1')
                        <p class="btn btn-danger btn-block text-center">Out of stock</p>
                    @else
                    <a href=""><i class='bx bx-cart-alt cart'></i></a>

                    <a href="{{ route('cart.add', $product->id) }}"
                    class="btn btn-warning btn-block text-center" role="button">
                        Add to cart
                    </a>
                    @endif

                </div>

                @endif
            @endforeach
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
            @foreach ($products as $product )

                @if($product->category == 'new')
                <div class="pro" onclick="window.location.href='/product';">
                    <img src="/assets/images/img/products/{{ $product->item_img }}" alt="">
                    <div class="des">
                        {{--                    <span>{{ $product->brand }}</span>--}}
                        <h5>{{ $product->name }}</h5>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <h4>Ksh. {{ $product->price }}</h4>
                    </div>
                    {{--                <a href=""><i class='bx bx-cart-alt cart'></i></a>--}}
                    @if ($cart->where('id', $product->id)->count())
                    <p class="btn btn-success btn-block text-center"> In cart</p>

                    @elseif($product->quantity <= '1')
                        <p class="btn btn-danger btn-block text-center">Out of stock</p>
                    @else
                    <a href=""><i class='bx bx-cart-alt cart'></i></a>

                    <a href="{{ route('cart.add', $product->id) }}"
                    class="btn btn-warning btn-block text-center" role="button">
                        Add to cart
                    </a>
                    @endif


                </div>
                @endif
            @endforeach
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

    <script src="{{ asset('js/script.js') }}"></script>
@endsection
