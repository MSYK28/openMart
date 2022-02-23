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
                    <img src="/assets/img/{{ $product->image }}" alt="">
                    <div class="des">
                        <span>{{ $product->category }}</span>
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
                    <a href="{{ route('add.to.cart', $product->id) }}" role="button">
                        <i class='bx bx-cart-alt cart'></i>
                    </a>
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
