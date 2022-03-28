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
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
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
						    <li class="list-inline-item mr-3  pr-3 pl-0">
                                <a href="{{ route('dashboard') }}" class="text-reset d-inline-block   py-2" style="margin-left: 30px;">{{ translate('My Acount')}}</a>
                            </li>
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
						 @include('frontend.partials.cart')
                        
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
                             @include('frontend.partials.cart')
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
                                        <ul id="menu-categories" class="menu wd-cat-nav">
                                            <!-- option 1 AC/DC Motor Testing  -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">AC/DC Motor Testing </span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                            <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                        </div>
                                                                                    </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                            <span class="nav-link-text">BEEF</span>
                                                                                        </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Deenergized Testing</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Energized Testing </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                 
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Deenergized Testing</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Energized Testing </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Deenergized Testing</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Energized Testing </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                           
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                 
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Deenergized Testing</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Energized Testing </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- option 2 Clamp Meters /Digital Multimeters -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Clamp Meters /Digital Multimeters</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                 
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Clamp Meters</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Digital Multimeters </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                             
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Clamp Meters</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Digital Multimeters </span>
                                                                                        </a>
                                                                                    </li>

                                                                                     

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                            <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                        </div>
                                                                                    </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                            <span class="nav-link-text">BEEF</span>
                                                                                        </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Clamp Meters</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Digital Multimeters </span>
                                                                                        </a>
                                                                                    </li>

                                                                                     

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                             
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Clamp Meters</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Digital Multimeters </span>
                                                                                        </a>
                                                                                    </li>
 

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- option 3 Electrical Installation Safety -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Electrical Installation</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                           
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                 
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Single Function Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Photovoltaic & Electrical Installation Testers </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Multifunction Tester </span>
                                                                                        </a>
                                                                                    </li>

                                                                                   

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                 
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Single Function Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Photovoltaic & Electrical Installation Testers </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Multifunction Tester </span>
                                                                                        </a>
                                                                                    </li>

                                                                                     

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Single Function Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Photovoltaic & Electrical Installation Testers </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Multifunction Tester </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                            <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                        </div>
                                                                                    </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                            <span class="nav-link-text">BEEF</span>
                                                                                        </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Single Function Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Photovoltaic & Electrical Installation Testers </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Multifunction Tester </span>
                                                                                        </a>
                                                                                    </li>

                                                                                    

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- option 4 Earth Testers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Earth Testers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Analyzers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Insulation Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Step Contact Voltage Measuring System</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Analyzers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Insulation Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Step Contact Voltage Measuring System</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Analyzers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Insulation Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Step Contact Voltage Measuring System</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Analyzers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Earth Insulation Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Step Contact Voltage Measuring System</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- option 5 MicroOhmmeters -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">MicroOhmmeters</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                            <!-- option 6 Insulation Testers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Insulation Testers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Insulation Tester 10KV</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Insulation Tester 5KV  </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Insulation/Continuity 2.5KV  </span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 100A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 10A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MicroOhm 2A</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>




                                            <!-- option 7 Machine, Appliance & Switchgear Testing -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Machine, Appliance & Switchgear Testing</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3325 Multiservicer XD</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 ST CE MultitesterXA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 EU CE MultitesterXA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LB CE Multiservicer XA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LN CE Multitester XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3321 Multiservicer XA</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3325 Multiservicer XD</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 ST CE MultitesterXA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 EU CE MultitesterXA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LB CE Multiservicer XA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LN CE Multitester XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3321 Multiservicer XA</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3325 Multiservicer XD</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 ST CE MultitesterXA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 EU CE MultitesterXA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">

                                                                                            <span class="nav-link-text">MI 3394 LB CE Multiservicer XA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LN CE Multitester XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3321 Multiservicer XA</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3325 Multiservicer XD</span>
                                                                                        </a>
                                                                                    </li>

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 ST CE MultitesterXA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 EU CE MultitesterXA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LB CE Multiservicer XA </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3394 LN CE Multitester XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3321 Multiservicer XA</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 8 PAT Testers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">PAT Testers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">




                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">BMI 3309BT DeltaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 25A OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3311 GammaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 M OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 F OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">




                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">BMI 3309BT DeltaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 25A OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3311 GammaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 M OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 F OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">




                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">BMI 3309BT DeltaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 25A OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3311 GammaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 M OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 F OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">




                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">BMI 3309BT DeltaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 25A OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3311 GammaGT</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 M OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3360 F OmegaGT XA</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 9 Power Quality Analyzers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Power Quality Analyzers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Class A Power Quality Analyzer</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Power Calibrator / Simulator</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> Class S Power Quality Analyzers</span>
                                                                                        </a>
                                                                                    </li>



                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">
                                                                                    Class A Power Quality Analyzer

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Class A Power Quality Analyzer</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Power Calibrator / Simulator</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> Class S Power Quality Analyzers</span>
                                                                                        </a>
                                                                                    </li>



                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">
                                                                                    Class A Power Quality Analyzer

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Class A Power Quality Analyzer</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Power Calibrator / Simulator</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> Class S Power Quality Analyzers</span>
                                                                                        </a>
                                                                                    </li>



                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">
                                                                                    Class A Power Quality Analyzer

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Class A Power Quality Analyzer</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Power Calibrator / Simulator</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> Class S Power Quality Analyzers</span>
                                                                                        </a>
                                                                                    </li>



                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 10 Transformer Testers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Transformer Testers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3280 DT Analyzer</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3280 DT Analyzer</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3280 DT Analyzer</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MI 3280 DT Analyzer</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 11 Thermometers / IR Thermometers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Thermometers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Dial Thermometers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Probe Thermometers</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Dial Thermometers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Probe Thermometers</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Dial Thermometers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Probe Thermometers</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">

                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Dial Thermometers</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Probe Thermometers</span>
                                                                                        </a>
                                                                                    </li>




                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 12 Thermal Cameras -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Thermal Cameras</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9930 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9880 TRMS Thermal Multimeter </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> MD 9910 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9930 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9880 TRMS Thermal Multimeter </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> MD 9910 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9930 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9880 TRMS Thermal Multimeter </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> MD 9910 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9930 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 9880 TRMS Thermal Multimeter </span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text"> MD 9910 Thermal Camera</span>
                                                                                        </a>
                                                                                    </li>


                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 13 Voltage/Continuity Testers -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Voltage/Continuity Testers</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">



                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1060 LED Voltage / Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1160 LCD Voltage/Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">



                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1060 LED Voltage / Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1160 LCD Voltage/Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">


                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">



                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1060 LED Voltage / Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1160 LCD Voltage/Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->
                                                                                <ul class="sub-sub-menu">



                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1060 LED Voltage / Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>


                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">MD 1160 LCD Voltage/Continuity Tester</span>
                                                                                        </a>
                                                                                    </li>

                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>

                                            <!-- option 14 Ultrasonic Flowmeter -->
                                            <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
                                                <a href="#" class="woodmart-nav-link">
                                                    <span class="nav-link-text">Ultrasonic Flowmeter</span>
                                                </a>
                                                <div class="sub-menu-dropdown color-scheme-dark">

                                                    <div class="container">
                                                        <p>
                                                        <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                            <!-- option 1 col1 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->

                                                                                <ul class="sub-sub-menu">
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">pFlow Ultrasonic Flowmeter</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Tokyo Keiki </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col2 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->

                                                                                <ul class="sub-sub-menu">
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">pFlow Ultrasonic Flowmeter</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Tokyo Keiki </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col3 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->

                                                                                <ul class="sub-sub-menu">
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">pFlow Ultrasonic Flowmeter</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Tokyo Keiki </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- option 1 col4 start -->
                                                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                                                <div class="vc_column-inner">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">

                                                                            <!-- <figure class="wpb_wrapper vc_figure">
                                                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                    <img class="vc_single_image-img " src="assets/uploads/2021/03/beef-menu-icon-118x118.jpg" width="118" height="118" alt="beef-menu-icon" title="beef-menu-icon" />
                                                                                </div>
                                                                            </figure> -->
                                                                        </div>

                                                                        <ul class="sub-menu mega-menu-list">
                                                                            <li class="">
                                                                                <!-- <a href="product-category/beef/index.html" title="">
                                                                                    <span class="nav-link-text">BEEF</span>
                                                                                </a> -->

                                                                                <ul class="sub-sub-menu">
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">pFlow Ultrasonic Flowmeter</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="">
                                                                                        <a href="#" title="">
                                                                                            <span class="nav-link-text">Tokyo Keiki </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </p>
                                                        <style data-type="vc_shortcodes-custom-css">
                                                            .vc_custom_1614723513116 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723520541 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614723661289 {
                                                                margin-bottom: 10px !important;
                                                            }

                                                            .vc_custom_1614985854482 {
                                                                margin-bottom: 10px !important;
                                                            }
                                                        </style>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="whb-navigation whb-primary-menu main-nav site-navigation woodmart-navigation menu-left navigation-style-default" role="navigation">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="menu">
                                    <li id="menu-item-946" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-946 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover">
                                        <a href="index.php" class="woodmart-nav-link">
                                            <span class="nav-link-text">Home</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-285412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285412 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover">
                                        <a href="about.php" class="woodmart-nav-link">
                                            <span class="nav-link-text">About Us</span>
                                        </a>
                                    </li>
                                    <li id="menu-item-285412" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-285412 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover position-relative">
                                        <a href="#" class="woodmart-nav-link">
                                            <span class="nav-link-text">Brands</span>
                                        </a>
                                        <ul class="sub-men">
                                            <li><a href="#">item 1</a></li>
                                            <li><a href="#">item 2</a></li>
                                            <li><a href="#">item 3</a></li>
                                            <li><a href="#">item 4</a></li>
                                            <li><a href="#">item 5</a></li>
                                            <li><a href="#">item 6</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-949" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-949 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover">
                                        <a href="shop.php" class="woodmart-nav-link">
                                            <span class="nav-link-text">Shop</span>
                                        </a>
                                    </li>
                                    <!-- <li id="menu-item-948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-948 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover">
                                        <a href="#" class="woodmart-nav-link">
                                            <span class="nav-link-text">Delivery Areas</span>
                                        </a>
                                    </li> -->
                                    <li id="menu-item-947" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-947 item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover">
                                        <a href="contact-us.php" class="woodmart-nav-link">
                                            <span class="nav-link-text">Contact Us</span>
                                        </a>
                                    </li>
                                </ul>
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
