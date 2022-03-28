@php
if(auth()->user() != null) {
    $user_id = Auth::user()->id;
    $cart = \App\Models\Cart::where('user_id', $user_id)->get();
} else {
    $temp_user_id = Session()->get('temp_user_id');
    if($temp_user_id) {
        $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
    }
}

@endphp
<div class="widget_shopping_cart_content">
    <div class="shopping-cart-widget-body woodmart-scroll has-scrollbar">
        <div class="woodmart-scroll-content" tabindex="0" style="right: -17px;">
            @php
                $total = 0;
            @endphp
            @if(isset($cart) && count($cart) > 0)
                <ul class="cart_list product_list_widget woocommerce-mini-cart ">
                    @foreach($cart as $key => $cartItem)
                        @php
                            $product = \App\Models\Product::find($cartItem['product_id']);
                            $total = $total + $cartItem['price'] * $cartItem['quantity'];
                        @endphp
                        @if ($product != null)
                            <li class="woocommerce-mini-cart-item mini_cart_item" data-key="a0ff999fbaa58eb43ab5627948516fe4">
                                <a href="{{ route('product', $product->slug) }}" class="cart-item-link">Show</a>
                                <a href="javascript:;" onclick="removeFromCart({{ $cartItem['id'] }})" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="401" data-cart_item_key="{{ $cartItem['id'] }}" data-product_sku="{{ $cartItem['product_id'] }}">×</a> <a href="{{ route('product', $product->slug) }}" class="cart-item-image">
                                    <img width="300" height="300" src="{{ uploaded_asset($product->thumbnail_img) }}"
                                         data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                         alt="{{  $product->getTranslation('name')  }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" loading="lazy"> </a>
                                <div class="cart-info">
                                    <span class="product-title">{{  $product->getTranslation('name')  }}</span>

                                    <span class="quantity">{{ $cartItem['quantity'] }} × <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">{{ single_price($cartItem['price']) }} </span></bdi></span></span>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul><!-- end product list -->
            @else
                <div class="text-center p-3">
                    <i class="las la-frown la-3x opacity-60 mb-3"></i>
                    <h3 class="h6 fw-700">{{translate('Your Cart is empty')}}</h3>
                </div>
            @endif
        </div>
        <div class="woodmart-scroll-pane" style="display: none;">
            <div class="woodmart-scroll-slider" style="height: 448px; transform: translate(0px, 0px);"></div>
        </div>
    </div>

    <div class="shopping-cart-widget-footer">

        <p class="woocommerce-mini-cart__total total">
            <strong>{{translate('Subtotal')}}:</strong> <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">{{ single_price($total) }} </span></bdi></span>
        </p>

        <div class="wc-free-shipping" style="color:#000000;font-size:16px;">
            <center>
                <p class="eux-free-shipping-treshold">You are <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">AED </span>130</bdi></span> away from <br><b>FREE SHIPPING.</b></p>
            </center>
            <p></p>
        </div>
        <p class="woocommerce-mini-cart__buttons buttons"><a href="{{ route('cart') }}" class="button btn-cart wc-forward" style="padding: 10px; display: block;">{{translate('View cart')}}</a>
            @if (Auth::check())
                <a href="{{ route('checkout.shipping_info') }}" class="button checkout wc-forward">{{translate('Checkout')}}</a></p>
        @endif
    </div>
</div>

