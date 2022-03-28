@extends('frontend.layouts.app')
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
@section('content')

<style data-type="woodmart_shortcodes-custom-css">
    .red-btn {
        border-color: #ed2227 !important;
        color: #ed2227 !important;
    }

    .red-btnn {
        border-color: #ffffff !important;
        color: #ffffff !important;
    }

    .red-btn:hover {
        color: #fff !important;
        background-color: #ed2227 !important;
    }

    .red-btnn:hover {
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
        color: #fff;
    }

    #wd-6045a19e973c5 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #fff;
    }

    #wd-6045a19e973c5 .banner-inner {
        color: #fff;
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
        color: #fff;
    }

    #wd-60a8475f340e6 .banner-subtitle {
        line-height: 30px;
        font-size: 20px;
        color: #fff;
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
        font-size: 120px;
        color: rgba(10, 10, 10, 0.04);
        font-family: Lato;
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
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-605ea54fb6b8f .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-605ea54fb6b8f .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffae555ed1 .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-603ffae555ed1 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffae555ed1 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffaeb54bc6 .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-603ffaeb54bc6 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffaeb54bc6 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffaefeef56 .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-603ffaefeef56 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffaefeef56 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6040883db88c9 .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-6040883db88c9 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6040883db88c9 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffafbe9490 .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    .banner-title {
        line-height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-603ffafbe9490 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffafbe9490 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }


    #wd-603ffb00378aa .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffb00378aa .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-603ffb04a6e01 .banner-title {
        height: 36px;
        font-size: 31px;
        color: #ffffff;
    }

    #wd-603ffb04a6e01 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-603ffb04a6e01 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
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



    #wd-6046baa68da6b .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6046baa68da6b .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }


    #wd-6045a407d4ce7 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a407d4ce7 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }


    #wd-6045a41330138 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a41330138 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }



    #wd-6045a3e3e53f8 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a3e3e53f8 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }



    #wd-6045a40092f7e .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a40092f7e .banner-inner {
        color: rgba(48, 48, 48, 0.7);
    }

    #wd-6045a40e741f2 .banner-subtitle {
        color: rgba(255, 255, 255, 0.01);
    }

    #wd-6045a40e741f2 .banner-inner {
        color: rgba(48, 48, 48, 0.7);
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

        /* HEIGHT OF HEADER CLONE */
        .whb-clone .whb-general-header-inner {
            height: 50px;
        }

        /* HEADER OVERCONTENT */
        .woodmart-header-overcontent .title-size-small {
            padding-top: 176px;
        }

        .woodmart-header-overcontent .title-size-default {
            padding-top: 216px;
        }

        .woodmart-header-overcontent .title-size-large {
            padding-top: 256px;
        }

        /* HEADER OVERCONTENT WHEN SHOP PAGE TITLE TURN OFF  */
        .woodmart-header-overcontent .without-title.title-size-small {
            padding-top: 156px;
        }

        .woodmart-header-overcontent .without-title.title-size-default {
            padding-top: 191px;
        }

        .woodmart-header-overcontent .without-title.title-size-large {
            padding-top: 216px;
        }

        /* HEADER OVERCONTENT ON SINGLE PRODUCT */
        .single-product .whb-overcontent:not(.whb-custom-header) {
            padding-top: 156px;
        }

        /* HEIGHT OF LOGO IN TOP BAR */
        .whb-top-bar .woodmart-logo img {
            max-height: 0px;
        }

        .whb-sticked .whb-top-bar .woodmart-logo img {
            max-height: 40px;
        }

        /* HEIGHT OF LOGO IN GENERAL HEADER */
        .whb-general-header .woodmart-logo img {
            max-height: 104px;
        }

        .whb-sticked .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        /* HEIGHT OF LOGO IN BOTTOM HEADER */
        .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        .whb-sticked .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        /* HEIGHT OF LOGO IN HEADER CLONE */
        .whb-clone .whb-general-header .woodmart-logo img {
            max-height: 50px;
        }

        /* HEIGHT OF HEADER BUILDER ELEMENTS */
        /* HEIGHT ELEMENTS IN TOP BAR */
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

        /* HEIGHT ELEMENTS IN GENERAL HEADER */
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

        /* HEIGHT ELEMENTS IN BOTTOM HEADER */
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
            height: 50px;
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
            height: 50px;
        }

        .whb-sticked .whb-header-bottom.whb-border-boxed .menu-opener {
            height: 51px;
        }

        .whb-sticky-shadow.whb-sticked .whb-header-bottom .menu-opener {
            height: 51px;
            margin-bottom: 0;
        }

        /* HEIGHT ELEMENTS IN HEADER CLONE */
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

        /* HEIGHT OF HEADER CLONE */
        .whb-clone .whb-general-header-inner {
            height: 60px;
        }

        /* HEADER OVERCONTENT */
        .woodmart-header-overcontent .page-title {
            padding-top: 127px;
        }

        /* HEADER OVERCONTENT WHEN SHOP PAGE TITLE TURN OFF  */
        .woodmart-header-overcontent .without-title.title-shop {
            padding-top: 112px;
        }

        /* HEADER OVERCONTENT ON SINGLE PRODUCT */
        .single-product .whb-overcontent:not(.whb-custom-header) {
            padding-top: 112px;
        }

        /* HEIGHT OF LOGO IN TOP BAR */
        .whb-top-bar .woodmart-logo img {
            max-height: 0px;
        }

        /* HEIGHT OF LOGO IN GENERAL HEADER */
        .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        /* HEIGHT OF LOGO IN BOTTOM HEADER */
        .whb-header-bottom .woodmart-logo img {
            max-height: 50px;
        }

        /* HEIGHT OF LOGO IN HEADER CLONE */
        .whb-clone .whb-general-header .woodmart-logo img {
            max-height: 60px;
        }

        /* HEIGHT OF HEADER BULDER ELEMENTS */
        /* HEIGHT ELEMENTS IN TOP BAR */
        .whb-top-bar .wd-tools-element>a,
        .whb-top-bar .main-nav .item-level-0>a,
        .whb-top-bar .whb-secondary-menu .item-level-0>a,
        .whb-top-bar .categories-menu-opener,
        .whb-top-bar .whb-divider-stretch:before,
        .whb-top-bar form.woocommerce-currency-switcher-form .dd-selected,
        .whb-top-bar .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 0px;
        }

        /* HEIGHT ELEMENTS IN GENERAL HEADER */
        .whb-general-header .wd-tools-element>a,
        .whb-general-header .main-nav .item-level-0>a,
        .whb-general-header .whb-secondary-menu .item-level-0>a,
        .whb-general-header .categories-menu-opener,
        .whb-general-header .whb-divider-stretch:before,
        .whb-general-header form.woocommerce-currency-switcher-form .dd-selected,
        .whb-general-header .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 60px;
        }

        /* HEIGHT ELEMENTS IN BOTTOM HEADER */
        .whb-header-bottom .wd-tools-element>a,
        .whb-header-bottom .main-nav .item-level-0>a,
        .whb-header-bottom .whb-secondary-menu .item-level-0>a,
        .whb-header-bottom .categories-menu-opener,
        .whb-header-bottom .whb-divider-stretch:before,
        .whb-header-bottom form.woocommerce-currency-switcher-form .dd-selected,
        .whb-header-bottom .whb-text-element .wcml-dropdown a.wcml-cs-item-toggle {
            height: 50px;
        }

        /* HEIGHT ELEMENTS IN HEADER CLONE */
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

    .woocommerce form .form-row .required {
        visibility: visible;
    }

    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
</style>

<style>
    .category-banner h3 {
        height: auto !important;
        font-size: 31px;
        color: #ffffff;
    }

    @media screen and (max-width: 750px) {
        .category-banner {
            padding: 8px !important;
        }

        .category-banner h3 {
            font-size: 22px !important;
            color: #ffffff;
        }
    }
</style>


<div class="website-wrapper">
    <!-- HEADER -->
    <!--END MAIN HEADER-->
    <div class="main-page-wrapper">
        <!-- MAIN CONTENT AREA -->
        <div class="container">
            <div class="row content-layout-wrapper align-items-start">
                <div class="site-content col-lg-12 col-12 col-md-12" role="main">
                    <article id="post-702" class="post-702 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_hidden-xs vc_hidden-sm vc_custom_1615247523784 vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="carousel-507" class="woodmart-carousel-container banners-carousel-wrapper  woodmart-carousel-spacing-0" data-owl-carousel data-wrap="yes" data-hide_pagination_control="no" data-hide_prev_next_buttons="no" data-dragEndSpeed="600" data-desktop="1" data-tablet_landscape="1" data-tablet="1" data-mobile="1" data-autoplay="yes" data-speed="3000">
                                                <div class="owl-carousel banners-carousel  owl-items-lg-1 owl-items-md-1 owl-items-sm-1 owl-items-xs-1">
												  @foreach (\App\Models\Slider::where("status",1)->orderBy("sorting_id","asc")->cursor() as $key => $slider)
                                                        <div class="promo-banner-wrapper">
                                                        <div id="wd-62195ec573897" class="promo-banner banner-vr-align-middle banner-hr-align-left banner- banner-hover-none color-scheme-light banner-btn-size-default banner-btn-style-bordered wd-display-background eux-title-playfair center-content with-btn banner-btn-position-static cursor-pointer">
                                                            <div class="main-wrapp-img">
                                                                <div class="banner-image wd-bg-position-center" style="background-image: url({{uploaded_asset($slider->photo) ?? " "}}); height:650px;">
                                                                </div>
                                                            </div>
                                                            <div class="wrapper-content-banner ">
                                                                <div class="content-banner  content-width-40">
                                                                    <div class="banner-title-wrap banner-title-custom">
                                                                        <span class="banner-subtitle subtitle-style-default woodmart-font-weight-">{{$slider->title1}}</span>
                                                                        <h1 class="banner-title woodmart-font-weight-">{{$slider->title2}}</h1>
                                                                    </div>
                                                                    <div class="banner-inner reset-mb-10 content-size-large">
                                                                        <p>{{$slider->title3}}</p>
                                                                    </div>
                                                                    <div class="banner-btn-wrapper">
                                                                        <div id="wd-6219e074ef57a" class="woodmart-button-wrapper">

                                                                            @if($slider->type=='category' && $slider->category_id!=0)
                                                                                <a href="{{ route('products.category', $cat->slug) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">
                                                                                    @elseif($slider->type=='brand' && $slider->brand_id!=0)
                                                                                        <?php $brand=\App\Brand::find($slider->brand_id); ?>
                                                                                <a href="{{ route('products.brand',  $brand->slug) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">
                                                                                    @elseif($slider->type=='custom')
                                                                                <a href="{{ url($slider->link) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">

                                                                            {{$slider->button_text}}
																			</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													@endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix">
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_hidden-md vc_hidden-lg vc_custom_1615177552386 vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div id="carousel-870" class="woodmart-carousel-container banners-carousel-wrapper  woodmart-carousel-spacing-0" data-owl-carousel data-wrap="no" data-hide_pagination_control="yes" data-hide_prev_next_buttons="yes" data-dragEndSpeed="600" data-desktop="1" data-tablet_landscape="1" data-tablet="1" data-mobile="1" data-autoplay="yes" data-speed="3000">
                                                <div class="owl-carousel banners-carousel  owl-items-lg-1 owl-items-md-1 owl-items-sm-1 owl-items-xs-1">

												  @foreach (\App\Models\Slider::where("status",1)->orderBy("sorting_id","desc")->cursor() as $key => $slider)

                                                    <div class="promo-banner-wrapper">
                                                        <div id="wd-62195ed471589" class="promo-banner banner-vr-align-middle banner-hr-align-center banner- banner-hover-none color-scheme-light banner-btn-size-default banner-btn-style-default wd-display-background eux-title-playfair with-btn banner-btn-position-static cursor-pointer">

                                                            <div class="main-wrapp-img">
                                                                <div class="banner-image wd-bg-position-center" style="background-image: url({{uploaded_asset($slider->mobile_photo) ?? " "}}); height:800px;">
                                                                </div>
                                                            </div>

                                                            <div class="wrapper-content-banner ">
                                                                <div class="content-banner text-center content-width-100">
                                                                    <div class="banner-title-wrap banner-title-custom">
                                                                        <span class="banner-subtitle subtitle-style-default woodmart-font-weight-">{{$slider->title1}}</span>
                                                                        <h1 class="banner-title woodmart-font-weight-">{{$slider->title2}}</h1>
                                                                    </div>
                                                                    <div class="banner-inner reset-mb-10 content-size-large">
                                                                        </p>
                                                                        <p style="text-align: center;">{{$slider->title2}}</p>
                                                                        <p>
                                                                    </div>
                                                                    <div class="banner-btn-wrapper">
                                                                        <div id="wd-6219e074efcf2" class="woodmart-button-wrapper text-center">
																		 @if($slider->type=='category' && $slider->category_id!=0)
                                                                                <a href="{{ route('products.category', $cat->slug) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">
                                                                                    @elseif($slider->type=='brand' && $slider->brand_id!=0)
                                                                                        <?php $brand=\App\Brand::find($slider->brand_id); ?>
                                                                                <a href="{{ route('products.brand',  $brand->slug) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">
                                                                                    @elseif($slider->type=='custom')
                                                                                <a href="{{ url($slider->link) }}" class="btn btn-color-white btn-style-bordered btn-shape-semi-round btn-size-default">

                                                                            {{$slider->button_text}}
																			</a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
@endforeach


                                                </div>
                                            </div>


                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix">
                            </div>

                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid eux-margin-titles">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1521121732925">
                                        <div class="wpb_wrapper">
                                            <div id="wd-603ff09b3b886" class="woodmart-text-block-wrapper color-scheme-custom woodmart-title-size-custom woodmart-title-width-100 text-center vc_custom_1614803101034 hidden-xs hidden-sm eux-title-playfair">
											@php
                                                    $heading_one = explode(" ",get_setting('home_one_heading'));

                                                @endphp

                                                <div class="woodmart-title-container woodmart-text-block font-primary woodmart-font-weight-400">
                                                    {{ get_setting('home_one_button') }}</div>

                                            </div>

                                            <div id="wd-60629fd5b357c" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-70 text-center eux-title-playfair vc_hidden-xs vc_hidden-sm woodmart-title-size-custom ">


                                                <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ $heading_one[0] ?? get_setting('home_one_heading') }} </div>

                                                <div class="liner-continer">
                                                        <span class="left-line">
                                                        </span>
                                                    <h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('home_one_button') }}</h2> <span class="img-wrapper">
                                                            <img class="" src="{{uploaded_asset(get_setting('home_one_image2'))}}" width="137" height="25" alt="our-categories-icon" title="our-categories-icon" />
                                                        </span> <span class="right-line">
                                                        </span>
                                                </div>

                                                <div class="title-after_title">{!! get_setting('home_one_description') !!}</div>

                                            </div>


                                            <div id="wd-60629fe123913" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-40 text-center eux-title-playfair vc_hidden-md vc_hidden-lg woodmart-title-size-custom vc_custom_1617076204474">
                                                <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ $heading_one[0] ?? get_setting('home_one_heading') }} </div>

                                                <div class="liner-continer">
                                                        <span class="left-line">
                                                        </span>
                                                    <h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('home_one_button') }}</h2> <span class="img-wrapper">
                                                            <img class="" src="{{uploaded_asset(get_setting('home_one_image2'))}}" width="137" height="25" alt="our-categories-icon" title="our-categories-icon" />
                                                        </span> <span class="right-line">
                                                        </span>
                                                </div>

                                                <div class="title-after_title">{!! get_setting('home_one_description') !!}</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix">
                            </div>

                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_hidden-xs vc_hidden-sm">

							@if (count($featured_categories) > 0)

							@foreach ($featured_categories as $key => $category)
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner vc_custom_1614712329866">
                                        <div class="wpb_wrapper">
                                            <div class="promo-banner-wrapper">
                                                <div id="wd-603ffafbe9490" class="sht promo-banner banner-vr-align-middle banner-hr-align-center banner- banner-hover-zoom color-scheme-light banner-btn-size-default banner-btn-style-bordered wd-display-background eux-title-playfair with-btn banner-btn-position-static cursor-pointer">

                                                    <div class="main-wrapp-img">
															<div class="banner-image wd-bg-position-center" style="background-image: url({{ uploaded_asset($category->banner) }}); background-position: center; @if($key==0) height:600px; @elseif($key==1) height:300px; @else height:280px;@endif">
                                                        </div>
                                                    </div>

                                                    <div class="wrapper-content-banner category-banner">
                                                        <div class="content-banner text-center content-width-100">
                                                            <div class="banner-title-wrap banner-title-custom">
                                                                <h3 class="banner-title woodmart-font-weight-">{{ $category->getTranslation('name') }}</h3>
                                                            </div>
                                                            <div class="banner-btn-wrapper banner-hide-btn-tablet banner-hide-btn-mobile">
                                                                <div id="wd-6219e074f1b17" class="woodmart-button-wrapper text-center">
                                                                    <a href="{{ route('products.category', $category->slug) }}" class="btn btn-color-white btn-style-bordered btn-shape-round btn-size-default">SHOP NOW</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


										 @if($key==1)

										<div class="wpb_column vc_column_container vc_col-sm-6">
                            		 <div class="vc_empty_space" style="height: 20px">
                                                    <span class="vc_empty_space_inner">
                                                    </span>
                                            </div>
										@endif
								 @endforeach
								 @endif






    </div>
                            <div class="vc_row-full-width vc_clearfix">
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1615247640459 vc_row-has-fill">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1514273768525">
                                        <div class="wpb_wrapper">
                                            <div id="wd-603ff1305f59d" class="woodmart-text-block-wrapper color-scheme-custom woodmart-title-size-custom woodmart-title-width-100 text-center vc_custom_1614803253479 hidden-xs hidden-sm eux-title-playfair">
											 @php
                                            $heading_second = explode(" ",get_setting('home_second_heading'));
                                        @endphp
                                                <div class="woodmart-title-container woodmart-text-block font-primary woodmart-font-weight-400">
                                                   {{ $heading_second[1] ?? get_setting('home_second_button') }} </div>

                                            </div>

                                            <div id="wd-604d885ac7dbd" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-40 text-center eux-title-playfair woodmart-title-size-custom ">
                                                <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ $heading_second[0] ?? " " }}</div>

                                                <div class="liner-continer">
                                                        <span class="left-line">
                                                        </span>
                                                    <h2 class="woodmart-title-container title  woodmart-font-weight-">{{ $heading_second[1] ?? get_setting('home_second_button') }}</h2> <span class="img-wrapper">
                                                            <img class="" src="{{uploaded_asset(get_setting('home_one_image2'))}}" width="134" height="19" alt="best-sellers-icon" title="best-sellers-icon" />
                                                        </span> <span class="right-line">
                                                        </span>
                                                </div>
                                                <div class="title-after_title">{!! get_setting('home_second_description') !!}</div>
                                            </div>






 {{-- Best Selling  --}}
    <div id="section_best_selling">

    </div>




                            <div class="vc_row-full-width vc_clearfix">
                            </div>
                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid eux-margin-titles">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1521121732925">
                                        <div class="wpb_wrapper">
                                            <div id="wd-60aab5c4f03b5" class="woodmart-text-block-wrapper color-scheme-custom woodmart-title-size-custom woodmart-title-width-100 text-center vc_custom_1621800567383 hidden-xs hidden-sm eux-title-playfair">
                                                <div class="woodmart-title-container woodmart-text-block font-primary woodmart-font-weight-400">
                                                  {{ get_setting('home_third_heading') ?? get_setting('home_third_heading') }}  </div>

                                            </div>

                                            <div id="wd-6062a0040d554" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-70 text-center eux-title-playfair vc_hidden-xs vc_hidden-sm woodmart-title-size-custom ">
                                                <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ get_setting('home_third_heading') ?? get_setting('home_third_heading') }}  </div>

                                                <div class="liner-continer">
                                                        <span class="left-line">
                                                        </span>
                                                    <h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('home_third_button') ?? get_setting('home_third_button') }}  </h2> <span class="img-wrapper">
                                                            <img class="" src="{{uploaded_asset(get_setting('home_third_image2'))}}" width="137" height="19" alt="" title="" />
                                                        </span> <span class="right-line">
                                                        </span>
                                                </div>

                                                <div class="title-after_title">{!! get_setting('home_third_description') ?? get_setting('home_third_description') !!}</div>

                                            </div>


                                            <div id="wd-6062a0098dc5a" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-70 text-center eux-title-playfair vc_hidden-md vc_hidden-lg woodmart-title-size-custom vc_custom_1617076239600">
                                                <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ get_setting('home_third_heading') ?? get_setting('home_third_heading') }}</div>

                                                <div class="liner-continer">
                                                        <span class="left-line">
                                                        </span>
                                                    <h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('home_third_button') ?? get_setting('home_third_button') }} </h2> <span class="img-wrapper">
                                                            <img class="" src="{{uploaded_asset(get_setting('home_third_image2'))}}" width="137" height="19" alt="" title="" />
                                                        </span> <span class="right-line">
                                                        </span>
                                                </div>

                                                <div class="title-after_title">{!! get_setting('home_third_description') ?? get_setting('home_third_description') !!}</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix">
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_hidden-xs vc_hidden-sm vc_custom_1615247255695 brands">
                                <div id="carousel-704" class="woodmart-carousel-container  slider-type-product woodmart-carousel-spacing-30" data-owl-carousel data-desktop="6" data-tablet_landscape="4" data-tablet="3" data-mobile="2">
                                    <div class="owl-carousel owl-items-lg-6 owl-items-md-4 owl-items-sm-3 owl-items-xs-2">
									@if (get_setting('home_fifth_images') != null)
                                      @foreach (json_decode(get_setting('home_fifth_images'), true) as $key => $image)
                                        <div class="slide-product owl-carousel-item">
                                            <img class="info-icon image-1 " src="{{uploaded_asset($image)}}" width="241" height="204" alt="proudly-australian-made-and-owned-stamp-padding" title="proudly-australian-made-and-owned-stamp-padding" />
                                        </div>
										@endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row wpb_row vc_row-fluid vc_hidden-md vc_hidden-lg vc_custom_1615247283933 brands-mobile">
                                <div id="carousel-704" class="woodmart-carousel-container  slider-type-product woodmart-carousel-spacing-30" data-owl-carousel data-desktop="6" data-tablet_landscape="4" data-tablet="3" data-mobile="2">
                                    <div class="owl-carousel owl-items-lg-6 owl-items-md-4 owl-items-sm-3 owl-items-xs-2">
@if (get_setting('home_fifth_images') != null)
                                      @foreach (json_decode(get_setting('home_fifth_images'), true) as $key => $image)
                                        <div class="slide-product owl-carousel-item">
                                            <img class="info-icon image-1 " src="{{uploaded_asset($image)}}" width="241" height="204" alt="proudly-australian-made-and-owned-stamp-padding" title="proudly-australian-made-and-owned-stamp-padding" />
                                        </div>
										@endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>

                </article>
                <!-- #post -->

            </div>
            <!-- .site-content -->

        </div>
        <!-- .main-page-wrapper -->
    </div> <!-- end row -->
</div> <!-- end container -->
@endsection


@section('script')
    <script>
        $(document).ready(function(){

            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });

        });
    </script>
@endsection
