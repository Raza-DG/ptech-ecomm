@extends('frontend.layouts.app')

@section('content')
    <div class="page-title page-title-default title-size-default title-design-centered color-scheme-dark"
        style="background-image: url({{ uploaded_asset(get_setting('checkout_banner')) ??(uploaded_asset(get_setting('default_banner')) ?? static_asset('assets-ecom/images/banner/category-banner.jpg')) }});">
        <div class="container">
            <header class="entry-header">
                <div class="woodmart-checkout-steps" id="custom-checkout-steps">
                    <ul>
                        <li class="step-cart step-completed">
                            <a href="#">
                                <span class="border"></span>
                                <div class="number-wrapper"><span>1</span><img src="assets/images/icons/tick.png" /></div>
                                <span class="step-label">Shopping cart</span>
                            </a>
                        </li>
                        <li class="step-checkout step-active">
                            <a href="#">
                                <span class="border"></span>
                                <div class="number-wrapper"><span>3</span><img src="assets/images/tick.png" /></div>
                                <span class="step-label">Checkout</span>
                            </a>
                        </li>
                        <li class="step-complete step-inactive">
                            <a href="#">
                                <span class="border"></span>
                                <div class="number-wrapper"><span>4</span></div>
                                <span class="step-label">Order complete</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </header><!-- .entry-header -->
        </div>
    </div>
    <!-- MAIN CONTENT AREA -->
    <div class="container">
        <div class="row content-layout-wrapper align-items-start">
            <div class="site-content col-lg-12 col-12 col-md-12" role="main">
                <article id="post-11" class="post-11 page type-page status-publish hentry">
                    <div class="entry-content">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="woocommerce">
                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <div class="woocommerce-form-login-toggle">
                                                        @if (!Auth::check())
                                                            <div class="woocommerce-info">
                                                                Returning customer? <a href="#" class="showlogin">Click
                                                                    here to login</a> </div>
                                                        @endif
                                                    </div>
                                                    <form method="post"
                                                        class="login woocommerce-form woocommerce-form-login hidden-form"
                                                        style="display:none;">


                                                        <p>If you have shopped with us before, please enter your details
                                                            below. If you are a new customer, please proceed to the Billing
                                                            section.</p>

                                                        <p
                                                            class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-username">
                                                            <label for="username">Username or email&nbsp;<span
                                                                    class="required">*</span></label>
                                                            <input type="text"
                                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                                name="username" id="username" autocomplete="username"
                                                                value="" />
                                                        </p>
                                                        <p
                                                            class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide form-row-password">
                                                            <label for="password">Password&nbsp;<span
                                                                    class="required">*</span></label>
                                                            <input
                                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                                type="password" name="password" id="password"
                                                                autocomplete="current-password" />
                                                        </p>


                                                        <p class="form-row">
                                                            <input type="hidden" id="woocommerce-login-nonce"
                                                                name="woocommerce-login-nonce" value="77fbfb6ba8" /><input
                                                                type="hidden" name="_wp_http_referer" value="/checkout/" />
                                                            <input type="hidden" name="redirect" value="" />
                                                            <button type="submit"
                                                                class="button woocommerce-button woocommerce-form-login__submit"
                                                                name="login" value="Log in">Log in</button>
                                                        </p>

                                                        <div class="login-form-footer">
                                                            <a href="#" class="woocommerce-LostPassword lost_password">Lost
                                                                your password?</a>
                                                            <label
                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                                <input
                                                                    class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                                    name="rememberme" type="checkbox" value="forever" />
                                                                <span>Remember me</span>
                                                            </label>
                                                        </div>



                                                    </form>

                                                    <form class="checkout_coupon woocommerce-form-coupon" method="post"
                                                        style="display:none">

                                                        <p>If you have a coupon code, please apply it below.</p>

                                                        <p class="form-row form-row-first">
                                                            <input type="text" name="coupon_code" class="input-text"
                                                                placeholder="Coupon code" id="coupon_code" value="" />
                                                        </p>

                                                        <p class="form-row form-row-last">
                                                            <button type="submit" class="button" name="apply_coupon"
                                                                value="Apply coupon">Apply coupon</button>
                                                        </p>

                                                        <div class="clear"></div>
                                                    </form>

                                                    <div class="woocommerce-notices-wrapper"></div>
                                                    <div data-zm-merchant="f91bbf48-799b-4c1c-b9e1-bb935d5ea204"
                                                        data-env="production" data-require-checkout="false"
                                                        data-zm-region="au" data-zm-price-max="1500" data-zm-price-min="1"
                                                        data-zm-display-inline="false"></div>
                                                    <div id="zipMoneyInfoDiv" style="display: none"></div>
                                                    <div id="zipMoneyErrorDiv" style="display: none;"></div>
                                                    @php
                                                        $address = \App\Models\Address::where('user_id', Auth::user()->id)
                                                            ->where('type', 'billing')
                                                            ->first();
                                                    @endphp
                                                    <form name="checkout" method="POST"
                                                        class="checkout woocommerce-checkout row"
                                                        action="{{ route('checkout.address_store') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input id="type" name="type" type="hidden" value="billing">
                                                        <input id="type" name="address_id" type="hidden"
                                                            value="{{ $address->id ?? '' }}">
                                                        <div class="col-12 col-md-5 col-lg-6">

                                                            <div class="row" id="customer_details">
                                                                <div class="col-12">
                                                                    <div class="woocommerce-billing-fields">

                                                                        <h3>Billing details</h3>
                                                                        <div
                                                                            class="woocommerce-billing-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required"
                                                                                id="billing_first_name_field"
                                                                                data-priority="10">
                                                                                <label for="billing_first_name"
                                                                                    class="">First
                                                                                    name&nbsp;<abbr class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">

                                                                                    <input type="text"
                                                                                        class="input-text "
                                                                                        name="first_name" id="first_name"
                                                                                        placeholder=""
                                                                                        value="{{ $address->first_name ?? '' }}"
                                                                                        autocomplete="given-name" /></span>
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required"
                                                                                id="billing_last_name_field"
                                                                                data-priority="20"><label
                                                                                    for="billing_last_name"
                                                                                    class="">Last
                                                                                    name&nbsp;<abbr class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">

                                                                                    <input type="text"
                                                                                        class="input-text"
                                                                                        name="last_name" id="last_name"
                                                                                        placeholder=""
                                                                                        value="{{ $address->last_name ?? '' }}"
                                                                                        autocomplete="family-name" /></span>
                                                                            </p>
                                                                            <p class="form-row form-row-wide"
                                                                                id="billing_company_field"
                                                                                data-priority="30">
                                                                                <label for="billing_company"
                                                                                    class="">{{ translate('Country') }}&nbsp;
                                                                                    <abbr class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">
                                                                                    <select class="form-control "
                                                                                        data-live-search="true"
                                                                                        data-placeholder="{{ translate('Select your country') }}"
                                                                                        name="country_id" required>
                                                                                        <option value="">
                                                                                            {{ translate('Select your country') }}
                                                                                        </option>
                                                                                        @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)
                                                                                            <option
                                                                                                value="{{ $country->id }}"
                                                                                                @if ($address->country_id != null) @if ($address->country_id == $country->id)
                                                                                                        selected @endif
                                                                                                @endif>
                                                                                                {{ $country->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </span>
                                                                            </p>

                                                                            <p class="form-row address-field validate-required form-row-wide"
                                                                                id="billing_address_1_field"
                                                                                data-priority="50">
                                                                                <label for="billing_address_1"
                                                                                    class="">{{ translate('State') }}&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">
                                                                                    <select class="form-control mb-3"
                                                                                        data-live-search="true"
                                                                                        name="state_id" required>
                                                                                        @foreach (\App\Models\State::where('status', 1)->where('country_id', $address->country_id)->get()
        as $key => $state)
                                                                                            <option
                                                                                                value="{{ $state->id }}"
                                                                                                @if ($address->state_id != null) @if ($address->state_id == $state->id)
                                                                                                        selected @endif
                                                                                                @endif>
                                                                                                {{ $state->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select></span>
                                                                            </p>

                                                                            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                                                id="billing_postcode_field"
                                                                                data-priority="90"
                                                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                                                <label for="billing_postcode"
                                                                                    class="">{{ translate('City') }}&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper"><select
                                                                                        class="form-control mb-3"
                                                                                        data-live-search="true"
                                                                                        name="city_id" required>
                                                                                        @foreach (\App\Models\City::where('status', 1)->where('state_id', $address->state_id)->get()
        as $key => $city)
                                                                                            <option
                                                                                                value="{{ $city->id }}"
                                                                                                @if ($address->city_id != null) @if ($address->city_id == $city->id)
                                                                                                        selected @endif
                                                                                                @endif>
                                                                                                {{ $city->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select></span>
                                                                            </p>

                                                                            <p class="form-row form-row-wide address-field importanthide validate-postcode"
                                                                                id="billing_postcode_field"
                                                                                data-priority="90"><label
                                                                                    for="billing_postcode"
                                                                                    class="">Postcode&nbsp;<span
                                                                                        class="optional">(optional)</span></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="text" class="input-text "
                                                                                        name="billing_postcode"
                                                                                        id="billing_postcode" placeholder=""
                                                                                        value="{{ $address->postal_code ?? '' }}"
                                                                                        autocomplete="postal-code" /></span>
                                                                            </p>

                                                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                                                id="billing_phone_field"
                                                                                data-priority="100"><label for="phone"
                                                                                    class="">Phone&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="tel" class="input-text "
                                                                                        name="phone" id="phone"
                                                                                        placeholder=""
                                                                                        value="{{ $address->phone ?? '' }}"
                                                                                        autocomplete="tel" /></span></p>
                                                                            <p class="form-row form-row-wide validate-required validate-email"
                                                                                id="billing_email_field"
                                                                                data-priority="110"><label
                                                                                    for="billing_email"
                                                                                    class="">Email
                                                                                    address&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="email" class="input-text "
                                                                                        name="email" id="email"
                                                                                        placeholder=""
                                                                                        value="{{ Auth::user()->email ?? '' }}"
                                                                                        autocomplete="email username" /></span>
                                                                            </p>
                                                                            <p class="form-row importanthide"
                                                                                id="billing_address_1_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="text" class="input-text "
                                                                                        name="billing_address_1"
                                                                                        id="billing_address_1"
                                                                                        placeholder=""
                                                                                        value="Default" /></span></p>
                                                                        </div>

                                                                        <script>
                                                                            console.log('aaa');
                                                                        </script>
                                                                    </div>

                                                                    <div class="woocommerce-account-fields d-none">

                                                                        <p class="form-row form-row-wide create-account">
                                                                            <label
                                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                                <input
                                                                                    class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                                    id="createaccount" type="checkbox"
                                                                                    name="createaccount" value="1" />
                                                                                <span>Create an account?</span>
                                                                            </label>
                                                                        </p>

                                                                    </div>
                                                                </div>

                                                                <div class="col-12">
                                                                    <div class="woocommerce-shipping-fields">

                                                                        <h3 id="ship-to-different-address">
                                                                            <label
                                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                                <input
                                                                                    id="ship-to-different-address-checkbox"
                                                                                    class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                                    type="checkbox"
                                                                                    name="ship_to_different_address"
                                                                                    value="1" /> <span>Ship to a different
                                                                                    address?</span>
                                                                            </label>
                                                                        </h3>

                                                                        <div class="shipping_address" style="display: none">


                                                                            <div class="woocommerce-shipping-fields__field-wrapper">
                                                                            <p class="form-row form-row-first validate-required"
                                                                                id="shipping_first_name_field"
                                                                                data-priority="10">
                                                                                <label for="shipping_first_name"
                                                                                    class="">First
                                                                                    name&nbsp;<abbr class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">

                                                                                    <input type="text"
                                                                                        class="input-text "
                                                                                        name="shipping_first_name" id="first_name"
                                                                                        placeholder="" autocomplete="given-name" /></span>
                                                                            </p>
                                                                            <p class="form-row form-row-last validate-required"
                                                                                id="shipping_last_name_field"
                                                                                data-priority="20"><label
                                                                                    for="shipping_last_name"
                                                                                    class="">Last name&nbsp;<abbr class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper">

                                                                                    <input type="text"
                                                                                        class="input-text"
                                                                                        name="shipping_last_name" id="last_name"
                                                                                        placeholder=""
                                                                                        autocomplete="family-name" /></span>
                                                                            </p>
                                                                            <p class="form-row form-row-wide"
                                                                                id="shipping_company_field"
                                                                                data-priority="30">
                                                                                <label for="shipping_company"
                                                                                    class="">{{ translate('Country') }}&nbsp;</label><span
                                                                                    class="woocommerce-input-wrapper">
                                                                                    <select class="form-control "
                                                                                        data-live-search="true"
                                                                                        data-placeholder="{{ translate('Select your Shipping country') }}"
                                                                                        name="shipping_country_id">
                                                                                        <option value="">
                                                                                            {{ translate('Select your country') }}
                                                                                        </option>
                                                                                        @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)
                                                                                            <option value="{{ $country->id }}" >
                                                                                                {{ $country->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </span>
                                                                            </p>

                                                                            <p class="form-row address-field validate-required form-row-wide"
                                                                                id="billing_address_1_field"
                                                                                data-priority="50">
                                                                                <label for="billing_address_1"
                                                                                    class="">{{ translate('State') }}&nbsp;</label><span
                                                                                    class="woocommerce-input-wrapper">
                                                                                    <select class="form-control mb-3"
                                                                                        data-live-search="true"
                                                                                        name="shipping_state_id">

                                                                                    </select></span>
                                                                            </p>

                                                                            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                                                id="billing_postcode_field"
                                                                                data-priority="90"
                                                                                data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                                                <label for="billing_postcode"
                                                                                    class="">{{ translate('City') }}&nbsp;</label><span
                                                                                    class="woocommerce-input-wrapper"><select
                                                                                        class="form-control mb-3"
                                                                                        data-live-search="true"
                                                                                        name="shipping_city_id">

                                                                                    </select></span>
                                                                            </p>

                                                                            <p class="form-row form-row-wide address-field importanthide validate-postcode"
                                                                                id="billing_postcode_field"
                                                                                data-priority="90"><label
                                                                                    for="billing_postcode"
                                                                                    class="">Postcode&nbsp;<span
                                                                                        class="optional">(optional)</span></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="text" class="input-text "
                                                                                        name="shipping_billing_postcode"
                                                                                        id="shipping_billing_postcode" placeholder=""
                                                                                        autocomplete="postal-code" /></span>
                                                                            </p>

                                                                            <p class="form-row form-row-wide validate-required validate-phone"
                                                                                id="billing_phone_field"
                                                                                data-priority="100"><label for="phone"
                                                                                    class="">Phone&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="tel" class="input-text "
                                                                                        name="shipping_phone" id="phone"
                                                                                        placeholder="" autocomplete="tel" /></span></p>
                                                                            <p class="form-row form-row-wide validate-required validate-email"
                                                                                id="billing_email_field"
                                                                                data-priority="110"><label
                                                                                    for="billing_email"
                                                                                    class="">Email
                                                                                    address&nbsp;<abbr
                                                                                        class="required"
                                                                                        title="required">*</abbr></label><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="email" class="input-text "
                                                                                        name="shipping_email" id="email"
                                                                                        placeholder="" autocomplete="email username" /></span>
                                                                            </p>
                                                                            <p class="form-row importanthide"
                                                                                id="billing_address_1_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="text" class="input-text "
                                                                                        name="billing_address_1"
                                                                                        id="billing_address_1"
                                                                                        placeholder=""
                                                                                        value="Default" /></span></p>
                                                                        </div>


                                                                        </div>

                                                                    </div>
                                                                    <div class="woocommerce-additional-fields">

                                                                        <div
                                                                            class="woocommerce-additional-fields__field-wrapper">
                                                                            <p class="form-row notes"
                                                                                id="order_comments_field" data-priority="">
                                                                                <label for="order_comments"
                                                                                    class="">Order
                                                                                    notes&nbsp;<span
                                                                                        class="optional">(optional)</span></label><span
                                                                                    class="woocommerce-input-wrapper">
                                                                                    <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                        rows="2" cols="5"></textarea>
                                                                                </span>
                                                                            </p>
                                                                            <p class="form-row " id="pys_empty_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="hidden"
                                                                                        class="input-hidden "
                                                                                        name="pys_empty" id="pys_empty"
                                                                                        value="" /></span></p>
                                                                            <p class="form-row "
                                                                                id="pys_landing_field" data-priority="">
                                                                                <span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="hidden"
                                                                                        class="input-hidden "
                                                                                        name="pys_landing" id="pys_landing"
                                                                                        value="" /></span>
                                                                            </p>
                                                                            <p class="form-row " id="pys_source_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="hidden"
                                                                                        class="input-hidden "
                                                                                        name="pys_source" id="pys_source"
                                                                                        value="" /></span></p>
                                                                            <p class="form-row " id="pys_utm_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="hidden"
                                                                                        class="input-hidden "
                                                                                        name="pys_utm" id="pys_utm"
                                                                                        value="" /></span></p>
                                                                            <p class="form-row "
                                                                                id="pys_browser_time_field"
                                                                                data-priority=""><span
                                                                                    class="woocommerce-input-wrapper"><input
                                                                                        type="hidden"
                                                                                        class="input-hidden "
                                                                                        name="pys_browser_time"
                                                                                        id="pys_browser_time"
                                                                                        value="" /></span></p>
                                                                        </div>


                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="street_address_field" data-priority=""><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="street_address"
                                                                                    id="street_address"
                                                                                    value="sdas" /></span></p>
                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="apartment_field" data-priority=""><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="apartment" id="apartment"
                                                                                    value="" /></span></p>
                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="zipcode_field" data-priority=""><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="zipcode" id="zipcode"
                                                                                    value="4563463" /></span></p>
                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="shipping_or_pickup_field" data-priority="">
                                                                            <span class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="shipping_or_pickup"
                                                                                    id="shipping_or_pickup"
                                                                                    value="pickup" /></span>
                                                                        </p>
                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="date_field" data-priority=""><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="date" id="date"
                                                                                    value="02-03-2022" /></span></p>
                                                                        <p class="form-row my-field-class form-row-wide"
                                                                            id="hour_slot_field" data-priority=""><span
                                                                                class="woocommerce-input-wrapper"><input
                                                                                    type="hidden" class="input-hidden "
                                                                                    name="hour_slot" id="hour_slot"
                                                                                    value="&lt;span&gt;12:30 PM - 1:00 PM&lt;/span&gt;" /></span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>

                                                        <div class="col-12 col-md-7 col-lg-6">
                                                            <div class="checkout-order-review">

                                                                <h3 id="order_review_heading">Your order</h3>

                                                                <div id="order_review"
                                                                    class="woocommerce-checkout-review-order">
                                                                    <div class="woodmart-table-wrapper">
                                                                        <table
                                                                            class="shop_table woocommerce-checkout-review-order-table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="product-name">
                                                                                        {{ translate('Product') }}</th>
                                                                                    <th class="product-total">
                                                                                        {{ translate('Subtotal') }}</th>
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
                                                                                            $product_name_with_choice = $product->getTranslation('name') . ' - ' . $cartItem['variation'];
                                                                                        }
                                                                                    @endphp
                                                                                    <tr
                                                                                        class="cart_item requires-shipping--true">
                                                                                        <td class="product-name">
                                                                                            {{ $product_name_with_choice }}
                                                                                            &nbsp; <strong
                                                                                                class="product-quantity">&times;&nbsp;{{ $cartItem['quantity'] }}</strong>
                                                                                        </td>
                                                                                        <td class="product-total">
                                                                                            <span
                                                                                                class="woocommerce-Price-amount amount"><bdi>
                                                                                                <span class="woocommerce-Price-currencySymbol">
                                                                                                </span>{{ single_price(($cartItem['price'] + $cartItem['tax']) * $cartItem['quantity']) }}</bdi></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            </tbody>
                                                                            <tfoot>

                                                                                <tr class="cart-subtotal">
                                                                                    <th>{{ translate('Tax') }}</th>
                                                                                    <td><span
                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                    class="woocommerce-Price-currencySymbol">
                                                                                                </span>{{ single_price($cartItem['tax']) }}</bdi></span>
                                                                                    </td>
                                                                                </tr>



                                                                                <tr class="order-total">
                                                                                    <th>{{ translate('Total') }}</th>
                                                                                    <td><strong><span
                                                                                                class="woocommerce-Price-amount amount"><bdi><span
                                                                                                        class="woocommerce-Price-currencySymbol"></span>{{ single_price($total) }}</bdi></span></strong>
                                                                                    </td>
                                                                                </tr>


                                                                            </tfoot>
                                                                        </table>
                                                                    </div><!-- .woodmart-table-wrapper -->
                                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                                        <ul
                                                                            class="wc_payment_methods payment_methods methods">
                                                                            @if (get_setting('credit_card') == 1)
                                                                                <li
                                                                                    class="wc_payment_method payment_method_limepay">
                                                                                    <input id="payment_method_limepay"
                                                                                        type="radio" class="input-radio"
                                                                                        name="payment_method"
                                                                                        value="limepay" checked='checked'
                                                                                        data-order_button_text="" />

                                                                                    <label for="payment_method_limepay">
                                                                                        Credit Card <img
                                                                                            src="{{ static_asset('assets-ecom/images/card-icons-list.svg') }}"
                                                                                            alt="Credit Card" /> </label>
                                                                                    <div
                                                                                        class="payment_box payment_method_limepay">
                                                                                        <p>Pay securely by Credit/Debit
                                                                                            Card.</p>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                            @if (get_setting('paypal_payment') == 1)
                                                                                <li
                                                                                    class="wc_payment_method payment_method_paypal">
                                                                                    <input id="payment_method_paypal"
                                                                                        type="radio" class="input-radio"
                                                                                        name="payment_method" value="paypal"
                                                                                        data-order_button_text="Proceed to PayPal" />

                                                                                    <label for="payment_method_paypal">
                                                                                        PayPal <img
                                                                                            src="{{ static_asset('assets-ecom/images/icons/Solutions-graphics-1-184x80.jpg') }}"
                                                                                            alt="PayPal acceptance mark" /><a
                                                                                            href="#" class="about_paypal"
                                                                                            target="_blank"
                                                                                            rel="noopener">What is
                                                                                            PayPal?</a> </label>
                                                                                    <div class="payment_box payment_method_paypal"
                                                                                        style="display:none;">
                                                                                        <p>Pay via PayPal; you can pay with
                                                                                            your credit card if you
                                                                                            don&#8217;t have a PayPal
                                                                                            account.</p>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                            @if (get_setting('cash_payment') == 1)
                                                                                @php
                                                                                    $digital = 0;
                                                                                    $cod_on = 1;
                                                                                    foreach ($carts as $cartItem) {
                                                                                        $product = \App\Models\Product::find($cartItem['product_id']);
                                                                                        if ($product['digital'] == 1) {
                                                                                            $digital = 1;
                                                                                        }
                                                                                        if ($product['cash_on_delivery'] == 0) {
                                                                                            $cod_on = 0;
                                                                                        }
                                                                                    }
                                                                                @endphp
                                                                                @if ($digital != 1 && $cod_on == 1)
                                                                                    <li
                                                                                        class="wc_payment_method cash_on_delivery">
                                                                                        <input id="cash_on_delivery"
                                                                                            type="radio"
                                                                                            class="input-radio"
                                                                                            name="payment_option"
                                                                                            value="cash_on_delivery"
                                                                                            data-order_button_text="Proceed to COD" required/>

                                                                                        <label for="cash_on_delivery">
                                                                                            {{ translate('Cash on Delivery') }}
                                                                                        </label>
                                                                                        <div class="payment_box cash_on_delivery"
                                                                                            style="display:none;">
                                                                                            <p>{{ translate('Pay with cash upon delivery.') }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </li>
                                                                                @endif
                                                                            @endif

                                                                        </ul>
                                                                        <div class="form-row place-order">
                                                                            <noscript>
                                                                                Since your browser does not support
                                                                                JavaScript, or it is disabled, please ensure
                                                                                you click the
                                                                                <em>Update Totals</em> button before placing
                                                                                your order. You may be charged more than the
                                                                                amount
                                                                                stated above if you fail to do so.
                                                                                <br /><button type="submit"
                                                                                    class="button alt"
                                                                                    name="woocommerce_checkout_update_totals"
                                                                                    value="Update totals">Update
                                                                                    totals</button>
                                                                            </noscript>

                                                                            <div
                                                                                class="woocommerce-terms-and-conditions-wrapper">
                                                                                <div
                                                                                    class="woocommerce-privacy-policy-text">
                                                                                    <p>Your personal data will be used to
                                                                                        process your order, support your
                                                                                        experience throughout
                                                                                        this website, and for other purposes
                                                                                        described in our<a href="#"
                                                                                            class="woocommerce-privacy-policy-link"
                                                                                            target="_blank">privacy
                                                                                            policy</a>.</p>
                                                                                </div>
                                                                                <div class="woocommerce-terms-and-conditions"
                                                                                    style="display: none; max-height: 200px; overflow: auto;">
                                                                                    <h3><span
                                                                                            style="font-weight: 400">Conditions
                                                                                            of Use</span></h3>
                                                                                    <ol>
                                                                                        <li><strong> Using this website
                                                                                                Means You Agree to These
                                                                                                Terms.</strong></li>
                                                                                    </ol>
                                                                                    <p><span style="font-weight: 400">Please
                                                                                            read these Terms of Use. By
                                                                                            using this website, you
                                                                                            accept these Terms of Use. These
                                                                                            are an agreement between you and
                                                                                            and govern your
                                                                                            use of this website.</span></p>
                                                                                    <h1></h1>
                                                                                    <ol start="2">
                                                                                        <li><span
                                                                                                style="font-weight: 400"><strong>
                                                                                                    Explanation</strong>
                                                                                            </span></li>
                                                                                    </ol>
                                                                                    <h1></h1>
                                                                                    <ol start="27">
                                                                                        <li><strong> Additional Information
                                                                                                Required by Law</strong>
                                                                                        </li>
                                                                                    </ol>
                                                                                </div>
                                                                                <p
                                                                                    class="form-row validate-required pb20px">
                                                                                    <label
                                                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                                        <input type="checkbox"
                                                                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                                                            name="terms" id="terms" />
                                                                                        <span
                                                                                            class="woocommerce-terms-and-conditions-checkbox-text">I
                                                                                            have read and agree to
                                                                                            the website <a href="#"
                                                                                                class="woocommerce-terms-and-conditions-link"
                                                                                                target="_blank">terms and
                                                                                                conditions</a></span>&nbsp;<span
                                                                                            class="required">*</span>
                                                                                    </label>
                                                                                    <input type="hidden" name="terms-field"
                                                                                        value="1" />
                                                                                </p>
                                                                            </div>


                                                                            <button type="submit" class="button alt"
                                                                                name="woocommerce_checkout_place_order"
                                                                                id="place_order" value="Place order"
                                                                                data-value="Place order">Place
                                                                                order</button>

                                                                            <input type="hidden"
                                                                                id="woocommerce-process-checkout-nonce"
                                                                                name="woocommerce-process-checkout-nonce"
                                                                                value="f83fa310b9" /><input type="hidden"
                                                                                name="_wp_http_referer"
                                                                                value="/checkout/" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>


                                                        {{-- @include('frontend.view_carts') --}}

                                                    </form>

                                                </div>

                                            </div>
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
    <!-- end row -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- scripts for checkout page start -->
    <!-- for tab  -->
    <script type='text/javascript' id='wc-checkout-js-extra'>
        /* <![CDATA[ */
        // var wc_checkout_params = {
        //     // "ajax_url": "\/wp-admin\/admin-ajax.php",
        //     // "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        //     "update_order_review_nonce": "1ced58b915",
        //     "apply_coupon_nonce": "8aab748107",
        //     "remove_coupon_nonce": "86768a0de2",
        //     "option_guest_checkout": "yes",
        //     // "checkout_url": "\/?wc-ajax=checkout",
        //     "is_checkout": "1",
        //     "debug_mode": "",
        //     "i18n_checkout_error": "Error processing checkout. Please try again."
        // };
        // /* ]]> */
    </script>

    <!-- for tab -->
    <script type='text/javascript' src='{{ static_asset('assets-ecom/js/jquery.blockUI.min.js') }}'
        id='jquery-blockui-js'></script>
    <script type='text/javascript' src='{{ static_asset('assets-ecom/js/checkout.min.js') }}'>
    </script>
    <script>
        document.querySelector('#ship-to-different-address-checkbox').addEventListener("change", function(e){
            if (e.target.checked == true){
                document.querySelector('.shipping_address').style.display = "block";
            } else {
                document.querySelector('.shipping_address').style.display = "none";
            }
        });
    </script>
    <!-- scripts for checkout page end -->
@endsection
@section('script')
    <script type="text/javascript">
        function add_new_address() {
            $('#new-address-modal').modal('show');
        }

        function edit_address(address) {
            var url = '{{ route('addresses.edit', ':id') }}';
            url = url.replace(':id', address);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#edit_modal_body').html(response.html);
                    $('#edit-address-modal').modal('show');
                    AIZ.plugins.bootstrapSelect('refresh');

                    @if (get_setting('google_map') == 1)
                        var lat = -33.8688;
                        var long = 151.2195;

                        if(response.data.address_data.latitude && response.data.address_data.longitude) {
                        lat = response.data.address_data.latitude;
                        long = response.data.address_data.longitude;
                        }

                        initialize(lat, long, 'edit_');
                    @endif
                }
            });
        }

        $(document).on('change', '[name=country_id]', function() {
            var country_id = $(this).val();
            get_states(country_id);
        });

        $(document).on('change', '[name=state_id]', function() {
            var state_id = $(this).val();
            get_city(state_id);
        });




        function get_states(country_id) {
            $('[name="state"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-state') }}",
                type: 'POST',
                data: {
                    country_id: country_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="state_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }

        function get_city(state_id) {
            $('[name="city"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-city') }}",
                type: 'POST',
                data: {
                    state_id: state_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="city_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }


        // shipping

        $(document).on('change', '[name=shipping_country_id]', function() {
            var country_id = $(this).val();
            shipping_get_states(country_id);
        });

        $(document).on('change', '[name=shipping_state_id]', function() {
            var state_id = $(this).val();
            shipping_get_city(state_id);
        });

        function shipping_get_states(country_id) {
            $('[name="shipping_state_id"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-state') }}",
                type: 'POST',
                data: {
                    country_id: country_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="shipping_state_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }

        function shipping_get_city(state_id) {
            $('[name="shipping_city_id"]').html("");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('get-city') }}",
                type: 'POST',
                data: {
                    state_id: state_id
                },
                success: function(response) {
                    var obj = JSON.parse(response);
                    if (obj != '') {
                        $('[name="shipping_city_id"]').html(obj);
                        AIZ.plugins.bootstrapSelect('refresh');
                    }
                }
            });
        }


    </script>
@endsection
