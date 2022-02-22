@extends('layouts.app')

@section('content')
    {{-- @if($cartItems->count() > 0)  --}}
         <table id="cart" class="table table-hover table-condensed">
             <thead>
                 <tr>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Image </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Name </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Price </th>
                     <th style="width:8%" scope="col"
                         class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Quantity </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         Subtotal </th>
                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                         <span class="">Action</span>
                     </th>
                 </tr>
             </thead>
         </table>


             {{-- <tbody style="color: black">
                 @php $total = 0 @endphp
                    
                     @foreach ($cartItems as $details)
                         @php $total += $details['price'] * $details['quantity'] @endphp
                         <tr data-id="{{ $id }}">
                             <td data-th="Product">
                                 <div scope="col"
                                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     <img src="/assets/img/{{ $details['image'] }}" width="100" height="100"
                                         class="img-responsive" />
                                 </div>
                             </td>
                             <td data-th="Name" scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                 {{ $details['name'] }}
                             </td>
                             <td scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                 data-th="Price">
                                 Ksh. {{ $details['price'] }}
                             </td>
                             <td scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                 data-th="Quantity">
                                 <form action="{{ route('update.cart', $details->id) }}" method="post">
                                    @csrf
                                    <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                     class="form-control quantity update-cart" />
                                <input type="submit" value="save">
                            </form>
                             </td>
                             <td scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                 data-th="Subtotal" class="text-center">Ksh.
                                 {{ $details['price'] * $details['quantity'] }}
                             </td>
                             <td scope="col"
                                 class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider actions"
                                 data-th="">
                                 <a href="{{ route('remove.from.cart', $details->id) }}" class="btn btn-danger btn-sm remove-from-cart">
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
                         <h3><strong style="color: black">Total Ksh. {{ $total }}</strong></h3>
                     </td>
                 </tr>
                 <tr>
                     <td style="color: black" colspan="5" class="text-right">
                         <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                            Shopping
                         </a>

                         <button onclick="location.href='{{ url('checkout') }}'" class="btn btn-success">
                            Proceed to Checkout
                         </button>
                     </td>
                 </tr>
             </tfoot>
         </table>
     @else
         <div class="empty_cart align-items-center" style="text-align: center">
             <p style="color: black">
                 Oops! You dont have anything in your cart yet! <br>
                 <Button class="">
                     <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                         <x-nav-link :href="route('/')" :active="request()->routeIs('/')">
                             <i style="color: black; padding-right:5px" class='bx bx-cart-alt trick_icon'></i>
                             {{ __('Shop here') }}
                         </x-nav-link>
                     </div>
                 </Button>
             </p>
         </div>
     @endif --}}
@endsection
