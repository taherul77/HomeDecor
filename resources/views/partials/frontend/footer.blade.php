<footer class="main-footer alternate" style="background-image: url(images/background/5.jpg);">
            <div class="auto-container">
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row">
                        <!--Big Column-->
                        <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget about-widget">
                                        <div class="footer-logo">
                                            <figure><a href="{{ route('home') }}"><h1>Home Decor</h1></a>
                                            </figure>
                                        </div>
                                        <div class="widget-content">
                                            <div class="text">Home decor is short for Home Decoration and
                                                 it is the art of making your home look nice. .</div>
                                        </div>
                                    </div>
                                </div>
                                <!--Footer Column-->
                                <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget recent-posts">
                                        <h2 class="widget-title">Home Decor</h2>
                                        <!--Footer Column-->
                                        <div class="widget-content">
                                            <div class="post">
                                                <div class="thumb"><a href="{{ route('home') }}"><img
                                                            src="images/resource/post-thumb-1.jpg"></a></div>
                                                <h4>Daffodil Smart City, Ashulia,
                                                    Dhaka 1341 Khagan, Dhaka Division, Bangladesh</h4>
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                            <div class="row clearfix">
                                <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h2 class="widget-title">About</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                            
                                <li><a href="{{ route('cart.index') }}"><img
                                            src="{{ asset('frontend/img/icon-img/41.png') }}" alt="hhhhhh"> Cart</a></li>
                                <li>
                                    <a href="{{ route('user.dashboard') }}"><img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        My Account</a>
                                </li>
                                @guest
                                    @if (route('register'))
                                        <li>
                                            <a href="{{ route('register') }}">
                                                <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                                Register
                                            </a>
                                        </li>
                                    @endif
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                        <h2 class="widget-title">Information</h2>
                                        <div class="widget-content">
                                            <ul class="list">
                            
                                <li>
                                    
                                    <a href="{{ route('page.show', 'about') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        About
                                    </a>
                                </li>
                                <li>
                                    
                                <a href="{{ route('contact.index') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('page.show', 'privacy-policy') }}">
                                        <img src="{{ asset('frontend/img/icon-img/41.png') }}" alt="">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle black-bg-2 pt-35 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-car"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Free Shipping</h3>
                            <p>Free Shipping on Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-shield"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Money Guarentee</h3>
                            <p>Free Shipping on Bangladesh</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-services-wrapper mb-30">
                        <div class="footer-services-icon">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <div class="footer-services-content">
                            <h3>Online Support</h3>
                            <p>Free Shipping on Bangladesh</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <img src="{{ asset('frontend/img/icon-img/3.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="food-copyright black-bg-6 ptb-30">
        <div class="container text-center">
            <p class="copyright text-center">
                ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                Created by
                <a href="" target="_blank" class="text-primary">Rainbow</a>
            </p>
        </div>
    </div>
</footer>


