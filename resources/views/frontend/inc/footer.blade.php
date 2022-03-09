@php
if (Session::has('locale')) {
    $locale = Session::get('locale', Config::get('app.locale'));
} else {
    $locale = 'en';
}
@endphp
<footer class="footer-links">
    <div class="big-wrapper light-background">
        <div class="wrap-footer-links">
            <div class="footer-links-top">
                <i class="footer-links-top_icon btn-circle icon-sign-top js-scrollto" data-scroll_to="body"
                    data-scroll_spacer="0" role="button" tabindex="0"></i>
                <span class="footer-links-top_text">{{ translate('Top') }}</span>
            </div>
            <div class="footer-links-box">
                <div class="wrap-links-box">
                    @if (get_setting('ef_title', null, $locale) != null)
                        @foreach (json_decode(get_setting('ef_title', null, $locale), true) as $key => $value)
                            <div class="links-box-element">
                                <div class="wrap-links-element">
                                    <i class="links-element-icon {{ json_decode(get_setting('ef_icon'), true)[$key]}}"></i>
                                    <div class="links-element-header">
                                        <div class="wrap-links-header">
                                            <p class="links-header-title">{{$value}}</p>
                                        </div>
                                    </div>
                                    <div class="links-element-info">
                                        <div class="wrap-links-info">
                                            <p class="links-info-text">
                                                {!! json_decode(get_setting('ef_description',null,$locale), true)[$key] !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    {{-- <div class="links-box-element">
                        <div class="wrap-links-element">
                            <i class="links-element-icon icon-phone-tone"></i>
                            <div class="links-element-header">
                                <div class="wrap-links-header">
                                    <p class="links-header-title">{{ translate('Contact') }}</p>
                                </div>
                            </div>
                            <div class="links-element-info">
                                <div class="wrap-links-info">
                                    <a href="tel:{{ get_setting('hotel_phone') }}" class="links-info-text">
                                        T. {{ get_setting('hotel_phone') }} <span>- Hotel</span>
                                    </a>
                                    <a href="tel:{{ get_setting('booking_phone') }}" class="links-info-text">
                                        T. {{ get_setting('booking_phone') }} <span>- Bookings</span>
                                    </a>
                                    <a href="mailto:{{ get_setting('contact_email') }}"
                                        class="links-info-text link margin-top">
                                        {{ get_setting('contact_email') }} </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="links-box-element">
                        <a href="#">
                            <div class="wrap-links-element">
                                <i class="links-element-icon icon-location-zone"></i>
                                <div class="links-element-header">
                                    <div class="wrap-links-header">
                                        <p class="links-header-title">How to get here</p>
                                    </div>
                                </div>
                                <div class="links-element-info">
                                    <div class="wrap-links-info">
                                        <p class="links-info-text">We tell you the best way to get to The Tower Plaza
                                            Hotel Dubai in Dubai</p>
                                        <div class="links-info-btn btn-linker toright">
                                            <p class="btn-linker-text">More information</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    @if (get_setting('show_social_links') == 'on')
                        <div class="links-box-element">
                            <div class="wrap-links-element">
                                <i class="links-element-icon icon-rrss"></i>
                                <div class="links-element-header">
                                    <div class="wrap-links-header">
                                        <p class="links-header-title">{{translate("Follow us")}}...</p>
                                    </div>
                                </div>
                                <div class="links-element-socials">
                                    <div class="wrap-links-socials">
                                        <a href="{{ get_setting('instagram_link') }}" target="_blank" class="links-socials-element icon-instagram"></a>
                                        <a href="{{ get_setting('facebook_link') }}" target="_blank" class="links-socials-element icon-facebook"></a>
                                        <a href="{{ get_setting('twitter_link') }}" target="_blank" class="links-socials-element icon-twitter"></a>
                                        <a href="{{ get_setting('youtube_link') }}" target="_blank" class="links-socials-element icon-youtube"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="footer-static">
    <div class="big-wrapper light-background">
        <div class="wrap-footer-static">
            <div class="footer-static-header">
                <div class="wrap-footer-header">
                    <p class="footer-header-title">
                        {!! get_setting('frontend_copyright_text', null, $locale) !!}
                    </p>
                </div>
            </div>
            <div class="footer-static-list">
                <div class="wrap-footer-list">
                    @foreach (\App\Models\Menu::where('menu_id', 2)->where('parent_id', 0)->where('status', '!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
                        <div class="footer-list-element">
                            <a <?php if($menu->type=='category' && $menu->category_id!=0) {
                                $cat=\App\Category::find($menu->category_id);?> href="{{ route('products.category', $cat->slug) }}"
                                <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                                $brand=\App\Brand::find($menu->brand_id); ?> href="{{ route('products.brand', $brand->slug) }}"
                                <?php }elseif($menu->type=='custom'){?> href="{{ url($menu->url) }}" <?php }else{?> href="#"
                                <?php }?> target="{{ $menu->target }}">
                                <div class="wrap-footer-element">
                                    <p class="footer-element-text">{{ $menu->getTranslation('name') }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="footer-list-element">
                         <div class="wrap-footer-element js-toggle-popup" data-popup="newsletter">
                             <p class="footer-element-text">Newsletter</p>
                         </div>
                     </div>
                     <div class="footer-list-element">
                         <a href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Work with us</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Press office</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Professionals</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a target="_blank" href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Privacy policy</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a target="_blank" href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Legal Advice</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Website map</p>
                             </div>
                         </a>
                     </div>
                     <div class="footer-list-element">
                         <a target="_blank" href="#">
                             <div class="wrap-footer-element">
                                 <p class="footer-element-text">Designed by Digital Graphiks</p>
                             </div>
                         </a>
                     </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>



<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">

    <aside class="shortcut-menu">
        <div class="wrap-shortcut-menu">
            <div class="shortcut-menu-list">
                @foreach (\App\Models\Menu::where('menu_id',3)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
                    @php
                        $child =  count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id));
                    @endphp
                        @if ($child > 0)
                            <div class="shortcut-menu-element">
                                <div class="wrap-shortcut-element js-open-submenu" data-submenu="{{$menu->id}}" role="button" tabindex="0">
                                    <i class="shortcut-element-icon {{$menu->icon}}"></i>
                                    <p class="shortcut-element-text">{{$menu->getTranslation('name')}}</p>
                                </div>
                            </div>
                        @else

                            <div class="shortcut-menu-element">
                                <a
                                    <?php if($menu->type=='category' && $menu->category_id!=0) {
                                        $cat=\App\Models\Category::find($menu->category_id);?>

                                    href="{{ route('products.category',  $cat->slug) }}"

                                    <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                                        $brand=\App\Models\Brand::find($menu->brand_id); ?>

                                    href="{{ route('products.brand',  $brand->slug) }}"
                                    <?php }elseif($menu->type=='custom'){?>

                                    href="{{ url($menu->url) }}"

                                    <?php }elseif($menu->type=='room' && $menu->room_id != 0){
                                        $room=\App\Models\Room::find($menu->room_id); ?>

                                        href="{{ route('room.slug',  $room->slug) }}"

                                    <?php }else{?>

                                        href="#"

                                    <?php }?>

                                    class="wrap-links-element" target="{{ $menu->target }}">
                                    <div class="wrap-shortcut-element">
                                        <i class="shortcut-element-icon {{$menu->icon}}"></i>
                                        <p class="shortcut-element-text">{{$menu->getTranslation('name')}}</p>
                                    </div>

                                </a>
                            </div>

                        @endif
                @endforeach
                {{-- <div class="shortcut-menu-element">
                    <div class="wrap-shortcut-element js-open-submenu" data-submenu="rooms" role="button" tabindex="0">
                        <i class="shortcut-element-icon icon-bed"></i>
                        <p class="shortcut-element-text">Rooms</p>
                    </div>
                </div>
                <div class="shortcut-menu-element">
                    <div class="wrap-shortcut-element js-open-submenu" data-submenu="restaurants" role="button" tabindex="0">
                        <i class="shortcut-element-icon icon-cutlery"></i>
                        <p class="shortcut-element-text">Restaurants</p>
                    </div>
                </div>
                <div class="shortcut-menu-element">
                    <div class="wrap-shortcut-element js-open-submenu" data-submenu="spa" role="button" tabindex="0">
                        <i class="shortcut-element-icon icon-massage"></i>
                        <p class="shortcut-element-text">Spa</p>
                    </div>
                </div>
                <div class="shortcut-menu-element">
                    <a href="#">
                        <div class="wrap-shortcut-element">
                            <i class="shortcut-element-icon icon-camera"></i>
                            <p class="shortcut-element-text">Gallery</p>
                        </div>
                    </a>
                </div>
                <div class="shortcut-menu-element">
                    <a href="#">
                        <div class="wrap-shortcut-element">
                            <i class="shortcut-element-icon icon-letter-shape"></i>
                            <p class="shortcut-element-text">Contact</p>
                        </div>
                    </a>
                </div> --}}
                <div class="shortcut-menu-element">
                    <div class="wrap-shortcut-element">
                        <div class="menu-btn">
                            <div class="wrap-menu-btn js-open-menu" role="button" tabindex="0">
                                <p class="menu-btn-text">Menu</p>
                                <i class="menu-btn-icon"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

</div>



{{-- <div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'], 'opacity-100 fw-600') }}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i
                    class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 text-primary') }}"></i>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'], 'opacity-100 fw-600') }}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if (auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if ($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span
                    class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px"
                    style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span
                    class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'], 'opacity-100 fw-600') }}">
                    {{ translate('Cart') }}
                    @php
                        $count = isset($cart) && count($cart) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{ $count }}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i
                        class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 text-primary') }}"></i>
                    @if (Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span
                            class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"
                            style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span
                    class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'], 'opacity-100 fw-600') }}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
            @if (Auth::check())
                @if (isAdmin())
                    <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @else
                    <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb"
                        data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                        <span class="d-block mx-auto">
                            @if (Auth::user()->photo != null)
                                <img src="{{ custom_asset(Auth::user()->avatar_original) }}"
                                    class="rounded-circle size-20px">
                            @else
                                <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                                    class="rounded-circle size-20px">
                            @endif
                        </span>
                        <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                    </a>
                @endif
            @else
                <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        <img src="{{ static_asset('assets/img/avatar-place.png') }}"
                            class="rounded-circle size-20px">
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif --}}
