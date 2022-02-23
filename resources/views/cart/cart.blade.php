@extends('layouts.app')

@section('content')
    <section id="page-header">
        <h2>#noriskshopping</h2>
        <p>Stay safe and comfortable at home</p>
    </section>

    <div class="this-progress-bar">
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100" style="width:40%">
                40%
            </div>
        </div>
    </div>

    <section id="cart" class="section-p1">
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
    <tbody style="color: black">
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                             <td data-th="Product">
                                 <div scope="col"
                                     class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     {{-- <img src="/assets/img/{{ $details['image'] }}" width="100" height="100"
                                         class="img-responsive" /> --}}
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
        @endif
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
                             Shopping</a>

                         <button onclick="location.href='{{ url('checkout') }}'" class="btn btn-success">
                             Checkout
                         </button>
                     </td>
                 </tr>
             </tfoot>
</table>
    </section>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
          e.preventDefault();

          var ele = $(this);

          if(confirm("Are you sure want to remove?")) {
              $.ajax({
                  url: '{{ route('remove.from.cart') }}',
                  method: "DELETE",
                  data: {
                      _token: '{{ csrf_token() }}',
                      id: ele.parents("tr").attr("data-id")
                  },
                  success: function (response) {
                      window.location.reload();
                  }
              });
          }
      });

         $(document).ready(function() {
             $('#cat').DataTable();
         });

  </script>
  @endsection
