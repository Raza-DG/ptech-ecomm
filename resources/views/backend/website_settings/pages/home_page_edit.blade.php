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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Home Page</h1>
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
                    <li class="breadcrumb-item text-dark">Home Page Edit</li>
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
                <h2 class="fw-600">{{ translate('Home Page Settings') }}</h2>
                <div class="card card-flush mt-10 mb-10">

                    {{-- Welcome to pTech --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Welcome to Ptech') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_one_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="home_one_heading" value="{{ get_setting('home_one_heading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_one_button">
                                                <input type="text" class="form-control" placeholder="Heading2" name="home_one_button" value="{{ get_setting('home_one_button') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-5 d-none">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_one_button_link">
                                                <input type="text" class="form-control" placeholder="Button Link" name="home_one_button_link" value="{{ get_setting('home_one_button_link') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5 d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (162 x 164)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_one_image">
                                                    <input type="hidden" name="home_one_image" class="selected-files" value="{{get_setting('home_one_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (300 x 168)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_one_image2">
                                                    <input type="hidden" name="home_one_image2" class="selected-files" value="{{get_setting('home_one_image2')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_one_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_one_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('home_one_description',null,$lang) ?? "" !!}
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

                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Best Sellers') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_second_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="home_second_heading" value="{{ get_setting('home_second_heading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_second_button">
                                                <input type="text" class="form-control" placeholder="Button Text" name="home_second_button" value="{{ get_setting('home_second_button') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-5 d-none">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_second_button_link">
                                                <input type="text" class="form-control" placeholder="Button Link" name="home_second_button_link" value="{{ get_setting('home_second_button_link') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5 d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (162 x 164)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_second_image">
                                                    <input type="hidden" name="home_second_image" class="selected-files" value="{{get_setting('home_second_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mb-5  ">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (300 x 168)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_second_image2">
                                                    <input type="hidden" name="home_second_image2" class="selected-files" value="{{get_setting('home_second_image2')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_second_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_second_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('home_second_description',null,$lang) ?? "" !!}
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

                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Why Choose') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_third_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="home_third_heading" value="{{ get_setting('home_third_heading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_third_button">
                                                <input type="text" class="form-control" placeholder="Button Text" name="home_third_button" value="{{ get_setting('home_third_button') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-5 d-none">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_third_button_link">
                                                <input type="text" class="form-control" placeholder="Button Link" name="home_third_button_link" value="{{ get_setting('home_third_button_link') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5  d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (1920 x 691)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_third_image">
                                                    <input type="hidden" name="home_third_image" class="selected-files" value="{{get_setting('home_third_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (1920 x 691)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_third_image2">
                                                    <input type="hidden" name="home_third_image2" class="selected-files" value="{{get_setting('home_third_image2')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_third_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_third_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('home_third_description',null,$lang) ?? "" !!}
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

                    <div class="card pt-5 d-none">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('OUR PRODUCTS') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-6 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_fourth_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="home_fourth_heading" value="{{ get_setting('home_fourth_heading') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_fourth_button">
                                                <input type="text" class="form-control" placeholder="Button Text" name="home_fourth_button" value="{{ get_setting('home_fourth_button') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_fourth_button_link">
                                                <input type="text" class="form-control" placeholder="Button Link" name="home_fourth_button_link" value="{{ get_setting('home_fourth_button_link') }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5 d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (162 x 164)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_fourth_image">
                                                    <input type="hidden" name="home_fourth_image" class="selected-files" value="{{get_setting('home_fourth_image')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md mb-5 d-none">
                                            <div class="form-group">
                                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (300 x 168)</div>
                                                    </div>
                                                    <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_fourth_image2">
                                                    <input type="hidden" name="home_fourth_image2" class="selected-files" value="{{get_setting('home_fourth_image2')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_fourth_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_fourth_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('home_fourth_description',null,$lang) ?? "" !!}
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


                    {{-- Home clients --}}
                    <div class="card mt-5 ">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('OUR CLIENTS') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6 mb-5 d-none">
                                    <div class="form-group">
                                        <input type="hidden" name="types[][{{ $lang }}]" value="home_fifth_heading">
                                        <input type="text" class="form-control" placeholder="Heading" name="home_fifth_heading" value="{{ get_setting('home_fifth_heading') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{ translate('Images') }}</label>
                                    <div class="home-fifth-target">
                                        @if (get_setting('home_fifth_images') != null)
                                            @foreach (json_decode(get_setting('home_fifth_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}} (130 x 120)</div>
                                                                </div>
                                                                <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_fifth_images">
                                                                <input type="hidden" name="home_fifth_images[]" class="selected-files" value="{{ json_decode(get_setting('home_fifth_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md d-none">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_fifth_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_fifth_links[]" value="{{ json_decode(get_setting('home_fifth_links'), true)[$key] ?? "" }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md d-none">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_fifth_texts">
                                                            <input type="text" class="form-control" placeholder="Text" name="home_fifth_texts[]" value="{{ json_decode(get_setting('home_fifth_texts',null,$lang), true)[$key] ?? "" }}">
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
                                                            <div class="input-group-text bg-light-secondary font-weight-medium">{{ translate('Browse')}} (130 x 120)</div>
                                                        </div>
                                                        <div class="form-control file-amount pb-9">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="home_fifth_images">
                                                        <input type="hidden" name="home_fifth_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-none">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_slider_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md d-none">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_slider_texts">
                                                    <input type="text" class="form-control" placeholder="Text" name="home_slider_texts[]">
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
                                        data-target=".home-fifth-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Home Slider --}}
                    <div class="card mt-5 d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Slider') }}</h6>
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
                                        @if (get_setting('home_slider_images') != null)
                                            @foreach (json_decode(get_setting('home_slider_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_slider_images">
                                                                <input type="hidden" name="home_slider_images[]" class="selected-files" value="{{ json_decode(get_setting('home_slider_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_slider_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_slider_links[]" value="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_slider_texts">
                                                            <input type="text" class="form-control" placeholder="Text" name="home_slider_texts[]" value="{{ json_decode(get_setting('home_slider_texts',null,$lang), true)[$key] ?? "" }}">
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
                                                        <input type="hidden" name="types[]" value="home_slider_images">
                                                        <input type="hidden" name="home_slider_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_slider_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_slider_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_slider_texts">
                                                    <input type="text" class="form-control" placeholder="Text" name="home_slider_texts[]">
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
                            <h6 class="mb-0">{{ translate('Home Recognitions') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Reconitions Section') }}</label>
                                    <div class="home-reconitions-target">
                                        @if (get_setting('home_reconitions_images') != null)
                                            @foreach (json_decode(get_setting('home_reconitions_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_reconitions_images">
                                                                <input type="hidden" name="home_reconitions_images[]" class="selected-files" value="{{ json_decode(get_setting('home_reconitions_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_reconitions_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_reconitions_links[]" value="{{ json_decode(get_setting('home_reconitions_links'), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-auto">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_reconitions_name">
                                                            <input type="text" class="form-control" placeholder="Name" name="home_reconitions_name[]" value="{{ json_decode(get_setting('home_reconitions_name',null,$lang), true)[$key] }}">
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
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_reconitions_description">
                                                            <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]'
                                                            name="home_reconitions_description[]" placeholder="Description" data-min-height="150">
                                                                {{ json_decode(get_setting('home_reconitions_description',null,$lang), true)[$key] }}
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
                                                        <input type="hidden" name="types[]" value="home_reconitions_images">
                                                        <input type="hidden" name="home_reconitions_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_reconitions_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_reconitions_links[]">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_reconitions_name">
                                                    <input type="text" class="form-control" placeholder="Name" name="home_reconitions_name[]" >
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
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_reconitions_description">
                                                    <textarea class="aiz-text-editor" name="home_reconitions_description[]" placeholder="Description" data-min-height="150">
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
                            <h6 class="mb-0">{{ translate('Home Widget Discover') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_discover_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="home_discover_heading" value="{{ get_setting('home_discover_heading',null,$lang) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_discover_subheading">
                                                <input type="text" class="form-control" placeholder="Sub Heading" name="home_discover_subheading" value="{{ get_setting('home_discover_subheading',null,$lang) }}">
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
                                        @if (get_setting('home_service_images') != null)
                                            @foreach (json_decode(get_setting('home_service_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_service_heading">
                                                            <input type="text" class="form-control" placeholder="Heading" name="home_service_heading[]" value="{{ json_decode(get_setting('home_service_heading',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_service_subheading">
                                                            <input type="text" class="form-control" placeholder="Sub Heading" name="home_service_subheading[]" value="{{ json_decode(get_setting('home_service_subheading',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_service_linktext">
                                                            <input type="text" class="form-control" placeholder="Link Text" name="home_service_linktext[]" value="{{ json_decode(get_setting('home_service_linktext',null,$lang), true)[$key] }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_service_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_service_links[]" value="{{ json_decode(get_setting('home_service_links'), true)[$key] ?? "#" }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_service_menuid">
                                                            <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" name="home_service_menuid[]" data-live-search="true">
                                                            <option value="0">{{ translate('Menu Select') }}</option>
                                                            @foreach (\App\Models\Menu::where('parent_id',0)->get() as $menu)
                                                            <option value="{{ $menu->id }}" {{ json_decode(get_setting('home_service_menuid'), true)[$key] == $menu->id ? "selected" : "" }}>
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
                                                                <input type="hidden" name="home_service_images[]" class="selected-files" value="{{ json_decode(get_setting('home_service_images'), true)[$key] }}">
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
                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_advantage_mainheading">
                                            <input type="text" class="form-control" placeholder="Main Heading" name="home_advantage_mainheading" value="{{ get_setting('home_advantage_mainheading',null,$lang) }}">
                                        </div>
                                    </div>
                                    <div class="home-advantage-target">
                                        @if (get_setting('home_advantage_images') != null)
                                            @foreach (json_decode(get_setting('home_advantage_images'), true) as $key => $value)
                                            <div class="row gutters-5 mt-5">
                                                <div class="col-md-4 mb-5">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="home_advantage_text">
                                                        <input type="text" class="form-control" placeholder="Text" name="home_advantage_text[]" value="{{json_decode(get_setting('home_advantage_text',null,$lang), true)[$key] ?? ""}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-5">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[]" value="home_advantage_subtext">
                                                        <input type="text" class="form-control" placeholder="Sub Text" name="home_advantage_subtext[]" value="{{json_decode(get_setting('home_advantage_subtext',null,$lang), true)[$key] ?? ""}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-5 d-none">
                                                    <div class="form-group">
                                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                            </div>
                                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                            <input type="hidden" name="types[]" value="home_advantage_images">
                                                            <input type="hidden" name="home_advantage_images[]" value="{{uploaded_asset($value)}}" class="selected-files">
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
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_advantage_text">
                                                    <input type="text" class="form-control" placeholder="Text" name="home_advantage_text[]" >
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-5">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_advantage_subtext">
                                                    <input type="text" class="form-control" placeholder="Sub Text" name="home_advantage_subtext[]">
                                                </div>
                                            </div>
                                            <div class="col-md-5 d-none">
                                                <div class="form-group">
                                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                        </div>
                                                        <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                        <input type="hidden" name="types[]" value="home_advantage_images">
                                                        <input type="hidden" name="home_advantage_images[]" class="selected-files">
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
                                                <input type="hidden" name="types[][{{ $lang }}]" value="home_infocontent_mainheading">
                                                <input type="text" class="form-control" placeholder="Main Heading" name="home_infocontent_mainheading" value="{{ get_setting('home_infocontent_mainheading',null,$lang) }}">
                                            </div>
                                        </div>
                                        <div class="col-md mb-5">
                                            <div class="form-group">
                                                {{-- @dd(get_setting('home_infocontent_images')) --}}
                                                <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                    <input type="hidden" name="types[]" value="home_infocontent_images">
                                                    <input type="hidden" name="home_infocontent_images" class="selected-files" value="{{get_setting('home_infocontent_images')}}">
                                                </div>
                                                <div class="file-preview box sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="home_infocontent_decription">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_infocontent_decription" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('home_infocontent_decription',null,$lang) ?? "" !!}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home_infocontent">
                                        @if (get_setting('home_infocontent_subdecription',null,$lang) != null)
                                            @foreach (json_decode(get_setting('home_infocontent_subdecription',null,$lang), true) as $key => $value)
                                            <div class="row gutters-5 mt-5">
                                                <div class="col-md-11">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="home_infocontent_subtitle">
                                                        <input type="text" class="form-control" placeholder="Title" name="home_infocontent_subtitle[]" value="{{ json_decode(get_setting('home_infocontent_subtitle',null,$lang),true)[$key] }}">
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
                                                            <input type="hidden" name="types[][{{ $lang }}]" value="home_infocontent_subdecription">
                                                            <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="home_infocontent_subdecription[]" placeholder="Description" data-min-height="150">
                                                                    {{ json_decode(get_setting('home_infocontent_subdecription',null,$lang), true)[$key] }}
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

                    {{-- Home categories--}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Categories') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Categories') }}</label>
                                    <div class="home-categories-target">
                                        <input type="hidden" name="types[]" value="home_categories">
                                        @if (get_setting('home_categories') != null)
                                            @foreach (json_decode(get_setting('home_categories'), true) as $key => $home_categorie)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <select class="form-select mb-2 js-data-example-ajax" name="home_categories[]" data-live-search="true" data-selected={{ $home_categorie }} required>
                                                                @foreach (\App\Models\Category::where('parent_id', 0)->with('childrenCategories')->get() as $category)
                                                                    <option value="{{ $category->id }}" {{$value == $category->id ? "selected" : ''}}>{{ $category->getTranslation('name') }}</option>
                                                                    @foreach ($category->childrenCategories as $childCategory)
                                                                        @include('categories.child_category', ['child_category' => $childCategory,"home_categorie" => $home_categorie])
                                                                    @endforeach
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                            <i class="las la-times"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <button
                                        id="homecategories"
                                        type="button"
                                        class="btn btn-secondary btn-sm mt-5"
                                        data-toggle="add-more"
                                        data-content='<div class="row gutters-5 mt-5">
                                            <div class="col">
                                                <div class="fv-row mb-2">
                                                    <select class="form-select mb-2 js-data-example-ajax" data-control="select2" data-hide-search="false"
                                                        data-placeholder="Select an option" id="home_categories" name="home_categories[]"
                                                        data-live-search="true">
                                                        @foreach (\App\Models\Category::all() as $key => $category)
                                                            <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                    <i class="las la-times"></i>
                                                </button>
                                            </div>
                                        </div>'
                                        data-target=".home-categories-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    {{-- Home Banner 3 --}}
                    <div class="card d-none">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Home Banner 3 (Max 3)') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Banner & Links') }}</label>
                                    <div class="home-banner3-target">
                                        <input type="hidden" name="types[]" value="home_banner3_images">
                                        <input type="hidden" name="types[]" value="home_banner3_links">
                                        @if (get_setting('home_banner3_images') != null)
                                            @foreach (json_decode(get_setting('home_banner3_images'), true) as $key => $value)
                                                <div class="row gutters-5 mt-5">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                                                                </div>
                                                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                                                <input type="hidden" name="types[]" value="home_banner3_images">
                                                                <input type="hidden" name="home_banner3_images[]" class="selected-files" value="{{ json_decode(get_setting('home_banner3_images'), true)[$key] }}">
                                                            </div>
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-group">
                                                            <input type="hidden" name="types[]" value="home_banner3_links">
                                                            <input type="text" class="form-control" placeholder="http://" name="home_banner3_links[]" value="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}">
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
                                                        <input type="hidden" name="types[]" value="home_banner3_images">
                                                        <input type="hidden" name="home_banner3_images[]" class="selected-files">
                                                    </div>
                                                    <div class="file-preview box sm">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <input type="hidden" name="types[]" value="home_banner3_links">
                                                    <input type="text" class="form-control" placeholder="http://" name="home_banner3_links[]">
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
                                        data-target=".home-banner3-target">
                                        {{ translate('Add New') }}
                                    </button>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Top 10 --}}
                    <div class="card ">
                        <div class="card-header">
                            <h6 class="mb-0">{{ translate('Top 10') }}</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="fv-row mb-2">
                                    <label for="kt_ecommerce_add_product_store_template"
                                        class="form-label">{{ translate('Top Categories (Max 10)') }}</label>
                                        <input type="hidden" name="types[]" value="top10_categories">
                                        {{-- @dd(json_decode(get_setting('top10_categories'))) --}}
                                    <select class="form-select mb-2" data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an option" id="top10_categories" name="top10_categories[]"
                                        data-live-search="true" multiple>
                                        {{-- where('parent_id', 0)->with('childrenCategories') --}}
                                        @foreach (\App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}"
                                                @if(get_setting('top10_categories') != null)
                                                    @if(in_array($category->id,json_decode(get_setting('top10_categories'))) == true)
                                                        selected
                                                    @endif
                                                @endif  >{{ $category->getTranslation('name') }}
                                            </option>
                                            {{-- @foreach ($category->childrenCategories as $childCategory)
                                                @include('categories.child_category', ['child_category' => $childCategory,'top10_categories' => json_decode(get_setting('top10_categories'))])
                                            @endforeach --}}
                                        @endforeach
                                    </select>
                                </div>

                                <div class="fv-row mb-2 d-none">
                                    <label for="kt_ecommerce_add_product_store_template"
                                        class="form-label">{{ translate('Top Brands (Max 10)') }}</label>
                                    <input type="hidden" name="types[]" value="top10_brands">
                                    <select class="form-select mb-2" multiple data-control="select2" data-hide-search="false"
                                        data-placeholder="Select an option" id="top10_brands" name="top10_brands[]"
                                        data-live-search="true" data-selected="{{ get_setting('top10_brands') }}">
                                        @foreach (\App\Models\Brand::all() as $key => $brand)
                                            <option value="{{ $brand->id }}"
                                                @if(get_setting('top10_brands') != null)
                                                    @if(in_array($brand->id,json_decode(get_setting('top10_brands'))) == true)
                                                        selected
                                                    @endif
                                                @endif>{{ $brand->getTranslation('name') }}</option>
                                        @endforeach
                                    </select>
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
