
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                @if(!\Illuminate\Support\Facades\Auth::user())
                <li><a href="{{route('register')}}" data-target="#t_and_c_m"><i class="fa fa-user-o"></i> Register</a></li>
                <li><a href="{{route('login')}}" data-target="#t_and_c_m"><i class="fa fa-user-o"></i> login</a></li>
                  @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="true">Hi! {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        <div class="dropdown-menu" style="background-color: #1f1d29">
                            <div>
                                <a  href="{{route('profile',\Illuminate\Support\Facades\Auth::user()->id)}}"><i class="fas fa-user"></i>Profile</a>
                            </div>
                            <div>
                                <a  href="{{route('logout')}}" style="color: white"><i class="fas fa-sign-out"></i>Logout</a>
                            </div>
                        </div>
                    </li>
                    @endif
            </ul>
        </div>
    </div>

    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="/" class="logo">
                            <img src="{{asset('site/img/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form method="get" action="{{route('search.category')}}">
                            <select class="input-select">
                                <option>All Product</option>
                            </select>
                            <input name="search" class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div id="change-item-cart">
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                        @include('site.cart')
                        <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
