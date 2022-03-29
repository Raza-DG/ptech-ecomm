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
<style>
        .icons-design-simple .woodmart-social-icon {
            background-color: #888888;
            color: #FFF !important;
        }

        .icons-design-simple .woodmart-social-icon:hover {
            background-color: #F2F2F2;
            color: rgba(0, 0, 0, .4) !important;
        }

        .woodmart-navigation .item-level-0>a {
            padding-left: 30px;
            padding-right: 30px;
        }

        @media(max-width: 991px) {
            .black-menu-bar {
                display: none;
            }
        }

        .page .main-page-wrapper,
        .main-page-wrapper {
            background-image: url(assets/images/Background-Full.jpg);
            background-position-y: 630px;
            background-repeat: repeat-y;
            background-position-x: center;
        }
        .main-page-wrapper{
            padding-top:unset !important;
        }
    </style>

<link rel='stylesheet' id='js_composer_front-css' href='assets/plugins/js_composer/assets/css/js_composer.mine6df.css?ver=6.5.0' type='text/css' media='all' />

</head><link rel='stylesheet' id='vc_tta_style-css' href='assets/plugins/js_composer/assets/css/js_composer_tta.mine6df.css?ver=6.5.0' type='text/css' media='all' />

<style data-type="woodmart_shortcodes-custom-css">
    .red-btn {
        border-color: #ed2227 !important;
        color: #ed2227 !important;
    }

    .red-btn:hover {
        color: #fff !important;
        background-color: #ed2227 !important;
    }

    #wd-62195ec573897 .banner-title {
        line-height: 52px;
        font-size: 42px;
        color: #fff;
    }

    #wd-62195ec573897 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #fff;
    }

    #wd-62195ec573897 .banner-inner {
        color: #fff;
    }

    #wd-6045a19e973c5 .banner-title {
        line-height: 52px;
        font-size: 42px;
        color: #000;
    }

    #wd-6045a19e973c5 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #000;
    }

    #wd-6045a19e973c5 .banner-inner {
        color: #000;
    }

    #wd-62195ed471589 .banner-title {
        line-height: 50px;
        font-size: 40px;
        color: #fff;
    }

    #wd-62195ed471589 .banner-subtitle {
        line-height: 26px;
        font-size: 16px;
        color: #fff;
    }

    #wd-62195ed471589 .banner-inner {
        color: #fff;
    }

    #wd-60a8475f340e6 .banner-title {
        line-height: 52px;
        font-size: 42px;
        color: #333;
    }

    #wd-60a8475f340e6 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #333;
    }

    #wd-60a8475f340e6 .banner-inner {
        color: #ffffff;
    }

    #wd-6085e35927aa8 .banner-title {
        line-height: 52px;
        font-size: 42px;
        color: #000000;
    }

    #wd-6085e35927aa8 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #000000;
    }

    #wd-6085e35927aa8 .banner-inner {
        color: #000000;
    }

    #wd-6170f2cd19c90 .banner-title {
        line-height: 52px;
        font-size: 42px;
    }

    #wd-6170f2cd19c90 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
    }

    #wd-6170f2cd19c90 .banner-inner {
        color: #ffffff;
    }

    #wd-6170ea330405c .banner-title {
        line-height: 52px;
        font-size: 42px;
    }

    #wd-6170ea330405c .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
    }

    #wd-6170ea330405c .banner-inner {
        color: #ffffff;
    }

    #wd-603ff09b3b886 .woodmart-text-block {
        line-height: 110px;
        font-size: 100px;
        color: rgba(10, 10, 10, 0.04);
    }

    #wd-60629fd5b357c .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-60629fd5b357c .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-60629fd5b357c .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    #wd-60629fe123913 .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-60629fe123913 .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-60629fe123913 .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    #wd-605ea54fb6b8f .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-605ea54fb6b8f .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-605ea54fb6b8f .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffae555ed1 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffae555ed1 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffae555ed1 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffaeb54bc6 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffaeb54bc6 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffaeb54bc6 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffaefeef56 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffaefeef56 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffaefeef56 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6040883db88c9 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6040883db88c9 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6040883db88c9 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffafbe9490 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffafbe9490 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffafbe9490 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffb00378aa .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffb00378aa .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffb00378aa .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffb04a6e01 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffb04a6e01 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffb04a6e01 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffb08a9191 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-603ffb08a9191 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffb08a9191 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a3c819ba7 .banner-title {
        color: #ffffff;
    }

    #wd-6045a3c819ba7 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a3c819ba7 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6046baa68da6b .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6046baa68da6b .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6046baa68da6b .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a407d4ce7 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a407d4ce7 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a407d4ce7 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a41330138 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a41330138 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a41330138 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a3e3e53f8 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a3e3e53f8 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a3e3e53f8 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a40092f7e .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a40092f7e .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a40092f7e .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a40e741f2 .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a40e741f2 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a40e741f2 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a4188bcff .banner-title {
        line-height: 46px;
        font-size: 36px;
        color: #ffffff;
    }

    #wd-6045a4188bcff .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a4188bcff .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ff1305f59d .woodmart-text-block {
        line-height: 110px;
        font-size: 100px;
        color: rgba(10, 10, 10, 0.04);
    }

    #wd-604d885ac7dbd .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-604d885ac7dbd .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-604d885ac7dbd .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    #wd-603d4e64092a5.tabs-design-simple .products-tabs-title li.active-tab-title {
        color: #6d5047;
    }

    #wd-603d4e64092a5.tabs-design-simple .owl-nav>div:hover {
        color: #6d5047;
    }

    #wd-603d4e64092a5.tabs-design-simple .wrap-loading-arrow>div:not(.disabled):hover {
        color: #6d5047;
    }

    #wd-603d4e64092a5.tabs-design-simple .tabs-name {
        border-color: #6d5047;
    }

    #wd-603d4e64092a5.tabs-design-default .products-tabs-title .tab-label:after {
        background-color: #6d5047;
    }

    #wd-603d4e64092a5.tabs-design-alt .products-tabs-title .tab-label:after {
        background-color: #6d5047;
    }

    #wd-60aab5c4f03b5 .woodmart-text-block {
        line-height: 110px;
        font-size: 100px;
        color: rgba(10, 10, 10, 0.04);
    }

    #wd-6062a0040d554 .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-6062a0040d554 .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-6062a0040d554 .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    #wd-6062a0098dc5a .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-6062a0098dc5a .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-6062a0098dc5a .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    #wd-603ff144a8bb3 .woodmart-text-block {
        line-height: 110px;
        font-size: 100px;
        color: rgba(10, 10, 10, 0.04);
    }

    #wd-604d883634ade .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-604d883634ade .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-604d883634ade .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    @media (max-width: 1024px) {
        #wd-603ff09b3b886 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-60629fd5b357c .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-60629fd5b357c .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }

        #wd-60629fe123913 .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-60629fe123913 .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }

        #wd-605ea54fb6b8f .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffae555ed1 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffaeb54bc6 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffaefeef56 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6040883db88c9 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffafbe9490 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb00378aa .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb04a6e01 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb08a9191 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a3c819ba7 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6046baa68da6b .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a407d4ce7 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a41330138 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a3e3e53f8 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a40092f7e .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a40e741f2 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a4188bcff .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ff1305f59d .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d885ac7dbd .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-604d885ac7dbd .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }

        #wd-60aab5c4f03b5 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-6062a0040d554 .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-6062a0040d554 .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }

        #wd-6062a0098dc5a .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-6062a0098dc5a .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }

        #wd-603ff144a8bb3 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d883634ade .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-604d883634ade .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }
    }

    @media (max-width: 767px) {
        #wd-603ff09b3b886 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-60629fd5b357c .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-60629fe123913 .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-605ea54fb6b8f .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffae555ed1 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffaeb54bc6 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffaefeef56 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6040883db88c9 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffafbe9490 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb00378aa .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb04a6e01 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-603ffb08a9191 .banner-title {
            line-height: 42px;
            font-size: 32px;
        }

        #wd-6045a3c819ba7 .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6046baa68da6b .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a407d4ce7 .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a41330138 .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a3e3e53f8 .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a40092f7e .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a40e741f2 .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6045a4188bcff .banner-title {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-603ff1305f59d .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d885ac7dbd .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-60aab5c4f03b5 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-6062a0040d554 .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-6062a0098dc5a .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }

        #wd-603ff144a8bb3 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d883634ade .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }
    }

    .vc_row-has-fill.woodmart-bg-center-bottom.vc_hidden {
        opacity: 1 !important;
    }
</style>

<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1615247523784 {
        margin-top: -100px !important;
        margin-bottom: 8vh !important;
    }

    .vc_custom_1615177552386 {
        margin-top: -100px !important;
    }

    .vc_custom_1618617763220 {
        margin-top: -100px !important;
        margin-bottom: 8vh !important;
    }

    .vc_custom_1618617779382 {
        margin-top: -100px !important;
    }

    .vc_custom_1616815412556 {
        margin-bottom: 40px !important;
    }

    .vc_custom_1615176358167 {
        margin-bottom: 20px !important;
    }

    .vc_custom_1615247640459 {
        padding-top: 8vh !important;
        padding-bottom: 8vh !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    .vc_custom_1615247255695 {
        margin-bottom: 8vh !important;
    }

    .vc_custom_1615247283933 {
        margin-bottom: 8vh !important;
    }

    .vc_custom_1615247283933 {
        margin-bottom: 8vh !important;
    }

    .vc_custom_1521121732925 {
        padding-top: 0px !important;
    }

    .vc_custom_1614803101034 {
        margin-bottom: -90px !important;
    }

    .vc_custom_1617076204474 {
        margin-top: 40px !important;
    }

    .vc_custom_1615176263938 {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .vc_custom_1615176258684 {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .vc_custom_1614659510097 {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .vc_custom_1614712329866 {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .vc_custom_1614712337045 {
        padding-right: 10px !important;
        padding-left: 10px !important;
    }

    .vc_custom_1514273768525 {
        padding-top: 0px !important;
    }

    .vc_custom_1614803253479 {
        margin-bottom: -90px !important;
    }

    .vc_custom_1521121732925 {
        padding-top: 0px !important;
    }

    .vc_custom_1621800567383 {
        margin-bottom: -90px !important;
    }

    .vc_custom_1617076239600 {
        margin-top: 40px !important;
    }

    .vc_custom_1618574355623 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1615693837194 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1615693847715 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1615693857773 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1615693868941 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1643409833803 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1643409849231 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1643409862781 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1643409885025 {
        margin-bottom: 0px !important;
    }

    .vc_custom_1521121732925 {
        padding-top: 0px !important;
    }

    .vc_custom_1614803275542 {
        margin-bottom: -90px !important;
    }
</style>

<style>
    .wpforms-field-textarea,
    .wpforms-field-name,
    .wpforms-one-half input {
        margin-bottom: 10px;

    }
</style>

<style data-type="woodmart_shortcodes-custom-css">
    #wd-604179cbf1768 .woodmart-text-block {
        line-height: 110px;
        font-size: 100px;
        color: rgba(10, 10, 10, 0.04);
    }

    #wd-604d89c21ead1 .woodmart-title-container {
        line-height: 55px;
        font-size: 45px;
        color: #2f2924;
    }

    #wd-604d89c21ead1 .title-subtitle {
        font-size: 25px;
        line-height: 0px;
        color: #2f2924;
    }

    #wd-604d89c21ead1 .title-after_title {
        line-height: 26px;
        font-size: 16px;
    }

    @media (max-width: 1024px) {
        #wd-604179cbf1768 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d89c21ead1 .woodmart-title-container {
            line-height: 40px;
            font-size: 30px;
        }

        #wd-604d89c21ead1 .title-after_title {
            line-height: 24px;
            font-size: 14px;
        }
    }

    @media (max-width: 767px) {
        #wd-604179cbf1768 .woodmart-text-block {
            line-height: 74px;
            font-size: 64px;
        }

        #wd-604d89c21ead1 .woodmart-title-container {
            line-height: 38px;
            font-size: 28px;
        }
    }
</style>

<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1615178274345 {
        padding-bottom: 3vh !important;
    }

    .vc_custom_1614922590231 {
        margin-bottom: 100px !important;
    }

    .vc_custom_1521121732925 {
        padding-top: 0px !important;
    }

    
    .vc_custom_1614981628428 {
        margin-bottom: 25px !important;
        border-bottom-width: 1px !important;
        padding-bottom: 25px !important;
        border-bottom-color: #e5e5e5 !important;
        border-bottom-style: solid !important;
    }

    .vc_custom_1614981529508 {
        margin-bottom: 25px !important;
        border-bottom-width: 1px !important;
        padding-bottom: 25px !important;
        border-bottom-color: #e5e5e5 !important;
        border-bottom-style: solid !important;
    }

    .vc_custom_1614981482044 {
        margin-top: 40px !important;
    }

    .vc_custom_1499851571242 {
        margin-bottom: 20px !important;
        padding-top: 0px !important;
    }

    .vc_custom_1614981315269 {
        margin-bottom: 10px !important;
    }

    .vc_custom_1614981330107 {
        margin-bottom: 8px !important;
    }

    .vc_custom_1614981166021 {
        margin-bottom: 10px !important;
    }

    .vc_custom_1614981189204 {
        margin-bottom: 8px !important;
    }

    .vc_custom_1499851571242 {
        margin-bottom: 20px !important;
        padding-top: 0px !important;
    }

    .vc_custom_1614981264534 {
        margin-bottom: 10px !important;
    }

    .vc_custom_1614981338458 {
        margin-bottom: 8px !important;
    }

    .vc_custom_1614981348630 {
        margin-bottom: 10px !important;
    }

    .vc_custom_1614981389329 {
        margin-bottom: 8px !important;
    }
</style>

<style data-type="wd-style-default_header">
    @media (min-width: 1025px) {
        .whb-top-bar-inner {
            height: 0px;
        }

        .whb-general-header-inner {
            height: 104px;
        }

        .whb-header-bottom-inner {
            height: 50px;
        }

        .whb-sticked .whb-top-bar-inner {
            height: 40px;
        }

        .whb-sticked .whb-general-header-inner {
            height: 60px;
        }

        .whb-sticked .whb-header-bottom-inner {
            height: 50px;
        }

         .whb-clone .whb-general-header-inner {
            height: 50px;
        }

        .woodmart-header-overcontent .title-size-small {
            padding-top: 176px;
        }

        .woodmart-header-overcontent .title-size-default {
            padding-top: 216px;
        }

        .woodmart-header-overcontent .title-size-large {
            padding-top: 256px;
        }

        .woodmart-header-overcontent .without-title.title-size-small {
            padding-top: 156px;
        }

        .woodmart-header-overcontent .without-title.title-size-default {
            padding-top: 191px;
        }

        .woodmart-header-overcontent .without-title.title-size-large {
            padding-top: 216px;
        }

        .single-product .whb-overcontent:not(.whb-custom-header) {
            padding-top: 156px;
        }

        .whb-top-bar .woodmart-logo img {
            max-height: 0px;
        }

        .whb-sticked .whb-top-bar .woodmart-logo img {
            max-height: 40px;
        }

        .whb-general-header .woodmart-logo img {
            max-height: 104px;
        }

        .whb-sticked .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        .whb-sticked .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        .whb-clone .whb-general-header .woodmart-logo img {
            max-height: 50px;
        }

        .whb-top-bar .wd-tools-element>a,
        .whb-top-bar .main-nav .item-level-0>a,
        .whb-top-bar .whb-secondary-menu .item-level-0>a,
        .whb-top-bar .categories-menu-opener,
        .whb-top-bar .menu-opener,
        .whb-top-bar .whb-divider-stretch:before,
        .whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
        .whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 0px;
        }

        .whb-sticked .whb-top-bar .wd-tools-element>a,
        .whb-sticked .whb-top-bar .main-nav .item-level-0>a,
        .whb-sticked .whb-top-bar .whb-secondary-menu .item-level-0>a,
        .whb-sticked .whb-top-bar .categories-menu-opener,
        .whb-sticked .whb-top-bar .menu-opener,
        .whb-sticked .whb-top-bar .whb-divider-stretch:before,
        .whb-sticked .whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
        .whb-sticked .whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 40px;
        }

        .whb-general-header .whb-divider-stretch:before,
        .whb-general-header .navigation-style-bordered .item-level-0>a {
            height: 104px;
        }

        .whb-sticked:not(.whb-clone) .whb-general-header .whb-divider-stretch:before,
        .whb-sticked:not(.whb-clone) .whb-general-header .navigation-style-bordered .item-level-0>a {
            height: 60px;
        }

        .whb-sticked:not(.whb-clone) .whb-general-header .woodmart-search-dropdown,
        .whb-sticked:not(.whb-clone) .whb-general-header .dropdown-cart,
        .whb-sticked:not(.whb-clone) .whb-general-header .woodmart-navigation:not(.vertical-navigation):not(.navigation-style-bordered) .sub-menu-dropdown {
            margin-top: 10px;
        }

        .whb-sticked:not(.whb-clone) .whb-general-header .woodmart-search-dropdown:after,
        .whb-sticked:not(.whb-clone) .whb-general-header .dropdown-cart:after,
        .whb-sticked:not(.whb-clone) .whb-general-header .woodmart-navigation:not(.vertical-navigation):not(.navigation-style-bordered) .sub-menu-dropdown:after {
            height: 10px;
        }

        .whb-header-bottom .wd-tools-element>a,
        .whb-header-bottom .main-nav .item-level-0>a,
        .whb-header-bottom .whb-secondary-menu .item-level-0>a,
        .whb-header-bottom .categories-menu-opener,
        .whb-header-bottom .menu-opener,
        .whb-header-bottom .whb-divider-stretch:before,
        .whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
        .whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 50px;
        }

        .whb-header-bottom.whb-border-fullwidth .menu-opener {
            height: 52px;
            margin-top: -1px;
            margin-bottom: -1px;
        }

        .whb-header-bottom.whb-border-boxed .menu-opener {
            height: 51px;
            margin-top: -1px;
            margin-bottom: -1px;
        }

        .whb-sticked .whb-header-bottom .wd-tools-element>a,
        .whb-sticked .whb-header-bottom .main-nav .item-level-0>a,
        .whb-sticked .whb-header-bottom .whb-secondary-menu .item-level-0>a,
        .whb-sticked .whb-header-bottom .categories-menu-opener,
        .whb-sticked .whb-header-bottom .whb-divider-stretch:before,
        .whb-sticked .whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
        .whb-sticked .whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 50px;
        }

        .whb-sticked .whb-header-bottom.whb-border-fullwidth .menu-opener {
            height: 52px;
        }

        .whb-sticked .whb-header-bottom.whb-border-boxed .menu-opener {
            height: 51px;
        }

        .whb-sticky-shadow.whb-sticked .whb-header-bottom .menu-opener {
            height: 51px;
            margin-bottom: 0;
        }

         .whb-clone .wd-tools-element>a,
        .whb-clone .main-nav .item-level-0>a,
        .whb-clone .whb-secondary-menu .item-level-0>a,
        .whb-clone .categories-menu-opener,
        .whb-clone .menu-opener,
        .whb-clone .whb-divider-stretch:before,
        .whb-clone .navigation-style-bordered .item-level-0>a,
        .whb-clone form.woocommerce-currency-switcher-form .dd-selected,
        .whb-clone .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 50px;
        }
    }

    @media (max-width: 1024px) {
        .whb-top-bar-inner {
            height: 0px;
        }

        .whb-general-header-inner {
            height: 60px;
        }

        .whb-header-bottom-inner {
            height: 50px;
        }

         .whb-clone .whb-general-header-inner {
            height: 60px;
        }

        .woodmart-header-overcontent .page-title {
            padding-top: 127px;
        }

        .woodmart-header-overcontent .without-title.title-shop {
            padding-top: 112px;
        }

        .single-product .whb-overcontent:not(.whb-custom-header) {
            padding-top: 112px;
        }

        .whb-top-bar .woodmart-logo img {
            max-height: 0px;
        }

        .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        .whb-clone .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        .whb-top-bar .wd-tools-element>a,
        .whb-top-bar .main-nav .item-level-0>a,
        .whb-top-bar .whb-secondary-menu .item-level-0>a,
        .whb-top-bar .categories-menu-opener,
        .whb-top-bar .whb-divider-stretch:before,
        .whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
        .whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 0px;
        }

        .whb-general-header .wd-tools-element>a,
        .whb-general-header .main-nav .item-level-0>a,
        .whb-general-header .whb-secondary-menu .item-level-0>a,
        .whb-general-header .categories-menu-opener,
        .whb-general-header .whb-divider-stretch:before,
        .whb-general-header form.woocommerce-currency-switcher-form .dd-selected,
        .whb-general-header .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 60px;
        }

        .whb-header-bottom .wd-tools-element>a,
        .whb-header-bottom .main-nav .item-level-0>a,
        .whb-header-bottom .whb-secondary-menu .item-level-0>a,
        .whb-header-bottom .categories-menu-opener,
        .whb-header-bottom .whb-divider-stretch:before,
        .whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
        .whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 50px;
        }

        .whb-clone .wd-tools-element>a,
        .whb-clone .main-nav .item-level-0>a,
        .whb-clone .whb-secondary-menu .item-level-0>a,
        .whb-clone .categories-menu-opener,
        .whb-clone .menu-opener,
        .whb-clone .whb-divider-stretch:before,
        .whb-clone form.woocommerce-currency-switcher-form .dd-selected,
        .whb-clone .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 60px;
        }
    }

    .whb-top-bar {
        background-color: rgba(109, 80, 71, 1);
        border-bottom-style: solid;
    }

    .whb-general-header {
        border-color: rgba(129, 129, 129, 0.2);
        border-bottom-width: 1px;
        border-bottom-style: solid;
    }

    .whb-gp52f6kmxv7oobbfe7ka .menu-opener {
        border-bottom-style: solid;
    }

    .whb-gp52f6kmxv7oobbfe7ka.wd-more-cat:not(.wd-show-cat) .item-level-0:nth-child(n+6):not(:last-child) {
        display: none;
    }

    .wd-more-cat .item-level-0:nth-child(n+6) {
        animation: wd-fadeIn .3s ease both;
    }

    .wd-show-cat .wd-more-cat-btn {
        display: none;
    }

    .whb-header-bottom {
        background-color: rgba(0, 0, 0, 1);
        border-color: rgba(129, 129, 129, 0.2);
        border-bottom-width: 1px;
        border-bottom-style: solid;
    }
</style>

<style>
    .wpb_text_column.wpb_content_element.vc_custom_1614981338458 p{
        margin-bottom: 10px;
    }
    .contact-links{
        font-weight: bold !important;
        text-decoration: underline !important;
    }
</style>


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
