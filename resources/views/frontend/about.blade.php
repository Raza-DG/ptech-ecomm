@extends('frontend.layouts.app')
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
@section('content')

<!-- TOP MODULE full screen size -->
<section class="top-module video-inactive js-active-slider mt_2p" data-slider_name="top-module-slider" data-slider_arrows="advantages-content-arrows" data-slider_showbtns="false" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="false" data-slider_autoplay="true" data-slides_pc="1" data-slides_laptop="1" data-slides_tablet="1" data-slides_mobile="1">
    <div class="wrap-top-module">
        <!-- TOP-LOGO -->
        <div class="top-module-logo">
            <a href="{{ route('home') }}">
                <div class="wrap-top-logo">
                    <img src="{{ static_asset('assets/frontend/static/logo/logo_white.svg')}}" class="top-logo-img" alt="">
                </div>
            </a>
        </div>
        <div class="top-module-breadcrumbs">
            <ol class="breadcrumbs-list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Home</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Overview</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">About</span>
                    </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
            </ol>        </div>
        <!-- TOP TEXT -->
        @if (get_setting('about_slider_images') != null)
            @foreach (json_decode(get_setting('about_slider_images'), true) as $key => $value)
                <div class="top-module-text">
                    <h1 class="top-module-text_title">{{ json_decode(get_setting('about_slider_texts',null,$lang), true)[$key] ?? "" }}</h1>
                </div>
            @endforeach
        @endif
        <!-- TOP SLIDER -->
        <div class="top-module-slider">
            @if (get_setting('about_slider_images') != null)
                @foreach (json_decode(get_setting('about_slider_images'), true) as $key => $value)
                @php
                    $filepath = uploaded_asset($value);
                    $ex = explode('/',$filepath);
                @endphp
                    <div class="top-slider-element">
                        <div class="wrap-slider-element">
                            <figure class="slider-element-img responsive-resize" role="img" aria-label="" data-filename="{{end($ex)}}" data-section="home" style="background-image:url()"></figure>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <!-- TOP LINKS
        <div class="top-module-links">
            <div class="wrap-top-links">
                <div class="top-links-element js-toggle-popup" data-popup="newsletter" role="button" tabindex="0">
                    <div class="wrap-links-element">
                        <p class="links-element-text">Newsletter</p>
                        <i class="links-element-icon icon-letter"></i>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- TOP-SCROLL -->
        <div class="top-module-scroll">
            <div class="wrap-top-scroll js-scrollto" data-scroll_to=".start" data-scroll_spacer="80" role="button" tabindex="0">
                <i class="top-scroll-icon icon-sign-down"></i>
                <p class="top-scroll-text">Scroll down</p>
            </div>
        </div>
    </div>
</section>

<div class="start">
    <div class="big-wrapper first-module"></div>
</div>
<!-- todo: variables "var-info-left" & "var-graphics-left" // "var-info-right" & "var-graphics-right"-->
<section class="info-gallery var-info-left var-graphics-left">
    <div class="big-wrapper">
        <div class="wrap-info-gallery">
            <div class="info-gallery-content js-active-slider" data-slider_name="js-section-slider" data-slider_showbtns="true" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="true" data-slider_autoplay="true" data-slides_pc="1" data-slides_laptop="1" data-slides_tablet="1" data-slides_mobile="1">
                <div class="wrap-info-content">
                    <div class="info-content-box">
                        <div class="info-gallery-element">
                            <div class="wrap-info-element">
                                <div class="info-gallery-element_header">
                                    <div class="wrap-info-header">
                                        <h2 class="info-header-title">{{ get_setting('about_infocontent_mainheading',null,$lang) ?? "" }}</h2>
                                     </div>
                                </div>
                                @if (get_setting('about_infocontent_images') != null && get_setting('about_infocontent_images') != '[]' )
                                    <div class="info-gallery-element_multimedia">
                                        <div class="gallery-multimedia-arrows js-slider-arrows"></div>
                                        <div class="gallery-multimedia-box js-section-slider">
                                            @php
                                                $images = get_setting('about_infocontent_images');
                                                $image = explode(',',$images);
                                            @endphp
                                            @foreach ($image as $img)
                                                @php
                                                    $upload = uploaded_asset($img);
                                                    $file = explode('/',$upload);
                                                @endphp
                                                <div class="gallery-multimedia-element">
                                                    <div class="wrap-multimedia-element">
                                                        <figure class="multimedia-element-photo responsive-resize" role="img" aria-label="" data-filename="{{end($file)}}" style="background-image:url();"></figure>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <div class="info-gallery-element_text">
                                    <div class="wrap-info-text">
                                        <p class="info-text-paragraph">{!! get_setting('about_infocontent_decription',null,$lang) ?? "" !!}
                                        </p>
                                        <div class="info-text-btns">
                                            <div class="wrap-info-btns">
                                                @if (get_setting('about_infocontent_subdecription',null,$lang) != null)
                                                    <div class="info-btns-element btn-linker toright js-open-moretext" role="button" tabindex="0">
                                                        <p class="btn-linker-text">{{translate("Read more")}}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="moretext-module">
    <div class="big-wrapper">
        <div class="wrap-moretext-module">
            <div class="moretext-module-list">
                @if (get_setting('about_infocontent_subdecription',null,$lang) != null)
                    @foreach (json_decode(get_setting('about_infocontent_subdecription'), true) as $key => $value)
                        <div class="moretext-list-element">
                            <div class="wrap-moretext-element">
                                <h3 class="{{$value == null ? "moretext-element-title" : "moretext-element-subtitle"}}">{{ json_decode(get_setting('about_infocontent_subtitle',null,$lang),true)[$key] }}</h3>
                                <p class="moretext-element-text">{!! $value !!}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="moretext-module-btns">
                <div class="btn-linker toright js-close-moretext" role="button" aria-label="">
                    <p class="btn-linker-text">Hide</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- todo: variables "var-box-lines" -->

@if (get_setting('about_advantage_images') != null)
    <section class="advantages-module js-load-moreicons">
        <div class="big-wrapper">
            <div class="wrap-advantages-module">
                <div class="advantages-module-box js-active-slider" data-slider_name="js-section-slider" data-slider_showbtns="true" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="false" data-slider_autoplay="true" data-slides_pc="3" data-slides_laptop="2" data-slides_tablet="1" data-slides_mobile="1">
                    <div class="wrap-advantages-box">
                        <span class="advantages-box-title">{{ get_setting('about_advantage_mainheading',null,$lang) ?? "" }}</span>
                        <div class="advantages-box-list js-section-slider">
                            @if (get_setting('about_advantage_images') != null)
                                @foreach (json_decode(get_setting('about_advantage_images'), true) as $key => $value)
                                    <div class="advantages-list-element" itemprop="amenityFeature" itemscope itemtype="https://schema.org/LocationFeatureSpecification">
                                        <div class="wrap-advantages-element">
                                            <i class="advantages-element-icon {{json_decode(get_setting('advantage_icon'), true)[$key]}}"></i>
                                            <p class="advantages-element-text" itemprop="name">{{json_decode(get_setting('about_advantage_text',null,$lang), true)[$key]}}</p>
                                            <p class="advantages-element-subtext">{{json_decode(get_setting('about_advantage_subtext',null,$lang), true)[$key]}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="advantages-box-arrows js-slider-arrows"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@if(get_setting('about_discover_heading',null,$lang) != null)
    <section class="gallery-list var-box-lines">
        <div class="big-wrapper">
            <div class="wrap-gallery-list">
                <div class="gallery-list-container">
                    <div class="wrap-gallery-container">
                        <div class="box-lines-top"></div>
                        <div class="box-lines-bottom"></div>
                        <div class="gallery-list-header">
                            <div class="wrap-gallery-header">
                                <h2 class="gallery-header-title">{{ get_setting('about_discover_heading',null,$lang) ?? "" }}</h2>
                                <p class="gallery-header-subtitle">{{ get_setting('about_discover_subheading',null,$lang) ?? "" }}</p>
                            </div>
                        </div>
                        <div class="gallery-list-box">
                            @if (get_setting('about_service_images') != null)
                                @foreach (json_decode(get_setting('about_service_images'), true) as $key => $value)
                                    <div class="gallery-list-element">
                                        <a target=""
                                        @if (json_decode(get_setting('about_service_links'), true)[$key] != null && json_decode(get_setting('about_service_links'), true)[$key] != "#" )
                                            href="{{ json_decode(get_setting('about_service_links'), true)[$key] }}"
                                            @else
                                            href="javascript:void(0)"
                                            data-submenu="{{ json_decode(get_setting('about_service_menuid'), true)[$key] }}"
                                            class="js-open-submenu"
                                        @endif
                                        role="button" tabindex="0">
                                            <div class="wrap-gallery-element">
                                                <div class="gallery-element-media">
                                                    <div class="wrap-element-media">
                                                        <figure class="element-media-photo" role="img" aria-label="{{ json_decode(get_setting('about_service_heading'), true)[$key] ?? "" }}" data-lazyimg="{{uploaded_asset($value) }}"></figure>
                                                    </div>
                                                </div>
                                                <div class="gallery-element-info">
                                                    <div class="wrap-element-info">
                                                        <p class="element-info-title">{{ json_decode(get_setting('about_service_heading',null,$lang), true)[$key] ?? "" }}</p>
                                                        {{-- <p class="element-info-subtitle">Utmost professionalism with a smile</p> --}}
                                                        <div class="element-info-btns">
                                                            <div class="btn-corp">
                                                                <p class="btn-corp-text">{{json_decode(get_setting('about_service_linktext',null,$lang), true)[$key] ?? "" }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif


@endsection

@section('script')
    <script>
        $(document).ready(function(){

            $(".js-open-moretext").click(function(){
                $(this).hide();
                $(".js-close-moretext").show();
                $(".moretext-module").addClass("open");
            });
            $(".js-close-moretext").click(function(){
                $(this).hide();
                $(".js-open-moretext").show();
                $(".moretext-module").removeClass("open");
            });
           // $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
               // $('#section_featured').html(data);
                //AIZ.plugins.slickCarousel();
            //});
           // $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
              //  $('#section_best_selling').html(data);
               // AIZ.plugins.slickCarousel();
          //  });
           // $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
             //   $('#auction_products').html(data);
             //   AIZ.plugins.slickCarousel();
            //});
            //$.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
               // $('#section_home_categories').html(data);
            //    AIZ.plugins.slickCarousel();
          //  });
          // $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
              //  $('#section_best_sellers').html(data);
            //    AIZ.plugins.slickCarousel();
            //});
        });
    </script>
@endsection
