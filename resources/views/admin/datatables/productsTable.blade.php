@extends('admin.adminLayout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Products Table</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="py-12">
           <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                   <div class="p-6 bg-white border-b border-gray-200">
                       <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-px lg:-mx-3">
                           <div class="my-1 px-1 w-3/3 overflow-hidden sm:my-px sm:px-px lg:my-3 lg:px-3 lg:w-1/2">

                               <table id="table_id"
                                   class="min-w-full divide-y divide-gray-200 border-b border gray-200 sm:rounded-lg">
                                   <thead class="bg-gray-50">
                                       <tr>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               ID
                                           </th>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               Image
                                           </th>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               Name
                                           </th>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               Category
                                           </th>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               Quantity
                                           </th>
                                           <th scope="col"
                                               class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                               Price
                                           </th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($products as $product)
                                           <tr>
                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                   {{ $product->id }}
                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                       <p><img src="/assets/images/img/products/{{ $product->item_img }}" alt="" width="30" height="30"></p>

                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                   <p>{{ $product->name }}</p>
                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                   <p>{{ $product->category}}</p>
                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                   <p>{{ $product->quantity }}</p>
                                               </th>
                                               <th scope="col"
                                                   class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                   <p>{{ $product->price }}</p>
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
</section>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
@endsection
