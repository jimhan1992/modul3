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
                        <h3 class="card-title">Form Update User</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
{{--                                <label for="">Email</label>--}}
                                <input type="hidden" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
{{--                                <label for="">Password</label>--}}
                                <input type="hidden" class="form-control" name="password" placeholder="Password" value="{{$user->password}}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{$user->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="{{$user->role}}">{{$user->role}}</option>
                                    <option value="Customer">Customer</option>
                                    <option value="Support">Support</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Lock</option>
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
