



<div class="page-wrapper">

<header class="main-header header-style-two">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li>01710090697<i class="fa fa-volume-control-phone"></i></li>
                        <li>taherul2317@gmail.com<i class="fa fa-envelope"></i><a href="#"></a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <ul class="social-icon-four clearfix">
                        <li><a href="https://www.whatsapp.com/01710090697"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/taz.islam.5074"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/sktaherulislamtaz"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.twitter.com/taherul_taz"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <div class="header-lower">
        <div class="auto-container">
            <div class="main-box clearfix">
                <div class="logo-box">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('frontend/assets2/images/logo100.png') }}" alt="Home Decor Logo">
                        </a>
                    </div>
                </div>
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon flaticon-menu-button"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class=""><li><a href="{{route('home')}}">Home</a></li>

                                <li class=""><a href="{{route('shop.index')}}">Products</a></li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);">Categories</a>
                                    <ul class="single-dropdown">
                                        @foreach($shop_categories_menu as $global_category)
                                            <li>
                                                <a href="{{ route('shop.index', $global_category->slug) }}">
                                                    {{ $global_category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="single-dropdown">
                                        @include('partials.frontend.pages')
                                    </ul>
                                </li>
                                <li class=""><a href="{{route('cart.index')}}">cart</a></li>

                                <li class=""><a href="{{route('contact.index')}}">contact</a></li>
                                

                                @guest
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                @else
                                    


                                    <li class="dropdown"><a href="javascript:void(0);">My Account</a>
                                            <ul>
                                            @role('admin')
                                            <li>
                                                <a href="{{ route('admin.index') }}" style="color: #578a01;">
                                                    Administration
                                                </a>
                                            @endrole
                                            @auth
                                                <li><a href="{{ route('user.dashboard') }}" style="color: #578a01;">Dashboard</a>
                                                </li>
                                            @endauth
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #578a01;">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                            </ul>
                                        </li>

                                    
                                @endguest                                
                            </ul>
                        </div>
                    </nav>

                    <!-- Main Menu End-->

                    <!-- Outer Box-->
                    <div class="outer-box">
                        <!-- Cart Btn -->
                        <div class="cart-btn">

                        <livewire:frontend.header.wishlist-component />

                        </div>
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="dropdown">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-search"></span>
                                </button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                    <div class="furniture-search">
                                        <form>
                                            <div class="form-input">
                                                <input id="search" type="text"
                                                    value="{{ old('keyword', request()->keyword) }}"
                                                    placeholder="Search for product...">
                                            </div>
                                        </form>
                                    </div>
                                        <!-- <div class="form-container">
                                            <form>
                                                <div class="form-group">
                                                    <input id="search" type="text" 
                                                            value="{{ old('keyword', request()->keyword) }}" 
                                                            placeholder="Search Here" required>
                                                    <button type="submit" class="search-btn">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                </div>
                                            </form>
                                            <-- <form>
                                                <div class="form-input">
                                                    <input id="search" type="text" value="{{ old('keyword', request()->keyword) }}" placeholder="Search for product...">
                                                </div>
                                            </form> -->
                                        <!-- </div> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">

            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="frontend/assets2/images/logo100.png" alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-collapse show collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="current dropdown">
                                <a href="{{route('home')}}">Home</a>
                            </li>

                            <li class=""><a href="{{route('shop.index')}}">Products</a></li>

                            <li class="dropdown">
                                    <a href="javascript:void(0);">Categories</a>
                                    <ul class="single-dropdown">
                                        @foreach($shop_categories_menu as $global_category)
                                            <li>
                                                <a href="{{ route('shop.index', $global_category->slug) }}">
                                                    {{ $global_category->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                            </li>

                            

                            <li class="dropdown">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="single-dropdown">
                                        @include('partials.frontend.pages')
                                    </ul>
                            </li>

                            

                            <li class=""><a href="{{route('contact.index')}}">contact</a></li>

                            <li class=""><a href="{{route('cart.index')}}">cart</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
                
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->
</header>









