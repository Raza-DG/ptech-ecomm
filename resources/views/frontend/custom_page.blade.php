@extends('frontend.layouts.app')

@section('meta_title'){{ $page->meta_title }}@stop

@section('meta_description'){{ $page->meta_description }}@stop

@section('meta_keywords'){{ $page->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $page->meta_title }}">
    <meta itemprop="description" content="{{ $page->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($page->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $page->meta_title }}">
    <meta name="twitter:description" content="{{ $page->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($page->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($page->unit_price) }}">
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="{{ URL($page->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($page->meta_img) }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta property="og:price:amount" content="{{ single_price($page->unit_price) }}" />

    <link rel="stylesheet" type="text/css" href="{{static_asset("assets/frontend/assets/css/half-page.css")}}">
@endsection

@section('content')
{{-- <section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ $page->getTranslation('title') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('custom-pages.show_custom_page', $page->slug ) }}">"{{ $page->title }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
	<div class="container">
        <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">
		    @php echo $page->getTranslation('content'); @endphp
        </div>
	</div>
</section> --}}

<div class="responsive-header">
    <div class="wrap-responsive-header">
        <a href="index.php">
            <img src="static/logo/logo_en.svg" alt="" class="responsive-header-logo">
        </a>
    </div>
</div>

<div class="global-breadcrumbs color">
    <div class="big-wrapper">
        <div class="wrap-global-breadcrumbs">
            <ol class="breadcrumbs-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="/en/">
                        <span class="breadcrumbs-element-text" itemprop="name">Home</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">{{$page->getTranslation("title")}}</span>
                    </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="half-page">
    <div class="wrap-half-page big-wrapper">
        <div class="half-page-container full-width full">
            <div class="wrap-page-container full">
                {!! $page->getTranslation('content') !!}
            </div>
            <div id="half-endpoint"></div>
        </div>
    </div>
</div>

<div class="end-spacer">
    <div class="big-wrapper">
        <div class="wrap-end-spacer"></div>
    </div>
</div>
@endsection
