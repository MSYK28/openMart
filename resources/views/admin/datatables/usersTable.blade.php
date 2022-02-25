@extends('admin.adminLayout')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Users Table</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                    <div class="text-sm text-gray-500">jane.cooper@example.com</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm text-gray-500">Optimization</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Active </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<section class="content">
  <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 bg-white border-b border-gray-200">
                      <div class="flex flex-wrap -mx-1 overflow-hidden sm:-mx-px lg:-mx-3">
                          <div class="my-1 px-1 w-1/3 overflow-hidden sm:my-px sm:px-px lg:my-3 lg:px-3 lg:w-1/2">

                              <table id="table_id"
                                  class="divide-y divide-gray-200 border-b border gray-200 sm:rounded-lg">
                                  <thead class="bg-gray-50">
                                      <tr>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                              ID
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                              Name
                                          </th>
                                          <th scope="col"
                                              class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                              Email
                                          </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($users as $user)
                                          <tr>
                                              </th>
                                              <th scope="col"
                                                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  <p>{{ $user->id }}</p>
                                              </th>
                                              <th scope="col"
                                                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  <p>{{ $user->name }}</p>
                                              </th>
                                              <th scope="col"
                                                  class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                  <p>{{ $user->email }}</p>
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

</section

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
@endsection
