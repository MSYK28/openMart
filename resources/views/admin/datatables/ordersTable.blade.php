@extends('admin.adminLayout')

@section('content')

<div id="wishlist" class="section-p1">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 stripe" id="table_id">
                    <thead class="bg-gray-500">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">#</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">User ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Phone_number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Location</th>
                         <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Payment_method</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Grand Total</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-white-500 uppercase tracking-wider">Date Paid</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($orders as $order)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700
                            border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 dark:border-gray-600">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $order->id }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-medium text-gray-900">{{ $order->created_at }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->user_id }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->phone_number }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->location }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->payment_method }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->status}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $order->grand_total}}</div>
                        </td>
                        @if($order->datePaid == null)
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Not Paid</div>
                        </td>
                        @else
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Date Paid(Include Code)</div>
                        </td>
                        @endif
                        </tr>
                        @endforeach

                        <!-- More people... -->
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
@endsection
