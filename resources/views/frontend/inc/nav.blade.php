@if (get_setting('topbar_banner') != null)
    <div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
        <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
            <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}"
                class="w-100 mw-100 h-50px h-lg-auto img-fit">
        </a>
        <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed"
            data-toggle="remove-parent" data-parent=".top-banner">
            <i class="la la-close la-2x"></i>
        </button>
    </div>
@endif
@php $agent = useragent(); @endphp
 <header class="whb-header whb-sticky-shadow whb-scroll-stick whb-sticky-real">
    <div class="whb-main-header">



        <div class="whb-row whb-general-header whb-not-sticky-row whb-without-bg whb-border-fullwidth whb-color-dark whb-flex-flex-middle">
            <div class="container">
                <div class="whb-flex-row whb-general-header-inner">
                    <div class="whb-column whb-col-left whb-visible-lg">
                        <div class="site-logo">
                            <div class="woodmart-logo-wrap switch-logo-enable">
							<a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
                                @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                               <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" style="max-width: 150px;" /> </a>
                        @else
                           <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" style="max-width: 150px;" /> </a>
                        @endif
						</a>
                            </div>
                        </div>
                    </div>
                    <div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-right whb-visible-lg">

                        <div class="whb-text-element reset-mb-10 ">
                            <ul class="inline-list inline-list-with-border main-nav-style">
                                <li>
                                    <a>SEARCH PRODUCTS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="whb-search search-button wd-tools-element" title="Search">
                            <a href="#">
                                <span class="search-button-icon wd-tools-icon">
                                </span>
                            </a>
                        </div>
                        <div class="whb-divider-element whb-divider-default ">
                        </div>

                           @auth
                            <div class="woodmart-header-links woodmart-navigation menu-simple-dropdown wd-tools-element item-event-hover my-account-with-text">
                                <a href="#" title="My account"><span class="wd-tools-icon"></span> <span class="wd-tools-text">My Account</span></a>
                                <div class="sub-menu-dropdown menu-item-my-account color-scheme-darks">
                                    <ul class="sub-menu">

                                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                            @if (isAdmin())
                                                    <a href="{{ route('admin.dashboard') }}"><span>Dashboard</span></a>
                                                @else
                                                    <a href="{{ route('dashboard') }}"><span>Dashboard</span></a>
                                            @endif
                                        </li>
                                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                            <a href="{{route('orders.index')}}"><span>Orders</span></a>
                                        </li>
                                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                            <a href="{{route("address")}}"><span>Addresses</span></a>
                                        </li>
                                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                            <a href="{{route('profile')}}"><span>Account details</span></a>
                                        </li>
                                        <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                            <a href="{{ route('logout') }}"><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="whb-divider-element whb-divider-default"></div>
						   @else
						   <div class="woodmart-header-links woodmart-navigation menu-simple-dropdown wd-tools-element item-event-hover  my-account-with-text login-side-opener">
						    <a href="javascript:;" title="Login / Register">
                                <span class="wd-tools-icon">
                                </span>
                                <span class="wd-tools-text">
                                    Login / Register </span>
                            </a>
							</div>
							@endauth

                        <div class="whb-divider-element whb-divider-default ">
                        </div>
                        <div class="woodmart-shopping-cart wd-tools-element woodmart-cart-design-2 woodmart-cart-alt cart-widget-opener">
                            <a href="javascript:;" title="Shopping cart">
                                <i class="la la-shopping-cart la-2x opacity-80"></i>
                                <span class="flex-grow-1 ml-1">
        @if(isset($cart) && count($cart) > 0)
                                        <span class="badge badge-primary badge-inline badge-pill cart-count">
                {{ count($cart)}}
            </span>
                                    @else
                                        <span class="badge badge-primary badge-inline badge-pill cart-count">0</span>
                                    @endif
        <span class="nav-box-text d-none d-xl-block opacity-70">{{translate('Cart')}}</span>
    </span>
                            </a>
                        </div>


                    </div>
                    <div class="whb-column whb-mobile-left whb-hidden-lg">
                        <div class="woodmart-burger-icon wd-tools-element mobile-nav-icon whb-mobile-nav-icon wd-style-text">
                            <a href="#">
                                <span class="woodmart-burger wd-tools-icon">
                                </span>
                                <span class="woodmart-burger-label wd-tools-text">Menu</span>
                            </a>
                        </div>

                        <!--END MOBILE-NAV-ICON-->
                    </div>
                    <div class="whb-column whb-mobile-center whb-hidden-lg">
                        <div class="site-logo">
                            <div class="woodmart-logo-wrap switch-logo-enable">
							<a class="d-block py-20px mr-3 ml-0" href="{{ route('home') }}">
                               @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @endif
						</a>
                            </div>
                        </div>
                    </div>

                    <div class="whb-column whb-mobile-right whb-hidden-lg">
                        <div class="woodmart-shopping-cart wd-tools-element woodmart-cart-design-5 cart-widget-opener">
                            @if ($agent->isDesktop())
                             @include('frontend.partials.cart')
                            @elseif($agent->isMobile())
                                <a href="javascript:;" title="Shopping cart">
                                <span class="woodmart-cart-icon wd-tools-icon">
                                     @if(isset($cart) && count($cart) > 0)
                                    <span class="woodmart-cart-number  cart-count">{{ count($cart)}} <span>items</span></span>
                                    @else
                                        <span class="woodmart-cart-number  cart-count">0</span>
                                    @endif
                                </span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <div class="whb-row whb-header-bottom whb-not-sticky-row whb-with-bg whb-border-fullwidth whb-color-light whb-flex-flex-middle black-menu-bar">
            <div class="container">
                <div class="whb-flex-row whb-header-bottom-inner">
                    <div class="whb-column whb-col-left whb-visible-lg">




                        <div class="header-categories-nav show-on-hover whb-gp52f6kmxv7oobbfe7ka" role="navigation">
                            <div class="header-categories-nav-wrap">
                                <span class="menu-opener color-scheme-light">
                                    <span class="woodmart-burger">
                                    </span>

                                    <span class="menu-open-label"> PRODUCTS </span>
                                    <span class="arrow-opener">
                                    </span>
                                </span>



                                <div class="categories-menu-dropdown vertical-navigation woodmart-navigation desktop-nav">
                                    <div class="menu-categories-container">
                                            @include('frontend.partials.category_menu')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="whb-navigation whb-primary-menu main-nav site-navigation woodmart-navigation menu-left navigation-style-default" role="navigation">
                            <div class="menu-main-menu-container">
							@include('frontend.partials.main_menu')
                            </div>
                        </div>
                        <!--END MAIN-NAV-->
                    </div>
                    <div class="whb-column whb-col-center whb-visible-lg whb-empty-column">
                    </div>
                    <div class="whb-column whb-col-right whb-visible-lg">

                        <div class="whb-text-element reset-mb-10 ">
                            <!-- <img style="max-height: 30px;" src="assets/uploads/2021/03/after-pay-top-bar.png" /> | <img style="max-height: 30px;" src="assets/uploads/2021/03/zip-pay-top-bar.png" /> -->
                        </div>
                    </div>
                    <div class="whb-column whb-col-mobile whb-hidden-lg">

                        <div class="whb-text-element reset-mb-10  text-element-inline">
                            <!-- <img style="max-height: 30px;" src="assets/uploads/2021/03/after-pay-top-bar.png" /> | <img style="max-height: 30px;" src="assets/uploads/2021/03/zip-pay-top-bar.png" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
