<div class="other-options clearfix">
    <div class="other-options clearfix" >
        <span wire:click="decreaseQuantity()" class="quantity-spinner">
            <i class="fas fa-caret-left"></i>
        </span>
        <span class="cartQty">{{ $quantity }}
        </span>
        <span wire:click="increaseQuantity()" class="quantity-spinner">
            <i class="fas fa-caret-right"></i>
        </span>
    </div>
    <div class="other-options clearfix" >
        <button wire:click="addToCart()" class="theme-btn btn-style-one add-to-cart">add to cart</>
    </div>

</div>
