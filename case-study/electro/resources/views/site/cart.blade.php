<div class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <i class="fa fa-shopping-cart"></i>
        <span>Your Cart</span>
        @php($cart=session('cart') ?? $cart=[])
        <div class="qty">{{count($cart)}}</div>
    </a>
    <div class="cart-dropdown">
        <div class="cart-list">
            @if(session()->has('cart'))
                @foreach(session('cart') as $key => $item)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="{{ asset('storage/' . $item['image'])}}" alt="">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="{{route('detail',$key)}}">{{ $item['name'] }}</a>
                            </h3>
                            <h4 class="product-price"><span
                                    class="qty">{{ $item['quantity'] }}x</span>${{ number_format($item['price'])}}
                            </h4>
                        </div>
                        <a href="{{route('remove.from.cart',$key)}}">
                            <button class="delete"><i class="fa fa-close"></i></button>
                        </a>
                    </div>
                @endforeach
            @else
                No data
            @endif
        </div>
        <div class="cart-summary">
            <small>{{count($cart)}} Item(s) selected</small>
            <input type="hidden" value="{{ $total = 0}}">
            @if(!$cart=session('cart'))
            @else
                @foreach(session('cart') as $key => $item)
                    <input type="hidden"
                           value="{{$total += $item['price'] * $item['quantity']}}">
                @endforeach
            @endif
            <h5>SUBTOTAL: ${{$total}}</h5>

        </div>
        <div class="cart-btns">
            <a href="{{route('view-cart')}}">View Cart</a>
            <a href="{{route('checkout')}}">Checkout <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
