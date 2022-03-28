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


<div class="main-page-wrapper">

            <!-- MAIN CONTENT AREA -->
            <div class="container">
                <div class="row content-layout-wrapper align-items-start">

                    <div class="site-content col-lg-12 col-12 col-md-12" role="main">

                        <article id="post-756" class="post-756 page type-page status-publish hentry">

                            <div class="entry-content">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid eux-margin-titles vc_custom_1615178274345">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1521121732925">
                                            <div class="wpb_wrapper">
                                                <div id="wd-604179cbf1768" class="woodmart-text-block-wrapper color-scheme-custom woodmart-title-size-custom woodmart-title-width-100 text-center vc_custom_1614903761589 hidden-xs hidden-sm eux-title-playfair">
                                                    <div class="woodmart-title-container woodmart-text-block font-primary woodmart-font-weight-400">
                                                      </div>

                                                </div>

                                                <div id="wd-604d89c21ead1" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-40 text-center eux-title-playfair woodmart-title-size-custom ">

                                                    <div class="liner-continer">
                                                        <span class="left-line"></span>
                                                        <h2 class="woodmart-title-container title  woodmart-font-weight-"> {{ get_setting('main_heading') }}</h2> <span class="img-wrapper"><img src="{{uploaded_asset(get_setting('contact_one_image'))}}" width="137" height="19" alt="{{ get_setting('main_heading') }}" title="{{ get_setting('main_heading') }}"></span> <span class="right-line"></span>
                                                    </div>

                                                    <div class="title-after_title"> {!! get_setting('contact_us_widget_main_description', null, $lang) ?? '' !!}</div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1614922590231">
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div id="wd-6042a997d4903" class="title-wrapper  woodmart-title-color-primary woodmart-title-style-default woodmart-title-width-100 text-left woodmart-title-size-medium vc_custom_1614981529508">

                                                    <div class="liner-continer">
                                                        <span class="left-line"></span>
                                                        <h4 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('contact_us_widget_second') }}</h4> <span class="right-line"></span>
                                                    </div>

                                                    <div class="title-after_title"> {!! get_setting('contact_us_widget_second_description', null, $lang) ?? '' !!}</div>

                                                </div>

                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner vc_custom_1499851571242">
                                                            <div class="wpb_wrapper">
                                                                <div id="wd-6042a8c47225e" class="title-wrapper  woodmart-title-color-default woodmart-title-style-default woodmart-title-width-100 text-left woodmart-title-size-default vc_custom_1614981315269">

                                                                    <div class="liner-continer">
                                                                        <span class="left-line"></span>
                                                                        <h4 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('contact_us_widget_third') }}</h4> <span class="right-line"></span>
                                                                    </div>

                                                                </div>

                                                                <div class="wpb_text_column wpb_content_element vc_custom_1614981330107">
                                                                    <div class="wpb_wrapper">
                                                                        {!! get_setting('contact_us_widget_third_description', null, $lang) ?? '' !!}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner vc_custom_1499851571242">
                                                            <div class="wpb_wrapper">
                                                                <div id="wd-6042a89105816" class="title-wrapper  woodmart-title-color-default woodmart-title-style-default woodmart-title-width-100 text-left woodmart-title-size-default vc_custom_1614981264534">

                                                                    <div class="liner-continer">
                                                                        <span class="left-line"></span>
                                                                        <h4 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('contact_us_widget_one') }}</h4> <span class="right-line"></span>
                                                                    </div>


                                                                </div>


                                                                <div class="wpb_text_column wpb_content_element vc_custom_1614981338458"> 
                                                                    {!! get_setting('contact_us_widget_one_description', null, $lang) ?? '' !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="wpb_column vc_column_container">
                                                         {!! get_setting('map_url', null, $lang) ?? '' !!}
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div id="wd-6042a9f48ec5f" class="title-wrapper  woodmart-title-color-default woodmart-title-style-default woodmart-title-width-100 text-left woodmart-title-size-medium vc_custom_1614981628428">

                                                    <div class="liner-continer">
                                                        <span class="left-line"></span>
                                                        <h4 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('contact_us_widget_fourth') }}</h4> <span class="right-line"></span>
                                                    </div>

                                                    {!! get_setting('contact_us_widget_fourth_description', null, $lang) ?? '' !!}

                                                </div>

                                                <div class="wpforms-container wpforms-container-full" id="wpforms-276597">
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
                                                </div> <!-- .wpforms-container -->
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </article><!-- #post -->



                    </div><!-- .site-content -->



                </div><!-- .main-page-wrapper -->
            </div> <!-- end row -->
        </div>
		
		
		 
@endsection


@section('script')
    <script src="{{ static_asset('assets/frontend/assets/js/gmaps.min.js') }}"></script>
    <script src='https://maps.google.com/maps/api/js?key=AIzaSyCj0T6t0ushlK-njZF4DwHlcMIAiLK1Tsk'></script>
    <script src="{{ static_asset('assets/frontend/assets/js/half-page.min.js') }}"></script>
@endsection
