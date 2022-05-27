@extends('layouts.app')
@section('title', 'Wishlist')
@section('content')
    <div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Wishlist</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li> wishlist</li>
                    
                    </ul>
                </div>
            </div>
    </div>
    <!-- wishlist item area -->
    



  
    <div class="cart-section">
            <div class="auto-container">
                <!--Cart Outer-->
                <div class="cart-outer">
                    <div class="table-outer">
			
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Move To Cart</td>
                                    
                                    <td class="text-right">Price</td>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::instance('wishlist')->content() as $item)
                                        <livewire:frontend.wishlist.wishlist-item-component :item="$item->rowId" :key="$item->rowId"/>
                                    @endforeach
                                    <livewire:frontend.message.wishlist-not-found-component />
                                
                            </tbody>
                        </table>
				   </div>
			    </div>
		   </div>
</div>
@endsection

