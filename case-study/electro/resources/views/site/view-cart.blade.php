@include('site.core.head')
<!-- HEADER -->
@include('site.core.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('site.core.nav')
<!-- /NAVIGATION -->

<div class="container">

    <table class="table">
        <thead>
        <tr>
            <th colspan="4">
                <h3 class="text-center">VIEW CART</h3>
            </th>
        </tr>
        <tr>
            <th></th>
            <th class="text-center">Name</th>
            <th class="text-center">Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @if(session()->has('cart'))
            @foreach(session('cart') as $key => $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}" width="100px">
                    </td>
                    <td>
                        <a href="#">{{ $item['name'] }}</a>
                    </td>
                    <td class="text-center">
                        <form id="update{{$key}}" action="" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$key}}">
                            <input name="quantity" type="number" id="{{$key}}" value="{{ $item['quantity'] }}">
                        </form>
                    </td>
                    <td>${{number_format($item['price'])}}</td>
                    <td class="text-center"><a class="remove-from-cart" href="{{route('remove.from.cart',$key)}}"
                                               data-toggle="tooltip" title="" data-original-title="Remove item"><i
                                class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>No Product</td>
            </tr>
        @endif
        <tr>
            <td></td>
            <td></td>
            <td><h5><p style="text-align: right">SUBTOTAL: </p></h5></td>
            <td>
                <input type="hidden" value="{{ $total = 0}}">
                @if(!$cart=session('cart'))
                @else
                    @foreach(session('cart') as $key => $item)
                        <input type="hidden"
                               value="{{$total += $item['price'] * $item['quantity']}}">
                    @endforeach
                @endif
                <h5><span style="color: red">${{$total}}</span></h5>
            </td>
        </tr>
        </tbody>
        <tr>
            <td>
                <a class="cart-btns" href="{{route('home')}}"><i
                        class="fa fa-arrow-circle-left"></i>Shopping</a>
            </td>
            <td></td>
            <td></td>
            <td>
                <div class="cart-btns">
                    <a href="{{route('checkout')}}">Checkout <i
                            class="fa fa-arrow-circle-right"></i></a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<!-- FOOTER -->
@include('site.core.footer')
