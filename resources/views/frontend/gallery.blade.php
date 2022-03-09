@extends('frontend.layouts.app')

<link rel="stylesheet" href="{{static_asset("assets/frontend/assets/css/gallery.css")}}">

@section('content')

<div class="global-breadcrumbs color">
    <div class="big-wrapper">
        <div class="wrap-global-breadcrumbs">
            <ol class="breadcrumbs-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">{{translate("Home")}}</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">{{translate("Gallery")}}</span>
                    </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
            </ol>
        </div>
    </div>
</div>
<main class="gallery-page">
    <div class="big-wrapper">
        <div class="wrap-gallery-page">
            <div class="gallery-page-header">
                <div class="wrap-gallery-header">
                    <h1 class="gallery-header-title">{{$galleries[0]->getTranslation("title")}}</h1>
                    <!-- todo: responsive buttons menu -->
                    <div class="gallery-header-btns">
                        <div class="wrap-gallery-btns">
                            <div class="gallery-btns-element js-open-gallery-menu" role="button" tabindex="0">
                                <div class="wrap-btns-element">
                                    <p class="btns-element-text">{{translate("Categories")}}</p>
                                    <i class="btns-element-icon icon-menu">
                                    </i>
                                </div>
                            </div>
                            <div class="gallery-btns-element js-gallery-rooms" role="button" tabindex="0">
                                <div class="wrap-btns-element">
                                    <p class="btns-element-text">{{translate("Rooms")}}</p>
                                    <i class="btns-element-icon icon-menu">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /// responsive buttons menu /// -->
                    <!-- todo: main gallery menu -->
                    <div class="gallery-nav">
                        <div class="wrap-gallery-nav">
                            <i class="gallery-nav-close btn-circle icon-close js-close-gallery-menu" role="button" tabindex="0">
                            </i>
                            <div class="gallery-nav-box">
                                <div class="wrap-nav-box">
                                    <p class="gallery-nav-title">{{$galleries[0]->getTranslation("title")}}</p>

                                    @foreach ($galleries->where('parent_id',0) as $key => $gallery)
                                    @php
                                        $cc = $gallery->children()->count();
                                    @endphp

                                        <div class="gallery-nav-element @if( $cc == 0)js-gallery-filter @else js-gallery-{{$gallery->name}}  @endif @if($key == 0) active @endif" @if($cc == 0) data-filter="{{$gallery->name == "All" ? "" : $gallery->name}}" @endif role="button" tabindex="0">
                                            <div class="wrap-nav-element">
                                                <p class="gallery-nav-text">{{$gallery->getTranslation('name')}}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /// main gallery menu /// -->
                    <!-- todo: gallery submenu room types -->
                    @foreach($galleries as $key => $gallery)
                    @php

                        $cc = $gallery->children()->count();
                    @endphp
                    @if($cc >0)
                    <div class="gallery-subnav {{ $gallery->name }}">
                        <div class="wrap-gallery-subnav">
                            <i class="gallery-subnav-close btn-circle icon-close js-close-gallery-menu" role="button" tabindex="0">
                            </i>
                            <div class="gallery-subnav-box">
                                <div class="wrap-subnav-box">
                                    <p class="gallery-subnav-title">Gallery of the range of rooms</p>

                                    @foreach ($gallery->children as $child)
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="{{ $child->name }}" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">{{ $child->name }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="gallery-subnav-element js-gallery-filter" data-filter="premium-double-twin-room" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Premium Double or Twin Room  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="family-room" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Family Room  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="deluxe-suite" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Deluxe Suite  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="sky-premium-room" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Sky Premium Room  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="executive-suite" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Executive Suite  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="two-bedroom-executive-family-suite" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Two Bedroom Executive Family Suite  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="presidential-suite" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Presidential Suite  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="deluxe-studio" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Deluxe Studio  <span>/ Rooms</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-back btn-linker toleft js-back-gallery-submenu" role="button" tabindex="0">
                                        <p class="btn-linker-text">Back</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    {{-- <div class="gallery-subnav events">
                        <div class="wrap-gallery-subnav">
                            <i class="gallery-subnav-close btn-circle icon-close js-close-gallery-menu" role="button" tabindex="0">
                            </i>
                            <div class="gallery-subnav-box">
                                <div class="wrap-subnav-box">
                                    <p class="gallery-subnav-title">Gallery of the range of rooms</p>

                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="meeting-rooms" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Meeting Rooms  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="outdoor-caterings" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Outdoor Caterings  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="events" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Events  <span>/ Events</span></p>
                                        </div>
                                    </div>

                                    <div class="gallery-subnav-back btn-linker toleft js-back-gallery-submenu" role="button" tabindex="0">
                                        <p class="btn-linker-text">Back</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-subnav restaurants">
                        <div class="wrap-gallery-subnav">
                            <i class="gallery-subnav-close btn-circle icon-close js-close-gallery-menu" role="button" tabindex="0">
                            </i>
                            <div class="gallery-subnav-box">
                                <div class="wrap-subnav-box">
                                    <p class="gallery-subnav-title">Gallery of the range of rooms</p>

                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="metro" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Metro Restaurant  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="views" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Views @ 61  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="le-cafe" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Le Café  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="infinity-poolside-lounge" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Infinity Pool Lounge  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="in-room-dining" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">In-Room Dining  <span>/ Events</span></p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="copper-chimney" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Copper Chimney  <span>/ Events</span></p>
                                        </div>
                                    </div>

                                    <div class="gallery-subnav-back btn-linker toleft js-back-gallery-submenu" role="button" tabindex="0">
                                        <p class="btn-linker-text">Back</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- /// gallery submenu rooms /// -->
                    <!-- todo: gallery submenu room types -->
                    <!-- <div class="gallery-subnav" data-submenu-selector="double">
                        <div class="wrap-gallery-subnav">
                            <i class="gallery-subnav-close btn-circle icon-close js-close-gallery-menu" role="button" tabindex="0">
                            </i>
                            <div class="gallery-subnav-box">
                                <div class="wrap-subnav-box">
                                    <p class="gallery-subnav-title">Double Deluxe rooms gallery</p>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="doble-deluxe-vista-spa" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Doble Deluxe Vista Spa</p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="doble-deluxe-vista-teide" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Doble Deluxe vista Teide</p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="doble-deluxe-pet-friendly" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Doble Deluxe Pet Friendly</p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="doble-deluxe-familiar" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Doble Deluxe Familiar</p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-element js-gallery-filter" data-filter="doble-deluxe-vista-oceano" role="button" tabindex="0">
                                        <div class="wrap-subnav-element">
                                            <p class="gallery-subnav-text">Doble Deluxe Vista Océano</p>
                                        </div>
                                    </div>
                                    <div class="gallery-subnav-back btn-linker toleft js-back-gallery-submenu-2" role="button" tabindex="0">
                                        <p class="btn-linker-text">Back</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- /// gallery submenu rooms /// -->

                </div>
            </div>
            <div class="gallery-page-container">
                <div class="wrap-gallery-container">
                    <div class="gallery-container-counter">
                        <div class="wrap-gallery-counter">
                            <p class="gallery-counter-text">Photos</p>
                            <span class="gallery-counter-number">00</span>
                        </div>
                    </div>
                    <div class="gallery-page_list">

                    <!-- Room -->
                        <!-- Superior King or Twin Room -->
                        @foreach ($galleries as $gallery)
                        @foreach ($gallery->galleryitems as $key =>  $item)
                                <a href="{{uploaded_asset($item->image)}}" class="gallery-page_element" data-section="{{$gallery->name}}" data-lightbox="{{$gallery->name}}" title="{{$gallery->name}}">
                                    <div class="wrap-gallery-element">
                                        <div class="gallery-page_element-media">
                                            <div class="wrap-element-media">
                                                @php
                                                    $filepath = uploaded_asset($item->image);
                                                    $file = explode('/',$filepath);
                                                @endphp
                                                <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="{{end($file)}}" style="background-image:url();">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="gallery-page_element-info">
                                            <div class="wrap-element-info">
                                                <p class="element-info-text">{{$item->getTranslation('name')}}</p>
                                                <i class="element-info-icon icon-zoom"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endforeach

                        {{-- <a href="{{static_asset("assets/images/bottom-images/superior_room1.jpg")}}" class="gallery-page_element" data-section="superior-king-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/superior_room1.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Superior King or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{static_asset("assets/images/bottom-images/superior_room2.jpg")}}" class="gallery-page_element" data-section="superior-king-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/superior_room2.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Superior King or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{static_asset("assets/images/bottom-images/superior_room3.jpg")}}" class="gallery-page_element" data-section="superior-king-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/superior_room3.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Superior King or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{static_asset("assets/images/bottom-images/superior_room4.jpg")}}" class="gallery-page_element" data-section="superior-king-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/superior_room4.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Superior King or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{static_asset("assets/images/bottom-images/superior_room5.jpg")}}" class="gallery-page_element" data-section="superior-king-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/superior_room5.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Superior King or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- Superior King or Twin Room End -->
                        <!-- Premium Double or Twin Room -->
                        <a href="{{static_asset("assets/images/bottom-images/premium_room.jpg")}}" class="gallery-page_element" data-section="premium-double-twin-room" data-lightbox="all" title="The hotel">
                            <div class="wrap-gallery-element">
                                <div class="gallery-page_element-media">
                                    <div class="wrap-element-media">
                                        <figure class="element-media-photo responsive-resize" role="img" aria-label="The hotel" data-filename="bottom-images/premium_room.jpg" style="background-image:url();">
                                        </figure>
                                    </div>
                                </div>
                                <div class="gallery-page_element-info">
                                    <div class="wrap-element-info">
                                        <p class="element-info-text">Premium Double or Twin Room</p>
                                        <i class="element-info-icon icon-zoom">
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </a> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
    <script src="{{static_asset("assets/frontend/assets/js/gallery.min.js")}}"></script>
@endsection
