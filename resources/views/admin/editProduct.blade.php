@extends('admin.adminLayout')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Project Edit</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Project Edit</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content p-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <form action="{{ route('edit.product') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">

                        <div class="form-group">
                            <label for="product_name">Name</label>
                            <input type="text" name="product_name" id="inputName" class="form-control"
                                value="{{ $product->name }}">
                            @error('product_name')
                            <div class="text-red-500 mt-2 text-sm">

                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="4" name="description">
                  {{ $product->description }}
                </textarea>

                            @error('decription')
                            <div class="text-red-500 mt-2 text-sm">

                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" id="inputClientCompany" class="form-control"
                                value="{{ $product-> quantity }}" name="quantity">

                            @error('quantity')
                            <div class="text-red-500 mt-2 text-sm">

                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" id="inputProjectLeader" class="form-control"
                                value="{{ $product->price }}" name="price">

                            @error('price')
                            <div class="text-red-500 mt-2 text-sm">

                                {{ $message }}

                            </div>
                            @enderror
                        </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Image</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="product_img"
                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Upload a file</span>
                            <input id="image" name="product_img" type="file" class="form-control">
                        </label>
                    </div>
                    <p class="text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
    </div>
    </form>
</section>
@endsection