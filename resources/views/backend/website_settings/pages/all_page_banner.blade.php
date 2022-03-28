@extends('backend.layouts.app')

@section('content')

<!--begin::Content-->
<div class="d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Banners</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Website Setup</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Edit Banner</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <ul class="nav nav-tabs nav-fill border-light mb-5">
                @foreach (\App\Models\Language::all() as $key => $language)
                    <li class="nav-item">
                        <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                            href="{{ route('custom-pages.edit', ['id' => $page->slug, 'lang' => $language->code,'page' => 'home']) }}">
                            <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}" height="11"
                                class="mr-1">
                            <span>{{ $language->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="col-xl-10 mx-auto">
                <h2 class="fw-600">{{ translate('Banner') }}</h2>
                <div class="card card-flush mt-10 mb-10">

                    {{-- Welcome to pTech --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Banner Update') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md mb-5">
                                            <label class="d-flex align-items-center fs-5 fw-bold">
                                                <span >{{ translate('Default Banner') }}</span>
                                            </label>
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (2400 x 402)</div>

                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="default_banner">
                                                    <input type="hidden" name="default_banner" class="selected-files" value="{{get_setting('default_banner') ?? ""}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md mb-5">
                                            <label class="d-flex align-items-center fs-5 fw-bold">
                                                <span >{{ translate('Shop Banner') }}</span>
                                            </label>
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (2400 x 402)</div>

                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="shop_banner">
                                                    <input type="hidden" name="shop_banner" class="selected-files" value="{{get_setting('shop_banner') ?? ""}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md mb-5">
                                            <label class="d-flex align-items-center fs-5 fw-bold">
                                                <span >{{ translate('My Account Banner') }}</span>
                                            </label>
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (2400 x 402)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="my_account_banner">
                                                    <input type="hidden" name="my_account_banner" class="selected-files" value="{{get_setting('my_account_banner') ?? ""}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md mb-5">
                                            <label class="d-flex align-items-center fs-5 fw-bold">
                                                <span >{{ translate('Checkout Banner') }}</span>
                                            </label>
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (2400 x 402)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="checkout_banner">
                                                    <input type="hidden" name="checkout_banner" class="selected-files" value="{{get_setting('checkout_banner') ?? ""}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
		$(document).ready(function(){
			$('.js-data-example-ajax').select2();

			$("#homecategories").on("click",function(){
				$('.js-data-example-ajax').select2();
			});
		    AIZ.plugins.bootstrapSelect('refresh');

            $("#home-reconitions-target").on("click",function () {
                AIZ.plugins.textEditor();
            })

		});
    </script>

    <script>
        function addservice() {
            $('#home-discover-target').append($('#service_var').html());
            select2();
        }
        function infocontent() {
            $('.home_infocontent').append($('#infocontent').html());
            AIZ.plugins.textEditor();
        }
    </script>

    <script id="service_var" type="text/template">
        <div class="row gutters-5 mt-5">
            <div class="col-md-4 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_service_heading">
                    <input type="text" class="form-control" placeholder="Heading" name="home_service_heading[]">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_service_subheading">
                    <input type="text" class="form-control" placeholder="Sub Heading" name="home_service_subheading[]">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_service_linktext">
                    <input type="text" class="form-control" placeholder="Link Text" name="home_service_linktext[]">
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_service_links">
                    <input type="text" class="form-control" placeholder="http://" name="home_service_links[]" value="#">
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_service_menuid">
                    <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" name="home_service_menuid[]" data-live-search="true">
                    <option>{{ translate('Menu Select') }}</option>
                    @foreach (\App\Models\Menu::where('parent_id',0)->get() as $menu)
                        <option value="{{ $menu->id }}">
                            {{ $menu->getTranslation("name") }}
                        </option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-md-5 mb-5">
                <div class="form-group">
                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                        </div>
                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                        <input type="hidden" name="types[]" value="home_service_images">
                        <input type="hidden" name="home_service_images[]" class="selected-files">
                    </div>
                    <div class="file-preview box sm">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                        <i class="las la-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </script>


    <script id="infocontent" type="text/template">
        <div class="row gutters-5 mt-5">
            <div class="col-md-11">
                <label class="form-label">{{ translate('Title') }} </label>
                <div class="form-group">
                    <input type="hidden" name="types[]" value="home_infocontent_subtitle">
                    <input type="text" class="form-control" placeholder="" name="home_infocontent_subtitle[]">
                </div>
            </div>
            <div class="col-md-1">
                <div class="form-group">
                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                        <i class="las la-times"></i>
                    </button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex flex-column">
                    <div class="mb-5 fv-row">
                        <label class="form-label">{{ translate('Description') }}</label>
                        <input type="hidden" name="types[]" value="home_infocontent_subdecription">
                        <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_infocontent_subdecription[]" placeholder="Description" data-min-height="150">
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </script>

@endsection
