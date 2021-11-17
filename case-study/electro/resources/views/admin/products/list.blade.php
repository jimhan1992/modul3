@extends('layout.admin')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        @can('crud_user')
                            <h3 class="card-title"><a href="{{route('products.create')}}" class="btn btn-primary">Add
                                    Product</a></h3>
                        @endcan
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Sale Price</th>
                                <th>Category</th>
                                <th></th>
                            </tr>
                            @forelse($products as $key => $product)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$product->name}}</td>
                                    <td><img src="{{ asset('storage/' . $product->image)  }}" alt="" width="100"></td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->sale_price}}</td>
                                    <td>{{$product->category->name}}</td>

                                    <td>
                                        @can('crud_user')
                                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-outline-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{route('products.destroy',$product->id)}}"
                                               class="btn btn-outline-danger" onclick="return confirm('ok')"><i
                                                    class="fa fa-trash"></i></a>
                                        @endcan
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    No Data
                                </tr>
                            @endforelse
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{$products->links()}}
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
