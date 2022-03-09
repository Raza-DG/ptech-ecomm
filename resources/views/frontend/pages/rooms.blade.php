@extends('frontend.layouts.app')

@section('content')
@if ($room->pagecategory != null && $room->pagecategory->name == "Stay")
    <aside class="motor-fixed" data-kids="on" data-babies="on">
        <div class="wrap-motor-fixed">
            <i class="motor-close-btn btn-circle icon-close js-close-motor" role="button" tabindex="0"></i>
            <div class="motor-fixed-box">
                <p class="motor-box-title">Book your room</p>
                <p class="motor-box-subtitle">The Tower Plaza Hotel Dubai</p>
                <div class="wrap-motor-box">
                    <form id="motor-form" target="_blank" action="#">

                        <div class="motor-box-element">
                            <input type="hidden" id="lang_form" value="en" />
                            <input type="hidden" form="motor-form" id="dispositivo" value="">
                            <input type="hidden" form="motor-form" id="affiliate" name="affiliate" value="#">
                            <div class="wrap-motor-element">
                                <div class="motor-element-field">
                                    <div class="wrap-motor-field">
                                        <span class="motor-field-text">Arrival</span>
                                        <input name="datein" id="datein" readonly="true" type="text" placeholder="0/00/0000" autocomplete="off" class="motor-field-input">
                                        <i class="motor-field-icon icon-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="motor-box-element">
                            <div class="wrap-motor-element">
                                <div class="motor-element-field">
                                    <div class="wrap-motor-field">
                                        <span class="motor-field-text">Departure</span>
                                        <input name="dateout" id="dateout" readonly="true" type="text" placeholder="0/00/000" autocomplete="off" class="motor-field-input">
                                        <i class="motor-field-icon icon-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="motor-box-element">
                            <div class="wrap-motor-element">
                                <div class="motor-element-field js-toggle-guests">
                                    <div class="wrap-motor-field">
                                        <span class="motor-field-text">Guests</span>
                                        <p class="motor-field-input guests">02</p>
                                        <i class="motor-field-icon icon-sign-down"></i>
                                    </div>
                                </div>
                                <!-- todo: toggle box guests -->
                                <div class="motor-subox">
                                    <div class="wrap-motor-subox">
                                        <div class="motor-subox-container">
                                            <div class="motor-subox-element">
                                                <div class="motor-select">
                                                    <div class="wrap-motor-select">
                                                        <span class="motor-select-title">aged</span>
                                                        <select name="adultos" class="motor-select-input adults">
                                                            <option value="1">1</option>
                                                            <option value="2" selected>2</option>
                                                        </select>
                                                        <i class="motor-select-icon icon-sign-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="motor-subox-element">
                                                <!-- todo: age-selector=on/off to show/hide -->
                                                <div id="kids-selector" class="motor-select" data-age-selector="off" data-kids-text="Children" data-min-age="3" data-max-age="12">
                                                    <div class="wrap-motor-select">
                                                        <span class="motor-select-title">Children<small>/ Aged</small></span>
                                                        <select class="motor-select-input kids" name="ninos">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select>
                                                        <i class="motor-select-icon icon-sign-down"></i>
                                                    </div>
                                                </div>
                                                <!-- todo: kids ages selector -->
                                                <div class="motor-subselect-box">
                                                    <div class="wrap-subselect-box">
                                                        <p class="subselect-box-title">Ages</p>
                                                        <div class="subselect-box-inputs"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="motor-subox-element">
                                                <div class="motor-select">
                                                    <div class="wrap-motor-select">
                                                        <span class="motor-select-title">Babies<small>/ Aged</small></span>
                                                        <select class="motor-select-input babies" name="bebes">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                        <i class="motor-select-icon icon-sign-down"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="babies_form_div" style="display: none;">

                                            </div>
                                            <div class="motor-subox-btns">
                                                <div class="wrap-subox-btns">
                                                    <div class="subox-btns-element btn-corp btn-call2 btn-small js-apply-guests">
                                                        <p class="btn-corp-text">Apply</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="motor-box-btn">
                            <a href="{{route('contact')}}" rel="external nofollow">
                                <div class="wrap-motor-btn">
                                    <p class="motor-btn-text">Book Your Stay!</p>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="motor-box-close js-close-motor">
                    <i class="btn-close icon-close"></i>
                    <p class="motor-box-close_text">Close</p>
                </div>
            </div>
        </div>
    </aside>
@endif
<!-- responsive top header -->
<div class="responsive-header">
    <div class="wrap-responsive-header">
        <a href="{{route("home")}}">
            <figure class="links-logo_element" role="img" aria-label="logo"></figure>
        </a>
    </div>
</div>

<!-- TOP MODULE full screen size -->
<section class="top-module video-inactive js-active-slider" data-slider_name="top-module-slider" data-slider_arrows="advantages-content-arrows" data-slider_showbtns="false" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="false" data-slider_autoplay="true" data-slides_pc="1" data-slides_laptop="1" data-slides_tablet="1" data-slides_mobile="1">
    <div class="wrap-top-module">
        <!-- TOP-LOGO -->
        <div class="top-module-logo">
            <a href="{{route('home')}}">
                <div class="wrap-top-logo">
                    <img src="{{static_asset("assets/frontend/static/logo/logo_en.svg")}}" class="top-logo-img" alt="">
                </div>
            </a>
        </div>
        <!-- TOP BREADCRUMBS -->
        <div class="top-module-breadcrumbs">
            <ol class="breadcrumbs-list" itemscope itemtype="#">
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="#">
                    <a itemprop="item" href="{{route('home')}}">
                        <span class="breadcrumbs-element-text" itemprop="name">{{translate("Home")}}</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="#">
                        <a itemprop="item" href="javascript:void(0)" class="wrap-links-element js-open-submenu" data-submenu="{{$room->menuroom->parent_id}}">
                            <span class="breadcrumbs-element-text" itemprop="name">{{$room->pagecategory->name ?? ""}}</span>
                        </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope itemtype="#">
                    <a itemprop="item" href="{{route('room.slug',$room->slug)}}">
                        <span class="breadcrumbs-element-text" itemprop="name">{{$room->getTranslation("name")}}</span>
                    </a>
                    <span itemprop="position" content="3">&gt;</span>
                </li>
            </ol>
        </div>
        <!-- TOP TEXT -->
        <div class="top-module-text">
                @if ($room->slider_btn != null)
                <div class="top-module-text_btn btn-corp btn-white">
                    <a href="{{$room->slider_link}}" target="_blank" class="btn-corp-text">{{$room->getTranslation("slider_btn")}}</a>
                </div>
                @endif
            <h1 class="top-module-text_title">{{$room->getTranslation("name")}}</h1>
        </div>
        <!-- TOP SLIDER -->
        <div class="top-module-slider">

            @php
                $sliders = $room->sliders;
                $images = explode(',',$sliders);
            @endphp
            @foreach ($images as $image)
                @php
                    $filepath = uploaded_asset($image);
                    $file = explode("/",$filepath);
                @endphp
                <div class="top-slider-element">
                    <div class="wrap-slider-element">
                        <figure class="slider-element-img responsive-resize" role="img" aria-label="" data-filename="{{end($file)}}" data-section="room" style="background-image:url();"></figure>
                    </div>
                </div>
            @endforeach
            {{-- <div class="top-slider-element">
                <div class="wrap-slider-element">
                    <figure class="slider-element-img responsive-resize" role="img" aria-label="" data-filename="slider/superior-king1.jpg" data-section="room" style="background-image:url();"></figure>
                </div>
            </div> --}}

        </div>
        <!-- TOP-SCROLL -->
        <div class="top-module-scroll">
            <div class="wrap-top-scroll js-scrollto" data-scroll_to=".start" data-scroll_spacer="80" role="button" tabindex="0">
                <i class="top-scroll-icon icon-sign-down"></i>
                <p class="top-scroll-text">{{translate("Scroll down")}}</p>
            </div>
        </div>
    </div>
</section>
<div class="start">
    <div class="big-wrapper"></div>
</div>
<!-- todo: variables "var-info-left" & "var-graphics-left" // "var-info-right" & "var-graphics-right"-->
@if ($room->description != "null" && $room->description != null)

    @foreach (json_decode($room->getTranslation("description"),true) as $key => $description)
        @php
        $position = null;
        if($key % 2 == 0){
            $position = "even";
        }
        @endphp
        <section class="info-gallery {{$position == "even" ? "var-info-left" : "var-info-right" }}  var-graphics-left">
            <div class="big-wrapper">
                <div class="wrap-info-gallery">
                    <div class="info-gallery-content js-active-slider" data-slider_name="js-section-slider" data-slider_showbtns="true" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="true" data-slider_autoplay="true" data-slides_pc="1" data-slides_laptop="1" data-slides_tablet="1" data-slides_mobile="1">
                        <div class="wrap-info-content">
                            <div class="info-content-box">
                                <div class="info-gallery-element">
                                    <div class="wrap-info-element">
                                        <div class="info-gallery-element_header">
                                            <div class="wrap-info-header">
                                                <h2 class="info-header-title"></h2>
                                            </div>
                                        </div>
                                        <div class="info-gallery-element_multimedia">
                                            <div class="gallery-multimedia-arrows js-slider-arrows"></div>
                                            <div class="gallery-multimedia-box js-section-slider">
                                                {{-- @dd(json_decode($room->images,true)[$key]) --}}
                                                @if ($room->images != null)
                                                        @php
                                                            $images = explode(',',json_decode($room->images,true)[$key]);
                                                        @endphp
                                                        @foreach ($images as $img)
                                                        @php
                                                            $filepath = uploaded_asset($img);
                                                            $file = explode('/',$filepath);
                                                        @endphp
                                                            <div class="gallery-multimedia-element">
                                                                <div class="wrap-multimedia-element">
                                                                    <figure class="multimedia-element-photo responsive-resize" role="img" aria-label="" style="background-image:url();" data-filename="{{end($file)}}"></figure>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <div class="info-gallery-element_text">
                                            <div class="wrap-info-text">
                                                {{-- <div class="info-text-paragraph"> --}}
                                                    {!! $description !!}
                                                {{-- </div> --}}
                                                @if (json_decode($room->button,true)[$key] != null)
                                                    <div class="info-text-btns">
                                                        <div class="wrap-info-btns">
                                                            <div class="info-btns-element btn-corp">
                                                                <a href="{{json_decode($room->link,true)[$key]}}" target="_blank" class="btn-corp-text">{{json_decode($room->button,true)[$key]}}</a>
                                                            </div>
                                                        </div>
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
        </section>
    @endforeach

@endif

<!-- todo: variables "var-info-left" & "var-graphics-left" // "var-info-right" & "var-graphics-right"-->

@if (count($room->roomfacilities) > 0)
    <section class="features-module js-load-moreicons">
        <div class="big-wrapper">
            <div class="wrap-features-module">
                <div class="features-module-header">
                    <div class="wrap-features-header">
                        <h2 class="features-header-title">{{translate("Room facilities")}} </h2>
                        <p class="features-header-subtitle">{{translate("Services of the")}} {{$room->getTranslation('name')}}</p>
                    </div>
                </div>
                <div class="features-module-box">
                    <div class="wrap-features-box">
                        <div class="features-box_graphics-top"></div>
                        <div class="features-box_graphics-bottom"></div>
                        <div class="features-box-container">
                            <div class="features-box-list">
                                @foreach ($room->roomfacilities as $roomfacility)
                                    <div class="features-box-element" itemprop="amenityFeature" itemscope itemtype="#">
                                        <div class="wrap-features-element">
                                            <div class="features-element-info">
                                                <div class="wrap-features-info">
                                                    <p class="features-element-title" itemprop="name">
                                                        {{$roomfacility->getTranslation("name")}}
                                                    </p>
                                                    <p class="features-element-text">
                                                        {{$roomfacility->getTranslation("decription") ?? ""}}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="features-element-icon">
                                                <div class="wrap-features-icon">
                                                    @if ($roomfacility->image  == null)
                                                        <i class="features-icon-element {{$roomfacility->icon}}"></i>
                                                    @elseif($roomfacility->image != null)
                                                        <img src="{{uploaded_asset($roomfacility->image)}}" alt="">
                                                    @else

                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="features-module-btns">
                    <div class="features-btns-element btn-corp js-toggle-features" role="button" tabindex="0">
                        <p class="btn-corp-text">See all of the services</p>
                        <p class="btn-corp-text tohide">See less services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

<section class="gallery-list">
    <div class="big-wrapper">
        <div class="wrap-gallery-list">
            <div class="global-header var-color">
                <div class="wrap-global-header">
                    <p class="global-header-subtitle">{{translate("You might be interested in")}}...</p>
                </div>
            </div>
            <div class="gallery-list-container js-active-slider" data-slider_name="js-section-slider" data-slider_showbtns="true" data-slider_btns="btn-slide-circle" data-slider_showdots="false" data-slider_fade="false" data-slider_autoplay="true"
                    data-slides_pc="{{count($rooms) >= 4 ? "4" : count($rooms) }}" data-slides_laptop="{{count($rooms) > 4 ? "4" : count($rooms) }}"
                    data-slides_tablet="{{count($rooms) >= 2 ? "2" : count($rooms)}}"
                data-slides_mobile="1">
                <div class="wrap-gallery-container">
                    <div class="gallery-container-arrows">
                        <div class="wrap-gallery-arrows">
                            <div class="gallery-arrows-box js-slider-arrows"></div>
                        </div>
                    </div>
                    <div class="gallery-list-box js-section-slider">
                        @foreach ($rooms as $room)
                            <div class="gallery-list-element">
                                <a href="{{route("room.slug",$room->slug)}}">
                                    <div class="wrap-gallery-element">
                                        <div class="gallery-element-media">
                                            <div class="wrap-element-media">
                                                <figure class="element-media-photo" role="img" aria-label="Premium Double or Twin Room" data-lazyimg="{{uploaded_asset($room->sliders)}}"></figure>
                                            </div>
                                        </div>
                                        <div class="gallery-element-info">
                                            <div class="wrap-element-info">
                                                <p class="element-info-title">{{$room->getTranslation("name")}}</p>

                                                <div class="element-info-btns">
                                                    <div class="btn-corp">
                                                        <p class="btn-corp-text">
                                                        @if ($room->pagecategory != null && $room->pagecategory->name == "Stay")
                                                            {{translate("See room")}}
                                                            @else
                                                            {{translate("View Detail")}}
                                                        @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
