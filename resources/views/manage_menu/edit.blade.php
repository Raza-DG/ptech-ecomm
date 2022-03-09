<link rel="stylesheet" href="{{ static_asset('assets/addon/menus/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ static_asset('assets/addon/menus/css1/style.css') }}">

<style>
form input[type="text"], form input[type="email"], form input[type="password"], form select, form textarea {
    border: 1px solid #ddd;
    padding: 5px 15px;
}
</style>

@php

function jt_get_font_icons()
{
    return [
        'icon-sign-top' => 'e933',
        'icon-pointer-up' => 'e932',
        'icon-arrow-left' => 'e900',
        'icon-arrow-right' => 'e901',
        'icon-arrow-top' => 'e902',
        'icon-bed' => 'e903',
        'icon-close' => 'e904',
        'icon-calendar' => 'e905',
        'icon-camera' => 'e906',
        'icon-car-shape' => 'e907',
        'icon-check' => 'e908',
        'icon-clock' => 'e909',
        'icon-coat' => 'e90a',
        'icon-comment' => 'e90b',
        'icon-cross' => 'e90c',
        'icon-cutlery' => 'e90d',
        'icon-facebook' => 'e90e',
        'icon-guests' => 'e90f',
        'icon-h' => 'e910',
        'icon-home' => 'e911',
        'icon-home-shape' => 'e912',
        'icon-important' => 'e913',
        'icon-info' => 'e914',
        'icon-instagram' => 'e915',
        'icon-letter' => 'e916',
        'icon-letter-shape' => 'e917',
        'icon-location' => 'e918',
        'icon-location-zone' => 'e919',
        'icon-lock' => 'e91a',
        'icon-map' => 'e91b',
        'icon-massage' => 'e91c',
        'icon-menu' => 'e91d',
        'icon-phone' => 'e91e',
        'icon-phone-tone' => 'e91f',
        'icon-plane' => 'e920',
        'icon-plane-shape' => 'e921',
        'icon-pointer-down' => 'e922',
        'icon-pointer-left' => 'e923',
        'icon-pointer-right' => 'e924',
        'icon-present' => 'e925',
        'icon-rrss' => 'e926',
        'icon-sign-down' => 'e927',
        'icon-sign-left' => 'e928',
        'icon-sign-right' => 'e929',
        'icon-tag' => 'e92a',
        'icon-taxi-shape' => 'e92b',
        'icon-transfer' => 'e92c',
        'icon-twitter' => 'e92d',
        'icon-user' => 'e92e',
        'icon-user-shape' => 'e92f',
        'icon-youtube' => 'e930',
        'icon-zoom' => 'e931',
    ];
}

@endphp

<style>
    .icomoon {
        font-family: 'icomoon' !important;
    }

</style>
<link rel="stylesheet" type='text/css' href="{{ static_asset('assets/frontend/static/fonts/icomoon/style.css') }}">

<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="card">
            <div class="card-body p-0">
               	<ul class="nav nav-tabs nav-fill border-light">
					@if(empty($lang))
					    @php $lang='en'; @endphp
                    @endif
                    @foreach (\App\Models\Language::all() as $key => $language)
                    <li class="nav-item">
                        <a href="javascript:;" data-lang-code="{{$language->code}}" data-id="{{$menu->id}}" class="change nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"  >
                            <img src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" height="11" class="mr-1">
                            <span>{{$language->name}}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <form class="p-4" action="{{ route('menu.update') }}" method="POST" enctype="multipart/form-data">
                	@csrf
                    <input type="hidden" name="lang" value="@if(!empty($lang)){{ $lang }}@else {{'en'}}@endif">
					<input type="hidden" name="id" value="{{ $menu->id }}"  required>
					<input type="hidden" name="main_menu_id" value="{{ $menu->menu_id }}"  required>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Name')}} <i class="las la-language text-danger" title="{{translate('Translatable')}}"></i></label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $menu->getTranslation('name', $lang) }}" class="form-control" id="name" placeholder="{{translate('Name')}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Main Heading')}} <i class="las la-language text-danger" title="{{translate('Translatable')}}"></i></label>
                        <div class="col-md-9">
                            <input type="text" name="mainheading" value="{{ $menu->mainheading }}" class="form-control" id="name" placeholder="{{translate('Main Heading')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Sub Heading')}} <i class="las la-language text-danger" title="{{translate('Translatable')}}"></i></label>
                        <div class="col-md-9">
                            <input type="text" name="subheading" value="{{ $menu->subheading }}" class="form-control" id="name" placeholder="{{translate('Sub Heading')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Link With')}}</label>
                        <div class="col-md-9">
                            <select class="form-select mb-2 icomoon" data-control="select2" data-hide-search="false" data-placeholder="Select an option" name="icon">
                                <option value="">Icon</option>
                                @foreach (jt_get_font_icons() as $icon_key => $icon)
                                    @php
                                        $ico = '&#x' . $icon . ';';
                                    @endphp
                                    <option value="{{ $icon_key }}" {{$icon_key == $menu->icon ? "selected" : ""}}>
                                        {{ mb_convert_encoding($ico, 'UTF-8', 'HTML-ENTITIES') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Image')}} <i class="las la-language text-danger" title="{{translate('Translatable')}}"></i></label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse') }}</div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="image" value="{{ $menu->getTranslation('image', $lang) }}" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Link With')}}</label>
                        <div class="col-md-9">
                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" id="type" name="type" required>
                                <option>{{translate('Menu Type Select')}}</option>
                                <option value="category" @if ($menu->type == 'category') selected @endif>{{translate('Categories')}}</option>
                                <option value="brand" @if ($menu->type == 'brand') selected @endif>{{translate('Brands')}}</option>
                                <option value="room" @if ($menu->type == 'room') selected @endif>{{translate('Room')}}</option>
                                <option value="custom" @if ($menu->type == 'custom') selected @endif>{{translate('Custom')}}</option>
                            </select>
                        </div>
                    </div>

					<div class="form-group row" id="category_row" @if ($menu->type != 'category') style="display:none;" @endif>
                        <label class="col-md-3 col-form-label">{{translate('Select Category')}}</label>
                        <div class="col-md-9">
                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" id="category_id" name="category_id" data-live-search="true" data-selected="{{ $menu->category_id }}">
                                <option value="">{{ translate('Select Category') }}</option>
								@foreach ($categories as $acategory)
                                    <option value="{{ $acategory->id }}">{{ $acategory->getTranslation('name',$lang) }}</option>
                                    @foreach ($acategory->childrenCategories as $childCategory)
                                        @include('manage_menu.child_category', ['child_category' => $childCategory , 'lang' => $lang])
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

					<div class="form-group row" id="brand_row" @if ($menu->type != 'brand') style="display:none;" @endif>
                        <label class="col-md-3 col-form-label">{{translate('Select Brand')}}</label>
                        <div class="col-md-9">
                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" id="brand_id" name="brand_id" data-live-search="true" data-selected="{{ $menu->brand_id }}">
                                <option value="">{{ translate('Select Brand') }}</option>
								@foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->getTranslation('name',$lang) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row" id="room_row" @if ($menu->type != 'room') style="display:none;" @endif>
                        <label class="col-md-3 col-form-label">{{translate('Select Room')}}</label>
                        <div class="col-md-9">
                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" id="room_id" name="room_id" data-live-search="true" data-selected="{{ $menu->room_id }}">
                                <option value="">{{ translate('Select Room') }}</option>
								@foreach ($rooms as $room)
                                    <option value="{{ $room->id }}" {{$room->id == $menu->room_id ? "selected" : "" }}>{{ $room->getTranslation('name',$lang) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

					<div class="form-group row" id="custom_row" @if ($menu->type != 'custom') style="display:none;" @endif>
                        <label class="col-md-3 col-form-label">{{translate('URL')}}</label>
                        <div class="col-md-9">
                          <input type="text" name="url" value="{{ $menu->url }}" class="form-control" id="name" placeholder="{{translate('URL')}}"  >
                        </div>
                    </div>


					@if ($menu->parent_id == 0)
                    <div class="fv-row mt-5 mb-2">
                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5">
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">{{translate('Mega Menu')}}</span>
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                <input class="form-check-input" type="checkbox" name="menu_type" value="1" @if($menu->menu_type == '1') checked @endif>
                            </span>
                        </label>
                    </div>
					@endif
                    <div class="fv-row mt-5 mb-2">
                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5">
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">{{translate('Open in a new tab')}}</span>
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                <input class="form-check-input" type="checkbox" name="target" value="_blank" @if($menu->target == '_blank') checked @endif>
                            </span>
                        </label>
                    </div>
                    <div class="fv-row mt-5 mb-2">
                        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5">
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">{{translate('Hide')}}</span>
                            <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                <input class="form-check-input" type="checkbox" name="status" value="{{$menu->status ?? 0}}" @if($menu->status == '1') checked @endif>
                            </span>
                        </label>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">{{translate('Update')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')

    <script src="{{ static_asset('assets/addon/menus/jquery-ui.js') }}" ></script>
    <script src="{{ static_asset('assets/addon/menus/js1/jquery.mjs.nestedSortable.js') }}"></script>

@endsection


<script>
$(document).ready(function (){
	AIZ.plugins.bootstrapSelect('refresh');
    var delay = 100;
    setTimeout(function () {
        AIZ.uploader.previewGenerate();
    }, delay);

//	menu_modal_edit
	$('.change').click(function(event) {
	//alert();
	 var menu_id=$(this).data('id');
	 var lang_code=$(this).data('lang-code');
	 edit_menu_modal2(menu_id,lang_code);
	  });

	function edit_menu_modal2(id,lang_code){
	csrf=$('[name=_token]').val();
	//alert();
            $.post( '{{ route("menu.changge.lang")  }}' ,{_token:csrf, id:id ,lang:lang_code}, function(data){
                $('#menu_modal_edit .modal-content').html(data);
                $('#menu_modal_edit').modal('show', {backdrop: 'static'});
            });
        }

});


$('#type').on('change', function() {
 //alert();
        if($('#type').val()=='category'){
			$('#category_row').css('display', 'flex');
			$('#brand_row').css('display', 'none');
			$('#custom_row').css('display', 'none');
            $("#room_row").css('display','none');
		}else if($('#type').val()=='brand'){
			$('#category_row').css('display', 'none');
			$('#brand_row').css('display', 'flex');
			$('#custom_row').css('display', 'none');
            $("#room_row").css('display','none');

		}else if($('#type').val()=='custom'){
			$('#category_row').css('display', 'none');
			$('#brand_row').css('display', 'none');
			$('#custom_row').css('display', 'flex');
            $("#room_row").css('display','none');
		}else if($('#type').val()=='room'){
			$('#category_row').css('display', 'none');
			$('#brand_row').css('display', 'none');
			$('#custom_row').css('display', 'none');
            $("#room_row").css('display','flex');
		}
            AIZ.plugins.bootstrapSelect('refresh');
    });

</script>

