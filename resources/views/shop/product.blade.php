@extends('layouts.app')

@section('content')


    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="/assets/images/img/products/f1.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="/assets/images/img/products/f1.jpg" width="100%" id="small-img0" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/images/img/products/f2.jpg" width="100%" id="small-img1" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/images/img/products/f3.jpg" width="100%" id="small-img2" alt="">
                </div>
                <div class="small-img-col">
                    <img src="/assets/images/img/products/f4.jpg" width="100%" id="small-img3" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home/T-shirt</h6>
            <h4>$product->name</h4>
            <h2>Ksh. $product->price </h2>
            <select name="" id="">
                <option value="">Select Size</option>
                <option value="">Small</option>
                <option value="">Medium</option>
                <option value="">Large</option>
                <option value="">X Large</option>
            </select>
            <input type="number" value="1">
            <div>
            <button class="btn btn-sm btn-warning"><i style="padding-right: 5px;" class='bx bx-cart'></i>Add to Cart</button>
            <button class="btn btn-sm btn-primary"><i style="padding-right: 5px;" class='bx bxs-magic-wand' ></i>Add to Wishlist</button>
            </div>
            <h4><strong>Product Details</strong></h4>
            <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ab aperiam facere odio odit neque ipsum earum ad inventore pariatur maxime labore corporis omnis officia, sit, eos consequuntur debitis expedita?
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ab aperiam facere odio odit neque ipsum earum ad inventore pariatur maxime labore corporis omnis officia, sit, eos consequuntur debitis expedita
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ab aperiam facere odio odit neque ipsum earum ad inventore pariatur maxime labore corporis omnis officia, sit, eos consequuntur debitis expedita
            </span>
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
