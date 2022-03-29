@extends('frontend.layouts.app')

@section('meta_title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
    <link rel="stylesheet" href="{{ static_asset('assets-ecom/css/product-details.css') }}">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $detailedProduct->meta_title }}">
    <meta itemprop="description" content="{{ $detailedProduct->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $detailedProduct->meta_title }}">
    <meta name="twitter:description" content="{{ $detailedProduct->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($detailedProduct->unit_price) }}">
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $detailedProduct->meta_title }}" />
    <meta property="og:type" content="og:product" />
    <meta property="og:url" content="{{ route('product', $detailedProduct->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}" />
    <meta property="og:description" content="{{ $detailedProduct->meta_description }}" />
    <meta property="og:site_name" content="{{ get_setting('meta_title') }}" />
    <meta property="og:price:amount" content="{{ single_price($detailedProduct->unit_price) }}" />
    <meta property="product:price:currency" content="{{ \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code }}" />
    <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    <link rel="stylesheet" href="{{ static_asset('assets-ecom/css/product-details.css') }}">
@endsection

@section('content')
<style>
 
@media only screen and (max-width: 600px) {    
 
.prodMain {
	padding: 5px;
   }
	
	 
}
.prodMain {
    max-width: 100% !important;
	}
	</style>
    <div class="container-fluid">
        <div class="row content-layout-wrapper align-items-start">
            <div data-zm-merchant="f91bbf48-799b-4c1c-b9e1-bb935d5ea204" data-env="production" data-require-checkout="false" data-zm-region="au" data-zm-price-max="1500" data-zm-price-min="1" data-zm-display-inline="false"></div>
            <div class="site-content shop-content-area col-12 breadcrumbs-location-summary content-with-products" role="main">
                <div class="container">
                </div>
                <div id="product-169" class="single-product-page single-product-content product-design-default tabs-location-standard tabs-type-tabs meta-location-add_to_cart reviews-location-tabs product-no-bg product type-product post-169 status-publish first instock product_cat-lamb product_cat-slow-cook-meats-lamb has-post-thumbnail shipping-taxable purchasable product-type-simple">

                    <div class="container">

                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="row product-image-summary-wrap">
                            <div class="product-image-summary col-lg-12 col-12 col-md-12">
                                <div class="row product-image-summary-inner">
                                    <div class="col-lg-6 col-12 col-md-6 product-images">
                                        <div class="sticky-top z-3 row gutters-10">
                                            @php
                                                $photos = explode(',', $detailedProduct->photos);
                                            @endphp
                                            <div class="col order-1 order-md-2">
                                                <div class="aiz-carousel product-gallery" data-nav-for='.product-gallery-thumb' data-fade='true' data-auto-height='true'>
                                                    @foreach ($photos as $key => $photo)
                                                        <div class="carousel-box img-zoom rounded">
                                                            <img
                                                                class="img-fluid lazyload"
                                                                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                                data-src="{{ uploaded_asset($photo) }}"
                                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                            >
                                                        </div>
                                                    @endforeach
                                                    @foreach ($detailedProduct->stocks as $key => $stock)
                                                        @if ($stock->image != null)
                                                            <div class="carousel-box img-zoom rounded">
                                                                <img
                                                                    class="img-fluid lazyload"
                                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                                    data-src="{{ uploaded_asset($stock->image) }}"
                                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                                >
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-auto w-md-80px order-2 order-md-1 mt-3 mt-md-0">
                                                <div class="aiz-carousel product-gallery-thumb" data-items='5' data-nav-for='.product-gallery' data-vertical='true' data-vertical-sm='false' data-focus-select='true' data-arrows='true'>
                                                    @foreach ($photos as $key => $photo)
                                                        <div class="carousel-box c-pointer border p-1 rounded">
                                                            <img
                                                                class="lazyload mw-100 size-50px mx-auto"
                                                                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                                data-src="{{ uploaded_asset($photo) }}"
                                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                            >
                                                        </div>
                                                    @endforeach
                                                    @foreach ($detailedProduct->stocks as $key => $stock)
                                                        @if ($stock->image != null)
                                                            <div class="carousel-box c-pointer border p-1 rounded" data-variation="{{ $stock->variant }}">
                                                                <img
                                                                    class="lazyload mw-100 size-50px mx-auto"
                                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                                    data-src="{{ uploaded_asset($stock->image) }}"
                                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                                >
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 col-md-6 woodmart-price-outside summary entry-summary">
                                        <div class="summary-inner">
                                            <div class="single-breadcrumbs-wrapper">
                                                <div class="single-breadcrumbs">
                                                    <nav class="woocommerce-breadcrumb">
                                                        <a href="{{route('home')}}" class="breadcrumb-link ">Home</a><a href="{{route('search')}}" class="breadcrumb-link ">Products</a>
                                                        <span class="breadcrumb-last"> {{ $detailedProduct->getTranslation('name') }}</span>
                                                    </nav>
                                                </div>
                                            </div>
         <h1 itemprop="name" class="product_title entry-title">{{ $detailedProduct->getTranslation('name') }}</h1>


                                            @if(home_price($detailedProduct) != home_discounted_price($detailedProduct))
                                                <div class="row no-gutters mt-3 mb-3">
                                                    <div class="col-sm-2">
                                                        <div class="opacity-50 my-2">{{ translate('Price')}}:</div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <div class="fs-20 opacity-60">
                                                            <del>
                                                                {{ home_price($detailedProduct) }}
                                                                @if($detailedProduct->unit != null)
                                                                    <span>/{{ $detailedProduct->getTranslation('unit') }}</span>
                                                                @endif
                                                            </del>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row no-gutters my-2 mb-3">
                                                    <div class="col-sm-12">
                                                        <div class="">
                                                            <strong class="h2 fw-600 text-primary fz_22">
                                                                {{ home_discounted_price($detailedProduct) }}
                                                            </strong>
                                                            @if($detailedProduct->unit != null)
                                                                <span class="opacity-70">/{{ $detailedProduct->getTranslation('unit') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="row no-gutters mt-3">
                                                    <div class="col-sm-12">
                                                        <div class="">
                                                            <strong class="h2 fw-600 text-primary fz_22">
                                                                {{ home_discounted_price($detailedProduct) }}
                                                            </strong>
                                                            @if($detailedProduct->unit != null)
                                                                <span class="opacity-70">/{{ $detailedProduct->getTranslation('unit') }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                            <form id="option-choice-form">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $detailedProduct->id }}">

                                                @if ($detailedProduct->choice_options != null)
                                                    @foreach (json_decode($detailedProduct->choice_options) as $key => $choice)

                                                        <div class="row no-gutters">
                                                            <div class="col-sm-2">
                                                                <div class="opacity-50 my-2">{{ \App\Models\Attribute::find($choice->attribute_id)->getTranslation('name') }}:</div>
                                                            </div>
                                                            <div class="col-sm-10">
                                                                <div class="aiz-radio-inline">
                                                                    @foreach ($choice->values as $key => $value)
                                                                        <label class="aiz-megabox pl-0 mr-2">
                                                                            <input
                                                                                type="radio"
                                                                                name="attribute_id_{{ $choice->attribute_id }}"
                                                                                value="{{ $value }}"
                                                                                @if($key == 0) checked @endif
                                                                            >
                                                                            <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center py-2 px-3 mb-2">
                                                        {{ $value }}
                                                    </span>
                                                                        </label>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                @endif

                                                @if (count(json_decode($detailedProduct->colors)) > 0)
                                                    <div class="row no-gutters">
                                                        <div class="col-sm-2">
                                                            <div class="opacity-50 my-2">{{ translate('Color')}}:</div>
                                                        </div>
                                                        <div class="col-sm-10">
                                                            <div class="aiz-radio-inline">
                                                                @foreach (json_decode($detailedProduct->colors) as $key => $color)
                                                                    <label class="aiz-megabox pl-0 mr-2" data-toggle="tooltip" data-title="{{ \App\Models\Color::where('code', $color)->first()->name }}">
                                                                        <input
                                                                            type="radio"
                                                                            name="color"
                                                                            value="{{ \App\Models\Color::where('code', $color)->first()->name }}"
                                                                            @if($key == 0) checked @endif
                                                                        >
                                                                        <span class="aiz-megabox-elem rounded d-flex align-items-center justify-content-center p-1 mb-2">
                                                        <span class="size-30px d-inline-block rounded" style="background: {{ $color }};"></span>
                                                    </span>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                            @endif

                                            <!-- Quantity + Add to cart -->
                                                <div class="row no-gutters">
                                                    <div class="col-sm-10">
                                                        <div class="product-quantity d-flex align-items-center">
                                                            <div class="row no-gutters align-items-center aiz-plus-minus mr-3" style="width: 130px;">
                                                                <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity" disabled="">
                                                                    <i class="las la-minus"></i>
                                                                </button>
                                                                <input type="number" name="quantity" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="{{ $detailedProduct->min_qty }}" min="{{ $detailedProduct->min_qty }}" max="10">
                                                                <button class="btn  col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity">
                                                                    <i class="las la-plus"></i>
                                                                </button>
                                                            </div>
                                                            @php
                                                                $qty = 0;
                                                                foreach ($detailedProduct->stocks as $key => $stock) {
                                                                    $qty += $stock->qty;
                                                                }
                                                            @endphp
                                                            <div class="avialable-amount opacity-60">
                                                                @if($detailedProduct->stock_visibility_state == 'quantity')
                                                                    (<span id="available-quantity">{{ $qty }}</span> {{ translate('available')}})
                                                                @elseif($detailedProduct->stock_visibility_state == 'text' && $qty >= 1)
                                                                    (<span id="available-quantity">{{ translate('In Stock') }}</span>)
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>

                                                <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                                                    <div class="col-sm-3">
                                                        <div class="product-price">
                                                            <strong id="chosen_price" class="h4 fw-600 text-primary">

                                                            </strong>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                    </div>

                                                </div>
                                                <div class="mb-3">
                                                    @if ($detailedProduct->external_link != null)
                                                        <a type="button" class="btn btn-primary buy-now fw-600" href="{{ $detailedProduct->external_link }}">
                                                            <i class="la la-share"></i> {{ translate($detailedProduct->external_link_btn)}}
                                                        </a>
                                                    @else
                                                        <button type="button" class="btn btn-soft-primary mr-2 add-to-cart fw-600" onclick="addToCart()">
                                                            <i class="las la-shopping-bag"></i>
                                                            <span class="d-none d-md-inline-block"> {{ translate('Add to cart')}}</span>
                                                        </button>
														
                                                        <button type="button" class="btn btn-primary buy-now fw-600" onclick="buyNow()">
                                                            <i class="la la-shopping-cart"></i> {{ translate('Buy Now')}}
                                                        </button>
														
                                                    @endif
                                                    <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none" disabled>
                                                        <i class="la la-cart-arrow-down"></i> {{ translate('Out of Stock')}}
                                                    </button>
                                                </div>
                                            </form>
                                            
                                             @if (get_setting('conversation_system') == 1) 
                                              <div class="woodmart-after-add-to-cart">
                                                 @if (Auth::check())
                                                <div class="stock">
                                                  <img alt="" src="{{ static_asset('assets/images/download.png') }}" width="30px"> <a href="javascript:;"  onclick="show_chat_modal()">{{ translate('Enquire Now')}}</a>
                                                </div>
                                                @else
                                                    <div class="stock">
                                                    <div class="login-side-opener">
                                                        <a href="javascript:;">
                                                                <img alt="" src="{{ static_asset('assets/images/download.png') }}" width="30px"> <a href="#">Enquire Now</a>
                                                        </a>
                                                    </div>
                                                    </div>
                                                @endif    
                                            </div>
																 
														@endif
											 @if($detailedProduct->sheet != null)
                                            <div class="woodmart-after-add-to-cart">

                                                <div class="stock">
                                                    <img alt="" src="{{ static_asset('assets/images/download.png') }}" width="30px"> <a href="#datasheet">Download Data Sheet</a>
                                                </div>

                                            </div>
											@endif
                                            <div class="woodmart-wishlist-btn wd-action-btn wd-wishlist-btn wd-style-text">
                                                <a href="javascript:;" onclick="addToWishList({{ $detailedProduct->id }})" data-key="{{ $detailedProduct->id }}" data-product-id="{{ $detailedProduct->id }}" data-added-text="Browse Wishlist">{{ translate('Add to wishlist')}}</a>
                                            </div>
                                            <div class="product_meta">

														<span class="posted_in">Categories:
															<a href="{{route('products.category',$detailedProduct->category->slug)}}" rel="tag">
															{{$detailedProduct->category->getTranslation('name')}}</a></span><a id="datasheet"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .summary --> 
                            </div>
                        </div>
                    </div>



                    <div class="pro-detail-tab rey-wcPanels">
                        <div class="desc-tabs">
                            <ul class="prodNav">
                                <li class="text-red ptItem active" id="pTab1">Description</li>
								 @if($detailedProduct->related_id != null)
                                <li class="text-red ptItem" id="pTab2">Optional Accessories</li>
								@endif
								 @if($detailedProduct->sheet != null)
								
                                <li class="text-red ptItem" id="pTab3">Data Sheets</li>
								@endif
                            </ul>
                            <div class="prodBody">
                                <div class="prodMain active" id="pTab1C">
                                    {!!$detailedProduct->getTranslation('description')!!}
                                </div>
								
								
                                <div class="prodMain" id="pTab2C">
								
         						@if ($detailedProduct->related_id != null)
							 
         <div class="products elements-grid align-items-start woodmart-products-holder woodmart-spacing-30 pagination-pagination row">
		 	@foreach (filter_products(\App\Models\Product::whereIn('id', json_decode($detailedProduct->related_id))->where('id', '!=', $detailedProduct->id))->limit(10)->get() as $key => $related_product)
                                        
                                        <div class="product-grid-item product woodmart-hover-quick col-md-3 col-sm-4 col-6 type-product post-447 status-publish instock product_cat-beef product_cat-quick-cook-meals has-post-thumbnail shipping-taxable purchasable product-type-simple" data-loop="2" data-id="447">
                                            <div class="product-element-top">
                                                <a class="product-image-link" href="{{ route('product', $related_product->slug) }}">
                                                        <div class="product-labels labels-rounded">
                                                            @if(discount_in_percentage($related_product) > 0)
                                                                <span class="onsale product-label">&nbsp;-{{discount_in_percentage($related_product)}}%</span>
                                                            @endif
                                                        </div>
                                                        <img alt="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" height="300" src="{{ uploaded_asset($related_product->thumbnail_img) }}" width="300"></a>
                                                <div class="woodmart-buttons wd-pos-r-t">
                                                    <div class="woodmart-wishlist-btn wd-action-btn wd-wishlist-btn wd-style-icon">
                                                      <a href="javascript:void(0)" onclick="addToWishList({{ $related_product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to wishlist') }}" data-placement="left" data-added-text="Browse Wishlist" data-key="{{ $related_product->id }}" data-product-id="{{ $related_product->id }}" href="{{ route('product', $related_product->slug) }}">{{ translate('Add to wishlist') }}</a>
                                                    </div>
                                                </div>
                                                <div class="woodmart-add-btn wd-add-btn-replace">
                                                     <a style="width:100%;" href="javascript:void(0)" onclick="showAddToCartModal({{ $related_product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to cart') }}" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop" data-product_id="447" data-product_sku="" data-quantity="1" rel="nofollow"><span>{{ translate('Add to cart') }}</span></a>
                                                    <meta input type="hidden" class="wpmProductId" data-id="447">
                                                </div>
                                                <div class="quick-shop-wrapper">
                                                    <div class="quick-shop-close wd-cross-button wd-size-s wd-with-text-left">
                                                        <span>Close</span>
                                                    </div>
                                                    <div class="quick-shop-form">
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="product-title">
                                               <a href="{{ route('product', $related_product->slug) }}">{{ Str::words($related_product->getTranslation('name'), '3')  }}</a>
                                            </h3>
                                            <span class="price"><span class="woocommerce-Price-amount amount"></span></span>
                                                @if(home_base_price($related_product) != home_discounted_base_price($related_product))
                                                    <del class="fw-600 opacity-50 mr-1">{{ home_base_price($related_product) }}</del>
                                                @endif
                                                <bdi> {{ home_discounted_base_price($related_product) }}</bdi>
                                        </div>
										  @endforeach 
                                        </div>
                                    </div>

                             
                                @endif

                                </div>
                                <div class="prodMain" id="pTab3C">
                                   
                                        @if($detailedProduct->sheet != null)
                                            @php $sheets=json_decode($detailedProduct->sheet);
                                            @endphp
                                            @foreach($sheets as $key => $sheet)
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #eeeeee;margin-bottom: 10px;">
                                                  <tr>
                                                    <td style="width: 95%;">{{  translate($sheet) }} </td>
                                                    <td><a href="{{ uploaded_asset(json_decode($detailedProduct->sheet_link)[$key]) }}" target="_blank" rel="noopener noreferrer" style="text-align: right;
    width: 74%;"><span class="rrig">{{  translate("Download") }} </span></a></td>
                                                  </tr>
                                                </table>
                                                 
                                            @endforeach
                                        @endif
                                     
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($detailedProduct->related_id != null)
                    <div class="container related-and-upsells">
                        <div class="related-products">
                            <h3 class="title slider-title">Related products</h3>
                            <div id="carousel-704" class="woodmart-carousel-container  slider-type-product woodmart-carousel-spacing-30" data-owl-carousel data-desktop="6" data-tablet_landscape="4" data-tablet="3" data-mobile="2">
                                <div class="owl-carousel owl-items-lg-6 owl-items-md-4 owl-items-sm-3 owl-items-xs-2">
                                    @foreach (filter_products(\App\Models\Product::where('category_id', $detailedProduct->category_id)->where('id', '!=', $detailedProduct->id))->limit(10)->get() as $key => $product)
                                        <div class="slide-product owl-carousel-item">

                                            <div class="product-grid-item product woodmart-hover-quick type-product post-162 status-publish first instock product_cat-lamb product_cat-quick-cook-meals-lamb-2 has-post-thumbnail shipping-taxable purchasable product-type-simple" data-loop="4" data-id="162">
                                                <div class="product-element-top">
                                                    <a class="product-image-link" href="{{ route('product', $product->slug) }}">
                                                        <div class="product-labels labels-rounded">
                                                            @if(discount_in_percentage($product) > 0)
                                                                <span class="onsale product-label">&nbsp;-{{discount_in_percentage($product)}}%</span>
                                                            @endif
                                                        </div>
                                                        <img alt="" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" height="300" src="{{ uploaded_asset($product->thumbnail_img) }}" width="300"></a>
                                                    <div class="woodmart-buttons wd-pos-r-t">
                                                        <div class="woodmart-wishlist-btn wd-action-btn wd-wishlist-btn wd-style-icon">
                                                            <a href="javascript:void(0)" onclick="addToWishList({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to wishlist') }}" data-placement="left" data-added-text="Browse Wishlist" data-key="{{ $product->id }}" data-product-id="{{ $product->id }}" href="{{ route('product', $product->slug) }}">{{ translate('Add to wishlist') }}</a>
                                                        </div>
                                                    </div>
                                                    <div class="woodmart-add-btn wd-add-btn-replace">
                                                        <a style="width:100%;" href="javascript:void(0)" onclick="showAddToCartModal({{ $product->id }})" data-toggle="tooltip" data-title="{{ translate('Add to cart') }}" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop" data-product_id="447" data-product_sku="" data-quantity="1" rel="nofollow"><span>{{ translate('Add to cart') }}</span></a>
                                                    </div>
                                                    <div class="quick-shop-wrapper">
                                                        <div class="quick-shop-close wd-cross-button wd-size-s  ">
                                                            <span>Close</span>
                                                        </div>
                                                        <div class="quick-shop-form"></div>
                                                    </div>
                                                </div>
                                                <h3 class="product-title"><a href="{{ route('product', $product->slug) }}">{{ Str::words($product->getTranslation('name'), '3')  }}</a></h3><span class="price"><span class="woocommerce-Price-amount amount"></span></span>
                                                @if(home_base_price($product) != home_discounted_base_price($product))
                                                    <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
                                                @endif
                                                <bdi> {{ home_discounted_base_price($product) }}</bdi>
                                            </div>
                                        </div>
                                    @endforeach
                                </div> <!-- end product-items -->
                            </div> <!-- end #carousel-704 -->
                        </div>

                    </div>
                    @endif
                </div><!-- #product-169 -->

            </div>
        </div><!-- .main-page-wrapper -->
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="chat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title fw-600 h5">{{ translate('Any query about this product')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="" action="{{ route('conversations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                    <div class="modal-body gry-bg px-3 pt-3">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" name="title" value="{{ $detailedProduct->name }}" placeholder="{{ translate('Product Name') }}" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="8" name="message" required placeholder="{{ translate('Your Question') }}">{{ route('product', $detailedProduct->slug) }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary fw-600" data-dismiss="modal">{{ translate('Cancel')}}</button>
                        <button type="submit" class="btn btn-primary fw-600">{{ translate('Send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>









    <!-- Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600">{{ translate('Login')}}</h6>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="{{ route('cart.login.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                @if (addon_is_activated('otp_system'))
                                    <input type="text" class="form-control h-auto form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ translate('Email Or Phone')}}" name="email" id="email">
                                @else
                                    <input type="email" class="form-control h-auto form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email">
                                @endif
                                @if (addon_is_activated('otp_system'))
                                    <span class="opacity-60">{{  translate('Use country code before number') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control h-auto form-control-lg" placeholder="{{ translate('Password')}}">
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class=opacity-60>{{  translate('Remember Me') }}</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('password.request') }}" class="text-reset opacity-60 fs-14">{{ translate('Forgot password?')}}</a>
                                </div>
                            </div>

                            <div class="mb-5">
                                <button type="submit" class="btn btn-primary btn-block fw-600">{{  translate('Login') }}</button>
                            </div>
                        </form>

                        <div class="text-center mb-3">
                            <p class="text-muted mb-0">{{ translate('Dont have an account?')}}</p>
                            <a href="{{ route('user.registration') }}">{{ translate('Register Now')}}</a>
                        </div>
                        @if(get_setting('google_login') == 1 ||
                            get_setting('facebook_login') == 1 ||
                            get_setting('twitter_login') == 1)
                            <div class="separator mb-3">
                                <span class="bg-white px-3 opacity-60">{{ translate('Or Login With')}}</span>
                            </div>
                            <ul class="list-inline social colored text-center mb-5">
                                @if (get_setting('facebook_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                @endif
                                @if(get_setting('google_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">
                                            <i class="lab la-google"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (get_setting('twitter_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            getVariantPrice();

            //$(".descip").trigger('click');
            setTimeout(function() {

            $("#descip").trigger('click');
            $("#tab_default_5").removeClass("active show");
            },150);
    	});

        function CopyToClipboard(e) {
            var url = $(e).data('url');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            try {
                document.execCommand("copy");
                AIZ.plugins.notify('success', '{{ translate('Link copied to clipboard') }}');
            } catch (err) {
                AIZ.plugins.notify('danger', '{{ translate('Oops, unable to copy') }}');
            }
            $temp.remove();
            // if (document.selection) {
            //     var range = document.body.createTextRange();
            //     range.moveToElementText(document.getElementById(containerid));
            //     range.select().createTextRange();
            //     document.execCommand("Copy");

            // } else if (window.getSelection) {
            //     var range = document.createRange();
            //     document.getElementById(containerid).style.display = "block";
            //     range.selectNode(document.getElementById(containerid));
            //     window.getSelection().addRange(range);
            //     document.execCommand("Copy");
            //     document.getElementById(containerid).style.display = "none";

            // }
            // AIZ.plugins.notify('success', 'Copied');
        }
        function show_chat_modal(){
            @if (Auth::check())
                $('#chat_modal').modal('show');
            @else
               // $('#login-side-opener').trigger('click');
                return false;
                
           
            @endif
        }

    </script>
    <script src="assets/js/jquery/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var pTabItem = $(".prodNav .ptItem");
            $(pTabItem).click(function() {
                // Tab nav active functionality
                $(pTabItem).removeClass("active");
                $(this).addClass("active");

                // Tab container active functionality
                var tabid = $(this).attr("id");
                $(".prodMain").removeClass("active");
                $("#" + tabid + "C").addClass("active");

                return false;
            });
        });
    </script>
@endsection
