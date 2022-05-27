<!-- <ul>
    <li><a href="{{ route('wishlist.index') }}"><i class="ti-heart"></i>({{ $wishlistCount }}) Wishlist</a></li>
</ul> -->

<a href="{{ route('wishlist.index') }}"><i class="fa fa-shopping-basket"></i><span class="count">{{ $wishlistCount }}</span></a>
