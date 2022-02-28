@extends('admin.adminLayout')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Products</h1>
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
                <form method="POST" class="form" action="{{ route('create.product') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">General</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="text" id="inputName" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea id="inputDescription" class="form-control" rows="4" name="desc"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputClientCompany">Brand</label>
                                        <input type="text" id="inputClientCompany" class="form-control" name="brand">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Category</label>
                                        <input type="text" id="inputProjectLeader" class="form-control" name="category">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Quantity</label>
                                        <input type="text" id="inputProjectLeader" class="form-control" name="qty">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProjectLeader">Price</label>
                                        <input type="text" id="inputProjectLeader" class="form-control" name="price">
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
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="image" name="image" type="file" class="form-control">
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
                    <div class="row" style="padding: 20px">
                        <div class="col-12">
                            <a href="#" class="btn btn-warning">Cancel</a>
                            <input type="submit" value="Create new Product" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        
    <!-- /.content -->
<!-- </div> -->

@endsection
