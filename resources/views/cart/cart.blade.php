@extends('layouts.app')

@section('content')
    <section id="page-header">
        <h2>#noriskshopping</h2>
        <p>Stay safe and comfortable at home</p>
    </section>

    <div class="this-progress-bar">
        <div class="progress">
            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100" style="width:40%">
                40%
            </div>
        </div>
    </div>

    <section id="cart" class="section-p1">
        @if($cart->count() > 0)
        <table width="100%">'
            <thead>
                <tr>
                    <td>#</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    <td>Remove</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($cart as $details)     
                <tr>

                    <td>@php $number = 0; $number++; echo $number; @endphp</td>

                    <td>
                       
                       <img src="/assets/images/img/products/{{ $details->model->item_img }}" alt="">
                    </td>
                    <td>{{ $details['name'] }}</td>
                    <td>{{ $details['price'] }}</td>
                    <td>

                        <form action="{{ route('cart.update',$details->id) }}" method="post">
                           @csrf
                            <input type="number"  name="quantity" value="{{ $details['quantity'] }}" class="quantity update-cart " >
                            <button class="btn btn-sm btn-primary" type="submit"><i class='bx bx-check-double'></i></button>
                            <!-- <input class="btn btn-sm btn-primary" type="submit" value="save"> -->
                        </form>
                    </td>
                    <td>{{ \Cart::get($details->id)->getPriceSum()}}</td>
                    <td>

                            <a class="btn btn-danger remove-from-cart" href="{{ route('cart.remove', $details->id) }}" onclick="return confirm('Are You Sure You want to Remove Item?')">
                                Remove
                            </a>

                    </td>
                </tr>

                @endforeach
                
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="5" scope="col"
                        class="text-right px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider actions">
                        <h6><strong style="color: black">Total: Ksh.{{ \Cart::getTotal()}}</strong></h6>
                    </td>
                </tr>
                <tr>
                    <td style="color: black" colspan="5" class="text-right">
                        <a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Shopping</a>

                        <a href="{{ url('/checkout') }}" class="btn btn-success">
                            Proceed to Checkout
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </td>
                </tr>
            </tfoot>
        </table>
        @endif
    </section>

@endsection
