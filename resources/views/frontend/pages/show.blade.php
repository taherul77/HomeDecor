@extends('layouts.app')
@section('title', $static_page->title)
@section('content')

<div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images//background/10.jpg') }}')">
        <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>{{ $static_page->title }}</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>{{ $static_page->title }}</li>
                    </ul>
                    
                </div>
        </div>
            
 </div>
 <div class="about-section" style="background-image: url('{{ asset('frontend/assets2/images//background/1.jpg') }}')">
            <div class="auto-container">
                <div class="row no-gutters">

                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                                <h2>{{ $static_page->title }}</h2>
                            </div>
                            <div class="image-box wow fadeInRight" data-wow-delay='600ms'>
                                <figure class="alphabet-img"><img src="{{ asset('frontend/assets2/images/resource/alphabet-image.png') }}" alt="">
                                </figure>
                                <figure class="image"><img src="{{ asset('frontend/assets2/images/resource/image-1.jpg') }}" alt=""></figure>
                            </div>
                        </div>
                    </div>

                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <div class="content-box">
                                
                                    <div>
                                        <div class="title">
                                            
                                            <h4>{{ $static_page->title }}</h4>
                                        </div>

                                        <div class="text">{!! $static_page->content !!}
                                        </div>
                                    </div>
                                    <div>Last update: {{ $static_page->updated_at }}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
 </div>

@endsection
