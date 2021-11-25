@extends('layout.admin')
@section('main')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
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
                        @can('crud_user')
                            <h3 class="card-title"><a href="{{route('users.create')}}" class="btn btn-primary">Add
                                    User</a></h3>
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
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            @forelse($users as $key => $user)
                                @if(\Illuminate\Support\Facades\Auth::user()->id==$user->id)
                                    @continue
                                @endif
                                <tr>
                                    <th>{{++$key}}</th>
                                    <th>{{$user->name}}</th>
                                    <th>{{$user->email}}</th>
                                    <th>{{$user->phone}}</th>
                                    <th>{{$user->address}}</th>
                                    <th>{{$user->role}}</th>
                                    <th>{{$user->status?'active':'Lock'}}</th>
                                    <th>
                                        @can('crud_user')
                                            <a href="{{route('users.profile',$user->id)}}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-outline-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{route('users.destroy',$user->id)}}"
                                               class="btn btn-outline-danger" onclick="return confirm('ok')"><i
                                                    class="fa fa-trash"></i></a>
                                        @endcan
                                    </th>
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
                        {{$users->links()}}
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
