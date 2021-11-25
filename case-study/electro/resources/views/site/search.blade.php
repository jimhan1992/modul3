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
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All Categories</a></li>

                </ul>
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

            <!-- STORE -->
            <div id="store" class="col-md-12">


                <!-- store products -->
                <div class="row">
                    <!-- product -->
                    @foreach($products as $product)
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('storage/' . $product->image)  }}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name text"><a href="{{route('detail',$product->id)}}">{{$product->name}}</a></h3>
                                    <h4 class="product-price">{{$product->sale_price}}
                                        <del class="product-old-price">{{$product->price}}</del>
                                    </h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{ route('add.to.cart', $product->id) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart
                                        </button></a>
                                </div>
                            </div>
                        </div>
                @endforeach
                <!-- /product -->


                    <div class="clearfix visible-sm visible-xs"></div>

                    <div class="clearfix visible-lg visible-md"></div>

                    <div class="clearfix visible-sm visible-xs"></div>

                    <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>



                    <div class="clearfix visible-sm visible-xs"></div>


                <!-- /store products -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    <span class="store-qty">Showing 20-100 products</span>
                    <ul class="store-pagination">
                        {{$products->links()}}
                    </ul>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
@include('site.core.footer')
<!-- /FOOTER -->
