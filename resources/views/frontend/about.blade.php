@extends('frontend.layouts.app')
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
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


<style data-type="woodmart_shortcodes-custom-css">
	#wd-604177883e8ea .woodmart-text-block {
		line-height: 90px;
		font-size: 80px;
		color: rgba(10, 10, 10, 0.04);
	}

	#wd-6062a0401763d .woodmart-title-container {
		line-height: 55px;
		font-size: 45px;
		color: #2f2924;
	}

	#wd-6062a0401763d .title-subtitle {
		font-size: 25px;
		line-height: 0px;
		color: #2f2924;
	}

	#wd-6062a0401763d .title-after_title {
		line-height: 26px;
		font-size: 16px;
	}

	#wd-6062a04f4d680 .woodmart-title-container {
		line-height: 55px;
		font-size: 45px;
		color: #2f2924;
	}

	#wd-6062a04f4d680 .title-subtitle {
		font-size: 25px;
		line-height: 0px;
		color: #2f2924;
	}

	#wd-6062a04f4d680 .title-after_title {
		line-height: 26px;
		font-size: 16px;
	}

	#wd-604407c1b795d .woodmart-title-container {
		line-height: 55px;
		font-size: 45px;
		color: #2f2924;
	}

	#wd-604407c1b795d .title-subtitle {
		font-size: 25px;
		line-height: 0px;
		color: #2f2924;
	}

	#wd-604407c1b795d .title-after_title {
		line-height: 26px;
		font-size: 16px;
	}

	#wd-6046bdebc953a .woodmart-title-container {
		line-height: 55px;
		font-size: 45px;
		color: #2f2924;
	}

	#wd-6046bdebc953a .title-subtitle {
		font-size: 25px;
		line-height: 0px;
		color: #2f2924;
	}

	#wd-6046bdebc953a .title-after_title {
		line-height: 26px;
		font-size: 16px;
	}

	#wd-604407629f1d8 .woodmart-title-container {
		line-height: 55px;
		font-size: 45px;
		color: #2f2924;
	}

	#wd-604407629f1d8 .title-subtitle {
		font-size: 25px;
		line-height: 0px;
		color: #2f2924;
	}

	#wd-604407629f1d8 .title-after_title {
		line-height: 26px;
		font-size: 16px;
	}

	@media (max-width: 1024px) {
		#wd-604177883e8ea .woodmart-text-block {
			line-height: 74px;
			font-size: 64px;
		}

		#wd-6062a0401763d .woodmart-title-container {
			line-height: 40px;
			font-size: 30px;
		}

		#wd-6062a0401763d .title-after_title {
			line-height: 24px;
			font-size: 14px;
		}

		#wd-6062a04f4d680 .woodmart-title-container {
			line-height: 40px;
			font-size: 30px;
		}

		#wd-6062a04f4d680 .title-after_title {
			line-height: 24px;
			font-size: 14px;
		}

		#wd-604407c1b795d .woodmart-title-container {
			line-height: 40px;
			font-size: 30px;
		}

		#wd-604407c1b795d .title-after_title {
			line-height: 24px;
			font-size: 14px;
		}

		#wd-6046bdebc953a .woodmart-title-container {
			line-height: 40px;
			font-size: 30px;
		}

		#wd-6046bdebc953a .title-after_title {
			line-height: 24px;
			font-size: 14px;
		}

		#wd-604407629f1d8 .woodmart-title-container {
			line-height: 40px;
			font-size: 30px;
		}

		#wd-604407629f1d8 .title-after_title {
			line-height: 24px;
			font-size: 14px;
		}
	}

	@media (max-width: 767px) {
		#wd-604177883e8ea .woodmart-text-block {
			line-height: 74px;
			font-size: 64px;
		}

		#wd-6062a0401763d .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6062a04f4d680 .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-604407c1b795d .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6046bdebc953a .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
		}

		#wd-6046bdebc953a .title-subtitle {
			line-height: 30px;
		}

		#wd-604407629f1d8 .woodmart-title-container {
			line-height: 38px;
			font-size: 28px;
		}
	}

	.vc_custom_1614903179103 {
		margin-bottom: -70px !important;
	}
</style>
 
<style>
	.vc_row.wpb_row.vc_row-fluid.vc_custom_1614988675173.vc_row-o-content-middle {
		margin-top: 20px;
		margin-bottom: 20px;
	}
</style>
@section('content') 

			<!-- MAIN CONTENT AREA -->
			<div class="container">
				<div class="row content-layout-wrapper align-items-start">

					<div class="site-content col-lg-12 col-12 col-md-12" role="main">

						<article id="post-752" class="post-752 page type-page status-publish hentry">

							<div class="entry-content">
								<p>
								</p><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid eux-margin-titles vc_custom_1615178200649">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner vc_custom_1521121732925">
											<div class="wpb_wrapper">
												<div id="wd-604177883e8ea" class="woodmart-text-block-wrapper color-scheme-custom woodmart-title-size-custom woodmart-title-width-100 text-center vc_custom_1614903179103 hidden-xs hidden-sm eux-title-playfair">
													<div class="woodmart-title-container woodmart-text-block font-primary woodmart-font-weight-400">
														{{ get_setting('about_our_story') }}</div>

												</div>

												<div id="wd-6062a0401763d" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-40 text-center eux-title-playfair vc_hidden-xs vc_hidden-sm woodmart-title-size-custom ">
													<!-- <div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">More than</div> -->

													<div class="liner-continer">
														<span class="left-line"></span>
														<h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('about_our_story1') }}</h2> <span class="img-wrapper"><img class="" src="{{uploaded_asset(get_setting('contact_one_image'))}}" width="137" height="19" alt="why-choose-tender-gourmet-butchery-icon" title="{{ get_setting('about_our_story') }}"></span> <span class="right-line"></span>
													</div>

													<div class="title-after_title">{!! get_setting('about_our_story_description')!!}</div>

												</div>


												<div id="wd-6062a04f4d680" class="title-wrapper  woodmart-title-color-default woodmart-title-style-image woodmart-title-width-40 text-center eux-title-playfair vc_hidden-md vc_hidden-lg woodmart-title-size-custom vc_custom_1617076305069">
													<div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400"></div>

													<div class="liner-continer">
														<span class="left-line"></span>
														<h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('about_our_story') }}</h2> <span class="img-wrapper"><img class="" src="{{uploaded_asset(get_setting('contact_one_image'))}}" width="137" height="19" alt="why-choose-tender-gourmet-butchery-icon" title="why-choose-tender-gourmet-butchery-icon"></span> <span class="right-line"></span>
													</div>

													<div class="title-after_title">{!! get_setting('about_our_story_description')!!}</div>

												</div>


											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1614988675173 vc_row-o-content-middle vc_row-flex row-reverse-mobile">
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
										<div class="vc_column-inner vc_custom_1522937351377">
											<div class="wpb_wrapper">
												<div id="wd-604407c1b795d" class="title-wrapper  woodmart-title-color-default woodmart-title-style-simple woodmart-title-width-100 text-left eux-title-playfair woodmart-title-size-custom ">
													<div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400">{{ get_setting('about_our_mission') }}</div>

													<div class="liner-continer">
														<span class="left-line"></span>
														<h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('about_our_mission1') }}</h2> <span class="right-line"></span>
													</div>
												</div>
												<div class="wpb_text_column wpb_content_element vc_custom_1614988658280 text-larger">
													<div class="wpb_wrapper">
														<p>
															{!! get_setting('about_our_mission_description')!!}
														</p>
														<div id="content" class="content-area page-wrapper" role="main">
															<div class="row row-main">
																<div class="large-12 col">
																	<div class="col-inner">
																		<h3></h3>
																	</div>
																</div>
															</div>
														</div>
														<p>&nbsp;</p>
														<footer id="footer" class="footer-wrapper"></footer>
														<p>&nbsp;</p>

													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
										<div class="vc_column-inner vc_custom_1522937354748">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1615238611352">

													<figure class="wpb_wrapper vc_figure">
														<div class="vc_single_image-wrapper vc_box_rounded  vc_box_border_grey"><img width="600" height="800" src="{{uploaded_asset(get_setting('about_our_mission_image'))}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"></div>
													</figure>
												</div>
												<div class="vc_empty_space hidden-lg" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1535114123183 vc_row-o-content-middle vc_row-flex">
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
										<div class="vc_column-inner vc_custom_1522938665062">
											<div class="wpb_wrapper">
												<div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614988391700">

													<figure class="wpb_wrapper vc_figure">
														<div class="vc_single_image-wrapper   vc_box_border_grey">
														<img width="600" height="600" src="{{uploaded_asset(get_setting('about_quality_policy_image'))}}" class="vc_single_image-img attachment-full" alt="" loading="lazy"></div>
													</figure>
												</div>
												<div class="vc_empty_space hidden-lg" style="height: 60px"><span class="vc_empty_space_inner"></span></div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
										<div class="vc_column-inner vc_custom_1522938670164">
											<div class="wpb_wrapper">
												<div id="wd-6046bdebc953a" class="title-wrapper  woodmart-title-color-default woodmart-title-style-simple woodmart-title-width-100 text-left eux-title-playfair woodmart-title-size-custom ">
													<div class="title-subtitle  font-default subtitle-style-default woodmart-font-weight-400"></div>

													<div class="liner-continer">
														<span class="left-line"></span>
														<h2 class="woodmart-title-container title  woodmart-font-weight-">{{ get_setting('about_quality_policy') }}</h2> <span class="right-line"></span>
													</div>

													 
												</div>


												<div class="wpb_text_column wpb_content_element vc_custom_1615694034277 text-larger">
													<div class="wpb_wrapper">
														<p>{!! get_setting('about_quality_policy_description')!!}</p>

													</div>
												</div>


												<!-- <div id="wd-6042c6800c241" class="woodmart-button-wrapper text-left"><a href="https://www.worldbutcherschallenge.com/hall-of-fame" title="" target="_blank" class="btn btn-color-primary btn-style-round btn-shape-rectangle btn-size-default" rel="noopener">Read more</a></div> -->
											</div>
										</div>
									</div>
								</div>

							</div>


						</article><!-- #post -->



					</div><!-- .site-content -->



				</div><!-- .main-page-wrapper -->
			</div> <!-- end row -->
 
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
