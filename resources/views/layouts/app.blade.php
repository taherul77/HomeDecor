<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<!-- 
    <title>Home Decor</title> -->
    
    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Home Decor')</title>

    <!-- Stylesheets -->
    <link href="{{ asset('frontend/assets2/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets2/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets2/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets2/css/animate.css') }}">
    <link href="{{ asset('frontend/assets2/css/color-switcher-design.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets2/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets2/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}"> -->
    <link href="{{ asset('frontend/assets2/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets2/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">
    


    <!--Color Switcher Mockup-->
    <link href="{{ asset('frontend/assets2/css/color-switcher-design.css') }}" rel="stylesheet">

    <!--Color Themes-->
    <link id="theme-color-file" href="{{ asset('frontend/assets2/css/color-themes/default-theme.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('frontend/assets2/images/favicon1.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('frontend/assets2/images/favicon1.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Other Css-->
   <!-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icofont.css') }}"> -->
     <!-- <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">  -->
     <!-- <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}"> -->
     <!-- <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> -->
     <!-- <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">  -->

    <livewire:styles/>
    @yield('style')
</head>

<body>

    @include('partials.frontend.header')

    @include('partials.frontend.flash')

    @yield('content')

    @include('partials.frontend.footer')

    <!-- Color Palate / Color Switcher -->
    <div class="midl-left">
        <div class="color-palate">
            <div class="color-trigger"><i class="fa fa-cog"></i></div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="{{ asset('frontend/assets2/css/color-themes/default-theme.css') }}"></span>
                    <span class="palate green-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/green-theme.css') }}"></span>
                    <span class="palate blue-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/blue-theme.css') }}"></span>
                    <span class="palate orange-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/orange-theme.css') }}"></span>
                    <span class="palate purple-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/purple-theme.css') }}"></span>
                    <span class="palate teal-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/teal-theme.css') }}"></span>
                    <span class="palate brown-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/brown-theme.css') }}"></span>
                    <span class="palate redd-color" data-theme-file="{{ asset('frontend/assets2/css/color-themes/redd-color.css') }}"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Color Switcher -->

    <livewire:scripts/>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-circle-o-up"></span>
    </div>
    <script src="{{ asset('frontend/assets2/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/popper.min.js') }}"></script>
    <!-- <script src="{{ asset('frontend/assets2/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('frontend/assets2/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/mixitup.js') }}"></script>
    <script src="{{ asset('frontend/assets2/js/script.js') }}"></script>
    <!-- Color Setting -->

    <script src="{{ asset('frontend/assets2/js/color-settings.js') }}"></script>




    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/alert-message.js') }}"></script>
    <script src="{{ url('https://kit.fontawesome.com/8003f9e0e2.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            let bloodhound = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                remote: {
                    url: '{{url("search")}}?productName=%QUERY%', //'/user/find?q=%QUERY%',
                    wildcard: '%QUERY%'
                },
            });

            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: bloodhound,
                limit: 10,
                display: function(data) {
                    return data.name  //Input value to be set when you select a suggestion.
                },
                templates: {
                    empty: [
                        '<div class="list-group-item">There are no matching search results</div>'
                    ],
                    header: [
                        '<div class="list-group search-results-dropdown">'
                    ],
                    suggestion: function(data) {
                        return '<div style="font-weight:normal; width:100%" class="list-group-item"><a href="{{url('product')}}/'+data.slug+'">' + data.name + '</a></div></div>'
                    }
                }
            });
        });
    </script>

    @yield('script')
</body>

</html>
