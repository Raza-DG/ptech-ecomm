<div class="product-grid-item product woodmart-hover-quick  col-md-4 col-sm-4 col-6 type-product post-447 status-publish instock product_cat-beef product_cat-quick-cook-meals has-post-thumbnail shipping-taxable purchasable product-type-simple" data-loop="2" data-id="447" style="margin-bottom: 45px;">
    <div class="product-element-top">
        <a href="{{ route('product', $product->slug) }}" class="product-image-link">
            <div class="product-labels labels-rounded">
                @if(discount_in_percentage($product) > 0)
                    <span class="onsale product-label">&nbsp;-{{discount_in_percentage($product)}}%</span>
                @endif
            </div>
            <img width="300" height="300" src="{{ uploaded_asset($product->thumbnail_img) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" /> </a>
        <div class="woodmart-buttons wd-pos-r-t">

            <div class="woodmart-wishlist-btn wd-action-btn wd-wishlist-btn wd-style-icon">
                  <a href="#" class="link link--style-3"   data-placement="top" title="Remove from wishlist" onclick="removeFromWishlist({{ $wishlist->id }})">
                                <i class="la la-trash la-2x"></i>
                            </a>
            </div>
        </div>

        <div class="woodmart-add-btn wd-add-btn-replace">
            <a style="    width: 100%;" href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to cart') }}" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop" data-product_id="447" data-product_sku="" data-quantity="1" rel="nofollow"><span>{{ translate('Add to cart') }}</span></a>
        </div>
        <div class="quick-shop-wrapper">
            <div class="quick-shop-close wd-cross-button wd-size-s wd-with-text-left">
                <span>Close</span>
            </div>
            <div class="quick-shop-form">
            </div>
        </div>
    </div>
    <h3 class="product-title"><a href="{{ route('product', $product->slug) }}">{{  $product->getTranslation('name')  }}</a></h3>
    <span class="price"><span class="woocommerce-Price-amount amount">
            @if(home_base_price($product) != home_discounted_base_price($product))
                <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
            @endif
    <bdi> {{ home_discounted_base_price($product) }}</bdi>
        </span></span>
</div>
