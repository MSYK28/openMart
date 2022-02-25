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
        @if(!empty(session('cart')))
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
            @php $total = 0 @endphp
            @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                <tr>
                    <td>{{ $id }}</td>
                    <td>
                        <img src="/assets/images/img/products/{{ $details['image'] }}" alt="">
                    </td>
                    <td>{{ $details['name '] }}</td>
                    <td>{{ $details['price'] }}</td>
                    <td><input type="number" value="1" name=""></td>
                    <td>{{ $details['price'] * $details['quantity'] }}</td>
                    <td>

                            <button class="btn btn-danger remove-from-cart" aria-hidden="true">
                                Remove
                            </button>

                    </td>
                </tr>

                @endforeach
                @endif
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="5" scope="col"
                        class="text-right px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider actions">
                        <h6><strong style="color: black">Total: Ksh.3470</strong></h6>
                    </td>
                </tr>
                <tr>
                    <td style="color: black" colspan="5" class="text-right">
                        <a href="{{ url('/shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Shopping</a>

                        <button onclick="location.href='{{ url('checkout') }}'" class="btn btn-success">
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
