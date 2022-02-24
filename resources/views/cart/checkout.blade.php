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
                                <button class="normal" :href="route('dashboard')" :active="request()->routeIs('#')">
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
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div class="subtotal">
            <form action="" method="">
                <h6><strong>Payment Method</strong></h6>
                @csrf
                <input type="radio" id="mpesa" name="fav_language" value="MPESA">
                <label for="mpesa">M-PESA</label><br>
                <input type="radio" id="cash" name="fav_language" value="CASH">
                <label for="cash">CASH</label><br>
                <input type="radio" id="card" name="fav_language" value="CARD">
                <label for="card">VISA/CARD</label>
            </form>
        </div>

        <div id="subtotal">
            <h6><strong>Cart totals</strong></h6>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>Ksh. 3870</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td>Discount</td>
                    <td>0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>Ksh. 3870</td>
                </tr>
            </table>
            <button class="normal">Complete Order</button>
        </div>

        
    </section>
@endsection
