<ul class="rey-mainMenu rey-mainMenu--desktop id--mainMenu--desktop --has-indicators --megamenu-support" id="main-menu-desktop-0968131">
    {{-- @dd(\App\Models\Menu::where('menu_id',1)->where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get()) --}}
    @foreach (\App\Models\Menu::where('menu_id', 1)->where('parent_id', 0)->where('status', '!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
        @php
            $child = count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id));
        @endphp
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-8 menu-item-{{ $menu->id }} depth--0 --is-regular
            @if ($child > 0) --is-mega --mega-custom menu-item-has-children {{$menu->menu_type != 1 ? 'calibration':''}} @endif"
            id="menu-item-{{ $menu->id }}" data-id="{{ $menu->id }}">
            <a <?php if($menu->type=='category' && $menu->category_id!=0) {
                      $cat=\App\Models\Category::find($menu->category_id);?> href="{{ route('products.category', $cat->slug) }}" <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                        $brand=\App\Models\Brand::find($menu->brand_id); ?>
                href="{{ route('products.brand', $brand->slug) }}" <?php }elseif($menu->type=='custom'){?>
                href="{{ url($menu->url) }}" <?php }else{?> href="#" <?php }?>
                target="{{ $menu->target }}"
                >
                <span style="text-transform: uppercase">{{ $menu->getTranslation('name') }}</span>
            </a>
            @if(count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id)) > 0)
                <div class="rey-mega-gs">

                </div>
            @endif
        </li>
    @endforeach
</ul>
