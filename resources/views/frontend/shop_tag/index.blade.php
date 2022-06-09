@extends('layouts.app')
@section('title', 'Shop '.$slug)
@section('content')

<section class="page-title" style="background-image:url('{{ asset('frontend/assets2/images//background/10.jpg') }}')">
        
        <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Tag</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>shop</li>
                    </ul>
                    
                </div>
        </div>
    </section>
    <div class="shop-page-wrapper shop-page-padding ptb-100">
        <div class="container-fluid m-auto">
            <div class="row">
                <div class="col-lg-3">
                    @include('partials.frontend.shop.sidebar')
                </div>
                <div class="col-lg-9">
                    <livewire:frontend.product.shop-products-tag-component  :slug="$slug"/>
                </div>
            </div>
        </div>
    </div>
@endsection

