@extends('frontend.layouts.app')

@if (isset($category_id))
    @php
        $meta_title = \App\Models\Category::find($category_id)->meta_title;
        $meta_description = \App\Models\Category::find($category_id)->meta_description;
    @endphp
@elseif (isset($brand_id))
    @php
        $meta_title = \App\Models\Brand::find($brand_id)->meta_title;
        $meta_description = \App\Models\Brand::find($brand_id)->meta_description;
    @endphp
@else
    @php
        $meta_title         = get_setting('meta_title');
        $meta_description   = get_setting('meta_description');
    @endphp
@endif

@section('meta_title'){{ $meta_title }}@stop
@section('meta_description'){{ $meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $meta_title }}">
    <meta itemprop="description" content="{{ $meta_description }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $meta_title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
@endsection

@section('content')
    <div class="page-title page-title-default title-size-default title-design-centered color-scheme-dark title-shop shop-banner" style="background-image: url({{uploaded_asset(get_setting('shop_banner')) ?? uploaded_asset(get_setting('default_banner')) ?? static_asset('assets-ecom/images/banner/category-banner.jpg')}});">
        <div class="container">
            <div class="nav-shop">
                <div class="shop-title-wrapper">
                    <h1 class="entry-title text-white">Shop</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN CONTENT AREA -->
    <div class="container">
        <div class="row content-layout-wrapper align-items-start">
            <aside class="sidebar-container col-lg-3 col-md-3 col-12 order-last order-md-first sidebar-left area-sidebar-shop" role="complementary">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget wd-cross-button wd-with-text-left">close</a>
                </div>
                <div class="sidebar-inner woodmart-sidebar-scroll">
                    <div class="widget-area woodmart-sidebar-content">
                        <div id="woocommerce_product_categories-2" class="woodmart-widget widget sidebar-widget woocommerce widget_product_categories ">
                            <h5 class="widget-title">Product categories</h5>

                            <ul class="product-categories">

                                @if (!isset($category_id))
                                    @foreach (\App\Models\Category::where('level', 0)->get() as $category)
									{{$category_id}}
                                <li class="cat-item cat-item-25 cat-parent"><a href="{{ route('products.category', $category->slug) }}"> {{ $category->getTranslation('name') }}</a> <span class="count">{{ count_products_in_category_id($category->id)}}</span>



				 @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category->id))>0)

					 <ul class='children'>
							 @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $id)
							<li class="cat-item cat-item-46">
								<a href="{{ route('products.category', \App\Models\Category::find($id)->slug) }}">{{ \App\Models\Category::find($id)->getTranslation('name') }}</a>
								<span class="count">{{ count_products_in_category_id($id)}}</span>


			 		 @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($id))>0)

					 <ul class='children'>
							 @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($id) as $key => $id2)
							<li class="cat-item cat-item-46">
								<a href="{{ route('products.category', \App\Models\Category::find($id2)->slug) }}">{{ \App\Models\Category::find($id2)->getTranslation('name') }}</a>
								<span class="count">{{ count_products_in_category_id($id2)}}</span>
							</li>
							@endforeach
                      </ul>


							<div class="woodmart-cats-toggle"></div>
										</li>


							@endif



							</li>
							@endforeach
                      </ul>


							<div class="woodmart-cats-toggle"></div>
										</li>


							@endif

								</li>
                                    @endforeach
                                @else




                                        <li class="cat-item cat-item-20 cat-parent">
                                            <a href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}">{{ \App\Models\Category::find($category_id)->getTranslation('name') }}</a> <span class="count">{{ count_products_in_category_id($category_id)}}</span>


					  @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($category_id))>0)

					   <ul class='children'>
							 @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category_id) as $key => $id)
							<li class="cat-item cat-item-46">
								<a href="{{ route('products.category', \App\Models\Category::find($id)->slug) }}">{{ \App\Models\Category::find($id)->getTranslation('name') }}</a>
								<span class="count">{{ count_products_in_category_id($id)}}</span>

					  @if(count(\App\Utility\CategoryUtility::get_immediate_children_ids($id))>0)

					 <ul class='children'>
							 @foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($id) as $key => $id2)
							<li class="cat-item cat-item-46">
								<a href="{{ route('products.category', \App\Models\Category::find($id2)->slug) }}">{{ \App\Models\Category::find($id2)->getTranslation('name') }}</a>
								<span class="count">{{ count_products_in_category_id($id2)}}</span>
							</li>
							@endforeach
                      </ul>


							<div class="woodmart-cats-toggle"></div>
										</li>


							@endif



							</li>
							@endforeach
                      </ul>


							<div class="woodmart-cats-toggle"></div>
										</li>


							@endif

								</li>

											</li>
										@endif




                        </div>
                        <div id="woocommerce_price_filter-3" class="woodmart-widget widget sidebar-widget woocommerce widget_price_filter">

                        </div>
                    </div>
                    <!-- .widget-area -->
                </div>
                <!-- .sidebar-inner -->
            </aside>
            <!-- .sidebar-container -->



            <div data-zm-merchant="f91bbf48-799b-4c1c-b9e1-bb935d5ea204" data-env="production" data-require-checkout="false" data-zm-region="au" data-zm-price-max="1500" data-zm-price-min="1" data-zm-display-inline="false">
            </div>
            <div class="site-content shop-content-area col-lg-9 col-12 col-md-9 description-area-before content-with-products" role="main">
                <div class="woocommerce-notices-wrapper">
                </div>

                <div class="shop-loop-head">
                    <div class="woodmart-woo-breadcrumbs">

                        <nav class="woocommerce-breadcrumb">
                            <a href="{{ route('home') }}" class="breadcrumb-link breadcrumb-link-last">{{ translate('Home')}}</a>
                            @if(!isset($category_id))
                <a href="{{ route('search') }}" class="breadcrumb-link breadcrumb-link-last">{{ translate('All Categories')}}</a>
                            @else
                <a href="{{ route('search') }}" class="breadcrumb-link breadcrumb-link-last">{{ translate('All Categories')}}</a>
                            @endif
                            @if(isset($category_id))
                            <span href="{{ route('products.category', \App\Models\Category::find($category_id)->slug) }}" class="breadcrumb-last" > {{ \App\Models\Category::find($category_id)->getTranslation('name') }}</span>
                            @endif
                        </nav>
                        <p class="woocommerce-result-count">
                            Showing 1&ndash;15 of 184 results</p>
                    </div>
                    <div class="woodmart-shop-tools">
                        <div class="woodmart-show-sidebar-btn">
                                    <span class="woodmart-side-bar-icon">
                                    </span>
                            <span>Show sidebar</span>
                        </div>
						<form id="search-form" method="get">
                        <div class="woodmart-products-per-page">

                            <span class="per-page-title">Show</span>

                            <a rel="nofollow" href="#" class="per-page-variation">
                                <span>9</span>
                            </a>
                            <span class="per-page-border">
                                    </span>
                            <a rel="nofollow" href="#" class="per-page-variation">
                                <span>24</span>
                            </a>
                            <span class="per-page-border">
                                    </span>
                            <a rel="nofollow" href="#" class="per-page-variation">
                                <span>36</span>
                            </a>
                            <span class="per-page-border">
                                    </span>
                            <a rel="nofollow" href="#" class="per-page-variation">
                                <span>All</span>
                            </a>
                            <span class="per-page-border">
                                    </span>
                        </div>
                        <div class="woocommerce-ordering">
                            <select name="sort_by" onchange="filter()" class="orderby" aria-label="Shop order">
                                <option value="newest" @isset($sort_by) @if ($sort_by == 'newest') selected @endif @endisset>{{ translate('Newest')}}</option>
                                <option value="oldest" @isset($sort_by) @if ($sort_by == 'oldest') selected @endif @endisset>{{ translate('Oldest')}}</option>
                                <option value="price-asc" @isset($sort_by) @if ($sort_by == 'price-asc') selected @endif @endisset>{{ translate('Price low to high')}}</option>
                                <option value="price-desc" @isset($sort_by) @if ($sort_by == 'price-desc') selected @endif @endisset>{{ translate('Price high to low')}}</option>
                            </select>
                        </div>
                    </div>
					</form>
                </div>

                <div class="woodmart-active-filters">
                </div>

                <div class="woodmart-shop-loader">
                </div>

                <div class="products elements-grid align-items-start woodmart-products-holder  woodmart-spacing-30 pagination-pagination row grid-columns-4" data-source="main_loop" data-min_price="" data-max_price="">
                @foreach ($products as $key => $product)
                    @include('frontend.partials.product_listings_shop',['product' => $product])
                @endforeach
				@if(count($products)==0)

				<h5 class="widget-title" style="text-align: center !important;
    width: 100%;
    font-size: 25px;
    padding: 65px;">No Product Found</h5>
				@endif
                </div>
                <div class="products-footer">
                    <nav class="woocommerce-pagination">
                        {{ $products->appends(request()->input())->links() }}

                    </nav>
                </div>
            </div>
        </div>
        <!-- .main-page-wrapper -->
    </div> <!-- end row -->
@endsection

@section('script')
    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
    </script>

@endsection
