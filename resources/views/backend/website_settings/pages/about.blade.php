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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">About Page</h1>
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
                    <li class="breadcrumb-item text-dark">About Page Edit</li>
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
                <h2 class="fw-600">{{ translate('About Page Settings') }}</h2>
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

                    {{-- Home Slider --}}
                    <div class="card mt-5 d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('About Slider') }}</h6>
                        </div>
                        <div class="card-body">
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mb-10">
                                {{ translate('We have limited banner height to maintain UI. We had to crop from both left & right side in view for different devices to make it responsive. Before designing banner keep these points in mind.') }}
                            </div>
                            <!--end::Notice-->
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Photos & Links') }}</label>
                                    <div class="home-slider-target">
                                        @if (get_setting('about_slider_images') != null)
                                            @foreach (json_decode(get_setting('about_slider_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="about_slider_images">
                                                                <input type="hidden" name="about_slider_images[]" class="selected-files" value="{{ json_decode(get_setting('about_slider_images', null, $lang), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="about_slider_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="about_slider_links[]" value="{{ json_decode(get_setting('about_slider_links', null, $lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_slider_texts">
                                                            <input type="text" class="form-control" placeholder="Text" name="about_slider_texts[]" value="{{ json_decode(get_setting('about_slider_texts', null, $lang), true)[$key] ?? "" }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="form-group">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                <i class="las la-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-light-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="about_slider_images">
                                                        <input type="hidden" name="about_slider_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="about_slider_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="about_slider_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_slider_texts">
                                                    <input type="text" class="form-control" placeholder="Text" name="about_slider_texts[]">
                                                </div>
                                            </div>
                                            <div class="col-md-auto">
                                                <div class="form-group">
                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>'
                                        data-target=".home-slider-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Section widget 1 --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('About Recognitions') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Reconitions Section') }}</label>
                                    <div class="home-reconitions-target">
                                        @if (get_setting('about_reconitions_images') != null)
                                            @foreach (json_decode(get_setting('about_reconitions_images',null,$lang), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="about_reconitions_images">
                                                                <input type="hidden" name="about_reconitions_images[]" class="selected-files" value="{{ json_decode(get_setting('about_reconitions_images',null,$lang), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="about_reconitions_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="about_reconitions_links[]" value="{{ json_decode(get_setting('about_reconitions_links'), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_reconitions_name">
                                                            <input type="text" class="form-control" placeholder="Name" name="about_reconitions_name[]" value="{{ json_decode(get_setting('about_reconitions_name',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                <i class="las la-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_reconitions_description">
                                                            <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]'
                                                            name="about_reconitions_description[]" placeholder="Description" data-min-height="150">
                                                                {{ json_decode(get_setting('about_reconitions_description',null,$lang), true)[$key] }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="about_reconitions_images">
                                                        <input type="hidden" name="about_reconitions_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="about_reconitions_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="about_reconitions_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_reconitions_name">
                                                    <input type="text" class="form-control" placeholder="Name" name="about_reconitions_name[]" >
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_reconitions_description">
                                                    <textarea class="aiz-text-editor" name="about_reconitions_description[]" placeholder="Description" data-min-height="150">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>'
                                        data-target=".home-reconitions-target" id="home-reconitions-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Section widget 2 --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('About Widget Discover') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_discover_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="about_discover_heading" value="{{ get_setting('about_discover_heading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_discover_subheading">
                                                <input type="text" class="form-control" placeholder="Sub Heading" name="about_discover_subheading" value="{{ get_setting('about_discover_subheading') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Banner & Links') }}</label>
                                    <div class="home-discover-target" id="home-discover-target">
                                        @if (get_setting('about_service_images') != null)
                                            @foreach (json_decode(get_setting('about_service_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_service_heading">
                                                            <input type="text" class="form-control" placeholder="Heading" name="about_service_heading[]" value="{{ json_decode(get_setting('about_service_heading',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_service_subheading">
                                                            <input type="text" class="form-control" placeholder="Sub Heading" name="about_service_subheading[]" value="{{ json_decode(get_setting('about_service_subheading',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_service_linktext">
                                                            <input type="text" class="form-control" placeholder="Link Text" name="about_service_linktext[]" value="{{ json_decode(get_setting('about_service_linktext',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="about_service_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="about_service_links[]" value="{{ json_decode(get_setting('about_service_links'), true)[$key] ?? "#" }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="about_service_menuid">
                                                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" name="about_service_menuid[]" data-live-search="true">
                                                            <option value="0">{{ translate('Menu Select') }}</option>
                                                            @foreach (\App\Models\Menu::where('parent_id',0)->get() as $menu)
                                                            <option value="{{ $menu->id }}" {{ json_decode(get_setting('about_service_menuid'), true)[$key] == $menu->id ? "selected" : "" }}>
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
                                                                <input type="hidden" name="about_service_images[]" class="selected-files" value="{{ json_decode(get_setting('about_service_images'), true)[$key] }}">
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
                                            @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm mt-5" data-toggle="add-more" data-target=".home-discover-target" onclick="addservice();">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Our Story --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Our Story') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_our_story">
                                                <input type="text" class="form-control" placeholder="Heading" name="about_our_story" value="{{ get_setting('about_our_story') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (162 x 164)</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="about_our_story_image">
                                                    <input type="hidden" name="about_our_story_image" class="selected-files" value="{{get_setting('about_our_story_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_our_story_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_our_story_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('about_our_story_description',null,$lang) ?? "" !!}
                                                    </textarea>
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


                    {{-- Our Mission --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Our Mission') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_our_mission">
                                                <input type="text" class="form-control" placeholder="Heading" name="about_our_mission" value="{{ get_setting('about_our_mission') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}(800 x 534)</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="about_our_mission_image">
                                                    <input type="hidden" name="about_our_mission_image" class="selected-files" value="{{get_setting('about_our_mission_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_our_mission_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_our_mission_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('about_our_mission_description',null,$lang) ?? "" !!}
                                                    </textarea>
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


                    {{-- Our Strength --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Our Strength') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_our_strength">
                                                <input type="text" class="form-control" placeholder="Heading" name="about_our_strength" value="{{ get_setting('about_our_strength') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5 d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (800 x 534)</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="about_our_strength_image">
                                                    <input type="hidden" name="about_our_strength_image" class="selected-files" value="{{get_setting('about_our_strength_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_our_strength_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_our_strength_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('about_our_strength_description',null,$lang) ?? "" !!}
                                                    </textarea>
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

                    {{-- QUALITY POLICY --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Quality Policy') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_quality_policy">
                                                <input type="text" class="form-control" placeholder="Heading" name="about_quality_policy" value="{{ get_setting('about_quality_policy') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}(800 x 534)</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="about_quality_policy_image">
                                                    <input type="hidden" name="about_quality_policy_image" class="selected-files" value="{{get_setting('about_quality_policy_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_quality_policy_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_quality_policy_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('about_quality_policy_description',null,$lang) ?? "" !!}
                                                    </textarea>
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


                     {{-- Home Info Content  --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Info Content') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_mainheading">
                                                <input type="text" class="form-control" placeholder="Main Heading" name="about_infocontent_mainheading" value="{{ get_setting('about_infocontent_mainheading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="about_infocontent_images">
                                                    <input type="hidden" name="about_infocontent_images" class="selected-files" value="{{get_setting('about_infocontent_images')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_decription">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_infocontent_decription" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('about_infocontent_decription',null,$lang) ?? "" !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home_infocontent">
                                        @if (get_setting('about_infocontent_subdecription') != null)
                                            @foreach (json_decode(get_setting('about_infocontent_subdecription',null,$lang), true) as $key => $value)
                                            <div class="row gutters-5 mt-5">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_subtitle">
                                                        <input type="text" class="form-control" placeholder="Title" name="about_infocontent_subtitle[]" value="{{ json_decode(get_setting('about_infocontent_subtitle',null,$lang),true)[$key] }}">
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
                                                            <label class="form-label">{{ translate('Description') }} </label>
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_infocontent_subdecription">
                                                            <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="about_infocontent_subdecription[]" placeholder="Description" data-min-height="150">
                                                                    {{ json_decode(get_setting('about_infocontent_subdecription',null,$lang), true)[$key] }}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button type="button" class="btn btn-secondary btn-sm mt-5" data-toggle="add-more" onclick="infocontent()" data-target=".home_infocontent">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Home Advantage  --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Advantage') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input type="hidden" name="types[][{{ $lang }}]" value="about_advantage_mainheading">
                                            <input type="text" class="form-control" placeholder="Main Heading" name="about_advantage_mainheading" value="{{ get_setting('about_advantage_mainheading',null,$lang) }}">
                                        </div>
                                    </div>
                                    <div class="home-advantage-target">
                                        @if (get_setting('about_advantage_images') != null)
                                            @foreach (json_decode(get_setting('about_advantage_images'), true) as $key => $value)
                                            <div class="row gutters-5 mt-5">
                                                <div class="col-md-4 mb-5">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="about_advantage_text">
                                                        <input type="text" class="form-control" placeholder="Text" name="about_advantage_text[]" value="{{json_decode(get_setting('about_advantage_text',null,$lang), true)[$key] ?? ""}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-5">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="about_advantage_subtext">
                                                        <input type="text" class="form-control" placeholder="Sub Text" name="about_advantage_subtext[]" value="{{json_decode(get_setting('about_advantage_subtext',null,$lang), true)[$key] ?? ""}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-5 d-none">
                                                    <div class="form-group">
                                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                            </div>
                                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                            <input type="hidden" name="types[]" value="about_advantage_images">
                                                            <input type="hidden" name="about_advantage_images[]" value="{{uploaded_asset($value)}}" class="selected-files">
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
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-4 mb-5">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_advantage_text">
                                                    <input type="text" class="form-control" placeholder="Text" name="about_advantage_text[]" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-5">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="about_advantage_subtext">
                                                    <input type="text" class="form-control" placeholder="Sub Text" name="about_advantage_subtext[]">
                                                </div>
                                            </div>
                                            <div class="col-md-5 d-none">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="about_advantage_images">
                                                        <input type="hidden" name="about_advantage_images[]" class="selected-files">
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
                                        </div>'
                                        data-target=".home-advantage-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    {{-- Home Banner 1 --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Banner 1 (Max 3)') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Banner & Links') }}</label>
                                    <div class="home-banner1-target">
                                        <input type="hidden" name="types[]" value="home_banner1_images">
                                        <input type="hidden" name="types[]" value="home_banner1_links">
                                        @if (get_setting('home_banner1_images') != null)
                                            @foreach (json_decode(get_setting('home_banner1_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_banner1_images">
                                                                <input type="hidden" name="home_banner1_images[]" class="selected-files" value="{{ json_decode(get_setting('home_banner1_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_banner1_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_banner1_links[]" value="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="form-group">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                <i class="las la-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="home_banner1_images">
                                                        <input type="hidden" name="home_banner1_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_banner1_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_banner1_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md-auto">
                                                <div class="form-group">
                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>'
                                        data-target=".home-banner1-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Home Banner 2 --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Banner 2 (Max 3)') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Banner & Links') }}</label>
                                    <div class="home-banner2-target">
                                        <input type="hidden" name="types[]" value="home_banner2_images">
                                        <input type="hidden" name="types[]" value="home_banner2_links">
                                        @if (get_setting('home_banner2_images') != null)
                                            @foreach (json_decode(get_setting('home_banner2_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_banner2_images">
                                                                <input type="hidden" name="home_banner2_images[]" class="selected-files" value="{{ json_decode(get_setting('home_banner2_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_banner2_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_banner2_links[]" value="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="form-group">
                                                            <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                <i class="las la-times"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='
                                        <div class="row gutters-5 mt-5">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="home_banner2_images">
                                                        <input type="hidden" name="home_banner2_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_banner2_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_banner2_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md-auto">
                                                <div class="form-group">
                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                        <i class="las la-times"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>'
                                        data-target=".home-banner2-target">
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
