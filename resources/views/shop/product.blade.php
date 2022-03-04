@extends('layouts.app')

@section('content')


<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="/assets/images/img/products/{{ $product->item_img }}" width="100%" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="/assets/images/img/products/{{ $product->item_img }}" width="100%" id="small-img0" alt="">
            </div>
            <div class="small-img-col">
                <img src="/assets/images/img/products/{{ $product->item_img }}" width="100%" id="small-img1" alt="">
            </div>
            <div class="small-img-col">
                <img src="/assets/images/img/products/{{ $product->item_img }}" width="100%" id="small-img2" alt="">
            </div>
            <div class="small-img-col">
                <img src="/assets/images/img/products/{{ $product->item_img }}" width="100%" id="small-img3" alt="">
            </div>
        </div>
    </div>


    <div class="single-pro-details">
        <h6>Home/Product</h6>
        <h4>{{ $product->name }}</h4>
        <h2>Ksh. {{ $product->price }} </h2>
        <select name="" id="">
            <option value="">Select Size</option>
            <option value="">Small</option>
            <option value="">Medium</option>
            <option value="">Large</option>
            <option value="">X Large</option>
        </select>

        <div>
            <button class="btn btn-sm btn-warning"><i style="padding-right: 5px;" class='bx bx-cart'></i>
                <a href="{{ route('cart.add', $product->id) }}">
                    Add to cart
                </a>
            </button>
            <div>
                <form action="{{route('wishlist.add')}}" method="post">
                    @csrf
                    <input type="hidden" name="itemID" value="{{ $product->id }}">
                    <button class="btn btn-sm btn-primary" type="submit"><i style="padding-right: 5px;"
                            class='bx bxs-magic-wand'></i>Add to Wishlist</button>
                </form>
            </div>
            <h4><strong>Product Details</strong></h4>
            <span>{{ $product->description }}</span>
        </div>
</section>

<section id="product1" class="section-p1">
    <h2>Featured Products</h2>
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
    </div>
</section>


{{-- <script src="/js/script.js"></script> --}}

@endsection