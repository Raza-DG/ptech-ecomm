 <ul id="menu-main-menu" class="menu">
  @foreach (\App\Models\Menu::where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get() as $key => $menu)
                                    <li id="menu-item-{{ $menu->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{ $menu->id }} item-level-0 menu-item-design-default menu-simple-dropdown item-event-hover @if(count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id))>0) position-relative @endif" data-id="{{ $menu->id }}">
              <?php if($menu->type=='category' && $menu->category_id!=0) {
                $cat=\App\Models\Category::find($menu->category_id);?>
                <a href="{{ route('products.category',  $cat->slug) }}" target="{{ $menu->target }}" class="woodmart-nav-link">
                <?php }elseif($menu->type=='brand' && $menu->brand_id!=0) {
                    $brand=\App\Models\Brand::find($menu->brand_id); ?>
                <a href="{{ route('products.brand',  $brand->slug) }}" target="{{ $menu->target }}" class="woodmart-nav-link">
                <?php }elseif($menu->type=='custom'){?>
                <a href="{{ url($menu->url) }}" target="{{ $menu->target }}" class="woodmart-nav-link">
                <?php }else{?>
				<a href="javascript:;"   class="woodmart-nav-link">
				 <?php }?>
                                            <span class="nav-link-text">{{ $menu->getTranslation('name') }}</span>
                                        </a>


										 @if(count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id))>0)

											<ul class="cus sub-menu mega-menu sub-men">

											</ul>

											@endif

                                    </li>
									 @endforeach
                                </ul>
