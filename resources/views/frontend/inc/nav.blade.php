@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif
<!-- Top Bar --> <section class="nav-container">
        <!-- MAIN nav -->
        <nav class="nav-box">
            <div class="wrap-nav-box">
                <div class="nav-links">
                    <div class="wrap-nav-links">
                        <i class="nav-links_close btn-circle icon-close js-close-menu" tabindex="0" role="button"></i>
                        <div class="nav-links_container">
                            <div class="nav-links_zone left">

                                @foreach (\App\Models\Menu::where('menu_id',1)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->take('5')->get() as $key => $menu)
                                @php
                                    $child =  count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id));
                                @endphp
                                    <div class="nav-links_element">
                                        @if ($child > 0)
                                            <a href="javascript:void(0)" class="wrap-links-element js-open-submenu" data-submenu="{{$menu->id}}" role="button" tabindex="0">
                                        @else
                                            <a
                                            <?php if($menu->type=='category' && $menu->category_id!=0) {
                                                $cat=\App\Models\Category::find($menu->category_id);?>

                                            href="{{ route('products.category',  $cat->slug) }}"

                                            <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                                                $brand=\App\Models\Brand::find($menu->brand_id); ?>

                                            href="{{ route('products.brand',  $brand->slug) }}"
                                            <?php }elseif($menu->type=='custom'){?>

                                            href="{{ url($menu->url) }}"

                                            <?php }elseif($menu->type=='room' && $menu->room_id!=0){
                                                $room=\App\Models\Room::find($menu->room_id); ?>
                                                href="{{ route('room.slug',  $room->slug) }}"

                                            <?php }else{?>

                                                href="#"

                                            <?php }?>

                                            class="wrap-links-element" target="{{ $menu->target }}">

                                        @endif
                                            <p class="links-element_text">{{ $menu->getTranslation('name') }}</p>
                                        </a>
                                    </div>
                                @endforeach
                                {{-- <div class="nav-links_element">
                                    <div class="wrap-links-element js-open-submenu" data-submenu="rooms" role="button" tabindex="0">
                                        <p class="links-element_text">Stay</p>
                                    </div>
                                </div>
                                <div class="nav-links_element">
                                    <div class="wrap-links-element js-open-submenu" data-submenu="restaurants" role="button" tabindex="0">
                                        <p class="links-element_text">Dine</p>
                                    </div>
                                </div>
                                <div class="nav-links_element">
                                    <a href="spa.php" class="wrap-links-element">
                                        <p class="links-element_text">Fitness & Spa</p>
                                    </a>
                                </div>
                                <div class="nav-links_element">
                                    <div class="wrap-links-element js-open-submenu" data-submenu="meatings-events" role="button" tabindex="0">
                                        <p class="links-element_text">Meetings & Events</p>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="nav-links_logo">
                                <a href="{{ route('home') }}" class="wrap-links-logo">
                                    <figure class="links-logo_element" role="img" aria-label="logo"></figure>
                                </a>
                            </div>
                            <div class="nav-links_zone right">
                                @foreach (\App\Models\Menu::where('menu_id',1)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->skip(5)->take('5')->get() as $key => $menu)
                                @php
                                    $child =  count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id));
                                @endphp
                                    <div class="nav-links_element">
                                        @if ($child > 0)
                                            <a href="javascript:void(0)" class="wrap-links-element js-open-submenu" data-submenu="{{$menu->id}}" role="button" tabindex="0">
                                        @else
                                            <a
                                            <?php if($menu->type=='category' && $menu->category_id!=0) {
                                                $cat=\App\Models\Category::find($menu->category_id);?>

                                            href="{{ route('products.category',  $cat->slug) }}"

                                            <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                                                $brand=\App\Models\Brand::find($menu->brand_id); ?>

                                            href="{{ route('products.brand',  $brand->slug) }}"
                                            <?php }elseif($menu->type=='custom'){?>


                                            href="{{ url($menu->url) }}"

                                            <?php }elseif($menu->type=='room' && $menu->room_id!=0){
                                                $room=\App\Models\Room::find($menu->room_id); ?>

                                                href="{{ route('room.slug',  $room->slug) }}"
                                            <?php }else{?>

                                                href="#"

                                            <?php }?>

                                            class="wrap-links-element" target="{{ $menu->target }}">

                                        @endif
                                            <p class="links-element_text">{{ $menu->getTranslation('name') }}</p>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="nav-links_back">
                                <div class="btn-linker toleft js-close-menu" role="button" tabindex="0">
                                    <p class="btn-linker-text">{{translate("Back")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav-btns">
                    <div class="wrap-nav-btns">
                        <div class="nav-btns_menu">
                            <div class="wrap-btns-menu js-open-menu" role="button" tabindex="0">
                                <p class="btns-menu-text">Menu</p>
                                <i class="btn-menu-icon icon-menu"></i>
                            </div>
                        </div>
                        <div class="nav-btns_user hidden">
                            <div class="wrap-btns-user js-toggle-access">
                                <div class="btns-user-element">
                                    <i class="btns-user-icon icon-user-shape"></i>
                                </div>
                            </div>
                            <div class="nav-btns_user-access">
                                <div class="wrap-user-access">
                                    <div class="user-access-box">
                                        <i class="user-access-icon icon-guests"></i>
                                        <p class="user-access-title">Club The Tower Plaza Dubai</p>
                                        <p class="user-access-text">Join the loyalty programme to benefit from advantages, offers and much more for being a member of the club</p>
                                        <div class="user-access-btn btn-corp">
                                            <a href="#" class="btn-corp-text">Sign up</a>
                                        </div>
                                        <a class="user-access-btn btn-linker">
                                            <p class="btn-linker-text">Access Club Tower Plaza Dubai</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (get_setting('show_language_switcher') == 'on')
                            <div class="nav-btns_lang">
                                <div class="wrap-btns-lang js-toggle-popup" data-popup="languages" role="button" tabindex="0">
                                    <div class="btns-lang-element">
                                        <span class="btns-lang-text" style="text-transform:uppercase;">{{Session::get('locale')}}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="nav-logo">
                    <a href="#" class="wrap-nav-logo">
                        <figure class="nav-logo_element" role="img" aria-label="logo"></figure>
                    </a>
                </div>
                <div class="nav-book">
                    <div class="nav-book_btn js-open-motor" tabindex="0" role="button">
                        <p class="nav-book_btn-link">Book Your Stay!</p>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /// MAIN nav /// -->

        @foreach (\App\Models\Menu::where('menu_id',1)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
            @php
                $child =  count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id));
            @endphp
            <article class="subnav-box" data-subnav="{{$menu->id}}">
                <div class="wrap-subnav-box">
                    <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                    <div class="subnav-box_half-list">
                        <div class="wrap-half-list">
                            <p class="half-list-title">{{$menu->mainheading}}</p>
                            <div class="half-list-box">
                                @foreach ($menu->childrenMenus as $key => $childmenu)
                                    <div class="half-list-element" data-placeholder="{{ uploaded_asset($childmenu->getTranslation('image'))}}">
                                        <a
                                            <?php if($childmenu->type=='category' && $childmenu->category_id!=0) {
                                                $cat=\App\Models\Category::find($menu->category_id);?>

                                            href="{{ route('products.category',  $cat->slug) }}"

                                            <?php }elseif($childmenu->type=='brand' && $childmenu->brand_id!=0) {
                                                $brand=\App\Models\Brand::find($menu->brand_id); ?>

                                            href="{{ route('products.brand',  $brand->slug) }}"
                                            <?php }elseif($childmenu->type=='custom'){?>


                                            href="{{ url($childmenu->url) }}"

                                            <?php }elseif($childmenu->type=='room' && $childmenu->room_id != 0){
                                                $room=\App\Models\Room::find($childmenu->room_id); ?>
                                                href="{{ route('room.slug',  $room->slug) }}"

                                            <?php }else{?>

                                                href="#"

                                            <?php }?>

                                            class="wrap-list-element"

                                            target="{{ $menu->target }}"
                                        >
                                            <div class="half-list-element_img">
                                                <figure class="half-list-element_img-photo" role="img"></figure>
                                            </div>
                                            <div class="half-list-element_info">
                                                <p class="half-list-element_info-text">
                                                    {{$childmenu->getTranslation('name')}}
                                                    @if ($childmenu->subheading != null)
                                                        <span>{{$childmenu->subheading}}</span>
                                                    @endif
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="half-list-back">
                                <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                    <p class="btn-linker-text">{{translate("Back")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subnav-box_half-media">
                        <div class="wrap-half-media">
                            <figure class="half-media-img circle" role="img" data-default-placeholder="{{ uploaded_asset($menu->getTranslation('image'))}}" style="background-image:url('{{static_asset('assets/frontend/assets/images/menus/stay/superior-room.jpg')}}');"></figure>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        {{-- <article class="subnav-box" data-subnav="rooms">
            <div class="wrap-subnav-box">
                <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                <div class="subnav-box_half-list">
                    <div class="wrap-half-list">
                        <p class="half-list-title">Choose a section</p>
                        <div class="half-list-box">
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/superior-room.jpg')}}">
                                <a href="superior-room.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Superior Room</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/premium-room-twin.jpg')}}">
                                <a href="premium-room.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Premium Room
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/presindetial-suite.jpg')}}">
                                <a href="presidential-suite.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Presidential Suite
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/deluxe-suite.jpg')}}">
                                <a href="deluxe-studio.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Deluxe Studio
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/deluxe-suite-bedroom.jpg')}}">
                                <a href="./deluxe-suite.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Deluxe Suite
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/executive-suite-bedroom.jpg')}}">
                                <a href="./executive-suite.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Executive Suite
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/rooms/family_room.jpg')}}">
                                <a href="./family-room.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Family Room
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="half-list-element" data-placeholder="assets/images/menus/stay/sky-premium-king.jpg">
                                <a href="./sky-premium-room.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Sky Premium Room
                                    </div>
                                </a>
                            </div> -->
                        </div>
                        <div class="half-list-back">
                            <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                <p class="btn-linker-text">Back</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subnav-box_half-media">
                    <div class="wrap-half-media">
                        <figure class="half-media-img circle" role="img" data-default-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/superior-room.jpg')}}" style="background-image:url('{{ static_asset('assets/frontend/assets/images/menus/stay/superior-room.jpg')}}');"></figure>
                    </div>
                </div>
            </div>
        </article>
        <article class="subnav-box" data-subnav="overviews">
            <div class="wrap-subnav-box">
                <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                <div class="subnav-box_half-list">
                    <div class="wrap-half-list">
                        <p class="half-list-title">Choose a section</p>
                        <div class="half-list-box">

                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/rooms/metro.jpg')}}">
                                <a href="about.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">About Us <span>Overview</span></p>
                                    </div>
                                </a>
                            </div>

                            <div class="half-list-element" data-placeholder="assets/images/rooms/costa.jpg">
                                <a href="gallery.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Gallery <span>Overview</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/rooms/metro.jpg')}}">
                                <a href="guest-reviews.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Guest Reviews <span>Overview</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/rooms/costa.jpg">
                                <a href="contact.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Contact <span>Overview</span></p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="half-list-back">
                            <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                <p class="btn-linker-text">Back</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subnav-box_half-media">
                    <div class="wrap-half-media">
                        <figure class="half-media-img circle" role="img" data-default-placeholder={{ static_asset('assets/frontend/"assets/images/rooms/metro.jpg')}}" style="background-image:url('{{ static_asset('assets/frontend/assets/images/rooms/metro.jpg')}}');"></figure>
                    </div>
                </div>
            </div>
        </article>
        <article class="subnav-box" data-subnav="experiences">
            <div class="wrap-subnav-box">
                <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                <div class="subnav-box_half-list">
                    <div class="wrap-half-list">
                        <p class="half-list-title">Choose a section</p>
                        <div class="half-list-box">
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/Beauty Salon.jpg')}}">
                                <a href="beauty-salon.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Beauty Salon </p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/Travel and ticketing.jpg">
                                <a href="travel-and-ticketing.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Travel and Ticketing </p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/Gift Shops.jpg">
                                <a href="gift-shops.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Gift Shops </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="half-list-back">
                            <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                <p class="btn-linker-text">Back</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subnav-box_half-media">
                    <div class="wrap-half-media">
                        <figure class="half-media-img circle" role="img" data-default-placeholder="{{ static_asset('assets/frontend/assets/images/menus/Beauty Salon.jpg')}}" style="background-image:url('{{ static_asset('assets/frontend/assets/images/menus/Beauty Salon.jpg')}}');"></figure>
                    </div>
                </div>
            </div>
        </article>
        <article class="subnav-box" data-subnav="local-attractions">
            <div class="wrap-subnav-box">
                <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                <div class="subnav-box_half-list">
                    <div class="wrap-half-list">
                        <p class="half-list-title">Choose a section</p>
                        <div class="half-list-box">

                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/DubaiWorldTradeCentre.jpg')}}">
                                <a href="./dubai-world-trade-center.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai World Trade Centre</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/Dubai International Financial Centre.jpg')}}">
                                <a href="./dubai-international-financial-centre.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai International Financial Centre</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/zabeer park.jpg')}}">
                                <a href="./zabeel-park.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Zabeel park</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/dubai-frame.jpg">
                                <a href="./dubai-frame.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai Frame</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/burj-khalifa.jpg">
                                <a href="./burj-khalifa.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Burj Khalifa</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/dubai-fountain.jpg">
                                <a href="./dubai-fountain.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai Fountain</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/souk all bahar.jpg">
                                <a href="./souk-al-bahar.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Souk Al Bahar</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/dubai-mall.jpg">
                                <a href="./dubai-mall.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai Mall</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/dubai-opera.jpg">
                                <a href="./dubai-opera.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai Opera</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/city walk mall.jpg">
                                <a href="./city-walk-mall.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">City Walk Mall</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/la-mer-dubai.jpg">
                                <a href="./la-mer.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">La Mer</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/laguna-water-park.jpg">
                                <a href="./laguna-water-park.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Laguna Water park</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/dubai-cruise-terminal.jpg">
                                <a href="./dubai-cruise-terminal.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Dubai Cruise Terminal</p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/al-seef.jpg">
                                <a href="./al-seef.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Al Seef</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="half-list-back">
                            <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                <p class="btn-linker-text">Back</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subnav-box_half-media">
                    <div class="wrap-half-media">
                        <figure class="half-media-img circle" role="img" data-default-placeholder="{{ static_asset('assets/frontend/assets/images/menus/DubaiWorldTradeCentre.jpg')}}" style="background-image:url('{{ static_asset('assets/frontend/assets/images/menus/DubaiWorldTradeCentre.jpg')}}');"></figure>
                    </div>
                </div>
            </div>
        </article>
        <article class="subnav-box" data-subnav="restaurants">
            <div class="wrap-subnav-box">
                <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                <div class="subnav-box_half-list">
                    <div class="wrap-half-list">
                        <p class="half-list-title">Brochure of restaurants and bars</p>
                        <div class="half-list-box">
                            <div class="half-list-element" data-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/metro.jpg')}}">
                                <a href="metro.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Metro Restaurant <span>Asian Restaurant</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/view.jpg">
                                <a href="views.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Views @ 61 <span>Asian Restaurant</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/rooms/costa.jpg">
                                <a href="le-cafe.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Le Café <span>Coffee Shop</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/infinity.jpg">
                                <a href="infinity-poolside-lounge.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Infinity Poolside Lounge <span>Dining Lounge</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/rooms/room.jpg">
                                <a href="in-room-dining.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">In-Room Dining<span>Relaxed Dining Experience</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="half-list-element" data-placeholder="assets/images/menus/copper_chimney.jpg">
                                <a href="copper-chimney.php" class="wrap-list-element">
                                    <div class="half-list-element_img">
                                        <figure class="half-list-element_img-photo" role="img"></figure>
                                    </div>
                                    <div class="half-list-element_info">
                                        <p class="half-list-element_info-text">Copper Chimney <span>missing</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="half-list-back">
                            <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                <p class="btn-linker-text">Back</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="subnav-box_half-media">
                    <div class="wrap-half-media">
                        <figure class="half-media-img circle" role="img" data-default-placeholder="{{ static_asset('assets/frontend/assets/images/menus/stay/metro.jpg')}}" style="background-image:url('{{ static_asset('assets/frontend/assets/images/menus/stay/metro.jpg')}}');"></figure>
                    </div>
                </div>
            </div>
        </article> --}}

        <!-- MAIN subnavs -->
        @foreach (\App\Models\Menu::where('menu_id',3)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
            <article class="subnav-box" data-subnav="{{$menu->id}}">
                <div class="wrap-subnav-box">
                    <i class="subnav-box_close btn-circle icon-close js-close-all" tabindex="0" role="button"></i>
                    <div class="subnav-box_half-list">
                        <div class="wrap-half-list">
                            <p class="half-list-title">{{translate("Choose a section")}}</p>
                            @foreach ($menu->childrenMenus as $key => $childmenu)
                                <div class="half-list-box">
                                    <div class="half-list-element mobi" data-placeholder="{{ uploaded_asset($childmenu->image)}}">
                                        <a
                                            <?php if($childmenu->type=='category' && $childmenu->category_id!=0) {
                                                $cat=\App\Models\Category::find($menu->category_id);?>

                                            href="{{ route('products.category',  $cat->slug) }}"

                                            <?php }elseif($childmenu->type=='brand' && $childmenu->brand_id!=0) {
                                                $brand=\App\Models\Brand::find($menu->brand_id); ?>

                                            href="{{ route('products.brand',  $brand->slug) }}"
                                            <?php }elseif($childmenu->type=='custom'){?>


                                            href="{{ url($childmenu->url) }}"

                                            <?php }elseif($childmenu->type=='room' && $childmenu->room_id != 0){
                                                $room=\App\Models\Room::find($childmenu->room_id); ?>
                                                href="{{ route('room.slug',  $room->slug) }}"

                                            <?php }else{?>

                                                href="#"

                                            <?php }?>

                                            class="wrap-list-element"

                                            target="{{ $menu->target }}"
                                        >
                                            <div class="half-list-element_img">
                                                <figure class="half-list-element_img-photo" role="img"></figure>
                                            </div>
                                            <div class="half-list-element_info">
                                                <p class="half-list-element_info-text">{{$childmenu->getTranslation('name')}}
                                                    <span>{{$menu->getTranslation('name')}}</span>
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            <div class="half-list-back">
                                <div class="btn-linker toleft js-close-submenu" role="button" tabindex="0">
                                    <p class="btn-linker-text">{{translate("Back")}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        <!-- /// MAIN subnavs /// -->
    </section>

    <!-- todo: languages nav -->
    @if (get_setting('show_language_switcher') == 'on')
        <div id="languages" class="popup-module">
            <div class="wrap-popup-module">
                <div class="popup-module-backmask popup-box-close js-toggle-popup" data-popup="languages"></div>
                <div class="popup-module-box">
                    <i class="popup-box-close btn-circle icon-close js-toggle-popup" data-popup="languages"></i>
                    <div class="wrap-popup-box">
                        @php
                            if (Session::has('locale')) {
                                $locale = Session::get('locale', Config::get('app.locale'));
                            } else {
                                $locale = 'en';
                            }
                        @endphp
                        <p class="popup-box-subtitle">{{translate("Select a language")}}</p>
                        <div class="popup-box-languages" id="lang-change">
                            @foreach (\App\Models\Language::all() as $key => $language)
                                <a href="#" rel="alternate" class="btn-languages btn-corp {{ \App\Models\Language::where('code', $locale)->first()->name == $language->name ? 'active' : '' }}" data-flag='{{ $language->code }}'>
                                    <p class="btn-corp-text">{{$language->name}}</p>
                                </a>
                            @endforeach
                            {{-- <a href="#" rel="alternate" class="btn-languages btn-corp ">
                                <p class="btn-corp-text">العربية</p>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- DEVICES shortcut nav -->
    {{-- <aside class="shortcut-menu">
        <div class="wrap-shortcut-menu">
            <div class="shortcut-menu-list">
                <div class="shortcut-menu-element">
                    <div class="wrap-shortcut-element js-open-submenu" data-submenu="hotel" role="button" tabindex="0">
                        <i class="shortcut-element-icon icon-home-shape"></i>
                        <p class="shortcut-element-text">Home</p>
                    </div>
                </div>
                <div class="shortcut-menu-element">
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
                </div>
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
    </aside> --}}
