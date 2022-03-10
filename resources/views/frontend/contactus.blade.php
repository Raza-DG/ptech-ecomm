@extends('frontend.layouts.app')
<link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/assets/css/half-page.css') }}">
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
@section('content')
    <div class="rey-siteContent main-div --tpl-template-builder-php" id="content">
        <section class="common-sections about-bg-gray" data-element_type="section" data-id="9161df8">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">HOME/ <span class="text-red">CONTACT</span>
                </p>
            </div>
        </section>
        <div class="rey-siteContainer rey-pbTemplate main-holder-div">
            <div class="rey-siteRow">
                <main class="rey-siteMain rey-filterSidebar contact-main" id="main">
                    <div class="elementor elementor-1032" data-elementor-id="1032" data-elementor-settings="[]"
                        data-elementor-type="wp-post">
                        <div class="elementor-section-wrap common-sections">
                            <section
                                class="elementor-top-section elementor-element elementor-element-9161df8 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                data-element_type="section" data-id="9161df8" style="text-align:center;">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d7b482"
                                        data-element_type="column" data-id="8d7b482">
                                        <div
                                            class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading"
                                                data-element_type="widget" data-id="dd31e89"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="text-red pt60px">{{ get_setting('main_heading') }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-top-section elementor-element elementor-element-9161df8 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                data-element_type="section" data-id="9161df8" style="text-align:center;">
                                <div class="elementor-container elementor-column-gap-default df sm-fl-d-column">
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8d7b482"
                                        data-element_type="column" data-id="8d7b482">
                                        <div
                                            class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading"
                                                data-element_type="widget" data-id="dd31e89"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="Futura_Extra_Black italic fz22px stretch-h">
                                                        {{ get_setting('contact_us_widget_one') }}</h3>
                                                    <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                        <div class="elementor-widget-container">
                                                            {!! get_setting('contact_us_widget_one_description', null, $lang) ?? '' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8d7b482"
                                        data-element_type="column" data-id="8d7b482">
                                        <div
                                            class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading"
                                                data-element_type="widget" data-id="dd31e89"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="Futura_Extra_Black italic fz22px stretch-h">
                                                        {{ get_setting('contact_us_widget_second') }}</h3>
                                                    <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                        <div class="elementor-widget-container">
                                                            {!! get_setting('contact_us_widget_second_description', null, $lang) ?? '' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8d7b482"
                                        data-element_type="column" data-id="8d7b482">
                                        <div
                                            class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading"
                                                data-element_type="widget" data-id="dd31e89"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="Futura_Extra_Black italic fz22px stretch-h">
                                                        {{ get_setting('contact_us_widget_third') }}</h3>
                                                    <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                        <div class="elementor-widget-container">
                                                            {!! get_setting('contact_us_widget_third_description', null, $lang) ?? '' !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><br>
                            <br>
                            <section
                                class="elementor-section elementor-top-section elementor-element elementor-element-6167dae elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default"
                                data-element_type="section" data-id="6167dae">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c16c300"
                                        data-element_type="column" data-id="c16c300">
                                        <div
                                            class="elementor-column-wrap--c16c300 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading"
                                                data-element_type="widget" data-id="dd31e89"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default"><span
                                                            class="Futura_Extra_Black italic">{{ get_setting('contact_us_widget_fourth') }}</span>
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-39e40ef u-links-anim-ul elementor-widget elementor-widget-text-editor"
                                                data-element_type="widget" data-id="39e40ef"
                                                data-widget_type="text-editor.default">
                                                <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                    <div class="elementor-widget-container">
                                                        {!! get_setting('contact_us_widget_fourth_description', null, $lang) ?? '' !!}
                                                    </div>
                                                    <div class="map">
                                                        {!! get_setting('map_url') !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4175219"
                                        data-element_type="column" data-id="4175219">
                                        <div
                                            class="elementor-column-wrap--4175219 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-82e66f4 elementor-widget elementor-widget-image"
                                                data-element_type="widget" data-id="82e66f4"
                                                data-widget_type="image.default">
                                                <form action="{{ route('contact_store') }}"
                                                    class="wpcf7-form init rey-cf7--basic demo contact-form"
                                                    data-status="init" method="POST" novalidate="novalidate">
                                                    @csrf
                                                    <div style="display: none;">
                                                        <input name="_wpcf7" type="hidden" value="6"> <input
                                                            name="_wpcf7_version" type="hidden" value="5.5.4"> <input
                                                            name="_wpcf7_locale" type="hidden" value="en_US"> <input
                                                            name="_wpcf7_unit_tag" type="hidden" value="wpcf7-f6-p1034-o1">
                                                        <input name="_wpcf7_container_post" type="hidden" value="1034">
                                                        <input name="_wpcf7_posted_data_hash" type="hidden" value="">
                                                    </div>
                                                    <p><span class="wpcf7-form-control-wrap your-name"><input
                                                                aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                name="name" placeholder=" Your Name (required)"
                                                                size="40" type="text" value="" required></span></p>
                                                    <p><span class="wpcf7-form-control-wrap your-email"><input
                                                                aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                name="email" placeholder="Your Email (required)"
                                                                size="40" type="email" value="" required></span></p>
                                                    <p><span class="wpcf7-form-control-wrap your-subject"><input
                                                                aria-invalid="false" class="wpcf7-form-control wpcf7-text"
                                                                name="tel" placeholder="Phone (required)" size="40"
                                                                type="text" value="" required></span></p>
                                                    <p><span class="wpcf7-form-control-wrap your-message">
                                                            <textarea aria-invalid="false"
                                                                class="wpcf7-form-control wpcf7-textarea" cols="40"
                                                                name="message" placeholder="Message"
                                                                rows="10"></textarea></span></p>
                                                    <p class="red-btn"><input
                                                            class="wpcf7-form-control has-spinner wpcf7-submit btn"
                                                            type="submit" value="SEND"></p>
                                                    <div aria-hidden="true" class="wpcf7-response-output"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </main><!-- .rey-siteMain -->
            </div>
        </div><!-- .rey-siteContainer -->
    </div><!-- .rey-siteContent -->
@endsection


@section('script')
    <script src="{{ static_asset('assets/frontend/assets/js/gmaps.min.js') }}"></script>
    <script src='https://maps.google.com/maps/api/js?key=AIzaSyCj0T6t0ushlK-njZF4DwHlcMIAiLK1Tsk'></script>
    <script src="{{ static_asset('assets/frontend/assets/js/half-page.min.js') }}"></script>
@endsection
