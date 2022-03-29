@extends('frontend.layouts.app')

@section('content')


<section class="mb-4" id="cart-summary">
    @if( $carts && count($carts) > 0 )
    <div class="container">
        <div class="row content-layout-wrapper align-items-start">
            <div class="site-content col-lg-12 col-12 col-md-12" role="main">
                <article class="post-10 page type-page status-publish hentry" id="post-10">
                    <div class="entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <!-- end #carousel-834 -->
                                        <div class="title-wrapper woodmart-title-color-default woodmart-title-style-simple woodmart-title-width-100 text-center eux-title-playfair woodmart-title-size-custom" id="wd-604596c42983d">
                                            <div class="liner-continer">
                                                <span class="left-line"></span>
                                                <h2 class="woodmart-title-container title woodmart-font-weight-">Your Cart:</h2><span class="right-line"></span>
                                            </div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element">
                                            <!-- cart without any product start -->
                                            <div class="wpb_wrapper" style="display: none;">
                                                <div class="woocommerce">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <p class="cart-empty woodmart-empty-page">Your cart is currently empty.</p>
                                                    <div class="woodmart-empty-page-text">
                                                        Before proceed to checkout you must add some products to your shopping cart.<br>
                                                        You will find a lot of interesting products on our "Shop" page.
                                                    </div>
                                                    <p class="return-to-shop"><a class="button wc-backward" href="shop.php">Return to shop</a></p>
                                                </div>
                                            </div><!-- cart without any product end -->
                                            <!-- cart with product start -->
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <div class="woocommerce">
                                                        <div class="woocommerce cart-content-wrapper row">
                                                            <div class="woocommerce-notices-wrapper"></div>
                                                            <div data-env="production" data-require-checkout="false" data-zm-display-inline="false" data-zm-merchant="f91bbf48-799b-4c1c-b9e1-bb935d5ea204" data-zm-price-max="1500" data-zm-price-min="1" data-zm-region="au"></div>
                                                            <form action="#" class="woocommerce-cart-form cart-data-form col-12 col-lg-7 col-xl-8" method="post">
                                                                <div class="cart-table-section">
                                                                    <table cellspacing="0" class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
                                                                        <thead>
                                                                        <tr>
                                                                            <th class="product-remove">&nbsp;</th>
                                                                            <th class="product-thumbnail">&nbsp;</th>
                                                                            <th class="product-name">Product</th>
                                                                            <th class="product-price">Price</th>
                                                                            <th class="product-tax">Tax</th>
                                                                            <th class="product-quantity">Quantity</th>
                                                                            <th class="product-subtotal">Subtotal</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @php
                                                                            $total = 0;
                                                                        @endphp
                                                                        @foreach ($carts as $key => $cartItem)
                                                                            @php
                                                                                $product = \App\Models\Product::find($cartItem['product_id']);
                                                                                $product_stock = $product->stocks->where('variant', $cartItem['variation'])->first();
                                                                                $total = $total + ($cartItem['price'] + $cartItem['tax']) * $cartItem['quantity'];
                                                                                $product_name_with_choice = $product->getTranslation('name');
                                                                                if ($cartItem['variation'] != null) {
                                                                                    $product_name_with_choice = $product->getTranslation('name').' - '.$cartItem['variation'];
                                                                                }
                                                                            @endphp
                                                                            <tr class="woocommerce-cart-form__cart-item cart_item requires-shipping--true">
                                                                                <td class="product-remove">
                                                                                    <a aria-label="Remove this item" class="remove" data-product_id="{{ $cartItem['product_id'] }}" data-product_sku="{{ $cartItem['id'] }}" href="javascript:void(0)" onclick="removeFromCartView(event, {{ $cartItem['id'] }})">×</a>
                                                                                </td>

                                                                                <td class="product-thumbnail">
                                                                                    <a href="#"><img alt="{{ $product->getTranslation('name')  }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" height="300" src="{{ uploaded_asset($product->thumbnail_img) }}" width="300"></a>
                                                                                </td>
                                                                                <td class="product-name" data-title="Product">
                                                                                    <a href="#">{{ $product_name_with_choice }}</a>
                                                                                </td>
                                                                                <td class="product-price" data-title="Price">
                                                                                    <span class="woocommerce-Price-amount amount"></span>
                                                                                    <bdi>
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ single_price($cartItem['price']) }}</span> </span>
                                                                                    </bdi>
                                                                                </td>
                                                                                <td class="product-price" data-title="Price">
                                                                                    <span class="woocommerce-Price-amount amount"></span>
                                                                                    <bdi>
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ single_price($cartItem['tax']) }}</span> </span>
                                                                                    </bdi>
                                                                                </td>
                                                                                <td class="product-quantity" data-title="Quantity">
                                                                                    @if($cartItem['digital'] != 1 && $product->auction_product == 0)
                                                                                        <div class="row no-gutters align-items-center aiz-plus-minus mr-2 ml-0">
                                                                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="minus" data-field="quantity[{{ $cartItem['id'] }}]">
                                                                                                <i class="las la-minus"></i>
                                                                                            </button>
                                                                                            <input type="number" name="quantity[{{ $cartItem['id'] }}]" class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1" value="{{ $cartItem['quantity'] }}" min="{{ $product->min_qty }}" max="{{ $product_stock->qty }}" onchange="updateQuantity({{ $cartItem['id'] }}, this)">
                                                                                            <button class="btn col-auto btn-icon btn-sm btn-circle btn-light" type="button" data-type="plus" data-field="quantity[{{ $cartItem['id'] }}]">
                                                                                                <i class="las la-plus"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    @elseif($product->auction_product == 1)
                                                                                        <span class="fw-600 fs-16">1</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td class="product-subtotal" data-title="Subtotal">
                                                                                    <span class="woocommerce-Price-amount amount"></span>
                                                                                    <bdi>
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ single_price(($cartItem['price'] + $cartItem['tax']) * $cartItem['quantity']) }}</span> </span>
                                                                                    </bdi>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </form>
                                                            <div class="cart-totals-section col-12 col-lg-5 col-xl-4">
                                                                <div class="cart_totals">
                                                                    <div class="cart-totals-inner">
                                                                        <h2>Cart totals</h2>
                                                                        <table cellspacing="0" class="shop_table shop_table_responsive">
                                                                            <tbody>
                                                                            <tr class="cart-subtotal">
                                                                                <th>Subtotal</th>
                                                                                <td data-title="Subtotal">
                                                                                    <span class="woocommerce-Price-amount amount"></span>
                                                                                    <bdi>
                                                                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ single_price($total) }}</span> </span>
                                                                                    </bdi>
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="order-total">
                                                                                <th>Total</th>
                                                                                <td data-title="Total">
                                                                                    <strong><span class="woocommerce-Price-amount amount"></span></strong>
                                                                                    <bdi>
                                                                                        <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">{{ single_price($total) }}</span> </span></strong>
                                                                                    </bdi>
                                                                                </td>
                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                                        <div class="wc-proceed-to-checkout">
                                                                            <div class="add_gift_card_form">
                                                                                <h4>Have a Gift Card?</h4>
                                                                                <div id="wc_gc_cart_redeem_form">
                                                                                    <input autocomplete="off" id="wc_gc_cart_code" name="wc_gc_cart_code" placeholder="Enter your code…" type="text"> <button id="wc_gc_cart_redeem_send" name="wc_gc_cart_redeem_send" type="button">Apply</button>
                                                                                </div>
                                                                            </div>
                                                                            @if(Auth::check())
                                                                                <a class="checkout-button button alt wc-forward btn_block" href="{{ route('checkout.shipping_info') }}">Proceed to shipping &amp; pickup</a>
                                                                            @else
                                                                                <a class="checkout-button button alt wc-forward btn_block" href="javascript:void(0)" onclick="showCheckoutModal()">Proceed to shipping &amp; pickup</a>
                                                                            @endif
                                                                        </div>
                                                                    </div><!--.cart-totals-inner-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-collaterals"></div>
                                                    </div>
                                                </div>
                                            </div><!-- cart with product end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article><!-- #post -->
            </div><!-- .site-content -->
        </div><!-- .main-page-wrapper -->
    </div>
    <div class="container">

            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                    <a href="{{ route('home') }}" class="btn btn-link">
                        <i class="las la-arrow-left"></i>
                        {{ translate('Return to shop')}}
                    </a>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    @if(Auth::check())

                        <a href="{{ route('checkout.shipping_info') }}" class="btn btn-primary fw-600">
                            {{ translate('Continue to Shipping')}}
                        </a>
                    @else
                        <button class="btn btn-primary fw-600" onclick="showCheckoutModal()">{{ translate('Continue to Shipping')}}</button>
                    @endif
                </div>
            </div>
    </div>
        @else
        <div class="container">
            <div class="row">
                <div class="col-xl-8 mx-auto">
                    <div class="shadow-sm bg-white p-4 rounded">
                        <div class="text-center p-3">
                            <i class="las la-frown la-3x opacity-60 mb-3"></i>
                            <h3 class="h4 fw-700">{{translate('Your Cart is empty')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

</section>

@endsection

@section('modal')
    <div class="modal fade" id="login-modal">
        <div class="modal-dialog modal-dialog-zoom">
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
                            @if (addon_is_activated('otp_system') && env("DEMO_MODE") != "On")
                                <div class="form-group phone-form-group mb-1">
                                    <input type="tel" id="phone-code" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="" name="phone" autocomplete="off">
                                </div>

                                <input type="hidden" name="country_code" value="">

                                <div class="form-group email-form-group mb-1 d-none">
                                    <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email" id="email" autocomplete="off">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group text-right">
                                    <button class="btn btn-link p-0 opacity-50 text-reset" type="button" onclick="toggleEmailPhone(this)">{{ translate('Use Email Instead') }}</button>
                                </div>
                            @else
                                <div class="form-group">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email" id="email" autocomplete="off">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ translate('Password')}}" name="password" id="password">
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

                    </div>
                    <div class="text-center mb-3">
                        <p class="text-muted mb-0">{{ translate('Dont have an account?')}}</p>
                        <a href="{{ route('user.registration') }}">{{ translate('Register Now')}}</a>
                    </div>
                    @if(get_setting('google_login') == 1 || get_setting('facebook_login') == 1 || get_setting('twitter_login') == 1)
                        <div class="separator mb-3">
                            <span class="bg-white px-3 opacity-60">{{ translate('Or Login With')}}</span>
                        </div>
                        <ul class="list-inline social colored text-center mb-3">
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
@endsection

@section('script')
    <script type="text/javascript">
        function removeFromCartView(e, key){
            e.preventDefault();
            removeFromCart(key);
        }

        function updateQuantity(key, element){
            $.post('{{ route('cart.updateQuantity') }}', {
                _token   :  AIZ.data.csrf,
                id       :  key,
                quantity :  element.value
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
            });
        }

        function showCheckoutModal(){
            $('#login-modal').modal();
        }

        // Country Code
        var isPhoneShown = true,
            countryData = window.intlTelInputGlobals.getCountryData(),
            input = document.querySelector("#phone-code");

        for (var i = 0; i < countryData.length; i++) {
            var country = countryData[i];
            if(country.iso2 == 'bd'){
                country.dialCode = '88';
            }
        }

        var iti = intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "{{ static_asset('assets/js/intlTelutils.js') }}?1590403638580",
            onlyCountries: @php echo json_encode(\App\Models\Country::where('status', 1)->pluck('code')->toArray()) @endphp,
            customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                if(selectedCountryData.iso2 == 'bd'){
                    return "01xxxxxxxxx";
                }
                return selectedCountryPlaceholder;
            }
        });

        var country = iti.getSelectedCountryData();
        $('input[name=country_code]').val(country.dialCode);

        input.addEventListener("countrychange", function(e) {
            // var currentMask = e.currentTarget.placeholder;

            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);

        });

        function toggleEmailPhone(el){
            if(isPhoneShown){
                $('.phone-form-group').addClass('d-none');
                $('.email-form-group').removeClass('d-none');
                $('input[name=phone]').val(null);
                isPhoneShown = false;
                $(el).html('{{ translate('Use Phone Instead') }}');
            }
            else{
                $('.phone-form-group').removeClass('d-none');
                $('.email-form-group').addClass('d-none');
                $('input[name=email]').val(null);
                isPhoneShown = true;
                $(el).html('{{ translate('Use Email Instead') }}');
            }
        }
    </script>
@endsection
