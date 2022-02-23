@extends('admin.adminLayout')

@section('content')

<div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-px lg:-mx-3">
                      <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-px sm:px-px lg:my-3 lg:px-3 lg:w-1/2">

                          <table id="table_id" class="divide-y divide-gray-200 border-b border gray-200 sm:rounded-lg">
                              <thead class="bg-gray-50">
                                  <tr>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          Date
                                      </th>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          User ID
                                      </th>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          Name
                                      </th>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          Quantity
                                      </th>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          Price
                                      </th>
                                      <th scope="col"
                                          class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                          Total
                                      </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach ($orders as $order)
                                      <tr>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->created_at }}</p>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->user_id }}</p>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->name }}</p>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->quantity }}</p>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->price }}</p>
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                              <p>{{ $order->total }}</p>
                                          </th>
                                      </tr>
                                  @endforeach
                              </tbody>
                          </table>

                      </div>
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
