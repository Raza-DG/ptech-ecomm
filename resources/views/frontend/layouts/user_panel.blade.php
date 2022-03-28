@extends('frontend.layouts.app')
@section('content')
    <div class="page-title page-title-default title-size-default title-design-centered color-scheme-dark"
        style="background-image: url({{ static_asset('assets-ecom/images/banner/category-banner.jpg') }});">
        <div class="container">
            <header class="entry-header">
                <h1 class="entry-title text-white">My account</h1>
                <div class="breadcrumbs"><a href="{{ route('home') }}" class="text-white">Home</a> � <span
                        class="current text-white">My account</span></div>
            </header>
        </div>
    </div>
    <div class="container">
        <div class="row content-layout-wrapper align-items-start pb-40">

            <div class="site-content col-lg-12 col-12 col-md-12" role="main">

                <article id="post-12" class="post-12 page type-page status-publish hentry">

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-my-account-wrapper">
                                @include('frontend.inc.user_side_nav')

                                <div class="woocommerce-MyAccount-content">
                                    @yield('panel_content')

                                </div>
                            </div>
                        </div>


                </article><!-- #post -->



            </div><!-- .site-content -->



        </div><!-- .main-page-wrapper -->
    </div>
@endsection
