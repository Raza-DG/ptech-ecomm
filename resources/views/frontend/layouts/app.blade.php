<!DOCTYPE html>
@if (\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">
    <title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">
    @yield('meta')
    @if (!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ get_setting('meta_title') }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ get_setting('meta_title') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ uploaded_asset(get_setting('meta_image')) }}" />
        <meta property="og:description" content="{{ get_setting('meta_description') }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
        <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" href="{{ uploaded_asset(get_setting('site_icon')) }}">

    <!-- Google Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->

    @if (\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    @if(Route::currentRouteName() == 'checkout.shipping_info')
        <link rel='stylesheet' href='{{ static_asset('assets-ecom/css/checkout.css') }}' type='text/css' />
        <link rel='stylesheet' id='woodmart-pad-css' href='{{ static_asset('assets-ecom/css/woodmart-pad-public.css') }}' type='text/css' media='all' />
    @elseif(Route::currentRouteName() == 'address.add_billing_address' || Route::currentRouteName() == 'address.add_shipping_address' || Route::currentRouteName() == 'address.address_edit' || Route::currentRouteName() == 'wishlists')

    @else
        <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    @endif
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link rel='stylesheet' id='xts-google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2C400%2C400italic%2C700%2C700italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.3.6' type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel='stylesheet' id='bootstrap-css' href="{{ static_asset('assets-ecom/themes/woodmart/css/bootstrap.min48f5.css?ver=5.3.6') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='woodmart-style-css' href="{{ static_asset('assets-ecom/themes/woodmart/style.min48f5.css?ver=5.3.6') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='xts-style-theme_settings_default-css' href="{{ static_asset('assets-ecom/themes/woodmart/style.min48f5.css?ver=5.3.6') }}" type='text/css' media='all' />
	<link rel='stylesheet' id='xts-style-theme_settings_default-css' href="{{ static_asset('assets-ecom/uploads/2021/12/xts-theme_settings_default-164076906048f5.css') }}" type='text/css' media='all' />
    <link rel="stylesheet" href="{{ static_asset('assets-ecom/css/shop.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets-ecom/css/common.css') }}">

    <link rel="stylesheet" src="{{ static_asset('assets-ecom/themes/woodmart/style.min48f5.css') }}">

    <script type='text/javascript' src="{{ static_asset('assets-ecom/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4') }}" id='js-cookie-js'></script>


    <style>
        .icons-design-simple .woodmart-social-icon {
            background-color: #888888;
            color: #FFF !important;
        }

        .icons-design-simple .woodmart-social-icon:hover {
            background-color: #F2F2F2;
            color: rgba(0, 0, 0, .4) !important;
        }

        .woodmart-navigation .item-level-0>a {
            padding-left: 30px;
            padding-right: 30px;
        }

        @media(max-width: 991px) {
            .black-menu-bar {
                display: none;
            }
        }

        .page .main-page-wrapper,
        .main-page-wrapper {
            background-image: url({{ static_asset('assets-ecom/images/Background-Full.jpg') }});
            background-position-y: 630px;
            background-repeat: repeat-y;
            background-position-x: center;
        }
		.mt-100{
		margin-top:100px;

		}
		.mt-150{
		margin-top:150px;

		}
		.mt-200{
		margin-top:200px;

		}

		.carousel-box c-pointer border p-1 rounded{
width:unset !important;}


.h2, h2 {
    font-size: 15px !imporatant;
}
    </style>

    <link rel='stylesheet' id='js_composer_front-css' href="{{ static_asset('assets-ecom/plugins/js_composer/assets/css/js_composer.mine6df.css?ver=6.5.0') }}" type='text/css' media='all' />


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
        }

        :root {
            --primary: {{ get_setting('base_color', '#e62d04') }};
            --hov-primary: {{ get_setting('base_hov_color', '#c52907') }};
            --soft-primary: {{ hex2rgba(get_setting('base_color', '#e62d04'), 0.15) }};
        }

        #map {
            width: 100%;
            height: 250px;
        }

        #edit_map {
            width: 100%;
            height: 250px;
        }

        .pac-container {
            z-index: 100000;
        }

    </style>

    @if (get_setting('google_analytics') == 1)
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}">
                window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', '{{ env('TRACKING_ID') }}');
        </script>
    @endif

    @if (get_setting('facebook_pixel') == 1)
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endif

    @php
        echo get_setting('header_script');
    @endphp


</head>

<div class="modal-loading" style="display:none;">
    <!-- Place at bottom of page -->
    <div class="modal-text">
        <img style="width: 210px;" src="{{ static_asset('assets/frontend/static/img/loading.gif') }}" />
    </div>
    <div class="modal-loading-logo"></div>
</div>
<!-- aiz-main-wrapper -->

<body data-rsssl=1 class="home page-template-default page page-id-702 theme-woodmart woocommerce-no-js wrapper-full-width form-style-square form-border-width-2 categories-accordion-on woodmart-ajax-shop-on offcanvas-sidebar-mobile offcanvas-sidebar-tablet sticky-toolbar-on btns-default-3d btns-default-dark btns-default-hover-dark btns-shop-3d btns-shop-light btns-shop-hover-light btns-accent-3d btns-accent-light btns-accent-hover-light wpb-js-composer js-comp-ver-6.5.0 vc_responsive">
        <div class="website-wrapper">
                @include('frontend.inc.nav')
            <div class="main-page-wrapper">
                <!-- MAIN CONTENT AREA -->
                @yield('content')
            </div>
        </div>
        @include('frontend.inc.footer')

    </div>

    @if (get_setting('show_cookies_agreement') == 'on')
        <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    @php
                        echo get_setting('cookies_agreement_text');
                    @endphp
                </div>
                <button class="btn btn-primary aiz-cookie-accept">
                    {{ translate('Ok. I Understood') }}
                </button>
            </div>
        </div>
    @endif

    @if (get_setting('show_website_popup') == 'on')
        <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        {!! get_setting('website_popup_content') !!}
                    </div>
                    @if (get_setting('show_subscribe_form') == 'on')
                        <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control"
                                        placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button
                        class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session"
                        data-key="website-popup" data-value="removed" data-toggle="remove-parent"
                        data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

   {{-- @include('frontend.partials.modal') --}}
@if(Route::currentRouteName() != 'checkout.shipping_info')
    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>
@endif
    @yield('modal')

    <!-- SCRIPTS -->

    <script src="{{ static_asset('assets/frontend/js/jquery2.2.0.js') }}" type="text/javascript">
    </script>

    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>

    <script type='text/javascript' id='woodmart-theme-js-extra'>
        /* <![CDATA[ */
        var woodmart_settings = {
            "photoswipe_close_on_scroll": "1",
            "woocommerce_ajax_add_to_cart": "yes",
            "variation_gallery_storage_method": "old",
            "elementor_no_gap": "enabled",
            "adding_to_cart": "Processing",
            "added_to_cart": "Product was successfully added to your cart.",
            "continue_shopping": "Continue shopping",
            "view_cart": "View Cart",
            "go_to_checkout": "Checkout",
            "loading": "Loading...",
            "countdown_days": "days",
            "countdown_hours": "hr",
            "countdown_mins": "min",
            "countdown_sec": "sc",
            "cart_url": "https:\/\/tendergourmetbutchery.com.au\/cart\/",
            "ajaxurl": "https:\/\/tendergourmetbutchery.com.au\/wp-admin\/admin-ajax.php",
            "add_to_cart_action": "widget",
            "added_popup": "no",
            "categories_toggle": "yes",
            "enable_popup": "no",
            "popup_delay": "2000",
            "popup_event": "time",
            "popup_scroll": "1000",
            "popup_pages": "0",
            "promo_popup_hide_mobile": "no",
            "product_images_captions": "no",
            "ajax_add_to_cart": "1",
            "all_results": "View all results",
            "product_gallery": {
                "images_slider": true,
                "thumbs_slider": {
                    "enabled": true,
                    "position": "bottom",
                    "items": {
                        "desktop": 4,
                        "tablet_landscape": 3,
                        "tablet": 4,
                        "mobile": 3,
                        "vertical_items": 3
                    }
                }
            },
            "zoom_enable": "no",
            "ajax_scroll": "yes",
            "ajax_scroll_class": ".main-page-wrapper",
            "ajax_scroll_offset": "100",
            "infinit_scroll_offset": "300",
            "product_slider_auto_height": "no",
            "price_filter_action": "click",
            "product_slider_autoplay": "",
            "close": "Close (Esc)",
            "share_fb": "Share on Facebook",
            "pin_it": "Pin it",
            "tweet": "Tweet",
            "download_image": "Download image",
            "cookies_version": "1",
            "header_banner_version": "2",
            "promo_version": "3",
            "header_banner_close_btn": "1",
            "header_banner_enabled": "0",
            "whb_header_clone": "\n    <div class=\"whb-sticky-header whb-clone whb-main-header <%wrapperClasses%>\">\n        <div class=\"<%cloneClass%>\">\n            <div class=\"container\">\n                <div class=\"whb-flex-row whb-general-header-inner\">\n                    <div class=\"whb-column whb-col-left whb-visible-lg\">\n                        <%.site-logo%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-center whb-visible-lg\">\n                        <%.main-nav%>\n                    <\/div>\n                    <div class=\"whb-column whb-col-right whb-visible-lg\">\n                        <%.woodmart-header-links%>\n                        <%.search-button:not(.mobile-search-icon)%>\n\t\t\t\t\t\t<%.woodmart-wishlist-info-widget%>\n                        <%.woodmart-compare-info-widget%>\n                        <%.woodmart-shopping-cart%>\n                        <%.full-screen-burger-icon%>\n                    <\/div>\n                    <%.whb-mobile-left%>\n                    <%.whb-mobile-center%>\n                    <%.whb-mobile-right%>\n                <\/div>\n            <\/div>\n        <\/div>\n    <\/div>\n",
            "pjax_timeout": "5000",
            "split_nav_fix": "",
            "shop_filters_close": "no",
            "woo_installed": "1",
            "base_hover_mobile_click": "yes",
            "centered_gallery_start": "1",
            "quickview_in_popup_fix": "",
            "disable_nanoscroller": "enable",
            "one_page_menu_offset": "150",
            "hover_width_small": "1",
            "is_multisite": "",
            "current_blog_id": "1",
            "swatches_scroll_top_desktop": "",
            "swatches_scroll_top_mobile": "",
            "lazy_loading_offset": "0",
            "add_to_cart_action_timeout": "no",
            "add_to_cart_action_timeout_number": "3",
            "single_product_variations_price": "yes",
            "google_map_style_text": "Custom style",
            "quick_shop": "yes",
            "sticky_product_details_offset": "150",
            "preloader_delay": "300",
            "comment_images_upload_size_text": "Some files are too large. Allowed file size is 1 MB.",
            "comment_images_count_text": "You can upload up to 3 images to your review.",
            "comment_images_upload_mimes_text": "You are allowed to upload images only in png, jpeg formats.",
            "comment_images_added_count_text": "Added %s image(s)",
            "comment_images_upload_size": "1048576",
            "comment_images_count": "3",
            "comment_images_upload_mimes": {
                "jpg|jpeg|jpe": "image\/jpeg",
                "png": "image\/png"
            },
            "home_url": "https:\/\/tendergourmetbutchery.com.au\/",
            "shop_url": "https:\/\/tendergourmetbutchery.com.au\/shop\/",
            "age_verify": "no",
            "age_verify_expires": "30",
            "cart_redirect_after_add": "no",
            "swatches_labels_name": "no",
            "product_categories_placeholder": "Select a category",
            "product_categories_no_results": "No matches found",
            "cart_hash_key": "wc_cart_hash_7526f33d48d6cffb6c08d9e001840c0e",
            "fragment_name": "wc_fragments_7526f33d48d6cffb6c08d9e001840c0e"
        };
        var woodmart_variation_gallery_data = null;
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ static_asset('assets-ecom/themes/woodmart/js/functions.min48f5.js?ver=5.3.6') }}" id='woodmart-theme-js'></script>
    <script type='text/javascript' src="{{ static_asset('assets-ecom/themes/woodmart/js/jquery.tooltips.min48f5.js?ver=5.3.6') }}" id='woodmart-tooltips-js'></script>
    <script type='text/javascript' src="{{ static_asset('assets-ecom/themes/woodmart/js/jquery.magnific-popup.min48f5.js?ver=5.3.6') }}" id='woodmart-magnific-popup-js'></script>

    <!-- SmoothScroll -->
    <script type='text/javascript' src='{{ static_asset('assets-ecom/uploads/wpmss/wpmssab.mind214.js?ver=1617197745') }}' id='wpmssab-js'></script>
    <script type='text/javascript' src='{{ static_asset('assets-ecom/plugins/mousewheel-smooth-scroll/js/SmoothScroll.min5b3c.js?ver=1.4.10') }}' id='SmoothScroll-js'></script>
    <script type='text/javascript' src='{{ static_asset('assets-ecom/uploads/wpmss/wpmss.mind214.js?ver=1617197745') }}' id='wpmss-js'></script>
    <script type='text/javascript' src='{{ static_asset('assets-ecom/themes/woodmart/js/jquery.nanoscroller.min48f5.js?ver=5.3.6') }}' id='woodmart-nanoscroller-js'></script>
    <!-- SmoothScroll End -->
    <!-- Imortant -->
    <script type='text/javascript' src='{{ static_asset('assets-ecom/themes/woodmart/js/owl.carousel.min48f5.js?ver=5.3.6') }}' id='woodmart-owl-carousel-js'>
    </script>
    <script type='text/javascript' src='{{ static_asset('assets-ecom/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min20fd.js?ver=4.9.2') }}' id='wc-add-to-cart-variation-js'>
    </script>
    @if (get_setting('facebook_chat') == 1)
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v3.3'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat" attribution=setup_tool page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <script>
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

    <script>
        $(document).ready(function() {

            $(function() {
                var current = location;
                $('#site-navigation-0968131 > ul > li > a').each(function(i, el) {
                    var $this = $(this).attr('href');
                    // if the current path is like this link, make it active
                    if ($this == current.href) {
                        $(this).parent("li").addClass('current-menu-item');
                    }
                })
            })

            $('.menu-item').each(function(i, el) {

                $(el).on('mouseover', function() {

                    if (!$(el).find('.sub-men').hasClass("loaded")) {
					console.log(el);
                        $.post('{{ route('menus.elements') }}', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-men').addClass('loaded').html(data);
                        });
                    }
                });
            });

            $(".js-toggle-guests").on('click', function() {
                var e = $(this),
                    o = e.siblings(".motor-subox");
                e.toggleClass("active"), o.toggleClass("active");
            });

            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function() {
                    if (!$(el).find('.sub-cat-menu').hasClass('loaded')) {
                        $.post('{{ route('category.elements') }}', {
                            _token: AIZ.data.csrf,
                            id: $(el).data('id')
                        }, function(data) {
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}', {
                            _token: AIZ.data.csrf,
                            locale: locale
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}', {
                            _token: AIZ.data.csrf,
                            currency_code: currency_code
                        }, function(data) {
                            location.reload();
                        });

                    });
                });
            }
        });


		$('#search1').on('keyup', function() {
            search1();
        });

        $('#search1').on('focus', function() {
            search1();
        });
		function search1() {
            var searchKey = $('#search1').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content1').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content1').html(data);
						console.log(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }


        $('#search').on('keyup', function() {
            search();
        });

        $('#search').on('focus', function() {
            search();
        });

        function search() {
            var searchKey = $('#search').val();
            if (searchKey.length > 0) {
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', {
                    _token: AIZ.data.csrf,
                    search: searchKey
                }, function(data) {
                    if (data == '0') {
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html(
                            'Sorry, nothing found for <strong>"' + searchKey + '"</strong>');
                        $('.search-preloader').addClass('d-none');

                    } else {
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            } else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view, count) {
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key) {
            $.post('{{ route('cart.removeFromCart') }}', {
                _token: AIZ.data.csrf,
                id: key
            }, function(data) {
                updateNavCart(data.nav_cart_view, data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "{{ translate('Item has been removed from cart') }}");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html()) - 1);
            });
        }

        function addToCompare(id) {
            $.post('{{ route('compare.addToCompare') }}', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('#compare').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to compare list') }}");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html()) + 1);
            });
        }

        function addToWishList(id) {
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                if(data != 0){
                $('#wishlist').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to wishlist') }}");
                }
                else{
                AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
                }
                });
            @else
                AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
            @endif
        }

        function showAddToCartModal(id) {
            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {
                _token: AIZ.data.csrf,
                id: id
            }, function(data) {
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function() {
            getVariantPrice();
        });

        function getVariantPrice() {
            if ($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()) {
                $.ajax({
                    type: "POST",
                    url: '{{ route('products.variant_price') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('.product-gallery-thumb .carousel-box').each(function(i) {
                            if ($(this).data('variation') && data.variation == $(this).data(
                                'variation')) {
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                        $('#option-choice-form #chosen_price_div').removeClass('d-none');
                        $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                        $('#available-quantity').html(data.quantity);
                        $('.input-number').prop('max', data.max_limit);
                        if (parseInt(data.in_stock) == 0 && data.digital == 0) {
                            $('.buy-now').addClass('d-none');
                            $('.add-to-cart').addClass('d-none');
                            $('.out-of-stock').removeClass('d-none');
                        } else {
                            $('.buy-now').removeClass('d-none');
                            $('.add-to-cart').removeClass('d-none');
                            $('.out-of-stock').addClass('d-none');
                        }
                    }
                });
            }
        }

        function checkAddToCartValidity() {
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                count++;
            });

            if ($('#option-choice-form input:radio:checked').length == count) {
                return true;
            }

            return false;
        }

        function addToCart() {
            if (checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {

                        $('#addToCart-modal-body').html(null);
                        $('.c-preloader').hide();
                        $('#modal-size').removeClass('modal-lg');
                        $('#addToCart-modal-body').html(data.modal_view);
                        // AIZ.extra.plusMinus();
                        updateNavCart(data.nav_cart_view, data.cart_count);

                    }
                });
            } else {
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function buyNow() {
            if (checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("{{ route('cart') }}");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });
            } else {
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }



		function enquireNow() {

                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type: "POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data) {
                        if (data.status == 1) {

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view, data.cart_count);

                            window.location.replace("{{ route('cart') }}");
                        } else {
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                        }
                    }
                });

        }

        function show_purchase_history_details(order_id) {
            $('#order-details-modal-body').html(null);

            if (!$('#modal-size').hasClass('modal-lg')) {
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', {
                _token: AIZ.data.csrf,
                order_id: order_id
            }, function(data) {
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }
    </script>

    @yield('script')

    @php
        echo get_setting('footer_script');
    @endphp

</body>

</html>
