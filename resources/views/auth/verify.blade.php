@extends('layouts.app')
@section('title', 'Verify Email')
@section('content')


<div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>{{ __('Verify Your Email Address') }}</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li> {{ __('Verify Your Email Address') }}</li>
                    
                    </ul>
            </div>
        </div>
    </div>
    
    <!-- login-area start -->
    <div id="login-form" class="register-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="form-group">

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
