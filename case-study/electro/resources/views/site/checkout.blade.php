@include('site.core.head')
<!-- HEADER -->
@include('site.core.header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@include('site.core.nav')
<!-- /NAVIGATION -->



<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Checkout</h3>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <form action="" method="post">
                @csrf
                <div class="col-md-7">
                    <!-- Billing Details -->

                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">SHIPING ADDRESS</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name" placeholder="Full Name"
                                   value="{{old('name')}}">
                        </div>
                        @error('name')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email" value="{{old('email')}}">
                        </div>
                        @error('email')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address"
                                   value="{{old('address')}}">
                        </div>
                        @error('address')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <input class="input" type="tel" name="phone" placeholder="Telephone"
                                   value="{{old('phone')}}">
                        </div>
                        @error('phone')
                        <p class="alert alert-danger">{{$message}}</p>
                        @enderror
                        <div class="order-notes">
                            <textarea name="note" class="input" placeholder="Order Notes"></textarea>
                        </div>
                    </div>
                    <!-- /Billing Details -->

                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            @if(session()->has('cart'))
                                @foreach(session('cart') as $key => $item)
                                    <div class="order-col">
                                        <div>
                                            <n style="color: red">{{ $item['quantity'] }}</n>
                                            x {{ $item['name'] }}</div>
                                        <div>{{ $item['price'] }}</div>
                                    </div>
                                @endforeach
                            @else
                                No Product
                            @endif
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <input type="hidden" value="{{ $total = 0}}">
                            @if(!$cart=session('cart'))
                            @else
                                @foreach(session('cart') as $key => $item)
                                    <input type="hidden"
                                           value="{{$total += $item['price'] * $item['quantity']}}">
                                @endforeach
                            @endif
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">${{$total}}</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Direct Bank Transfer
                            </label>
                            <div class="caption">
                                <p>No support</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>No support</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Paypal System
                            </label>
                            <div class="caption">
                                <p>No support</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms & conditions</a>
                        </label>
                    </div>
                    <button type="submit" class="primary-btn order-submit">Place order</button>
                </div>
            </form>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


@include('site.core.footer')
