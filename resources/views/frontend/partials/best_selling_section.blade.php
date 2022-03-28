@if (get_setting('best_selling') == 1)

 <style>
 	.aiz-nav-tabs a{display: inline-flex;
    align-items: center;
    flex-direction: column;
    padding-top: 10px !important;
    padding-right: 15px !important;
    padding-bottom: 10px !important;
    padding-left: 15px !important;
    color: inherit !important;
    vertical-align: bottom;
    text-transform: uppercase;
   
    font-size: 16px !important;
    line-height: 1.4;
    /* opacity: .7; */
    cursor: pointer;
    transition: opacity .25s ease,color .25s ease;}
	.aiz-nav-tabs { 
    display: block;
	padding-left: unset;
	    text-align: center;
		font-family: "Poppins", Arial, Helvetica, sans-serif;
		 
}

.text-left {
   /* text-align: center !important;*/
}
	.product-grid-item { 
    display: inline-block;
    text-align: center !important;
	
}
.border-bottom {
     border-bottom: 0px solid #dee2e6!important; 
}
.aiz-nav-tabs a.active {
    border-bottom: 2px solid #000000;
}
 
@media only screen and (min-width: 600px) {    
   .product-grid-item{ flex: 0 0 19% !important;
    max-width: 19% !important;
	    padding-bottom: 45px;
 
} 
}
@media only screen and (max-width: 600px) {    
.woodmart-hover-quick .add-to-cart-loop {
    width: 100% !important;
    height: 40px;
}
.product-grid-item {
padding: 5px;
    display: table-cell;
    text-align: center !important;
    float: left;
    min-height: 245px;}
	
	.vc_custom_1615247640459 {
    
     padding-bottom: unset !important; 
    
}
.p-4 {
    padding: 0px!important;
}
}
	</style>
					   <div class="nav border-bottom aiz-nav-tabs">
					   @php $top10_brands = json_decode(get_setting('top10_categories')); @endphp
                            @foreach ($top10_brands as $key => $value)
                                @php $category = \App\Models\Category::find($value); @endphp
                                @if ($category != null)
								@if($key==0) 
								
                            <a href="#tab_default_{{ $category->id }}" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset active show"><img class="" src="{{uploaded_asset($category->icon)}}" width="55" height="49" alt="{{ $category->getTranslation('name') }}" title="{{ $category->getTranslation('name') }}" />{{ $category->getTranslation('name') }}</a>
                           @else
                                <a href="#tab_default_{{ $category->id }}" data-toggle="tab" class="p-3 fs-16 fw-600 text-reset"><img class="" src="{{uploaded_asset($category->icon)}}" width="55" height="49" alt="{{ $category->getTranslation('name') }}" title="{{ $category->getTranslation('name') }}" />{{ $category->getTranslation('name') }}</a>
                         
                              @endif 
					 			@endif
                            @endforeach
                        </div>
						
						
						
						 <div class="tab-content pt-0">
						 @foreach ($top10_brands as $key => $value)
                                @php $category = \App\Models\Category::find($value); @endphp
                                @if ($category != null)
                            <div class="tab-pane fade @if($key==0) show active @endif" id="tab_default_{{ $category->id }}">
                                <div class="p-4">
                                    <div class="mw-100 overflow-hidden   aiz-editor-data"  >
                                        @php
    $best_selling_products = filter_products(\App\Models\Product::where('published', 1)->where('category_id', $category->id )->orderBy('num_of_sale', 'desc'))->limit(10)->get();
  
@endphp
	@foreach ($best_selling_products as $key => $product)
		@include('frontend.partials.product_box_1',['product' => $product])
    @endforeach
                                    </div>
                                </div>
                            </div>
							 @endif
    						   @endforeach
							 

@endif
