@if($cartCount > 0)
<a href="{{ route('cart') }}" wire:navigate
   class="fc-nav-icon-btn {{ request()->routeIs('cart') ? 'on' : '' }}">
    <x-ri-shopping-bag-4-fill class="size-4" />
    <span class="absolute inline-flex items-center justify-center w-4 h-4 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full"
          style="top:0;right:0;">{{ $cartCount }}</span>
</a>
@endif
