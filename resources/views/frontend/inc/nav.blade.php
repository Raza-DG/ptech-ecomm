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
<header class="rey-siteHeader rey-siteHeader--custom rey-siteHeader--97 header-pos--rel">
    <div class="elementor elementor-97" data-elementor-id="97" data-elementor-settings="[]"
        data-elementor-type="wp-post">
        <div class="elementor-section-wrap">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-6fa4c92 elementor-section-content-middle elementor-section-gap-no elementor-section-full_width rey-section-bg--classic elementor-section-height-default elementor-section-height-default"
                data-element_type="section" data-id="6fa4c92"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6131dfb"
                        data-element_type="column" data-id="6131dfb">
                        <div class="elementor-column-wrap--6131dfb elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e6385bd elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-logo"
                                data-element_type="widget" data-id="e6385bd"
                                data-widget_type="reycore-header-logo.default">
                                <div class="elementor-widget-container">
                                    <div class="rey-logoWrapper">
                                        <div class="rey-siteLogo">
                                            <a class="no-lazy custom-logo-link" data-no-lazy="1" data-skip-lazy="1"
                                                href="{{ url('/') }}" itemprop="url" rel="home">
                                                <img alt="" class="no-lazy custom-logo" data-no-lazy="1"
                                                    data-skip-lazy="1" height="45"
                                                    src="{{ uploaded_asset(get_setting('header_logo')) }}"
                                                    width="110">
                                            </a>
                                        </div>
                                    </div><!-- .rey-logoWrapper -->
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-0968131 elementor-widget__width-auto rey-widget-inline--left rey-widget-inline--tablet-left rey-widget-inline--mobile-left --icons-start --submenu-display-collapsed --tap-open --panel-dir--left --hbg-pos-right --hbg-text-mobileyes elementor-widget elementor-widget-reycore-header-navigation"
                                data-element_type="widget" data-id="0968131"
                                data-widget_type="reycore-header-navigation.default">
                                <div class="elementor-widget-container">
                                    <button aria-label="Open menu"
                                        class="btn rey-mainNavigation-mobileBtn rey-headerIcon"
                                        onclick="openMenu()"><span></span> <span></span> <span></span></button>
                                    <!-- .rey-mainNavigation-mobileBtn -->
                                    <div class="rey-mobileBtn-helper"></div>
                                    <nav aria-label="Main Menu" class="rey-mainNavigation rey-mainNavigation--desktop --style-default --shadow-1" data-id="-0968131" data-sm-indicator="circle" id="site-navigation-0968131">
                                        @include("frontend.partials.main_menu")
                                    </nav>
                                    <!-- .rey-mainNavigation -->
                                    <!-- mobile menu start -->
                                    <nav aria-label="Main Menu"
                                        class="rey-mainNavigation rey-mainNavigation--mobile rey-mobileNav"
                                        data-id="-0968131" id="site-navigation-mobile-0968131">
                                        <div class="rey-mobileNav-container">
                                            <div class="rey-mobileNav-header">
                                                <div class="rey-siteLogo">
                                                    <a class="no-lazy custom-logo-link" data-no-lazy="1"
                                                        data-skip-lazy="1" href="index.php" itemprop="url"
                                                        rel="home"><img alt="" class="no-lazy custom-logo"
                                                            data-no-lazy="1" data-skip-lazy="1" height="40"
                                                            src="assets/img/logo.svg" width="60"></a>
                                                </div><button aria-label="Close menu"
                                                    class="btn rey-mobileMenu-close js-rey-mobileMenu-close"
                                                    onclick="closeMenu()"><img
                                                        src="assets/themes/rey/assets/images/icons/icon-sprite.png"></button>
                                            </div>
                                            <div class="rey-mobileNav-main">
                                                <ul class="rey-mainMenu rey-mainMenu-mobile --has-indicators --megamenu-support"
                                                    id="main-menu-mobile-0968131">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-533 depth--0 --is-regular"
                                                        id="menu-item-533">
                                                        <a href="index.php"><span>HOME</span></a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544 depth--0 --is-regular"
                                                        id="menu-item-544">
                                                        <a href="about-us.php"><span>ABOUT</span></a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-943 depth--0 --is-mega --mega-custom menu-item-has-children"
                                                        id="menu-item-943">
                                                        <a class="df jcsb cursor-pointer toggle-menu"
                                                            data-panel-width="930"><span>CALIBRATION</span><img
                                                                alt="down icon" class="chevron-icon"
                                                                id="about_menu_options_chevron"
                                                                src="assets/img/icons//chevron-down.png"></a>
                                                        <div class="rey-mega-gs menu-options-div"
                                                            id="about_menu_options">
                                                            <div class="elementor elementor-894"
                                                                data-elementor-id="894" data-elementor-settings="[]"
                                                                data-elementor-type="wp-post">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                                                        data-element_type="section" data-id="6a81701">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a
                                                                                                                href="#"><span>Electrical/Electronics</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Flow
                                                                                                                    &
                                                                                                                    Force
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Pressure
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Temperature
                                                                                                                    &
                                                                                                                    Humidity
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Mass
                                                                                                                    &
                                                                                                                    Dimensional
                                                                                                                    Equipment
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Environmental
                                                                                                                    Quality
                                                                                                                    Monitoring</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Onsite
                                                                                                                    Services</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a
                                                                                                                href="#"><span>Repair</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-943 depth--0 --is-mega --mega-custom menu-item-has-children"
                                                        id="menu-item-943">
                                                        <a class="df jcsb cursor-pointer toggle-menu"
                                                            data-panel-width="930"><span>SERVICES</span><img
                                                                alt="down icon" class="chevron-icon"
                                                                id="about_menu_options_chevron"
                                                                src="assets/img/icons//chevron-down.png"></a>
                                                        <div class="rey-mega-gs menu-options-div"
                                                            id="about_menu_options">
                                                            <div class="elementor elementor-894"
                                                                data-elementor-id="894" data-elementor-settings="[]"
                                                                data-elementor-type="wp-post">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                                                        data-element_type="section" data-id="6a81701">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">CALIBRATION
                                                                                                    SERVICE</span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a
                                                                                                                href="#"><span>Electrical/Electronics</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Flow
                                                                                                                    &
                                                                                                                    Force
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Pressure
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Temperature
                                                                                                                    &
                                                                                                                    Humidity
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Mass
                                                                                                                    &
                                                                                                                    Dimensional
                                                                                                                    Equipment
                                                                                                                    Calibration</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Environmental
                                                                                                                    Quality
                                                                                                                    Monitoring</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Onsite
                                                                                                                    Services</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a
                                                                                                                href="#"><span>Repair</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-b644781 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="b644781"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h6
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">OTHER
                                                                                                    SERVICE</span></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-d88291d elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                        data-element_type="widget"
                                                                                        data-id="d88291d"
                                                                                        data-widget_type="reycore-wc-attributes.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-wcAttr rey-filterList rey-filterList--list">
                                                                                                <ul
                                                                                                    class="reyEl-wcAttr-list">
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Energized
                                                                                                                AC/DC
                                                                                                                Motor
                                                                                                                Testing
                                                                                                                (ESA)</span></a>
                                                                                                        <p>With the help
                                                                                                            of
                                                                                                            Electrical
                                                                                                            Signature
                                                                                                            Analysis we
                                                                                                            can detect
                                                                                                            many
                                                                                                            Electrical &
                                                                                                            Mechanical
                                                                                                            issues such
                                                                                                            as:</p>
                                                                                                        <ul>
                                                                                                            <li>Incoming
                                                                                                                Power
                                                                                                            </li>
                                                                                                            <li>Motor
                                                                                                                Electrical
                                                                                                                &
                                                                                                                Mechanical
                                                                                                            </li>
                                                                                                            <li>Coupling/Power
                                                                                                                Transmission/Driven
                                                                                                                load
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114 mt10px"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">De-energized
                                                                                                    Motor AC/DC Motor
                                                                                                    Testing
                                                                                                    (Offline)</span>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu mt10px"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>In
                                                                                                                    the
                                                                                                                    de-energized
                                                                                                                    mode
                                                                                                                    we
                                                                                                                    can
                                                                                                                    test
                                                                                                                    the
                                                                                                                    motor
                                                                                                                    to
                                                                                                                    detect:</span></a>
                                                                                                            <ul>
                                                                                                                <li>Turn
                                                                                                                    faults
                                                                                                                </li>
                                                                                                                <li>Coil
                                                                                                                    Faults
                                                                                                                </li>
                                                                                                                <li>Ground
                                                                                                                    faults
                                                                                                                </li>
                                                                                                                <li>Cable
                                                                                                                    faults
                                                                                                                </li>
                                                                                                                <li>Connection
                                                                                                                    Resistance
                                                                                                                </li>
                                                                                                                <li>Rotor
                                                                                                                    Eccentricity
                                                                                                                </li>
                                                                                                                <li>Broken
                                                                                                                    Rotor
                                                                                                                    Bars
                                                                                                                </li>
                                                                                                                <li>Casting
                                                                                                                    Voids
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-854d66d mt10px"
                                                                                data-element_type="column"
                                                                                data-id="854d66d">
                                                                                <div
                                                                                    class="elementor-column-wrap--854d66d elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-887b943 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="887b943"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h6
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">NEW
                                                                                                    ARRIVALS</span></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-3f390ca elementor-widget elementor-widget-image"
                                                                                        data-element_type="widget"
                                                                                        data-id="3f390ca"
                                                                                        data-widget_type="image.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <!-- <a href="#"> -->
                                                                                            <img alt=""
                                                                                                class="attachment-large size-large mt10px"
                                                                                                src="assets/img/products/1.jpg">
                                                                                            <!-- </a> -->
                                                                                            <!-- <a href="#"> -->
                                                                                            <img alt=""
                                                                                                class="attachment-large size-large mt10px"
                                                                                                src="assets/img/products/2.jpg">
                                                                                            <!-- </a> -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-943 depth--0 --is-mega --mega-custom menu-item-has-children"
                                                        id="menu-item-943">
                                                        <a class="df jcsb cursor-pointer toggle-menu"
                                                            data-panel-width="930"><span>PRODUCTS</span><img
                                                                alt="down icon" class="chevron-icon"
                                                                id="products_menu_options_chevron"
                                                                src="assets/img/icons//chevron-down.png"></a>
                                                        <div class="rey-mega-gs menu-options-div"
                                                            id="products_menu_options">
                                                            <div class="elementor elementor-894"
                                                                data-elementor-id="894" data-elementor-settings="[]"
                                                                data-elementor-type="wp-post">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                                                        data-element_type="section" data-id="6a81701">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">ALL-TEST
                                                                                                    PRO AC/DC MOTOR
                                                                                                    TESTING</span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="df jcsb menu-item">
                                                                                                            <a href="#"><span>AT
                                                                                                                    MD
                                                                                                                    lll
                                                                                                                    De-energized
                                                                                                                    &
                                                                                                                    Energized
                                                                                                                    Test</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Electrical
                                                                                                                    Signature
                                                                                                                    Analysis
                                                                                                                    (ESA)
                                                                                                                    -
                                                                                                                    ATPOL
                                                                                                                    LL</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Motor
                                                                                                                    Circuit
                                                                                                                    Analysis
                                                                                                                    - AT
                                                                                                                    5</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Motor
                                                                                                                    Circuit
                                                                                                                    Analysis
                                                                                                                    ALL-TEST
                                                                                                                    lV
                                                                                                                    PRO</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Motor
                                                                                                                    Circuit
                                                                                                                    Analyzer
                                                                                                                    - AT
                                                                                                                    33IND</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Basic
                                                                                                                    Motor
                                                                                                                    Circuit
                                                                                                                    Analyzer
                                                                                                                    - AT
                                                                                                                    31</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-b644781 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="b644781"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h6
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">ELECTRICAL
                                                                                                    TEST &
                                                                                                    MEASUREMENT</span>
                                                                                            </h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-d88291d elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                        data-element_type="widget"
                                                                                        data-id="d88291d"
                                                                                        data-widget_type="reycore-wc-attributes.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-wcAttr rey-filterList rey-filterList--list">
                                                                                                <ul
                                                                                                    class="reyEl-wcAttr-list">
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Clamp-on
                                                                                                                Meters</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Digital
                                                                                                                Multimeters</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Earth
                                                                                                                Testers</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Electrical
                                                                                                                Installations
                                                                                                                Safety</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Impedance
                                                                                                                Tester</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Insulation
                                                                                                                Testers</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Machine
                                                                                                                Switchgear
                                                                                                                Testing</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Micro
                                                                                                                ohmmete</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Portable
                                                                                                                Appliance
                                                                                                                Tester
                                                                                                                PAT</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Power
                                                                                                                Quality
                                                                                                                Analyzers</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>RCD
                                                                                                                Tester</span></a>
                                                                                                    </li>
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <a href="#"><span>Step
                                                                                                                Contact
                                                                                                                Voltage
                                                                                                                Measurement</span></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114 mt10px"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">INDOOR
                                                                                                    ENVIRONMENT
                                                                                                    QUALITY</span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu mt10px"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>MI
                                                                                                                    6201
                                                                                                                    Multifor</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>MI
                                                                                                                    6301
                                                                                                                    FonS</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>MI
                                                                                                                    6401
                                                                                                                    Pol</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114 mt10px"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">ULTRASONIC
                                                                                                    FLOWMETER</span>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu mt10px"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>UF
                                                                                                                    801
                                                                                                                    P</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>Minisonic
                                                                                                                    P</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-943 depth--0 --is-mega --mega-custom menu-item-has-children"
                                                        id="menu-item-943">
                                                        <a class="df jcsb cursor-pointer toggle-menu"
                                                            data-panel-width="930"><span>MEDIA</span><img
                                                                alt="down icon" class="chevron-icon"
                                                                id="media_menu_options_chevron"
                                                                src="assets/img/icons//chevron-down.png"></a>
                                                        <div class="rey-mega-gs menu-options-div"
                                                            id="media_menu_options">
                                                            <div class="elementor elementor-894"
                                                                data-elementor-id="894" data-elementor-settings="[]"
                                                                data-elementor-type="wp-post">
                                                                <div class="elementor-section-wrap">
                                                                    <section
                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                                                        data-element_type="section" data-id="6a81701">
                                                                        <div
                                                                            class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">ACCREDITATION
                                                                                                    & APPROVALS</span>
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>ISO/IEC
                                                                                                                    17025:2017</span></a>
                                                                                                        </li>
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <a href="#"><span>ISO
                                                                                                                    9001:2015</span></a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-b644781 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="b644781"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h6
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">TRAINING
                                                                                                    & SEMINAR</span>
                                                                                            </h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-d88291d elementor-widget elementor-widget-reycore-wc-attributes"
                                                                                        data-element_type="widget"
                                                                                        data-id="d88291d"
                                                                                        data-widget_type="reycore-wc-attributes.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-wcAttr rey-filterList rey-filterList--list">
                                                                                                <ul
                                                                                                    class="reyEl-wcAttr-list">
                                                                                                    <li
                                                                                                        class="menu-item">
                                                                                                        <p>Circuit
                                                                                                            Analysis and
                                                                                                            Electrical
                                                                                                            Signature
                                                                                                            Analysis</p>
                                                                                                        <p
                                                                                                            class="text-red">
                                                                                                            5 Days / 35
                                                                                                            hours
                                                                                                            approx.</p>
                                                                                                        <p>UPCOMING</p>
                                                                                                        <p
                                                                                                            class="text-red">
                                                                                                            5 Days / 35
                                                                                                            hours
                                                                                                            approx.</p>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114 mt10px"
                                                                                data-element_type="column"
                                                                                data-id="67a6114">
                                                                                <div
                                                                                    class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                                                                                    <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading"
                                                                                        data-element_type="widget"
                                                                                        data-id="812a1d1"
                                                                                        data-widget_type="heading.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <h3
                                                                                                class="elementor-heading-title elementor-size-default">
                                                                                                <span
                                                                                                    class="text-red">MEDIA
                                                                                                    GALLERY</span></h3>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu mt10px"
                                                                                        data-element_type="widget"
                                                                                        data-id="9cebf3e"
                                                                                        data-widget_type="reycore-menu.product-categories">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="rey-element reyEl-menu">
                                                                                                <div
                                                                                                    class="reyEl-menu-navWrapper">
                                                                                                    <ul
                                                                                                        class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                        <li
                                                                                                            class="menu-item">
                                                                                                            <p>TRAINING
                                                                                                                &
                                                                                                                SEMINAR
                                                                                                                EVENT 1
                                                                                                            </p>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <!-- <a href="#"> -->
                                                                                                <img alt=""
                                                                                                    class="attachment-large size-large mb10px"
                                                                                                    src="assets/img/uploads/sites/4/2019/05/mega-menu-horiz-pic.jpg">
                                                                                                <!-- </a> -->
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu"
                                                                                            data-element_type="widget"
                                                                                            data-id="9cebf3e"
                                                                                            data-widget_type="reycore-menu.product-categories">
                                                                                            <div
                                                                                                class="elementor-widget-container">
                                                                                                <div
                                                                                                    class="rey-element reyEl-menu">
                                                                                                    <div
                                                                                                        class="reyEl-menu-navWrapper">
                                                                                                        <ul
                                                                                                            class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                                                                            <li
                                                                                                                class="menu-item">
                                                                                                                <p>TRAINING
                                                                                                                    &
                                                                                                                    SEMINAR
                                                                                                                    EVENT
                                                                                                                    2
                                                                                                                </p>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                class="menu-item">
                                                                                                                <p>TRAINING
                                                                                                                    &
                                                                                                                    SEMINAR
                                                                                                                    EVENT
                                                                                                                    3
                                                                                                                </p>
                                                                                                            </li>
                                                                                                            <li
                                                                                                                class="menu-item">
                                                                                                                <p>TRAINING
                                                                                                                    &
                                                                                                                    SEMINAR
                                                                                                                    EVENT
                                                                                                                    4
                                                                                                                </p>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-544 depth--0 --is-regular"
                                                        id="menu-item-544">
                                                        <a href="contact.php"><span>CONTACT</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="rey-mobileNav-footer">
                                                <a class="rey-mobileNav--footerItem" href="my-account.php">Connect to
                                                    your account <svg aria-hidden="true"
                                                        class="rey-icon rey-icon-rey-icon-user" role="img">
                                                        <use href="assets/themes/rey/assets/images/icons/icon-sprite.svg#rey-icon-user"
                                                            xlink:href="assets/themes/rey/assets/images/icons/icon-sprite.svg#rey-icon-user">
                                                        </use>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ff5b7a2 elementor-widget__width-auto elementor-widget elementor-widget-reycore-header-search"
                                data-element_type="widget" data-id="ff5b7a2"
                                data-widget_type="reycore-header-search.default">
                                <div class="elementor-widget-container">
                                    <div class="rey-headerSearch rey-headerIcon js-rey-headerSearch --tp-before">
                                        <a href="#" aria-label="Search open"
                                            class="btn rey-headerSearch-toggle js-rey-headerSearch-toggle"><button
                                                class="solid-red-btn">{{translate("ONLINE SHOP")}} <span class="__icon"><svg
                                                        aria-hidden="true" class="rey-icon rey-icon-reycore-icon-bag"
                                                        role="img">
                                                        <use href="{{static_asset("assets/frontend/plugins/rey-core/assets/images/icon-sprite.svg#reycore-icon-bag")}}"
                                                            xlink:href="{{static_asset("assets/frontend/plugins/rey-core/assets/images/icon-sprite.svg#reycore-icon-bag")}}">
                                                        </use>
                                                    </svg></span></button></a>
                                    </div><!-- .rey-headerAccount-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- <div class="rey-overlay rey-overlay==header"></div> -->
</header>
