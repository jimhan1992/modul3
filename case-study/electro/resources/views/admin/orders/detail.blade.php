@extends('layout.admin')
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Order Detail</h1>
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
                                <th>Image</th>
                                <th>Name Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                            </tr>
                            <input type="hidden" value="{{ $total = 0}}">
                            @forelse($order_detail as $key => $order)
                                <tr>
                                    <td><img src="{{asset('storage/'.$order->product->image)}}" alt="" width="50"></td>
                                    <td><a href="{{route('detail',$order->product->id)}}">{{$order->product->name}}</a></td>
                                    <td>{{$order->quantity}}</td>
                                    <td>${{$order->price}}</td>
                                    <td>${{$order->quantity*$order->price}}</td>
                                </tr>
                                <input type="hidden"
                                       value="{{$total += $order->quantity*$order->price}}">
                            @empty
                                <tr>
                                    No Data
                                </tr>

                            @endforelse
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align: right">SUM:</td>
                                <td>${{$total}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        {{--                    {{$orders->links()}}--}}
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
