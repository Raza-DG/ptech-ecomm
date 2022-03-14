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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">ACCREDIATIONS Page</h1>
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
                    <li class="breadcrumb-item text-dark">ACCREDIATIONS Page Edit</li>
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
            <div class="col-xl-10 mx-auto">
                <h2 class="fw-600">{{ translate('ACCREDIATIONS & APPROVALS Page Settings') }}</h2>
                <ul class="nav nav-tabs nav-fill border-light mb-5">
                    @foreach (\App\Models\Language::all() as $key => $language)
                        <li class="nav-item">
                            <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3" href="{{ route('custom-pages.edit', ['id' => $page->slug, 'lang' => $language->code]) }}">
                                <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}" height="11"
                                    class="mr-1">
                                <span>{{ $language->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="card card-flush mt-10 mb-10">

                    {{-- Our Story --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('ACCREDIATIONS') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="accrediation_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="accrediation_heading" value="{{ get_setting('accrediation_heading') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="accrediation_heading2">
                                                <input type="text" class="form-control" placeholder="Heading" name="accrediation_heading2" value="{{ get_setting('accrediation_heading2') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    {{-- CERTIFICATIONs --}}
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Certification') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Certifications') }}</label>
                                    <div class="accrediation-target">
                                        <input type="hidden" name="types[]" value="accrediation_images">
                                        <input type="hidden" name="types[]" value="accrediation_links">
                                        @if (get_setting('accrediation_images') != null)
                                            @foreach (json_decode(get_setting('accrediation_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (572x 320)</div>
                                                                </div>
                                                                <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="accrediation_images">
                                                                <input type="hidden" name="accrediation_images[]" class="selected-files" value="{{ json_decode(get_setting('accrediation_images'), true)[$key] ?? " " }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="accrediation_images2">
                                                                <input type="hidden" name="accrediation_images2[]" class="selected-files" value="{{ json_decode(get_setting('accrediation_images2'), true)[$key] ?? " " }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="accrediation_title">
                                                            <input type="text" class="form-control" placeholder="Title One" name="accrediation_title[]" value="{{ json_decode(get_setting('accrediation_title'), true)[$key] ?? " " }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                <i class="las la-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md mt-2">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="accrediation_title2">
                                                            <input type="text" class="form-control" placeholder="Title Two" name="accrediation_title2[]" value="{{ json_decode(get_setting('accrediation_title2'), true)[$key] ?? " " }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md mt-2 d-none">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="accrediation_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="accrediation_links[]" value="{{ json_decode(get_setting('accrediation_links'), true)[$key] ?? "" }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (572x 320)</div>
                                                        </div>
                                                        <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="accrediation_images">
                                                        <input type="hidden" name="accrediation_images[]" class="selected-files" >
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="accrediation_images2">
                                                        <input type="hidden" name="accrediation_images2[]" class="selected-files" >
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="accrediation_title">
                                                    <input type="text" class="form-control" placeholder="Title One" name="accrediation_title[]" >
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md mt-2">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="accrediation_title2">
                                                    <input type="text" class="form-control" placeholder="Title Two" name="accrediation_title2[]" >
                                                </div>
                                            </div>
                                            <div class="col-md mt-2 d-none">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="accrediation_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="accrediation_links[]" >
                                                </div>
                                            </div>

                                        </div>'
                                        data-target=".accrediation-target">
                                        {{ translate('Add New') }}
                                    </button>
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
                    <input type="hidden" name="types[][{{ $lang }}]" value="about_service_heading">
                    <input type="text" class="form-control" placeholder="Heading" name="about_service_heading[]">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[][{{ $lang }}]" value="about_service_subheading">
                    <input type="text" class="form-control" placeholder="Sub Heading" name="about_service_subheading[]">
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[][{{ $lang }}]" value="about_service_linktext">
                    <input type="text" class="form-control" placeholder="Link Text" name="about_service_linktext[]">
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="about_service_links">
                    <input type="text" class="form-control" placeholder="http://" name="about_service_links[]" value="#">
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <div class="form-group">
                    <input type="hidden" name="types[]" value="about_service_menuid">
                    <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" name="about_service_menuid[]" data-live-search="true">
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
                        <input type="hidden" name="types[]" value="about_service_images">
                        <input type="hidden" name="about_service_images[]" class="selected-files">
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
                    <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_subtitle">
                    <input type="text" class="form-control" placeholder="" name="about_infocontent_subtitle[]">
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
                        <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_subdecription">
                        <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_infocontent_subdecription[]" placeholder="Description" data-min-height="150">
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
    </script>

@endsection
