<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{route('shops.search')}}"  method="post">
                @csrf
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="col-12 mt-2">
        <a class="btn btn-success" href="{{route('shops.create')}}">Thêm mới</a>
    </div>
    <div class="card mt-2">
        <h5 class="card-header">Danh sách sản phẩm</h5>
        <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <th>Mã đại lý</th>
                    <th>Tên đại lý</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tên người quản lý</th>
                    <th>Trạng thái</th>
                    <th>Action</th>
                </tr>
                @forelse($shops as $key => $shop)
                    <tr>
                        <td>{{ $shop->code }}</td>
                        <td>{{ $shop->shop_name }}</td>
                        <td>{{ $shop->phone }}</td>
                        <td> {{ $shop->email }}</td>
                        <td>{{ $shop->address }} </td>
                        <td>{{ $shop->manager }} </td>
                        @if($shop->status==1)
                            <td> Ngừng hoạt động</td>
                        @else
                            <td>Đang hoạt động</td>
                        @endif
                        <td><a href="{{route('shops.edit',$shop->id)}}" class="btn btn-warning">Sửa</a>
                            <a href="{{route('shops.delete',$shop->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8">No data</td>
                    </tr>
                @endforelse
            </table>
            {{$shops->links()}}
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if(Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>
@endif

</body>

</html>
