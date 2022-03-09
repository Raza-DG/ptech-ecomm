@extends('frontend.layouts.app')
<link rel="stylesheet" type='text/css' href="{{static_asset("assets/frontend/assets/css/half-page.css")}}">
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
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
                <li class="breadcrumbs-list-element " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Overview</span>
                    </a>
                    <span itemprop="position" content="1">&gt;</span>
                </li>
                <li class="breadcrumbs-list-element active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="#">
                        <span class="breadcrumbs-element-text" itemprop="name">Contact</span>
                    </a>
                    <span itemprop="position" content="2">&gt;</span>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="half-page">
    <div class="wrap-half-page">
        <div class="half-page-container">
            <div class="wrap-page-container">
                <div class="half-page-top">
                    <div class="wrap-page-top">
                        <h1 class="page-top-title">{{translate("Form")}}</h1>
                    </div>
                </div>
                <div class="half-page-form">
                    <div class="wrap-page-form">
                        <p class="page-form-text">{{ get_setting('contact_us_from', null, $lang)}}</p>
                        <div class="page-form-box">
                            <form action="{{route("contact_store")}}" method="POST" data-error="Could not be sent correctly" data-success="Type of query">
                                @csrf
                                <div class="page-form-element full">
                                    <div class="input-element select must">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Type of query</span>
                                            <select name="typeofquery" id="tipo_consulta" class="input-element-field">
                                                <option selected disabled>Select</option>
                                                @if (json_decode(get_setting('contact_us_type',null,$lang)) != null)
                                                    @foreach (json_decode(get_setting('contact_us_type',null,$lang)) as $type_of_query)
                                                        <option value="{{$type_of_query}}">{{$type_of_query}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-form-element">
                                    <div class="input-element user must">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Name</span>
                                            <input name="name" class="input-element-field" type="text" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-form-element">
                                    <div class="input-element user must">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Surname</span>
                                            <input name="surname" class="input-element-field" type="text" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-form-element">
                                    <div class="input-element phone must">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Telephone</span>
                                            <input name="phone" class="input-element-field" type="tel" placeholder="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-form-element">
                                    <div class="input-element email must">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Email</span>
                                            <input name="email" class="input-element-field" type="email" placeholder="..." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-form-element full">
                                    <div class="input-element textarea">
                                        <div class="wrap-input-element">
                                            <span class="input-element-text">Message</span>
                                            <textarea name="message" class="input-element-field" placeholder="..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-box-foot">
                                    <div class="wrap-form-foot">
                                        <div class="form-foot-checks">
                                            <div class="wrap-foot-checks">
                                                <div class="must-element">
                                                    <p class="must-element-text">Compulsory Fields</p>
                                                </div>
                                                <label class="checkbox-element">
                                                    <input id="check_contact" class="checkbox-input" type="checkbox" name="privacypolicy" value="privacypolicy" required>
                                                    <div class="checkbox-icon"></div>
                                                    <p class="checkbox-text">Yes, I accept the <a href="#" target="_blank" class="checkbox-text-link">Privacy Policy</a>
                                                    </p>
                                                </label>
                                                <label class="checkbox-element">
                                                    <input class="checkbox-input" type="checkbox" name="update" value="pleaseupdate" required>
                                                    <div class="checkbox-icon"></div>
                                                    <p class="checkbox-text">Yes I wish to receive updates</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-foot-btns">
                                            <div class="wrap-foot-btns">
                                                <button type="submit" class="btn-corp btn-small">
                                                    <p class="btn-corp-text">Send</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="half-page-multimedia">
                    <div class="wrap-page-multimedia">
                        <div class="page-multimedia-element frame-off">
                            <div class="wrap-multimedia-element">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.5689745687246!2d55.27620781500998!3d25.21775428388661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f134e61f205fd%3A0x34f79bdab52cb6c3!2sThe%20Tower%20Plaza%20Hotel%20Dubai!5e0!3m2!1sen!2s!4v1645087037667!5m2!1sen!2s" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="half-page-location">
                    <div class="wrap-page-location">
                        <div class="page-location-element">
                            <div class="wrap-location-element">
                                <div class="location-element-header">
                                    <div class="wrap-location-header">
                                        <p class="location-header-title">{{translate("Address")}}</p>
                                    </div>
                                </div>
                                <div class="location-element-info">
                                    <div class="wrap-location-info">
                                        <i class="location-info-icon icon-location"></i>
                                        <p class="location-info-text">{{get_setting('contact_address', null, $lang)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-location-element">
                            <div class="wrap-location-element">
                                <div class="location-element-header">
                                    <div class="wrap-location-header">
                                        <p class="location-header-title">{{translate("Contact")}}</p>
                                    </div>
                                </div>
                                <div class="location-element-info">
                                    <div class="wrap-location-info">
                                        <i class="location-info-icon icon-phone-tone"></i>
                                        <a href="tel:T. +{{get_setting('hotel_phone')}}" class="location-info-text">
                                            T. {{get_setting('hotel_phone')}} <span>- {{translate("Hotel")}}</span>
                                        </a>
                                        <a href="tel:T. +{{get_setting('booking_phone')}}" class="location-info-text">
                                            T. {{get_setting('booking_phone')}} <span>- {{translate("Bookings")}}</span>
                                        </a>
                                        <a href="mailto:{{get_setting("contact_email")}}" class="location-info-text link margin-top">{{get_setting("contact_email")}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-location-element">
                            <div class="wrap-location-element">
                                <div class="location-element-header">
                                    <div class="wrap-location-header">
                                        <p class="location-header-title">Reception opening hours</p>
                                    </div>
                                </div>
                                <div class="location-element-info">
                                    <div class="wrap-location-info">
                                        <i class="location-info-icon icon-clock"></i>
                                        <p class="location-info-text">24 hour reception</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-location-element" style="display: none">
                            <div class="wrap-location-element">
                                <div class="location-element-header">
                                    <div class="wrap-location-header">
                                        <p class="location-header-title"></p>
                                    </div>
                                </div>
                                <div class="location-element-info">
                                    <div class="wrap-location-info">
                                        <i class="location-info-icon icon-location-zone"></i>
                                        <p class="location-info-text">
                                            <strong></strong>
                                            25.2177591
                                        </p>
                                        <p class="location-info-text">
                                            <strong></strong>
                                            55.2762078
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-location-element">
                            <div class="wrap-location-element">
                                <div class="location-element-header">
                                    <div class="wrap-location-header">
                                        <p class="location-header-title">{{translate("Follow us")}}...</p>
                                    </div>
                                </div>
                                <div class="location-element-socials">
                                    <div class="wrap-location-socials">
                                        <a href="{{ get_setting('instagram_link') }}" target="_blank" class="location-socials-element icon-instagram"></a>
                                        <a href="{{ get_setting('facebook_link') }}" target="_blank" class="location-socials-element icon-facebook"></a>
                                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="location-socials-element icon-twitter"></a>
                                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="location-socials-element icon-youtube"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="half-endpoint"></div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script src="{{static_asset("assets/frontend/assets/js/gmaps.min.js")}}"></script>
<script src='https://maps.google.com/maps/api/js?key=AIzaSyCj0T6t0ushlK-njZF4DwHlcMIAiLK1Tsk'></script>
<script src="{{static_asset("assets/frontend/assets/js/half-page.min.js")}}"></script>
@endsection
