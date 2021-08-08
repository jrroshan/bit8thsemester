<div>
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="{{$setting->phone}}" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>{{$setting->phone}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>


                                @if(Route::has('login'))
                                @auth
                                @if(Auth::user()->utype === 'ADM')
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route('admin.dashboard')}}">Dashboard</a>
                                        </li>
                                        <li class="menu-item">
                                            <a title="Categories" href="{{route('admin.categories')}}">Categories</a>

                                        </li>
                                        <li class="menu-item">
                                            <a title="Categories" href="{{route('admin.products')}}">Products</a>

                                        </li>

                                        <li class="menu-item">
                                            <a title="Manage Home Slider" href="{{route('admin.homeslider')}}">Manage
                                                Home Slider</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="Manage Home Categories"
                                                href="{{route('admin.homecategories')}}">Manage Home Categories</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="Sale" href="{{route('admin.sale')}}">Sale Setting</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="All Coupon" href="{{route('admin.coupons')}}">All Coupon</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="All Orders" href="{{route('admin.orders')}}">All Orders</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="Contact" href="{{route('admin.contact')}}">Contact Message</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="Contact" href="{{route('admin.settings')}}">Setting</a>
                                        </li>



                                        <li class="menu-item">
                                            <a href="{{route('logout')}}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                        </li>

                                        <form id="logout-form" action="{{route('logout')}}" method="POST">
                                            @csrf

                                        </form>
                                    </ul>
                                </li>
                                @else
                                <li class="menu-item menu-item-has-children parent">
                                    <a title="My Account" href="#">My Account ({{Auth::user()->name}})<i
                                            class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency">
                                        <li class="menu-item">
                                            <a title="Dashboard" href="{{ route('user.dashboard')}}">Dashboard</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="My Orders" href="{{ route('user.orders')}}">My Orders</a>
                                        </li>

                                        <li class="menu-item">
                                            <a title="Change Password" href="{{ route('user.changepassword')}}">Change
                                                Password</a>
                                        </li>

                                        <li class="menu-item">
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                        </li>


                                        <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>
                                @endif
                                @else
                                <li class="menu-item"><a title="Register or Login" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="menu-item"><a title="Register or Login"
                                        href="{{route('register')}}">Register</a></li>

                                @endif
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-logo-top left-section">
                            <a href="/" class="link-to-home"><img src="{{asset('assets/images/logo')}}/{{$setting->logo}}"
                                    alt="mercado" width="180"></a>
                        </div>

                        @livewire('head-search-component')

                        <div class="wrap-icon right-section">
                            @livewire('wishlist-count-component')
                            @livewire('cart-count-component')
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="/" class="link-term mercado-item-title"><i class="fa fa-home"
                                        aria-hidden="true"></i></a>
                            </li>
                            {{-- <li class="menu-item">
								<a href="about-us.html" class="link-term mercado-item-title">About Us</a>
							</li> --}}
                            <li class="menu-item">
                                <a href="/shop" class="link-term mercado-item-title">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="/cart" class="link-term mercado-item-title">Cart</a>
                            </li>
                            <li class="menu-item">
                                <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('contact')}}" class="link-term mercado-item-title">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>
</header>
</div>