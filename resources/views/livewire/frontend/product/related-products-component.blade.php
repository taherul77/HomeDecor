<div class="product-area pb-95">
    <div class="container">
        <div class="text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="row">
            @forelse($relatedProducts as $product)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-fruit-wrapper mb-60">
                        <div class="product-fruit-img">
                            @if($product->firstMedia)
                                <img src="{{ asset('frontend/assets2/images/resource/'.$product->firstMedia->file_name) }}"
                                     alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('frontend/assets2/images/resource/products/10.jpg' ) }}" alt="">
                            @endif
                            <div class="product-furit-action">
                                <a wire:click.prevent="addToCart('{{ $product->id }}')"
                                   class="furit-animate-left" title="Add To Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                                <a wire:click.prevent="addToWishList('{{ $product->id }}')"
                                   class="furit-animate-right" title="Wishlist">
                                    <i class="fa fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <a class="" href="{{route('product.show', $product->slug)}}">{{ $product->name }}</a><br>
                            <span class="small">&#2547;{{ $product->price }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p>No products found.</p>
            @endforelse
        </div>
    </div>
</div>
