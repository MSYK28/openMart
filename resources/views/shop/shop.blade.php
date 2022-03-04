@extends('layouts.app')

@section('content')
<section id="page-header">
    <h2>#stayhome</h2>
    <p>Use coupons for up to 70% off</p>
</section>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show m-5" role="alert">
        {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif

<section id="product1" class="section-p1">
    <div class="pro-container">
        @foreach ($products as $product)

        <div class="pro">
            <a href="{{"/product/".$product['id'] }}"> <img src="/assets/images/img/products/{{ $product->item_img }}"
                    alt=""></a>
            <div class="des">
                <span>{{ $product->brand }}</span>
                <h5>{{ $product->name }}</h5>
                <div class="star">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <h4>Ksh. {{ number_format($product->price ,2) }}</h4>
            </div>

            @if ($cart->where('id', $product->id)->count())
            <p class="btn btn-success btn-block text-center"> In cart</p>

            @elseif($product->quantity <= '1' ) <p class="btn btn-danger btn-block text-center">Out of stock</p>
                @else
                <a href=""><i class='bx bx-cart-alt cart'></i></a>

                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-warning btn-block text-center"
                    role="button">
                    Add to cart
                </a>
                @endif
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