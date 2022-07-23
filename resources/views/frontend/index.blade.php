@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

<!-- promotion area end -->

@include('partials.frontend.sliders')
<!-- categories area start -->
<!-- promotion area start -->
@if($coupon)
<div class="p-1 text-white text-center"
     style="background-image: url('{{ asset('frontend/img/bg/12.jpg') }}')">
    {{ $coupon->value }}{{ $coupon->type == 'percentage' ? '%' : '' }} off use ({{ $coupon->code }})
</div>
@endif

<div class="container-fluid">
    <div class="pb-50">
        <div class="section-title-furits text-center">
            <img src="{{ asset('frontend/assets2/images/resource/hdlogo2.png') }}" alt="">
            <h2>BROWSE OUR CATEGORIES</h2>
        </div>
        <br>
        <section class="specialize-section">
            <div class="auto-container">
           
                <div class="services-carousel-two owl-carousel owl-theme">
                    <!-- Service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                        <a class="category-item" href="{{ route('shop.index', $categories[0]->slug ?? '') }}">
                        @if($categories[0]->cover ?? '')
                            <img class="img-fluid"
                                 src="{{ asset('frontend/assets2/images/cat/' . $categories[0]->cover ?? '') }}"
                                 alt="{{ $categories[0]->name ?? '' }}">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                        @endif
                        <strong class="category-item-title">{{ $categories[0]->name ?? '' }}</strong>
                    </a>
                        </div>
                    </div><!-- Service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                            <a class="category-item" href="{{ route('shop.index', $categories[1]->slug ?? '') }}">
                        @if($categories[0]->cover ?? '')
                            <img class="img-fluid"
                                 src="{{ asset('frontend/assets2/images/cat/' . $categories[1]->cover ?? '') }}"
                                 alt="{{ $categories[1]->name ?? '' }}">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                        @endif
                        <strong class="category-item-title">{{ $categories[1]->name ?? '' }}</strong>
                    </a>
                            </div>
                        </div>
                    </div><!-- Service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                            <a class="category-item" href="{{ route('shop.index', $categories[2]->slug ?? '') }}">
                        @if($categories[0]->cover ?? '')
                            <img class="img-fluid"
                                 src="{{ asset('frontend/assets2/images/cat/' . $categories[2]->cover ?? '') }}"
                                 alt="{{ $categories[2]->name ?? '' }}">
                        @else
                            <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                        @endif
                        <strong class="category-item-title">{{ $categories[2]->name ?? '' }}</strong>
                    </a>
                            </div>
                        </div>
                    </div><!-- Service Block -->
                    <div class="service-block-two">
                        <div class="inner-box">
                            <div class="image-box">
                            <a class="category-item" href="{{ route('shop.index', $categories[3]->slug ?? '') }}">
                                @if($categories[0]->cover ?? '')
                                    <img class="img-fluid"
                                        src="{{ asset('frontend/assets2/images/cat/' . $categories[3]->cover ?? '') }}"
                                        alt="{{ $categories[3]->name ?? '' }}">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontend/assets/categories/cat-img-1.jpg') }}" alt="">
                                @endif
                                <strong class="category-item-title">{{ $categories[3]->name ?? '' }}</strong>
                            </a>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>
            </div>
        </section>
    </div>
</div>
<!-- categories area end -->
<!-- TRENDING PRODUCTS -->
<div class="container">
    <livewire:frontend.product.top-trending-products />
</div>

<section class="team-section">
            <div class="auto-container">
                <div class="sec-title text-center"><span class="title float-text">Team</span>
                    <h2>Our Team</h2>
                </div>
                <div class="row clearfix ">
                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><img src="{{ asset('frontend/assets2/images/resource/sadia.jpg') }}">
                                </div>
                                
                                <h3 class="name"><a href="https://www.facebook.com/taz.islam.5074"> Salma Akter </a></h3>
                            </div><span class="designation"></span>
                        </div>
                    </div><!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><img src="{{ asset('frontend/assets2/images/resource/ta.jpg') }}">
                                </div>
                                
                                <h3 class="name"><a href="https://www.facebook.com/taz.islam.5074"> Sk Taherul Islam Taz </a></h3>
                            </div><span class="designation"></span>
                        </div>
                    </div><!-- Team Block -->
                    
                </div>
            </div>
        </section>




        <section class="error-section">
            <div class="auto-container">
            <div class="sec-title text-center"><span class="title float-text">CHOOSE US </span>
                    <h2>WHY CHOOSE US ?</h2>
            </div>
               
                <div class="inner-container clearfix">
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>01</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>Free Shipping.</h4>
                                <p>Home decor is short for Home Decoration and it is the art of making your home look nice.</p>
                            </div>
                        </div>
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>02</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>100% ORIGINAL PRODUCTS.</h4>
                                <p>Home decor is short for Home Decoration and it is the art of making your home look nice.</p>
                            </div>
                        </div>
                        <div class="single-fruits-choose">
                            <div class="fruits-choose-serial">
                                <h3>03</h3>
                            </div>
                            <div class="fruits-choose-content">
                                <h4>Online Support.</h4>
                                <p>Home decor is short for Home Decoration and it is the art of making your home look nice.</p>
                            </div>
                        </div>
                </div>
               
            </div>
        </section>

        





                     
                    
           

<!-- TRENDING PRODUCTS -->



@endsection





        