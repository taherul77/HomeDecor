<div wire:ignore id="all-products" class="product-style-area pt-130 pb-30 wow fadeInUp">
    <div class="section-title-furits text-center mb-95">
        <img src="{{ asset('frontend/img/icon-img/49.png') }}" alt="">
        <h2>TOP TRENDING PRODUCTS</h2>
    </div>
    <div class="container">
    <div class="row clearfix">


@forelse($products as $product)
<div class="shop-item col-xl-4 col-lg-6 col-md-6 col-sm-12">
    <div class="inner-box">
        <div class="image">
            @if($product->firstMedia)
            <img src="{{ asset('frontend/assets2/images/resource/products/' . $product->firstMedia->file_name ) }}"
                alt="{{ $product->name }}">
            @else
            <img src="{{ asset('frontend/assets2/images/resource/products/1.jpg' ) }}"
                alt="">
            @endif
            <div  class="product-furit-action">
                <a wire:click.prevent="addToCart('{{ $product->id }}')"
                    class="furit-animate-left" title="Add To Cart">
                    <i class="fa fa-cart-plus" style="font-size: 25px;"></i>
                </a>
                <a  wire:click.prevent="addToWishList('{{ $product->id }}')"
                    class="furit-animate-right" title="Wishlist">
                    <i class="fa fa-heart" style="font-size: 25px;"></i>
                </a>
            </div>

        </div>
        <div class="clearfix">
            <h4>
                <a href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a>
            </h4>
            <span>${{ $product->price }}</span>
            <div>
                @if($product->tags->count() > 0)
                @foreach($product->tags as $tag)
                <label for="" class="small">
                    <a href="{{ route('shop.tag', $tag->slug) }}">
                        {{ $tag->name }}
                        <span>{{ $loop->last ? '' : ',' }}</span>
                    </a>
                </label>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@empty
<p>No products found.</p>
@endforelse
</div>
    </div>
</div>






