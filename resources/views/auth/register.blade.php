@extends('layouts.app')
@section('title', 'Registration')
@section('content')

    <div class="page-title" style="background-image: url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Register</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
    </div>

    <div id="login-form" class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="login">
                        <div class="login-form register-form">
                            <div class="form-group">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first_name" class="text-small text-uppercase">{{ __('First Name') }}</label>
                                                <input id="first_name" type="text" class="form-control form-control-lg" name="first_name" value="{{ old('first_name') }}" placeholder="First Name">
                                                @error('first_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="last_name" class="text-small text-uppercase">{{ __('Last Name') }}</label>
                                                <input id="last_name" type="text" class="form-control form-control-lg" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name">
                                                @error('last_name')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username" class="text-small text-uppercase">{{ __('Username') }}</label>
                                                <input id="username" type="text" class="form-control form-control-lg" name="username" value="{{ old('username') }}" placeholder="Username">
                                                @error('username')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email" class="text-small text-uppercase">{{ __('E-Mail Address') }}</label>
                                                <input id="email" type="email" class="form-control form-control-lg" value="{{ old('email') }}" name="email" placeholder="Enter your Email">
                                                @error('email')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="phone" class="text-small text-uppercase">{{ __('Phone') }}</label>
                                                <input id="phone" type="number" class="form-control form-control-lg" name="phone" placeholder="Enter your Phone Number">
                                                @error('phone')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="text-small text-uppercase">{{ __('New Password') }}</label>
                                                <input id="password" type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password">
                                                @error('password')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password-confirm" class="text-small text-uppercase">{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" placeholder="Confirm Password">
                                                @error('password-confirm')<span class="text-danger" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label text-small" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="theme-btn btn-style-one">
                                            {{ __('Register') }}
                                        </button>
                                        @if(Route::has('login'))
                                            <a class="theme-btn btn-style-one" href="{{ route('login') }}">
                                                {{ __('Login?') }}
                                            </a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
