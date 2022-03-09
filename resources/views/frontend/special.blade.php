@extends('frontend.layouts.app')

@section('content')
<div class="global-breadcrumbs color">
    <div class="big-wrapper">
        <div class="wrap-global-breadcrumbs">
            <ol class="breadcrumbs-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Home</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Special Offers</span>
                    </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
            </ol>
        </div>
    </div>
</div>
<br><br>
    <section class="sections-module bottom-separator backmask-off">
        <div class="big-wrapper first-module">
            <div class="wrap-sections-module">
                <div class="global-header var-alignleft">
                    <div class="wrap-global-header">
                        <h1 class="global-header-title">{{ translate('Special Offers') }}</h1>
                        <p class="global-header-subtitle">{{ translate('by The Tower Plaza Hotel Dubai') }}</p>
                    </div>
                </div>
                <div class="sections-module-list">
                    @foreach ($specialoffers as $specialoffer)
                        <div class="sections-module-element">
                            <div class="wrap-sections-element">
                                <div class="sections-element-media">
                                    <div class="wrap-sections-media">
                                        <figure class="sections-media-photo" role="img"
                                            aria-label="Valentine’s Special Dinner by the Pool"
                                            data-lazyimg="{{ uploaded_asset($specialoffer->image) }}"></figure>
                                    </div>
                                </div>
                                <div class="sections-element-info">
                                    <div class="wrap-sections-info">
                                        <h2 class="sections-element-title">{{ $specialoffer->getTranslation('title') }}</h2>
                                        <p class="sections-element-subtitle">
                                            <span style="text-decoration: line-through">AED
                                                {{ $specialoffer->price }}</span> / AED {{ $specialoffer->discount_price }}
                                            {{ translate('per') }} {{ $specialoffer->unit }} </p>
                                        <p class="sections-element-text">
                                            {!! $specialoffer->getTranslation('description') !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
