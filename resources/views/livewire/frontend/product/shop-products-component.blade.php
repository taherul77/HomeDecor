<div class="sidebar-page-container">
    <div class="auto-container">
        <div>
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12">
                    <div class="our-shop">
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
                                        <div class="product-furit-action">
                                            <a wire:click.prevent="addToCart('{{ $product->id }}')"
                                                class="furit-animate-left" title="Add To Cart">
                                                <i class="fa fa-shopping-cart"style="font-size: 25px;"></i>
                                            </a>
                                            <a wire:click.prevent="addToWishList('{{ $product->id }}')"
                                                class="furit-animate-right" title="Wishlist">
                                                <i class="fa fa-heart"style="font-size: 25px;"></i>
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
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12">
                    <aside class="sidebar">

                        <p>
                            Showing {{ $products->firstItem() }} - {{ $products->lastItem() }} of
                            {{ $products->total() }} results
                        </p>
                    </aside>
                    <div wire:ignore class="shop-selector">
                        <label>Sort By :</label>
                        <select wire:model="sortingBy">
                            <option value="default">Default sorting</option>
                            <option value="popularity">Popularity</option>
                            <option value="low-high">Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {!! $products->appends(request()->all())->onEachSide(1)->links() !!}
        </div>
    </div>
</div>
</div>
