@extends('layout.admin')
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders</h1>
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
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Note</th>
                                <th>User</th>
                                <th>Day Order</th>
                                <th></th>
                            </tr>
                            @forelse($orders as $key => $order)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->note}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{$order->created_at}}</td>

                                    <td>
                                        @can('crud_user')
                                            <a href="{{route('orders.detail',$order->id)}}" class="btn btn-outline-warning"><i class="fa fa-eye"></i></a>
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
                        {{$orders->links()}}
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
