@extends('layouts.app')
@section('title', $product->name)
@section('content')
<div class="page-title" style="background-image:url('{{ asset('frontend/assets2/images/background/10.jpg') }}')">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="title-box">
                        <h1>Shop Single</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">home</a></li>
                        <li>Shop Single</li>
                    
                    </ul>
            </div>
        </div>
    </div>








<div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Content Side-->
                    <div class="content-side col-xl-9 col-lg-8 col-md-12">
                        <div class="shop-single">
                            <div class="product-details">
                                <!--Basic Details-->
                                <div class="basic-details">
                                    <div class="row clearfix">
                                        <div class="image-column col-md-6 col-sm-12">
                                        @if($product->media_count)


                                            <div class="product-details-large tab-content">
                                                @foreach ($product->media as $media)
                                                    <div class="tab-pane {{ $loop->index == 0 ? 'active' : '' }} show fade"
                                                        id="pro-details{{ $loop->index }}" role="tabpanel">
                                                        <div class="image-box">
                                                            @if($product->media)
                                                                <a href="{{ asset('frontend/assets2/images/resource/' . $media->file_name ) }}">
                                                                    <img src="{{ asset('frontend/assets2/images/resource/'.$media->file_name) }}"
                                                                        alt="{{ $product->name }}">
                                                                </a>
                                                            @else
                                                                <img src="{{ asset('frontend/assets2/images/resource/products/10.jpg' ) }}"
                                                                    alt="{{ $product->name }}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endforeach
                                                </div>
                                                 <div class="product-details-small nav mt-12" role=tablist>
                                                    @foreach ($product->media as $media)
                                                        <a class="{{ $loop->index == 0 ? 'active' : '' }} mr-12"
                                                        href="#pro-details{{ $loop->index }}" data-toggle="tab" role="tab"
                                                        aria-selected="true">
                                                            <img style="width: 90px;" src="{{ asset('frontend/assets2/images/resource/' . $media->file_name ) }}"
                                                                alt="{{ $product->name }}">
                                                        </a>
                                                    @endforeach
                                                </div>
                                         @else
                                                <img src="{{ asset('frontend/assets2/images/resource/products/10.jpg' ) }}" alt="{{ $product->name }}">
                                         @endif
                                                            
                                        </div>
                                        <div class="info-column col-md-6 col-sm-12">
                                            <div class="details-header">
                                            <h3>{{ $product->name }}</h3>
                                                <!-- <div class="rating"><span class="fa fa-star"></span> -->

                                                <!-- <div class="quick-view-number">
                                                    <span class="score">
                                                        <div class="score-wrap">
                                                            @if($product->approved_reviews_avg_rating)
                                                                @for($i = 0; $i < 5; $i++)
                                                                    <span class="stars-active">
                                                                        <i class="{{ round($product->approved_reviews_avg_rating) <= $i ? 'far' : 'fas' }} fa-star"></i>
                                                                    </span>
                                                                @endfor
                                                            @else
                                                                @for($i = 0; $i < 5; $i++)
                                                                    <i class="far fa-star"></i>
                                                                @endfor
                                                            @endif
                                                        </div>
                                                    </span>
                                                    <span>{{ $product->approved_reviews_count }} Ratting (S)</span>
                                                </div> -->




                                                <div class="item-price"><span>&#2547;{{ $product->price }}</span></div>
                                                <p><?= $product->description ?></p>
                                                <livewire:frontend.product.single-product-cart-component :product="$product"/>


                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="product-description-review-area pb-90">
        <div class="container">
            <div class="product-description-review text-center">
                <div class="description-review-title nav" role=tablist>
                    <a class="active" href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                        Reviews ({{ $product->approved_reviews_count }})
                    </a>
                    <a href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                        Description
                    </a>
                </div>
                <div class="description-review-text tab-content">
                    <div class="tab-pane fade" id="pro-dec" role="tabpanel">
                        <p>{!! $product->details !!}</p>
                    </div>
                    <div class="tab-pane active show fade" id="pro-review" role="tabpanel">
                        <div class="page-blog-details section-padding--lg bg--white pt-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 col-12">
                                        <livewire:frontend.product.single-product-review-component :product="$product" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:frontend.product.related-products-component :relatedProducts="$relatedProducts" />
@endsection