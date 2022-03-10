<?php
    $count = 0;
    $my_menu=1;
    $menu_type=$menus->menu_type;
    //dd($menus);
?>
@if ($menu_type != 1)
    <div class="elementor elementor-894" data-elementor-id="894" data-elementor-settings="[]" data-elementor-type="wp-post">
        <div class="elementor-section-wrap">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="6a81701">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114" data-element_type="column" data-id="67a6114">
                        <div class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="9cebf3e" data-widget_type="reycore-menu.product-categories">
                                <div class="elementor-widget-container">
                                    <div class="rey-element reyEl-menu">
                                        <div class="reyEl-menu-navWrapper">
                                            <ul class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                @foreach (\App\Utility\MenuUtility::get_immediate_children_ids($menus->id) as $key => $first_level_id)
                                                    <?php $menus=\App\Models\Menu::find($first_level_id);?>
                                                    <li class="menu-item">
                                                                @if($menus->type=='category' && $menus->category_id!=0)
                                                                <?php $cat=\App\Models\Category::find($menus->category_id); //dd($menus->category_id); ?>
                                                                    @if(!empty($cat))
                                                                        <a href="{{route('products.category', $cat->slug)}}" target="{{ $menus->target }}">
                                                                    @else
                                                                        <a href="#">
                                                                    @endif
                                                                <?php $brand=\App\Models\Brand::find($menus->brand_id); ?>
                                                                @elseif($menus->type=='brand' && $menus->brand_id!=0)
                                                                    @if (!empty($brand))
                                                                    <a href="{{ route('products.brand',  $brand->slug) }}" target="{{ $menus->target }}" class="lh__1 flex al_center pr menu-title">
                                                                    @else
                                                                    <a href="#" target="" class="lh__1 flex al_center pr">
                                                                    @endif
                                                                @elseif($menus->type=='custom')
                                                                <a href="{{ url($menus->url) }}" target="{{ $menus->target }}" class="lh__1 flex al_center pr menu-title">
                                                                @endif
                                                                <span>{{ $menus->getTranslation('name') }}</span>
                                                            </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@else
<div class="elementor elementor-894" data-elementor-id="894" data-elementor-settings="[]" data-elementor-type="wp-post">
    <div class="elementor-section-wrap">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-6a81701 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="6a81701">
            <div class="elementor-container elementor-column-gap-default">
                @foreach (\App\Utility\MenuUtility::get_immediate_children_ids($menus->id) as $key => $first_level_id)
                <?php $menus=\App\Models\Menu::find($first_level_id);?>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element {{$menus->full_image != 1 ? "elementor-element-67a6114" : "elementor-element-854d66d"}}" data-element_type="column" data-id="67a6114">
                        <div class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                            @if ($menus->full_image != 1)
                                <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="812a1d1" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        @if($menus->type == 'category' && $menus->category_id != 0)
                                            <?php $cat2=\App\Models\Category::find($menus->category_id); //dd($menus->category_id); ?>
                                            @if(!empty($cat2))
                                                <a href="{{route('products.category', $cat->slug)}}" target="{{ $menus->target }}">
                                            @else
                                                <a href="#">
                                            @endif
                                        <?php $brand=\App\Models\Brand::find($menus->brand_id); ?>
                                        @elseif($menus->type=='brand' && $menus->brand_id!=0)
                                            @if (!empty($brand))
                                                <a href="{{ route('products.brand',  $brand->slug) }}" target="{{ $menus->target }}" class="lh__1 flex al_center pr menu-title">
                                            @else
                                                <a href="#" target="" class="lh__1 flex al_center pr">
                                            @endif
                                        @elseif($menus->type=='custom')
                                            <a href="{{ url($menus->url) }}" target="{{ $menus->target }}" class="lh__1 flex al_center pr menu-title">
                                        @endif
                                            <h3 class="elementor-heading-title elementor-size-default">
                                                <span class="text-red">{{ $menus->getTranslation('name') }}</span>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="{{$menus->id}}" data-widget_type="reycore-menu.product-categories">
                                    <div class="elementor-widget-container">
                                        <div class="rey-element reyEl-menu">
                                            <div class="reyEl-menu-navWrapper">
                                                <ul class="reyEl-menu-nav rey-navEl --menuHover-none">
                                                    <?php $myp_id=0;$count =0;?>
                                                    @foreach (\App\Utility\MenuUtility::get_immediate_children_ids($first_level_id) as $key => $second_level_id)
                                                    <?php $menus2=\App\Models\Menu::find($second_level_id);?>
                                                            @if ($menus2->description != null)
                                                                <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="{{$menus2->id}}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        @if($menus2->type == 'category' && $menus2->category_id != 0)
                                                                            <?php $cat2=\App\Models\Category::find($menus2->category_id); //dd($menus->category_id); ?>
                                                                            @if(!empty($cat2))
                                                                                <a href="{{route('products.category', $cat2->slug)}}" target="{{ $menus2->target }}">
                                                                            @else
                                                                                <a href="#">
                                                                            @endif
                                                                        <?php $brand2=\App\Models\Brand::find($menus2->brand_id); ?>
                                                                        @elseif($menus2->type=='brand' && $menus2->brand_id!=0)
                                                                            @if (!empty($brand2))
                                                                                <a href="{{ route('products.brand',  $brand2->slug) }}" target="{{ $menus2->target }}" class="lh__1 flex al_center pr menu-title">
                                                                            @else
                                                                                <a href="#" target="" class="lh__1 flex al_center pr">
                                                                            @endif
                                                                        @elseif($menus2->type=='custom')
                                                                            <a href="{{ url($menus2->url) }}" target="{{ $menus2->target }}" class="lh__1 flex al_center pr menu-title">
                                                                        @endif
                                                                            <h3 class="elementor-heading-title elementor-size-default">
                                                                                <span class="text-red">{{$menus2->getTranslation('name')}}</span>
                                                                            </h3>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="{{$menus2->id}}" data-widget_type="reycore-menu.product-categories">
                                                                    {!! $menus2->description !!}
                                                                </div>
                                                            @else
                                                                <li class="menu-item">
                                                                    @if($menus2->type == 'category' && $menus->category_id != 0)
                                                                            <?php $cat2=\App\Models\Category::find($menus2->category_id); //dd($menus->category_id); ?>
                                                                            @if(!empty($cat2))
                                                                                <a href="{{route('products.category', $cat->slug)}}" target="{{ $menus2->target }}">
                                                                            @else
                                                                                <a href="#">
                                                                            @endif
                                                                        <?php $brand2=\App\Models\Brand::find($menus2->brand_id); ?>
                                                                        @elseif($menus2->type=='brand' && $menus2->brand_id!=0)
                                                                            @if (!empty($brand2))
                                                                                <a href="{{ route('products.brand',  $brand2->slug) }}" target="{{ $menus2->target }}" class="lh__1 flex al_center pr menu-title">
                                                                            @else
                                                                                <a href="#" target="" class="lh__1 flex al_center pr">
                                                                            @endif
                                                                        @elseif($menus2->type=='custom')
                                                                            <a href="{{ url($menus2->url) }}" target="{{ $menus2->target }}" class="lh__1 flex al_center pr menu-title">
                                                                    @endif
                                                                        <span>{{ $menus2->getTranslation('name') }}</span>
                                                                    </a>
                                                                </li>
                                                            @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="elementor-element elementor-element-3f390ca elementor-widget elementor-widget-image" data-element_type="widget" data-id="{{$menus->id}}" data-widget_type="image.default">
                                    <div class="elementor-widget-container two-imgs">
                                        <!-- <a href="#"> -->
                                            @php
                                                $images = explode(",",$menus->image);
                                            @endphp
                                            @foreach ($images as $image)
                                                <img alt="" class="attachment-large size-large" src="{{uploaded_asset($image)}}">
                                            @endforeach
                                        <!-- </a> -->
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                {{-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-67a6114" data-element_type="column" data-id="67a6114">
                    <div class="elementor-column-wrap--67a6114 elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="812a1d1" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default"><span class="text-red">OTHER SERVICE</span></h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="812a1d1" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default"><span class="text-red">Energized AC/DC Motor Testing (ESA)</span></h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="9cebf3e" data-widget_type="reycore-menu.product-categories">
                            <div class="elementor-widget-container">
                                <div class="rey-element reyEl-menu">
                                    <div class="reyEl-menu-navWrapper">
                                        <ul class="reyEl-menu-nav rey-navEl --menuHover-none">
                                            <li class="menu-item">
                                                <p>With the help of Electrical Signature Analysis we can detect many Electrical & Mechanical issues such as:</p>
                                                <ul>
                                                    <li>Incoming Power</li>
                                                    <li>Motor Electrical & Mechanical</li>
                                                    <li>Coupling/Power Transmission/Driven load</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-812a1d1 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="812a1d1" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-heading-title elementor-size-default"><span class="text-red">De-energized Motor AC/DC Motor Testing (Offline)</span></h3>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9cebf3e reyEl-menu--cols-2 reyEl-menu--vertical --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="9cebf3e" data-widget_type="reycore-menu.product-categories">
                            <div class="elementor-widget-container">
                                <div class="rey-element reyEl-menu">
                                    <div class="reyEl-menu-navWrapper">
                                        <ul class="reyEl-menu-nav rey-navEl --menuHover-none">
                                            <li class="menu-item">
                                                <a href="#"><span>In the de-energized mode we can test the motor to detect:</span></a>
                                                <ul>
                                                    <li>Turn faults</li>
                                                    <li>Coil Faults</li>
                                                    <li>Ground faults</li>
                                                    <li>Cable faults</li>
                                                    <li>Connection Resistance</li>
                                                    <li>Rotor Eccentricity</li>
                                                    <li>Broken Rotor Bars</li>
                                                    <li>Casting Voids</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-854d66d" data-element_type="column" data-id="854d66d">
                    <div class="elementor-column-wrap--854d66d elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-3f390ca elementor-widget elementor-widget-image" data-element_type="widget" data-id="3f390ca" data-widget_type="image.default">
                            <div class="elementor-widget-container two-imgs">
                                <!-- <a href="#"> -->
                                <img alt="" class="attachment-large size-large" src="assets/img/products/1.jpg">
                                <!-- </a> -->
                                <!-- <a href="#"> -->
                                <img alt="" class="attachment-large size-large" src="assets/img/products/2.jpg">
                                <!-- </a> -->
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
</div>
@endif





