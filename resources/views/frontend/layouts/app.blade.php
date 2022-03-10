<!DOCTYPE html>
@if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
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

    @if(!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    {{-- <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/vendors.css') }}">
    @if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/bootstrap-rtl.min.css') }}">
        <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/main.rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/aiz-core.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/assets/css/custom-style.css') }}">


	<link rel="preload" as="font" href="{{ static_asset('assets/frontend/static/fonts/Brandon/BrandonGrotesque-Regular.woff2') }}" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ static_asset('assets/frontend/static/fonts/Brandon/BrandonGrotesque-Medium.woff2') }}" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ static_asset('assets/frontend/static/fonts/Brandon/BrandonGrotesque-Bold.woff2') }}" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ static_asset('assets/frontend/static/fonts/Crimson/CrimsonText-Italic.woff2') }}" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ static_asset('assets/frontend/static/fonts/Domaine/DomaineDisp-Regular.woff2') }}" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/static/fonts/fontstyle.css') }}">
    <link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/static/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/assets/css/whatschat-style1.css') }}">
    <link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/assets/css/whatschat-layout.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/static/fonts/style.css') }}">
	 <!-- CSSTheme -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/frontend/static/css/main.min.css') }}">
    <!-- /CSSTheme -->

    <!-- CustomDependencies -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/frontend/static/css/partials/index.css') }}">
    <!-- /CustomDependencies -->

    <!-- CSSVendor -->
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/frontend/static/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ static_asset('assets/frontend/static/css/vendor/jquery-ui.min.css') }}"> --}}
    <!-- /CSSVendor -->


	<link data-minify="1" href="{{static_asset("assets/frontend/css/322cbd50567d4d12c25d652739fbf040.css")}}" media="all" rel="stylesheet">
	<link href="{{static_asset("assets/frontend/slick/slick.css")}}" rel="stylesheet" type="text/css">
	<link href="{{static_asset("assets/frontend/slick/slick-theme.css")}}" rel="stylesheet" type="text/css">

    <link href="{{static_asset("assets/frontend/css/main.css")}}" media="all" rel="stylesheet">

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
        body{
            font-family:'Inter', sans-serif;
            font-weight: 400;
        }
        :root{
            --primary: {{ get_setting('base_color', '#e62d04') }};
            --hov-primary: {{ get_setting('base_hov_color', '#c52907') }};
            --soft-primary: {{ hex2rgba(get_setting('base_color','#e62d04'),.15) }};
        }

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
    </style>

@if (get_setting('google_analytics') == 1)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('TRACKING_ID') }}');
    </script>
@endif

@if (get_setting('facebook_pixel') == 1)
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ env('FACEBOOK_PIXEL_ID') }}');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ env('FACEBOOK_PIXEL_ID') }}&ev=PageView&noscript=1"/>
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
        <img style="width: 210px;" src="{{ static_asset('assets/frontend/static/img/loading.gif')}}" />
    </div>
    <div class="modal-loading-logo"></div>
</div>
    <!-- aiz-main-wrapper -->

<body class="home page-template page-template-template-builder page-template-template-builder-php page page-id-8 wp-custom-logo theme-rey woocommerce-no-js rey-navDefault rey-no-js opt rey-wishlist elementor-default elementor-kit-1313 elementor-page elementor-page-8 rey-cwidth--full --no-acc-focus" data-rsssl="1">
    <!--menu-white motor-top-->
    <input type="hidden" id="name_file" value="{{ route('home') }}">
    <input type="hidden" id="idPagina" value="1">
    <input type="hidden" id="nombrePagina" value="home">
    <input type="hidden" id="lang-input" value="en">

    <!-- Base URL -->
    <input type="hidden" id="domain" value="{{ getBaseURL() }}">


    <div class="rey-siteWrapper" id="page">
		<div class="rey-overlay rey-overlay--site"></div>

        <!-- Header -->
        @include('frontend.inc.nav')
		<div class="rey-siteHeader-helper --dnone-desktop --dnone-tablet --dnone-mobile"></div>

        @yield('content')

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
                                    <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    {{-- @include('frontend.partials.modal') --}}

    @yield('modal')

    <!-- SCRIPTS -->

<script src="{{ static_asset('assets/js/vendors.js') }}"></script>
<script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>

<script>
	function openMenu() {
		document.getElementById("site-navigation-mobile-0968131").classList.add("show-menu");
	}

	function closeMenu() {
		document.getElementById("site-navigation-mobile-0968131").classList.remove("show-menu");
	}
</script>
<!-- for slick slider start -->
<script src="{{static_asset("assets/frontend/js/jquery2.2.0.js")}}" type="text/javascript">
</script>

<!-- for slick slider start -->
<script charset="utf-8" src="{{static_asset("assets/frontend/slick/slick.js")}}" type="text/javascript">
</script>

{{-- <!-- for slick slider start -->
<script type="text/javascript">
	$(document).on('ready', function() {
		$(".regular").slick({
			dots: false,
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			responsive: [{
					breakpoint: 768,
					settings: {
						prevArrow: false,
						nextArrow: false
					}
				},
				{
					breakpoint: 576,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						dots: false,
						prevArrow: false,
						nextArrow: false
					}
				},
			]
		});
		$(".client_slick").slick({
			dots: false,
			slidesToShow: 6,
			slidesToScroll: 1,
			prevArrow: false,
			nextArrow: false,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [{
				breakpoint: 650,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				},
			}, {
				breakpoint: 500,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				},
			}]
		});
		$(".services-slider").slick({
			dots: false,
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			responsive: [{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			}, {
				breakpoint: 400,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
					prevArrow: false,
					nextArrow: false
				}
			}]
		});
	});

	function OpenFilterModal() {
		document.getElementById("filterModal").classList.add("slideModal").classList.add("slideModal");
	}

	function closeFilterModal() {
		document.getElementById("filterModal").classList.remove("slideModal").classList.add("slideModal");
	}
</script>
<!-- for slick slider start -->

<!-- for mobile menu toggle start -->
<script id='elementor-frontend-js-before' type='text/javascript'>
	var elementorFrontendConfig = {
		"environmentMode": {
			"edit": false,
			"wpPreview": false,
			"isScriptDebug": false
		},
		"i18n": {
			"shareOnFacebook": "Share on Facebook",
			"shareOnTwitter": "Share on Twitter",
			"pinIt": "Pin it",
			"download": "Download",
			"downloadImage": "Download image",
			"fullscreen": "Fullscreen",
			"zoom": "Zoom",
			"share": "Share",
			"playVideo": "Play Video",
			"previous": "Previous",
			"next": "Next",
			"close": "Close"
		},
		"is_rtl": false,
		"breakpoints": {
			"xs": 0,
			"sm": 480,
			"md": 768,
			"lg": 1025,
			"xl": 1440,
			"xxl": 1600
		},
		"responsive": {
			"breakpoints": {
				"mobile": {
					"label": "Mobile",
					"value": 767,
					"default_value": 767,
					"direction": "max",
					"is_enabled": true
				},
				"mobile_extra": {
					"label": "Mobile Extra",
					"value": 880,
					"default_value": 880,
					"direction": "max",
					"is_enabled": false
				},
				"tablet": {
					"label": "Tablet",
					"value": 1024,
					"default_value": 1024,
					"direction": "max",
					"is_enabled": true
				},
				"tablet_extra": {
					"label": "Tablet Extra",
					"value": 1200,
					"default_value": 1200,
					"direction": "max",
					"is_enabled": false
				},
				"laptop": {
					"label": "Laptop",
					"value": 1366,
					"default_value": 1366,
					"direction": "max",
					"is_enabled": false
				},
				"widescreen": {
					"label": "Widescreen",
					"value": 2400,
					"default_value": 2400,
					"direction": "min",
					"is_enabled": false
				}
			}
		},
		"version": "3.5.5",
		"is_static": false,
		"experimentalFeatures": {
			"e_dom_optimization": true,
			"e_optimized_assets_loading": true,
			"e_import_export": true,
			"e_hidden_wordpress_widgets": true,
			"landing-pages": true,
			"elements-color-picker": true,
			"favorite-widgets": true,
			"admin-top-bar": true
		},
		"urls": {
			"assets": "https:\/\/demos.reytheme.com\/amsterdam\/wp-content\/plugins\/elementor\/assets\/"
		},
		"settings": {
			"page": [],
			"editorPreferences": []
		},
		"kit": {
			"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
			"global_image_lightbox": "yes",
			"lightbox_enable_counter": "yes",
			"lightbox_enable_fullscreen": "yes",
			"lightbox_enable_zoom": "yes",
			"lightbox_enable_share": "yes",
			"lightbox_title_src": "title",
			"lightbox_description_src": "description"
		},
		"post": {
			"id": 8,
			"title": "Amsterdam%20Demo%20%E2%80%93%20Just%20another%20Rey%20Multisite%20Dev%20Sites%20site",
			"excerpt": "",
			"featuredImage": false
		}
	};
</script>
<!-- for mobile menu toggle end -->

<!-- lazy load compulsory start -->
<script>
	window.lazyLoadOptions = {
		elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
		data_src: "lazy-src",
		data_srcset: "lazy-srcset",
		data_sizes: "lazy-sizes",
		class_loading: "lazyloading",
		class_loaded: "lazyloaded",
		threshold: 300,
		callback_loaded: function(element) {
			if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
				if (element.classList.contains("lazyloaded")) {
					if (typeof window.jQuery != "undefined") {
						if (jQuery.fn.fitVids) {
							jQuery(element).parent().fitVids()
						}
					}
				}
			}
		}
	};
	window.addEventListener('LazyLoad::Initialized', function(e) {
		var lazyLoadInstance = e.detail.instance;
		if (window.MutationObserver) {
			var observer = new MutationObserver(function(mutations) {
				var image_count = 0;
				var iframe_count = 0;
				var rocketlazy_count = 0;
				mutations.forEach(function(mutation) {
					for (i = 0; i < mutation.addedNodes.length; i++) {
						if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
							continue
						}
						if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
							continue
						}
						images = mutation.addedNodes[i].getElementsByTagName('img');
						is_image = mutation.addedNodes[i].tagName == "IMG";
						iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
						is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
						rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
						image_count += images.length;
						iframe_count += iframes.length;
						rocketlazy_count += rocket_lazy.length;
						if (is_image) {
							image_count += 1
						}
						if (is_iframe) {
							iframe_count += 1
						}
					}
				});
				if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
					lazyLoadInstance.update()
				}
			});
			var b = document.getElementsByTagName("body")[0];
			var config = {
				childList: !0,
				subtree: !0
			};
			observer.observe(b, config)
		}
	}, !1)
</script>
<!-- lazy load compulsory end --> --}}


<script async data-no-minify="1" src="{{static_asset("assets/frontend/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js")}}">
</script>

<script data-minify="1" defer src="{{static_asset("assets/frontend/js/27010d555b6a4399e10ac6a8ba7b0c21.js")}}">
</script>

    @if (get_setting('facebook_chat') == 1)
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({
                  xfbml            : true,
                  version          : 'v3.3'
                });
              };

              (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div id="fb-root"></div>
        <!-- Your customer chat code -->
        <div class="fb-customerchat"
          attribution=setup_tool
          page_id="{{ env('FACEBOOK_PAGE_ID') }}">
        </div>
    @endif

    <script>
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

    <script>

        $(document).ready(function() {

            $(function(){
                var current = location;
                $('#site-navigation-0968131 > ul > li > a').each(function(i,el){
                    var $this = $(this).attr('href');
                    // if the current path is like this link, make it active
                    if($this == current.href){
                        $(this).parent("li").addClass('current-menu-item');
                    }
                })
            })

            $('.menu-item-type-post_type').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.rey-mega-gs').hasClass("loaded")){
                        $.post('{{ route('menus.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.rey-mega-gs').addClass('loaded').html(data);
                        });
                    }
                });
            });

            $(".js-toggle-guests").on('click',function () {
                var e = $(this),
                    o = e.siblings(".motor-subox");
                e.toggleClass("active"), o.toggleClass("active");
            });

            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function(){
            search();
        });

        $('#search').on('focus', function(){
            search();
        });

        function search(){
            var searchKey = $('#search').val();
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key){
            $.post('{{ route('cart.removeFromCart') }}', {
                _token  : AIZ.data.csrf,
                id      :  key
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "{{ translate('Item has been removed from cart') }}");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }

        function addToCompare(id){
            $.post('{{ route('compare.addToCompare') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('#compare').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to compare list') }}");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }

        function addToWishList(id){
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

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });

        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                   type:"POST",
                   url: '{{ route('products.variant_price') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){

                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if($(this).data('variation') && data.variation == $(this).data('variation')){
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                       $('#option-choice-form #chosen_price_div').removeClass('d-none');
                       $('#option-choice-form #chosen_price_div #chosen_price').html(data.price);
                       $('#available-quantity').html(data.quantity);
                       $('.input-number').prop('max', data.max_limit);
                       if(parseInt(data.in_stock) == 0 && data.digital  == 0){
                           $('.buy-now').addClass('d-none');
                           $('.add-to-cart').addClass('d-none');
                           $('.out-of-stock').removeClass('d-none');
                       }
                       else{
                           $('.buy-now').removeClass('d-none');
                           $('.add-to-cart').removeClass('d-none');
                           $('.out-of-stock').addClass('d-none');
                       }
                   }
               });
            }
        }

        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                  names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                  count++;
            });

            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }

            return false;
        }

        function addToCart(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){

                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data.modal_view);
                       AIZ.extra.plusMinus();
                       updateNavCart(data.nav_cart_view,data.cart_count);
                    }
                });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function buyNow(){
            if(checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: '{{ route('cart.addToCart') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       if(data.status == 1){

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view,data.cart_count);

                            window.location.replace("{{ route('cart') }}");
                       }
                       else{
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                       }
                   }
               });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function show_purchase_history_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
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
