@extends('layout.admin')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form Update Product</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="name" placeholder="Title" value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" value="{{$product->image}}">
                            </div>
                            <img src="{{ asset('storage/'.$product->image) }}" alt="" width="100">
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="Price" value="{{$product->price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Sale Price</label>
                                <input type="number" class="form-control" name="sale_price" placeholder="Sale Price" value="{{$product->sale_price}}">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea cols="30" rows="20" class="form-control" name="description">{{$product->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    @foreach($category as $value)
                                        <option
                                            @if($product->category_id == $value->id)
                                            selected
                                            @endif
                                            value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
