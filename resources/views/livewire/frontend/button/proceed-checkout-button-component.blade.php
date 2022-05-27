<div x-data="{ showButton: @entangle('showButton') }">
    <a x-show="showButton" href="{{ route('checkout.index') }}"  class="text-right"><button type="submit" class="theme-btn proceed-btn">
        Proceed to checkout
       
    </a>
</div>
