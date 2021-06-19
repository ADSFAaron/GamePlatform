<div class="wrap-icon-section minicart">
    <a href="{{route('product.cart')}}" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            @if(Cart::count() > 0)
                <span class="index">{{Cart::count()}} items</span>
            @endif
            <span class="title">{{__('string.cart')}}</span>
        </div>
    </a>
</div>
