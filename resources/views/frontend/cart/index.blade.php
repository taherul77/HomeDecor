@extends('layouts.app')
@section('title', 'Cart')
@section('content')

    <div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Shopping Cart</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
       

        <section class="cart-section">
            <div class="auto-container">
                <!--Cart Outer-->
                <div class="cart-outer">
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th>images</th>
                                    <th class="prod-column">product</th>
                                    <th class="price">Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::instance('default')->content() as $item)
                                    <livewire:frontend.cart.cart-item-component :item="$item->rowId" :key="$item->rowId"/>
                                @endforeach
                                <livewire:frontend.message.cart-not-found-component />
                            </tbody>
                        </table>
                    </div>
                    
                </div>
              
            </div>
        </section>

            <!-- cart total -->
            <div class="row">
                <livewire:frontend.cart.cart-total-component/>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <a href="{{route('shop.index')}}"
                       class="theme-btn proceed-btn">
                        <i class="fas fa-long-arrow-alt-left mr-1"></i>
                        Continue to shopping
                    </a>
                </div>
                @if(Cart::instance('default')->count())
                <div class="column pull-right col-lg-6 col-md-6 col-sm-12">
                    <livewire:frontend.button.proceed-checkout-button-component />
                </div>
                @endif
            </div>
       
    </div>
@endsection
