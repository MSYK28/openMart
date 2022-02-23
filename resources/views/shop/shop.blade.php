@extends('layouts.app')

@section('content')
    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Use coupons for up to 70% off</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            @foreach ($products as $product)
            <div class="pro" onclick="window.location.href='/product';">
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

            @foreach ($products as $product)
                <div class="trick_content">

                    <div class="img_card pt-2 pb-4">
                        <img src="/assets/img/{{ $product->image }}" alt="">
                    </div>

                    <div class="caption">
                        <h4>{{ $product->name }}</h4>
                        <p><strong>Category: </strong> {{ $product->category }}</p>
                        {{-- <p>{{ $product->description }}</p> --}}
                        <p><strong>Price: </strong> Ksh. {{ $product->price }}</p>
                        <p class="btn-holder">
                            <a href="{{ route('add.to.cart', $product->id) }}"
                                class="btn btn-warning btn-block text-center" role="button">
                                Add to cart
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach

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

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
    </section>
@endsection
