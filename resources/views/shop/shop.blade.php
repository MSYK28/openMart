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
                <a href="{{ route('cart.add', $product->id) }}"
                   class="btn btn-warning btn-block text-center" role="button">
                    Add to cart
                </a>

            </div>
            @endforeach

            </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class='bx bx-right-arrow-alt'></i></a>
    </section>
@endsection
