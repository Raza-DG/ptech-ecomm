    <?php
    $count = 0;
    $my_menu=1;
    $menu_type=$menus->menu_type;
    //dd($menus);
    ?>
    <?php if($menu_type<>0){ ?>
   <!-- <div>-->
      <!--  <div class="nav-link-text row lazy_menu lazyloaded" data-jspackery="{ &quot;itemSelector&quot;: &quot;.sub-column-item&quot;,&quot;gutter&quot;: 0,&quot;percentPosition&quot;: true,&quot;originLeft&quot;: true }">-->
    <?php }else{?>
      <!--  <div class="lazy_menu lazyload">-->
        <?php }
        //dd($menus->id);
        //dd(\App\Utility\MenuUtility::get_immediate_children_ids($menus->id));
        ?>
    @foreach (\App\Utility\MenuUtility::get_immediate_children_ids($menus->id) as $key => $first_level_id)
    <?php
    //dd($menus->parent_id,$my_menu,$menu_type);
    if($menus->parent_id<>$my_menu && $menu_type<>0){

        $my_menu=$first_level_id;?> 
    <?php }else{?>
  
        <?php }?>  <li  >
            <?php $menus=\App\Models\Menu::find($first_level_id);?>
            <?php $cat=\App\Models\Category::find($menus->category_id); //dd($menus->category_id); ?>
                @if($menus->type=='category' && $menus->category_id!=0)
                    @if(!empty($cat))
                    <a class="menu-title" class="" href="{{route('products.category', $cat->slug)}}">
                    @else
                    <a class="menu-title" class="" href="#">
                    @endif
            <?php $brand=\App\Models\Brand::find($menus->brand_id); ?>
            @elseif($menus->type=='brand' && $menus->brand_id!=0)
                @if (!empty($brand))
                <a href="{{ route('products.brand',  $brand->slug) }}" target="{{ $menus->target }}" class="">
                @else
                <a href="#" target="" class="">
                @endif
            @elseif($menus->type=='custom')
            <a href="{{ url($menus->url) }}" target="{{ $menus->target }}" class="">
			@else
			 <a href="#" target="" class="">
        @endif
            {{ $menus->getTranslation('name') }}</a>
             
        </li> 
@endforeach
<!--</div>
        </div>
    </div>-->
