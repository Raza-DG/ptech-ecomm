

<ul id="menu-categories" class="menu wd-cat-nav">
    <!-- option 1 AC/DC Motor Testing  -->
	
	 @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
	 @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
    <li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover menu-item-has-children">
	@else
	<li id="menu-item-662" class="eux-menu-shop-by-anima l menu-item menu-item-type-custom menu-item-object-custom menu-item-662 item-level-0 menu-item-design-full-width menu-mega-dropdown item-event-hover">
	@endif
        <a href="{{ route('products.category', $category->slug) }}" class="woodmart-nav-link">
            <span class="nav-link-text">{{ $category->getTranslation('name') }}</span>
        </a> 
		
					 
		 			@if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
					@php
					$var_ids=\App\Utility\CategoryUtility::get_immediate_children_ids($category->id);
					@endphp
        <div class="sub-menu-dropdown color-scheme-dark">

            <div class="container">
                <p>
                <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                    <!-- option 1 col1 start -->  
					@foreach (\App\Models\Category::find($var_ids) as $key => $first_level_id)  
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_single_image wpb_content_element vc_align_left vc_custom_1614723513116">
 								 
                                </div>

                                <ul class="sub-menu mega-menu-list">
                                  
									<li class="">  
									 <a href="{{ route('products.category', $first_level_id->slug) }}" title="">
                                      {{ $first_level_id->getTranslation('name') }}
									  </a>
									    @php
										$var_ids2=\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id->id);
										@endphp
									  @foreach (\App\Models\Category::find($var_ids2) as $key => $second_level_id) 
                                        <ul class="sub-sub-menu"> 
                                            <li class="">
                                                <a href="{{ route('products.category', $second_level_id->slug) }}" title="">
                                                    <span class="nav-link-text">{{ $second_level_id->getTranslation('name') }}</span>
                                                </a>
                                            </li> 
                                        </ul>
										@endforeach

                                    </li>
									
                                </ul>

                            </div>
                        </div>
                    </div>
                      @endforeach
                  
                </div>
                </p>
                <style data-type="vc_shortcodes-custom-css">
                    .vc_custom_1614723513116 {
                        margin-bottom: 10px !important;
                    }

                    .vc_custom_1614723520541 {
                        margin-bottom: 10px !important;
                    }

                    .vc_custom_1614723661289 {
                        margin-bottom: 10px !important;
                    }

                    .vc_custom_1614985854482 {
                        margin-bottom: 10px !important;
                    }
                </style>
            </div>

        </div>
    </li>
	@endif
	    @endforeach
		
		 
</ul>
