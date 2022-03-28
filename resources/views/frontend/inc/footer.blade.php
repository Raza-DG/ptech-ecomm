@php
if (Session::has('locale')) {
    $locale = Session::get('locale', Config::get('app.locale'));
} else {
    $locale = 'en';
}
@endphp


<div class="woodmart-prefooter pb-0" style="background-color: #f1f0ec;">
    <div class="container">
        <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1615247170339 vc_row-has-fill woodmart-bg-center-bottom">
            <div class="wpb_column vc_column_container vc_col-sm-12 text-center" style="padding-top: 20px;">
                <div class="vc_column-inner vc_custom_1534940755313">
                    <div class="wpb_wrapper">
                        <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1615246588424">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper vc_box_border_grey">

									@if(get_setting('footer_logo') != null)
                            <img  width="200" height="100" class="lazyload vc_single_image-img attachment-medium" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"    data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}" height="44">
                        @else
                            <img  width="200" height="100" class="lazyload vc_single_image-img attachment-medium" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                        @endif
                                </div>
                            </figure>
                        </div>
                        <div id="wd-60469172e0172" class="woodmart-text-block-wrapper color-scheme- woodmart-title-size-custom woodmart-title-width-50 text-center vc_custom_1615237491559">
                            <div class="woodmart-title-container woodmart-text-block font-text woodmart-font-weight-">
                                <p>{!! get_setting('about_us_description',null,App::getLocale()) !!}</p>

                            </div>
                        </div>
                        <div class="wpb_raw_code wpb_content_element wpb_raw_html vc_custom_1615071991282">
                            <div class="wpb_wrapper">
                                <ul class="inline-list inline-list-with-border main-nav-style">

                                    <li style="margin-bottom: 7px;">
                                        <a href="{{ route('privacypolicy') }}">{{ translate('Privacy Policy') }}</a>
                                    </li>
                                    <li style="margin-bottom: 7px;">
                                        <a href="{{ route('terms') }}">{{ translate('Terms & conditions') }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="woodmart-social-icons text-center icons-design-simple icons-size-default color-scheme-dark social-follow social-form-circle">
							@if ( get_setting('show_social_links') )
								@if ( get_setting('facebook_link') !=  null )
								 <a rel="nofollow" href="{{ get_setting('facebook_link') }}" target="_blank" class=" woodmart-social-icon social-facebook">
                                <i>
                                </i>
                                <span class="woodmart-social-icon-name">{{ translate('Facebook') }}</span>
                            </a> @endif
                    		@if ( get_setting('instagram_link') !=  null )
							<a rel="nofollow" href="{{ get_setting('instagram_link') }}" target="_blank" class=" woodmart-social-icon social-instagram">
                                <i>
                                </i>
                                <span class="woodmart-social-icon-name">{{ translate('Instagram') }}</span>
                            </a>
							 @endif
							  @if ( get_setting('youtube_link') !=  null )
							  <a rel="nofollow" href="{{ get_setting('youtube_link') }}" target="_blank" class=" woodmart-social-icon social-youtube">
                                <i>
                                </i>
                                <span class="woodmart-social-icon-name">{{ translate('YouTube') }}</span>
                            </a>
							@endif
							@endif



                        </div>

                    </div>
                </div>
            </div>
        </div>
        <style data-type="vc_shortcodes-custom-css">
            .vc_custom_1615247170339 {
                padding-bottom: 120px !important;
                 background-image: url({{ static_asset('assets-ecom/images/footer.png')}}) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: contain !important;
            }

            .vc_custom_1534940755313 {
                padding-top: 0px !important;
            }

            .vc_custom_1615246588424 {
                margin-bottom: 25px !important;
            }

            .vc_custom_1615237491559 {
                margin-bottom: 30px !important;
            }

            .vc_custom_1615071991282 {
                margin-bottom: 23px !important;
            }

            #wd-60469172e0172 .woodmart-text-block {
                line-height: 26px;
                font-size: 16px;
            }

            @media (max-width: 1024px) {
                #wd-60469172e0172 .woodmart-text-block {
                    line-height: 24px;
                    font-size: 14px;
                }
            }

            @media (max-width: 767px) {
                #wd-60469172e0172 .woodmart-text-block {
                    line-height: 22px;
                    font-size: 12px;
                }
            }


			#search-content{width: 85%;
    position: relative;
    margin: 0 auto;
	overflow-y: auto;
	margin-bottom: 55px;
	}
        </style>
    </div>
</div>

<!-- FOOTER -->
<footer class="footer-container color-scheme-dark" style="background-color: #f1f0ec;">

    <div class="copyrights-wrapper copyrights-centered">
        <div class="container">
            <div class="min-footer">
                <div class="col-left reset-mb-10">
                    <p>
                        <i class="fa fa-copyright">
                        </i> {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!} | Proudly Developed and Designed by <a href="https://digitalgraphiks.ae/" target="_blank">
                            <strong>
                                Digital Graphiks
                            </strong>
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollToTop">Scroll To Top</a>

<div class="woodmart-toolbar woodmart-toolbar-label-show">
    <div class="woodmart-header-links wd-tools-element my-account-with-icon  login-side-opener">
        <a href="#">
            <span class="wd-tools-icon">
            </span>
            <span class="woodmart-toolbar-label">
                My account </span>
        </a>
    </div>
    <div class="woodmart-toolbar-shop woodmart-toolbar-item wd-tools-element">
        <a href="shop.php">
            <span class="wd-tools-icon">
            </span>
            <span class="woodmart-toolbar-label">
                Shop </span>
        </a>
    </div>
    <div class="woodmart-shopping-cart woodmart-cart-design-5 woodmart-cart-alt wd-tools-element cart-widget-opener" title="My cart">
        <a href="cart.php">
                @if(isset($cart) && count($cart) > 0)
            <span class="woodmart-cart-icon wd-tools-element">
                <span class="woodmart-cart-number">{{ count($cart)}} <span>items</span>
                </span>
            </span>
                @else
            <span class="woodmart-cart-icon wd-tools-element">
                <span class="woodmart-cart-number">0 <span>items</span>
                </span>
            </span>
                @endif
            <span class="woodmart-toolbar-label">
                Cart </span>
        </a>
    </div>
</div>

<div class="woodmart-search-full-screen">
    <span class="woodmart-close-search wd-cross-button">close</span>
    <form action="{{ route('search') }}" method="GET" class="stop-propagation searchform  woodmart-ajax-search" action="" data-thumbnail="1" data-price="1" data-post_type="product" data-count="20" data-sku="0" data-symbols_count="3">
        <input type="text" class="border-0 border-lg form-control" id="search" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="{{translate('I am shopping for...')}}" autocomplete="off">
        <input type="hidden" name="post_type" value="product">
        <button type="submit" class="searchsubmit">
            Search </button>
    </form>

	<div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px;    display: contents;">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
    <div class="search-results-wrapper">
        <div class="woodmart-scroll">
            <div class="woodmart-search-results woodmart-scroll-content">
            </div>
        </div>
        <div class="woodmart-search-loader wd-fill">
        </div>
    </div>
</div>

<div class="login-form-side">
    <div class="widget-heading">
        <h3 class="widget-title">Sign in</h3>
        <a href="#" class="close-side-widget wd-cross-button wd-with-text-left">close</a>
    </div>
    <form method="post" class="login woocommerce-form woocommerce-form-login " action="{{ route('login') }}">
	 @csrf
        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-username">
            <label for="username">Username or email&nbsp;<span class="required">*</span>
            </label>
           <input
                                    class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    type="text" name="email" id="email" autocomplete="off" placeholder="{{ translate('email') }}" />
        </p>
        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-password">
            <label for="password">Password&nbsp;<span class="required">*</span>
            </label>
            <input type="password"
                                    class="form-control form-control-lg form-control-solid {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required placeholder="{{ translate('Password') }}" />
        </p>
        <p class="form-row">
             <button type="submit" class="button woocommerce-button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
        </p>
        <div class="login-form-footer">
            <a href="#" class="woocommerce-LostPassword lost_password">Lost your password?</a>
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} /> <span>Remember me</span>
            </label>
        </div>
    </form>
    <div class="create-account-question">
        <span class="create-account-text">No account yet?</span>
        <a href="#" class="btn btn-style-link btn-color-primary create-account-button">Create an Account</a>
    </div>
</div>


<div class="cart-widget-side">
    <div class="widget-heading">
        <h3 class="widget-title">Shopping cart</h3>
        <a href="#" class="close-side-widget wd-cross-button wd-with-text-left">close</a>
    </div>
    <div class="widget woocommerce widget_shopping_cart" id="cart_items">
        @include('frontend.partials.cart_view')
    </div>
</div>




<!--<div class="woodmart-cookies-popup">
    <div class="woodmart-cookies-inner">
        <div class="cookies-info-text">
            We use cookies to improve your experience on our website. By browsing this website, you agree to our use of cookies. </div>
        <div class="cookies-buttons">
            <a href="#" class="btn btn-size-small btn-color-primary cookies-accept-btn">Accept</a>
        </div>
    </div>
</div>-->

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg">
    </div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item">
            </div>
            <div class="pswp__item">
            </div>
            <div class="pswp__item">
            </div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter">
                </div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)">
                </button>

                <button class="pswp__button pswp__button--share" title="Share">
                </button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen">
                </button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out">
                </button>

                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip">
                </div>
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center">
                </div>
            </div>

        </div>

    </div>

</div>



<div class="mobile-nav slide-from-left">
    <div class="woodmart-search-form">
       <form action="{{ route('search') }}" method="GET" class="stop-propagation searchform  woodmart-ajax-search"  data-thumbnail="1" data-price="1" data-post_type="product" data-count="20" data-sku="0" data-symbols_count="3">
        <input type="text" class="border-0 border-lg form-control" id="search1" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="{{translate('I am shopping for...')}}" autocomplete="off">
        <input type="hidden" name="post_type" value="product">
            <button type="button" class="searchsubmit">
                Search </button>
				<div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content1" class="text-left">

                            </div>
                        </div>
        </form>

    </div>
    <div class="mobile-menu-tab mobile-pages-menu active">
        <div class="menu-main-menu-mobile-container">
            <ul id="menu-main-menu-mobile" class="site-mobile-menu">
                <li id="menu-item-273696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-273696 item-level-0">
                    <a href="#" class="woodmart-nav-link">
                        <span class="nav-link-text">Browse Categories</span>
                    </a>
                    <div class="sub-menu-dropdown color-scheme-dark">

                        <div class="container">

                            <ul class="sub-menu color-scheme-dark">
 							@include('frontend.partials.category_menu_mob')
                            </ul>
                        </div>
                    </div>
                </li>
                @include('frontend.partials.main_menu_mob')
                <li class="menu-item item-level-0  my-account-with-text login-side-opener menu-item-register">
                    <a href="#">Login / Register</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--END MOBILE-NAV-->

<div class="woodmart-close-side">
</div>

@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
