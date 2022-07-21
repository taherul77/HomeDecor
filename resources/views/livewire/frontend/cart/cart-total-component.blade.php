<div class="col-md-5 ml-auto">
    <div class="cart-page-total pt-0">
        @if($cartTotal != 0)
        <h2>Cart totals</h2>
        <ul>
            <li>Subtotal<span>&#2547;{{ $cartSubTotal }}</span></li>
            @if(session()->has('coupon'))
                <li>
                    Discount
                    <small>({{ getNumbersOfCart()->get('discountCode') }})</small>
                    <span>&#2547;{{ $cartDiscount }}</span>
                </li>
            @endif
            @if(session()->has('shipping'))
                <li>
                    Shipping
                    <small>({{ getNumbersOfCart()->get('shippingCode') }})</small>
                    <span>&#2547;{{ $cartShipping }}</span>
                </li>
            @endif
            <li>Tax(5%)<span>&#2547;{{ $cartTax }}</span></li>
            <li>Total<span>&#2547;{{ $cartTotal }}</span></li>
        </ul>
        <div class="coupon-all">
            <div class="coupon">
                @if(!session()->has('coupon'))
                    <form wire:submit.prevent="applyDiscount()">
                        <input type="text" wire:model="couponCode" class="input-text" placeholder="Coupon code" required>
                        <input class="theme-btn coupon-btn" value="Apply coupon" type="submit">
                    </form>
                @endif
                @if(session()->has('coupon'))
                    <input type="button" wire:click.prevent="removeCoupon()" class="button" value="Remove coupon">
                @endif
            </div>
        </div>
        @endif
    </div>
</div>
