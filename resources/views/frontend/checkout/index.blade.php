@extends('layouts.app')
@section('title', 'Checkout')
@section('content')
<div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Checkout</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li> Checkout</li>
                    
                    </ul>
            </div>
        </div>
    </div>



    <div class="checkout-area pt-5 pb-5">
        <div class="container">
            <div id="success" style="display: none"
                 class="col-md-8 text-center h3 p-4 bg-success text-light rounded">
                The purchase was completed successfully
            </div>
            <div class="card-body">
                <livewire:frontend.checkout.checkout-component />
            </div>
        </div>
    </div>
@endsection


