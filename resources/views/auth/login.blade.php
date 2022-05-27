@extends('layouts.app')
@section('title', 'Login')
@section('content')
  
    <div class="page-title" style="background-image: url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Login</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('register')}}">register</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- login-area start -->
    <div id="login-form" class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="login">
                        <div class="login-form">
                            <div class="form-group">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="username">Username*</label>
                                        <input type="text" name="username" value="{{ old('username') }}" placeholder="Username">
                                        @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Password*</label>
                                        <input id="pass" type="password" name="password" placeholder="password">
                                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <label class="show">Show password</label>
                                    <label class="hide"></label>
                                    <div class="form-group row mb-0">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="pull-right">
                                        <div class="form-group no-margin"><button class="theme-btn btn-style-one">{{ __('Login') }}</button></div>
                                    </div>
                                    
                                    <div class="form-group mt-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="form-group mt-4 mb-0">
                                        <a href="{{ route('social_login', 'facebook') }}" class="btn btn-block" style="background-color: #1877F2; color: #FFFFFF">
                                            Login with Facebook
                                        </a>
{{--                                    <a href="{{ route('social_login', 'twitter') }}" class="btn btn-block" style="background-color: #1DA1F2; color: #FFFFFF">--}}
{{--                                        Login with Twitter--}}
{{--                                    </a>--}}
{{--                                    <a href="{{ route('social_login', 'google') }}" class="btn btn-block" style="border-color: #1877F2; color: black">--}}
{{--                                        Login with Google--}}
{{--                                    </a>--}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login-area end -->
@endsection

@section('script')
    <script>

        $('.show').click(function (){
            $(this).text('')
            $(':password').attr('type', 'text')
            $('.hide').text('Hide password')
        });

        $('.hide').click(function (){
            $(this).text('');
            $('#pass').attr('type', 'password')
            $('.show').text('Show password')
        });

    </script>

    {{--    <script>--}}
    {{--        let vm = new Vue({--}}
    {{--            el: "#login-form",--}}
    {{--            data: {--}}
    {{--                fieldType: "password",--}}
    {{--            },--}}
    {{--            methods: {--}}
    {{--                switchField() {--}}
    {{--                    this.fieldType = this.fieldType === "password" ? "text" : "password";--}}
    {{--                }--}}
    {{--            },--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
