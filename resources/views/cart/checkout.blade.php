@extends('layouts.app')

@section('content')
    <section id="page-header">
        <h2>#quickdelivery</h2>
        <p>Same day delivery for premium subscribers</p>
    </section>

    <div class="this-progress-bar">
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100" style="width:70%">
                70%
            </div>
        </div>
    </div>

    {{-- $request->route()->getName(); --}}

    <section id="cart-add" class="section-p1">
        <div id="subtotal" class="location">
            <table>
                <thead>
                    <tr>
                        <th>
                            Delivery Location
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                           
                           Latitude: -1.311528 / S 1° 18' 41.5'' <br>
                            Longitude: 36.815514 / E 36° 48' 55.848'' <br>
                            Strathmore University, Ole Sangale Link Road, Nairobi, P. O. BOX
                            41362,
                            Kenya
                            <div class="change_location normal" style="padding: 15px" id="button">
                                <button class="normal" >
                                    <i style="color: white; padding-right:5px" class='bx bx-map-alt trick_icon'></i>
                                    {{ __('Change Location') }}
                                </button>
                            </div>
                        
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="coupon" class="subtotal">
            <h6>Apply Coupon</h6>
            <div>
                <form action="{{ route('coupon.store')}}" method="post">

                    @csrf 
                <input type="text" name="coupon_code" id="coupon_code" placeholder="Enter Your Coupon">
                <button type="submit" class="normal">Apply</button>

                </form>
            </div>
        </div>

        <div id="subtotal">
            <h6><strong>Cart totals</strong></h6>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Ksh. @php $cartSubTotal= \Cart::getTotal(); echo $cartSubTotal @endphp </td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>@php $discount = 0.00; echo $discount @endphp</td>
                </tr>
                 <tr>
                     @if (session()->has('coupon'))
                    <td>Coupon( {{ session()->get('coupon')['name'] }} ) 

                        <form action="{{route('coupon.destroy')}} " method="post" style="display:inline;"> 
                          @csrf
                          {{ method_field('delete') }} 
                          <input type="submit" value="Remove">  
                        </form>
                    
                    </td>
                    
                    <td>
                        @php $coupon = session()->get('coupon')['discount']; echo $coupon; @endphp
                    </td>
                    
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>@php $total = $cartSubTotal - ($discount + $coupon); echo $total; @endphp</td>
                </tr>
                @else
                 <tr>
                    <td><strong>Total</strong></td>
                    <td>@php $total = $cartSubTotal - ($discount); echo $total; @endphp</td>
                </tr>
                @endif

                    
            </table>
           
        </div>


        <div class="subtotal">
            <form action="{{ route('orders.store') }}" method="post">
                <h6><strong>Payment Method</strong></h6>
                @csrf

                <label for="mpesa">
                <input type="radio" id="html" name="fav_language" value="mpesa">
                M-PESA</label><br>
                <label for="cash">
                <input type="radio" id="css" name="fav_language" value="cash">
                CASH</label><br>
                <label for="visa">
                <input type="radio" id="javascript" name="fav_language" value="visa">
                VISA/CARD</label>

                 <div class="">
                    <label for="last_name" class="sr-only">Location
                    </label>
                    <input type="text" name="location" id="last_name" placeholder="Location" class="" value="{{ old('location')}}">  

                </div>


                <div class="">
                    <label for="username" class="sr-only">Phone Number
                    </label>
                    <input type="number" name="phone" id="phone" placeholder="Phone number" class="" value="{{ old('phone')}}"><br>
                    <small>Format: 07-2456-7890</small>
                </div>
                @if (session()->has('coupon'))
                     @php $cartSubTotal= \Cart::getTotal();
                     $coupon = session()->get('coupon')['discount'];
                     $discount = 0.00;
                     $total = $cartSubTotal - ($discount + $coupon);  
                     @endphp
                
                @else
                
                    @php $cartSubTotal= \Cart::getTotal();
                     $discount = 0.00;
                     $total = $cartSubTotal - ($discount); @endphp
                
                @endif
                 <div>
                    <input type="hidden" name="grand_total" value="{{ $total }}">
                </div> 
                <button type="submit" class="normal">Complete Order</button>
            </form>
        </div>

        
        
    </section>
@endsection
