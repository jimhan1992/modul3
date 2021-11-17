@extends('layout.admin')
@section('main')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        @can('crud_user')
                            <h3 class="card-title"><a href="{{route('category.create')}}" class="btn btn-primary">Add
                                    Category</a></h3>
                        @endcan
                        <div class="card-tools">
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
                                <th></th>
                            </tr>
                            @forelse($categorys as $key => $value)
                                @if($value->id ==1)
                                    @continue
                                @endif
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>
                                        @can('crud_user')
                                            <a href="{{route('category.edit',$value->id)}}" class="btn btn-outline-warning"><i
                                                    class="fa fa-edit"></i></a>
                                            <a href="{{route('category.destroy',$value->id)}}"
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
                        {{$categorys->links()}}
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

@endsection
