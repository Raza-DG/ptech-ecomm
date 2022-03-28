<div class="aiz-category-menu bg-white rounded @if(Route::currentRouteName() == 'home') shadow-sm" @else shadow-lg" id="category-sidebar" @endif>
    <div class="menu-categories-container"> 
    <ul class="list-unstyled categories no-scrollbar py-2 mb-0 text-left"> 
       
	    @foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
		 @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
		<li id="menu-item-{{ $category->id }}" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-{{ $category->id }} item-level-0" data-id="{{ $category->id }}">
                    <a href="{{ route('products.category', $category->slug) }}" class="woodmart-nav-link"> 
                        <span class="nav-link-text">{{ $category->getTranslation('name') }}</span>
                    </a>
			@else		
            <li class="category-nav-element2" data-id="{{ $category->id }}">
                <a href="{{ route('products.category', $category->slug) }}" class="text-truncate text-reset py-2 px-3 d-block"> 
                    <span class="cat-name">{{ $category->getTranslation('name') }}</span>
                </a>
			@endif
					@if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)
					@php
					$var_ids=\App\Utility\CategoryUtility::get_immediate_children_ids($category->id);
					@endphp
					<ul style="display:none;">
				@foreach (\App\Models\Category::find($var_ids) as $key => $first_level_id)  
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7 item-level-0">
                <a href="{{ route('products.category', $first_level_id->slug) }}" class="woodmart-nav-link"> 
                    <span class="cat-name">{{ $first_level_id->getTranslation('name') }}</span>
                </a>
				
				  @php
					$var_ids2=\App\Utility\CategoryUtility::get_immediate_children_ids($first_level_id->id);
					@endphp 
					<ul style="display:none;">
				  @foreach (\App\Models\Category::find($var_ids2) as $key => $second_level_id) 
				  
				  <li class="category-nav-element1" data-id="{{ $second_level_id->id }}">
                <a href="{{ route('products.category', $second_level_id->slug) }}" class="text-truncate text-reset py-2 px-3 d-block"> 
                    <span class="cat-name">{{ $second_level_id->getTranslation('name') }}</span>
                </a>
				</li>
				   @endforeach
				  </ul>
				</li>
                     @endforeach
					 </ul>
                    
                @endif
            </li>
        @endforeach
    </ul>
	</div>
</div>
