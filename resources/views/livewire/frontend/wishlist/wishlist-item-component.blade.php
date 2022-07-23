<tr x-data="{ show: true }" x-show="show">
    <td class="product-thumbnail">
        @if($wishlistItem->model->firstMedia)
            <a href="{{ route('product.show', $wishlistItem->model->slug) }}">
                <img src="{{ asset('frontend/assets2/images/resource/' . $wishlistItem->model->firstMedia->file_name) }}"
                     alt="{{ $wishlistItem->model->name }}" width="70">
            </a>
        @else
            <img src="{{ asset('frontend/assets2/images/resource/products/10.jpg') }}" alt="{{ $wishlistItem->model->name }}" width="70"/>
        @endif
    </td>
    <td class="product-name"><a href="{{ route('product.show', $wishlistItem->model->slug) }}">{{ $wishlistItem->model->name }}</a></td>
    <td class="product-name">
        <a wire:click="moveToCart('{{ $wishlistItem->rowId }}')" x-on:click="show = false" style="cursor: pointer;" class="text-primary">move to cart</a>
    </td>
    <td class="product-price-cart">
        <span class="amount">&#2547;{{ $wishlistItem->model->price }}</span>
    </td>
    <td>
        <a wire:click.prevent="removeFromWishlist('{{ $wishlistItem->rowId }}')"
           x-on:click="show = false"
           style="cursor: pointer;">
            <i class="fas fa-trash-alt text-muted"></i>
        </a>
    </td>
</tr>
