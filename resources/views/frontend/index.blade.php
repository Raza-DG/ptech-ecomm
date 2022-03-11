@extends('frontend.layouts.app')
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
@section('content')
<div class="rey-siteContent main-div --tpl-template-builder-php" id="content">
    <div class="rey-siteContainer rey-pbTemplate pl0 pr0 first-section-siteContainer">
        <div class="rey-siteRow">
            <main class="rey-siteMain rey-filterSidebar" id="main">
                <div class="elementor elementor-8" data-elementor-id="8" data-elementor-settings="[]" data-elementor-type="wp-post">
                    <div class="elementor-section-wrap">
                        <section class="home-page-section elementor-section elementor-top-section elementor-element elementor-element-8f1a5f6 elementor-section-full_width elementor-section-gap-no elementor-section-height-min-height rey-section-stretched elementor-section-items-stretch elementor-section-height-default" data-element_type="section" data-id="8f1a5f6">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ec1a5a1" data-element_type="column" data-id="ec1a5a1">
                                    <div class="elementor-column-wrap--ec1a5a1 elementor-widget-wrap elementor-element-populated">
                                        <section class="common-sections elementor-section elementor-inner-section elementor-element elementor-element-b3f3a18 elementor-section-full_width rey-flexWrap elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="b3f3a18">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f780b3b column-flex-grow-1" data-element_type="column" data-id="f780b3b">
                                                    <div class="elementor-column-wrap--f780b3b elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-798ca11 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="798ca11" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default fatura_b">{{ get_setting('slider_left_text') }}</h2>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2cf6062 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="2cf6062" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default fatura">{{ get_setting('slider_left_sub_text') }}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2d010c8 rey-colbg--classic column-flex-grow-1" data-element_type="column" data-id="2d010c8" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-column-wrap--2d010c8 elementor-widget-wrap elementor-element-populated logo-images df fld-column">
                                                        {{-- <img alt="logo image" class="mt5px" src="assets/img/enas.png"><img alt="logo image" class="mt5px" src="assets/img/iso.png"> --}}
                                                        @php
                                                            $images = explode(",",get_setting('slider_left_text_image'));
                                                        @endphp
                                                        @foreach ($images as $image)
                                                            <img alt="logo image" class="mt5px" src="{{uploaded_asset($image)}}">
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>

                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d5a4919" data-element_type="column" data-id="d5a4919">
                                    <div class="elementor-column-wrap--d5a4919 elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-4cc24e3 elementor-widget elementor-widget-reycore-cover-skew" data-element_type="widget" data-id="4cc24e3" data-widget_type="reycore-cover-skew.default">
                                            <div class="elementor-widget-container">
                                                <div class="rey-coverSkew --loading rey-coverSkew-next--off-slider --mask-transition --animated" data-slider-settings="{&quot;autoplay&quot;:true,&quot;autoplayDuration&quot;:3000,&quot;dots&quot;:true}">
                                                    <div class="coverSkew-bg">
                                                    </div>
                                                    <div class="coverSkew-slides">
                                                        <div class="coverSkew-slidesInner">
                                                            @foreach (\App\Models\Slider::where("status",1)->orderBy("sorting_id","desc")->cursor() as $key => $slider)
                                                                <div class="coverSkew-slide elementor-repeater-item-2f33bf1">
                                                                    <div class="coverSkew-slideInner">
                                                                        <div class="coverSkew-slideMask coverSkew-slideMask--1">
                                                                            <div class="coverSkew-slideMaskInner">
                                                                            </div>
                                                                        </div>
                                                                        <div class="coverSkew-slideMask coverSkew-slideMask--2">
                                                                            <div class="coverSkew-slideMaskInner">
                                                                            </div>
                                                                        </div>
                                                                        <div class="coverSkew-slideBg">
                                                                        </div>
                                                                        <img alt="" class="attachment-full size-full" src="{{uploaded_asset($slider->photo) ?? " "}}">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="coverSkew-captions">
                                                        @foreach (\App\Models\Slider::where("status",1)->orderBy("sorting_id","desc")->cursor() as $key => $title)
                                                                <style>
                                                                    .coverSkew-captionItem.heading-{{$key}} h3:before{
                                                                        background-color: <?php echo $title->background_color ?> !important;
                                                                    }
                                                                </style>
                                                            <div class="coverSkew-captionItem heading-{{$key}}">
                                                                <h3>
                                                                    <span>{{$title->title1}}</span>
                                                                </h3>
                                                                <div class="elementor-element elementor-element-reycore-cover-skew-btn-2f33bf1 elementor-align-center elementor-widget elementor-widget-reycore-button-skew" data-element_type="widget" data-id="reycore-cover-skew-btn-2f33bf1" data-widget_type="reycore-button-skew.default">
                                                                    <div class="elementor-widget-container">
                                                                            @if($title->type=='category' && $title->category_id!=0)
                                                                                <a href="{{ route('products.category', $cat->slug) }}" class="rey-buttonSkew rey-buttonSkew--filled">
                                                                                    @elseif($title->type=='brand' && $title->brand_id!=0)
                                                                                        <?php $brand=\App\Brand::find($title->brand_id); ?>
                                                                                <a href="{{ route('products.brand',  $brand->slug) }}" class="rey-buttonSkew rey-buttonSkew--filled">
                                                                                    @elseif($title->type=='custom')
                                                                                <a href="{{ url($title->link) }}" class="rey-buttonSkew rey-buttonSkew--filled">
                                                                            @endif
                                                                            <span class="buttonSkew-left">
                                                                            </span> <span class="buttonSkew-center">
                                                                                <span>{{$title->button_text}}</span>
                                                                            </span> <span class="buttonSkew-right">
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="coverSkew-next">
                                                        <div class="coverSkew-nextInner">
                                                            @foreach (\App\Models\Slider::where("status",1)->orderBy("sorting_id","desc")->cursor() as $key => $side_image)
                                                                <div class="coverSkew-nextItem elementor-repeater-item-2f33bf1">
                                                                    <img alt="" class="attachment-full size-full" src="{{uploaded_asset($side_image->photo)}}">
                                                                </div>
                                                            @endforeach
                                                            <div aria-label="right" class="rey-arrowSvg rey-arrowSvg--right" role="button">
                                                                <svg class="--default" height="8px" version="1.1" viewbox="0 0 50 8" width="50px" xmlns="http://www.w3.org/2000/svg">
                                                                    <path class="rey-arrowSvg-dash" d="M0.928904706,3.0387609 L44.0113745,3.0387609 L44.0113745,4.97541883 L0.928904706,4.97541883 C0.415884803,4.97541883 2.13162821e-14,4.54188318 2.13162821e-14,4.00708986 C2.13162821e-14,3.47229655 0.415884803,3.0387609 0.928904706,3.0387609 Z">
                                                                    </path>
                                                                    <path d="M49.6399545,3.16320794 L45.1502484,0.129110528 C45.0056033,0.0532149593 44.8474869,0.0092610397 44.685796,3.99680289e-14 C44.5479741,0.0112891909 44.4144881,0.0554642381 44.2956561,0.129110528 C44.0242223,0.2506013 43.8503957,0.531340097 43.8559745,0.839218433 L43.8559745,6.90741326 C43.8503957,7.21529159 44.0242223,7.49603039 44.2956561,7.61752116 C44.5594727,7.77895738 44.8864318,7.77895738 45.1502484,7.61752116 L49.6399545,4.58342375 C49.8682741,4.42554586 50.0055358,4.15892769 50.0055358,3.87331584 C50.0055358,3.587704 49.8682741,3.32108583 49.6399545,3.16320794 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="coverSkew-nav coverSkew-nav--lines">
                                                        <span data-index="0">01</span> <span data-index="1">02</span> <span data-index="2">03</span>
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
            </main>
            <!-- .rey-siteMain -->
        </div>
    </div>
    <!-- .rey-siteContainer -->
    <div class="rey-siteContainer rey-pbTemplate main-holder-div">
        <div class="rey-siteRow">
            <main class="rey-siteMain rey-filterSidebar" id="main">
                <div class="elementor elementor-8" data-elementor-id="8" data-elementor-settings="[]" data-elementor-type="wp-post">
                    <div class="elementor-section-wrap">
                        <section class="common-sections elementor-section elementor-top-section elementor-element elementor-element-df37072 elementor-section-full_width elementor-section-height-min-height elementor-section-content-middle rey-section-stretched elementor-section-gap-default elementor-section-height-default elementor-section-items-middle social-media-section" data-element_type="section" data-id="df37072">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-80 elementor-top-column elementor-element elementor-element-18c5bb4" data-element_type="column" data-id="18c5bb4">
                                        @if (get_setting("show_social_links") != null)
                                            <div class="elementor-column-wrap--18c5bb4 elementor-widget-wrap elementor-element-populated jcfe">
                                                <div class="elementor-element elementor-element-bb63ecb elementor-widget__width-auto elementor-widget elementor-widget-heading" data-element_type="widget" data-id="bb63ecb" data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-heading-title elementor-size-default">
                                                            {{translate("FOLLOW US")}}
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="elementor-element elementor-element-625c102 elementor-widget__width-auto elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-element_type="widget" data-id="625c102" data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                @if ( get_setting('facebook_link') !=  null )
                                                                    <span class="elementor-grid-item">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-cc642a2" href="{{ get_setting('facebook_link') }}" target="_blank">
                                                                            <span class="elementor-screen-only">
                                                                            </span> <svg height="56.693px" id="Layer_1" viewbox="0 0 56.693 56.693" width="56.693px" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029 c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77 L40.43,21.739z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                @endif
                                                                @if ( get_setting('pinterest_link') !=  null )
                                                                    <span class="elementor-grid-item">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-554673f" href="{{get_setting('pinterest_link')}}" target="_blank">
                                                                            <span class="elementor-screen-only">
                                                                            </span> <svg data-name="Layer 21" height="24" id="Layer_21" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                                                <title>
                                                                                </title>
                                                                                <path d="M12.05689,3.41667A6.92132,6.92132,0,0,0,4.99219,10.187a3.93842,3.93842,0,0,0,1.937,3.67044.53625.53625,0,0,0,.79812-.33718l.19277-.823a.50436.50436,0,0,0-.14323-.499,2.69066,2.69066,0,0,1-.73672-2.39653,5.03722,5.03722,0,0,1,4.975-4.57643c3.12027-.05518,5.00867,1.8975,4.3626,5.66614-.68545,3.99861-3.9774,4.86143-4.75694,2.69328a2.00728,2.00728,0,0,1,.02829-1.21247c.17891-.61969.4894-1.59175.64116-2.13062.35887-1.27427.23248-2.45578-.92719-2.74062-.89886-.22077-1.805.38623-2.19719,1.76525a3.88589,3.88589,0,0,0,.22638,2.4543L8.01981,17.405a4.37535,4.37535,0,0,0-.118,1.21957l.12181,2.76261A.236.236,0,0,0,8.468,21.487l1.32992-2.51835a4.37535,4.37535,0,0,0,.36863-.954l.71136-2.7678c2.35839,3.0342,7.31862.59536,7.99979-3.96644C19.651,6.10086,16.68257,3.45868,12.05689,3.41667Z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                @endif
                                                                @if ( get_setting('instagram_link') !=  null )
                                                                    <span class="elementor-grid-item">
                                                                        <a class="elementor-icon elementor-social-icon elementor-social-icon- elementor-repeater-item-7f38a9c" href="{{get_setting('instagram_link')}}" target="_blank">
                                                                            <span class="elementor-screen-only">
                                                                            </span> <svg height="512px" style="enable-background:new 0 0 512 512;" viewbox="0 0 512 512" width="512px" xmlns="http://www.w3.org/2000/svg">
                                                                                <g id="comp_x5F_173-instagram">
                                                                                    <g>
                                                                                        <path d="M256.052,138.088c-65.268,0-117.913,52.646-117.913,117.912c0,65.267,52.645,117.91,117.913,117.91 c65.267,0,117.911-52.644,117.911-117.91C373.963,190.734,321.318,138.088,256.052,138.088z M256.052,332.659 c-42.177,0-76.659-34.38-76.659-76.659c0-42.279,34.378-76.657,76.659-76.657c42.277,0,76.657,34.378,76.657,76.657 C332.709,298.279,298.229,332.659,256.052,332.659L256.052,332.659z M406.288,133.266c0,15.291-12.315,27.502-27.502,27.502 c-15.292,0-27.502-12.314-27.502-27.502c0-15.188,12.313-27.503,27.502-27.503C393.973,105.763,406.288,118.077,406.288,133.266z M484.382,161.177c-1.743-36.839-10.158-69.474-37.148-96.36c-26.886-26.887-59.52-35.302-96.36-37.148 c-37.971-2.155-151.777-2.155-189.747,0c-36.739,1.743-69.372,10.159-96.361,37.046c-26.99,26.887-35.302,59.52-37.149,96.36 c-2.155,37.969-2.155,151.777,0,189.747c1.745,36.842,10.159,69.473,37.149,96.361c26.989,26.887,59.521,35.301,96.361,37.148 c37.969,2.154,151.776,2.154,189.747,0c36.841-1.744,69.475-10.161,96.36-37.148c26.887-26.889,35.302-59.52,37.148-96.361 C486.538,312.853,486.538,199.147,484.382,161.177z M435.329,391.563c-8.004,20.112-23.5,35.61-43.716,43.716 c-30.273,12.009-102.108,9.236-135.562,9.236c-33.456,0-105.393,2.669-135.563-9.236c-20.114-8.005-35.611-23.498-43.717-43.716 C64.766,361.29,67.538,289.455,67.538,256s-2.669-105.391,9.234-135.562c8.006-20.114,23.5-35.61,43.717-43.716 c30.273-12.007,102.107-9.236,135.563-9.236c33.453,0,105.391-2.668,135.562,9.236c20.113,8.002,35.609,23.5,43.716,43.716 c12.007,30.272,9.237,102.107,9.237,135.562S447.336,361.392,435.329,391.563z">
                                                                                        </path>
                                                                                    </g>
                                                                                </g>
                                                                                <g id="Layer_1">
                                                                                </g>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                        </section>
                        <!-- welcome section start -->
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-ef6c6ae elementor-section-full_width elementor-section-gap-extended rey-flexWrap elementor-section-height-default elementor-section-height-default bg-gray welcome-section" data-element_type="section" data-id="ef6c6ae">
                            <img alt="ISO" class="circular-iso-img" src="{{uploaded_asset(get_setting('home_one_image'))}}">
                            <img alt="CURRENT" class="current-iso-img" src="{{uploaded_asset(get_setting('home_one_image2'))}}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a99aec6 rey-colbg--classic" data-element_type="column" data-id="a99aec6" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-column-wrap--a99aec6 elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-a7647dc elementor-widget elementor-widget-image" data-element_type="widget" data-id="a7647dc" data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                @php
                                                    $heading_one = explode(" ",get_setting('home_one_heading'));
                                                @endphp
                                                <h1>
                                                    {{ $heading_one[0] ?? get_setting('home_one_heading') }} {{ $heading_one[1] ?? get_setting('home_one_heading') }}
                                                     <span class="text-red Futura_Extra_Black">{{end($heading_one)}}</span>
                                                </h1>
                                                {!! get_setting('home_one_description',null,$lang) ?? "" !!}
                                                @if (get_setting('home_one_button') != null)
                                                    <button class="red-btn">{{ get_setting('home_one_button') }}</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- welcome section end -->
                        <!-- text_plus_slider section start -->
                        <section class="common-sections elementor-top-section elementor-element elementor-element-ef6c6ae2 elementor-section-full_width rey-flexWrap elementor-section-height-default elementor-section-height-default text_plus_slider-section text_plus_slider-section-b" data-element_type="section" data-id="ef6c6ae">
                            <div class="elementor-container elementor-column-gap-extended df">
                                <div class="slider-part">
                                    <section class="regular slider">
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service1.jpg")}}">
                                            <h3>DE-ENERGIZED & ENERGIED</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service2.jpg")}}">
                                            <h3>CLAMP-ON METERS</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service3.jpg")}}">
                                            <h3>ULTRASONIC FLOWMETER</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service1.jpg")}}">
                                            <h3>DE-ENERGIZED & ENERGIED</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service2.jpg")}}">
                                            <h3>CLAMP-ON METERS</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="{{static_asset("assets/frontend/img/categories/service3.jpg")}}">
                                            <h3>ULTRASONIC FLOWMETER</h3>
                                        </div>
                                    </section>
                                </div>
                                <div class="text-part">
                                    <div class="elementor-widget-container pt15px pb15px">
                                        @php
                                            $heading_second = explode(" ",get_setting('home_second_heading'));
                                        @endphp
                                        <h3 class="elementor-heading-title elementor-size-default">{{ $heading_second[0] ?? get_setting('home_second_heading') }}
                                            <span class="text-red Futura_Extra_Black">{{ $heading_second[1] ?? " " }}</span>
                                        </h3>
                                    </div>
                                    <p>
                                        {!! get_setting('home_second_description') ?? "" !!}
                                    </p>
                                    <button class="red-btn">{{ get_setting('home_second_button') }}</button>
                                </div>
                            </div>
                        </section>
                        <!-- text_plus_slider section end -->
                        <!-- ready_to_shop section start -->
                        <section class="bg-gray ready_to_shop-section common-sections" style="background-image: url({{uploaded_asset(get_setting('home_third_image'))}} ?? ' ')" data-element_type="section" data-id="ef6c6ae">
                            <div class="tal">
                                <h1 class="tal big-head-ready-to-shop">
                                    <span class="text-red futura_medium_condensed_bt">
                                        @php
                                            $heading_third = explode(" ",get_setting('home_third_heading'));
                                        @endphp
                                        @foreach ($heading_third as $key => $head)
                                            @if ($key <= 2)
                                                {{$head}}
                                            @elseif ($key > 2)
                                                @if ($key == 3)
                                                    <br>
                                                @endif
                                                {{$head}}
                                            @endif
                                        @endforeach
                                    </span>
                                </h1>
                                <button class="red-btn">{{ get_setting('home_third_button') ?? " " }}</button>
                            </div>
                        </section>
                        <!-- ready_to_shop section end -->
                        <!-- text_plus_slider section start -->
                        <section class="common-sections elementor-section elementor-top-section elementor-element elementor-element-ef6c6ae2 elementor-section-full_width rey-flexWrap elementor-section-height-default elementor-section-height-default text_plus_slider-section" data-element_type="section" data-id="ef6c6ae">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="text-part">
                                    <div class="elementor-widget-container pt15px pb15px">
                                        @php
                                            $heading_fourths = explode(" ",get_setting('home_fourth_heading'));
                                        @endphp
                                        <h3 class="elementor-heading-title elementor-size-default">{{ current($heading_fourths) ?? get_setting('home_fourth_heading') }}
                                            @php
                                                array_shift($heading_fourths);
                                            @endphp
                                            <span class="text-red Futura_Extra_Black">
                                                @foreach ($heading_fourths as $heading_fourth)
                                                    {{ $heading_fourth ?? " " }}
                                                @endforeach
                                            </span>
                                        </h3>
                                    </div>
                                    <p>
                                        {!! get_setting('home_fourth_description') ?? "" !!}
                                    </p>
                                    @if (get_setting('home_fourth_description') != null)
                                        <button class="red-btn">{{ get_setting('home_fourth_button') }}</button>
                                    @endif
                                </div>
                                <div class="slider-part">
                                    <section class="regular slider">
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service1.jpg">
                                            <h3>DE-ENERGIZED & ENERGIED</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service2.jpg">
                                            <h3>CLAMP-ON METERS</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service3.jpg">
                                            <h3>ULTRASONIC FLOWMETER</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service1.jpg">
                                            <h3>DE-ENERGIZED & ENERGIED</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service2.jpg">
                                            <h3>CLAMP-ON METERS</h3>
                                        </div>
                                        <div class="slider-div">
                                            <img src="assets/img/categories/service3.jpg">
                                            <h3>ULTRASONIC FLOWMETER</h3>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                        <!-- text_plus_slider section end -->
                        <section class=" elementor-top-section elementor-element elementor-element-cba0f13 elementor-section-full_width elementor-section-height-default elementor-section-height-default our-client-section" data-element_type="section" data-id="cba0f13">
                            <div class="">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2d0d00c" data-element_type="column" data-id="2d0d00c">
                                    <div class="elementor-column-wrap--2d0d00c elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-f233242 gallery-cols--10 gallery-cols--mobile-3 elementor-widget elementor-widget-image-gallery" data-element_type="widget" data-id="f233242" data-widget_type="image-gallery.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-widget-container pt20px pb20px">
                                                    <h3 class="elementor-heading-title elementor-size-default tac">
                                                        @php
                                                            $heading_fith = explode(" ",get_setting('home_fifth_heading'));
                                                        @endphp
                                                        {{current($heading_fith)}}
                                                        @foreach ($heading_fith as $key => $item)
                                                            @if ($key != 0)
                                                                <span class="text-red Futura_Extra_Black">{{$item}}</span>
                                                            @endif
                                                        @endforeach
                                                    </h3>
                                                </div>
                                                <div class="elementor-image-gallery">
                                                    <div class='gallery galleryid-8 gallery-columns-10 gallery-size-full client_slick' id='gallery-1'>
                                                        @if (get_setting('home_fifth_images') != null)
                                                            @foreach (json_decode(get_setting('home_fifth_images'), true) as $key => $image)
                                                            <div class='gallery-ico n'>
                                                                <img alt="" class="attachment-full size-full" src="{{uploaded_asset($image)}}">
                                                            </div>
                                                            @endforeach
                                                        @endif
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
            </main>
            <!-- .rey-siteMain -->
        </div>
    </div>
    <!-- .rey-siteContainer -->
</div>
@endsection



