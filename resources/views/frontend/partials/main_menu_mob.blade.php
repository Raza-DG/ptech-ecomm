 <ul id="menu-main-menu" class="menu">
  @foreach (\App\Models\Menu::where('parent_id', 0)->where('status','!=', 1)->orderBy('position', 'asc')->get() as $key => $menu) 
  
   @if(count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id))>0) 
					<li id="menu-item-{{ $menu->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-{{ $menu->id }} item-level-0" data-id="{{ $menu->id }}">
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
										
										
  @else		
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
				@endif						
										
										 @if(count(\App\Utility\MenuUtility::get_immediate_children_ids($menu->id))>0)
										 <ul style="display:none;">
               								 @foreach (\App\Utility\MenuUtility::get_immediate_children_ids($menu->id) as $key => $first_level_id)
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
                                                                @else
																 <a href="#" target="" class="lh__1 flex al_center pr">
																@endif
																
                                                                <span>{{ $menus->getTranslation('name') }}</span>
                                                            </a>
                                                    </li>
                                                @endforeach
											 </ul>
											 
											@endif
				
                                    </li> 
									 @endforeach
                                </ul> 