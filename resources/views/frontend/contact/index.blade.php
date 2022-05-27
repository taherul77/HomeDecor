@extends('layouts.app')
@section('title', 'Contact us')
@section('content')
    <div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Contact Us</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li> contact us</li>
                    
                    </ul>
            </div>
        </div>
    </div>


<div class="contact-page-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Form Column -->
                    <div class="form-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title"><span class="float-text">informaer</span>
                                <h2>Contact Information</h2>
                                @include('partials.frontend.flash')
                            </div>
                            <div class="contact-form">
                                <form method="post" action="{{ route('contact.store') }}">
                                @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="username" value="{{ old('name') }}" placeholder="Name">
                                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="Title" value="{{ old('title') }}" placeholder="Title">
                                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <textarea name="message" placeholder="Your message">{{ old('message') }}</textarea>
                                            @error('message')<span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12"><button
                                                class="theme-btn btn-style-three" type="submit"
                                                name="submit-form">Submit</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="contact-info">
                                <div class="row">
                                    <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <p><span>Phone: </span> {!! getSettingsOf('phone_number') !!}</p>
                                           
                                        </div>
                                    </div>
                                    <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <p><span>Address:</span> {!! getSettingsOf('address') !!}</p>
                                        </div>
                                    </div>
                                    <div class="info-block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <p><span>Email: </span> {!! getSettingsOf('site_email') !!}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="map-outer">
                                <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                                    data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                                    data-icon-path="images/icons/map-marker.png"
                                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection