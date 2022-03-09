@extends('frontend.layouts.app')

@section('content')
    <div class="global-breadcrumbs color">
        <div class="big-wrapper">
            <div class="wrap-global-breadcrumbs">
                <ol class="breadcrumbs-list" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope=""
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="index.php">
                            <span class="breadcrumbs-element-text" itemprop="name">Home</span>
                        </a>
                        <span itemprop="position" content="1">&gt;</span>
                    </li>
                    <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope="" itemtype="#">
                        <a href="javascript:;" class="wrap-links-element js-open-submenu" data-submenu="overviews"
                            role="button" tabindex="0">
                            <span class="breadcrumbs-element-text" itemprop="name">Overview</span>
                        </a>
                        <span itemprop="position" content="2">&gt;</span>
                    </li>
                    <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope=""
                        itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="guest-reviews.php">
                            <span class="breadcrumbs-element-text" itemprop="name">Guest Reviews</span>
                        </a>
                        <span itemprop="position" content="2">&gt;</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <br><br>

    <section class="sections-module bottom-separator backmask-off comments-module">
        <div class="big-wrapper first-module">
            <div class="wrap-sections-module">
                <div class="global-header var-alignleft">
                    <div class="wrap-global-header mt-2">
                        <h1 class="global-header-title">Guest Reviews</h1>
                        <p class="global-header-subtitle">From TripAdvisor</p>
                    </div>
                </div>
                <section class="comments-module">
                    {{-- <div class="big-wrapper"> --}}
                        <div class="wrap-comments-module js-active-slider" data-slider_name="js-section-slider" data-slider_showbtns="false" data-slider_btns="btn-slide-circle" data-slider_showdots="true" data-slider_fade="true" data-slider_autoplay="true" data-slides_pc="1" data-slides_laptop="1" data-slides_tablet="1" data-slides_mobile="1">
                            <div class="comments-module-box js-section-slider">
                                @foreach (\App\Models\Testimonial::where('status',1)->orderBy('sorting_id','asc')->get() as $key => $testimonial)
                                    <div class="comments-module-element">
                                        <div class="wrap-comments-element">
                                            <p class="comments-element-text">
                                                {!! $testimonial->getTranslation("description") !!}
                                            </p>
                                            <div class="comments-element-foot">
                                                <p class="comments-foot-name">{{$testimonial->name}}</p>
                                                <p class="comments-foot-text">{{$testimonial->designation}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    {{-- </div> --}}
                </section>
            </div>
        </div>
    </section>
@endsection
