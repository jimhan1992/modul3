@extends('layout.admin')
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" value="{{$category->id}}">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Category Name" value="{{$category->name}}">
                            </div>
                            @error('name')
                            <p class="text-danger">{{$message}}</p>
                            @enderror

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
