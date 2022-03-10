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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Footer</h1>
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
                        <li class="breadcrumb-item text-muted">eCommerce</li>
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
                        <li class="breadcrumb-item text-dark">Footer Edit</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="card">
                    <div class="card-header">
                        <h6 class="fw-600 mb-0">{{ translate('Footer Widget') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="row gutters-10">
                            <div class="col-lg-12">
                                <div class="card shadow-none bg-light pt-2">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('About Widget') }}</h6>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="signinSrEmail">{{ translate('Footer Logo') }}</label>
                                                <div class="input-group " data-toggle="aizuploader" data-type="image">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                            {{ translate('Browse') }}</div>
                                                    </div>
                                                    <div class="form-control file-amount">{{ translate('Choose File') }}
                                                    </div>
                                                    <input type="hidden" name="types[]" value="footer_logo">
                                                    <input type="hidden" name="footer_logo" class="selected-files"
                                                        value="{{ get_setting('footer_logo') }}">
                                                </div>
                                                <div class="file-preview"></div>
                                            </div>
                                            <div class="form-group pt-2">
                                                <label>{{ translate('About description') }}</label>
                                                <input type="hidden" name="types[]" value="about_us_description">
                                                <textarea class="aiz-text-editor form-control" name="about_us_description"
                                                    data-buttons='[["font", ["bold", "underline", "italic"]],["para", ["ul", "ol"]],["view", ["undo","redo"]]]'
                                                    placeholder="Type.." data-min-height="150">
                                                        @php echo get_setting('about_us_description'); @endphp
                                                    </textarea>
                                            </div>
                                            <div class="form-group d-none">
                                                <label>{{ translate('Play Store Link') }}</label>
                                                <input type="hidden" name="types[]" value="play_store_link">
                                                <input type="text" class="form-control" placeholder="http://"
                                                    name="play_store_link" value="{{ get_setting('play_store_link') }}">
                                            </div>
                                            <div class="form-group d-none">
                                                <label>{{ translate('App Store Link') }}</label>
                                                <input type="hidden" name="types[]" value="app_store_link">
                                                <input type="text" class="form-control" placeholder="http://"
                                                    name="app_store_link" value="{{ get_setting('app_store_link') }}">
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card shadow-none bg-light pt-2">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Contact Info Widget') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            {{-- Default --}}
                                            <div class="form-group">
                                                <h2 class="mb-0">{{ translate('Default') }}</h2>
                                            </div>
                                            <div class="d-flex flex-column mb-2">
                                                <label class="form-label">{{ translate('Contact address') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="contact_address">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Address') }}" name="contact_address"
                                                    value="{{ get_setting('contact_address', null, $lang) }}">
                                            </div>
                                            <div class="d-flex flex-column mb-2">
                                                <label>{{ translate('Contact phone') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="contact_phone">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Phone') }}" name="contact_phone"
                                                    value="{{ get_setting('contact_phone', null, $lang) }}">
                                            </div>
                                            <div class="d-flex flex-column mb-2">
                                                <label>{{ translate('Contact email') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="contact_email">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ translate('Email') }}" name="contact_email"
                                                    value="{{ get_setting('contact_email', null, $lang) }}">
                                            </div>
                                            <hr />
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 d-none">
                                <div class="card shadow-none bg-light pt-2">
                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Newsletter Content') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <form action="{{ route('business_settings.update') }}" method="POST">
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>{{ translate('Newsletter') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="newsletter_content">
                                                <textarea class="aiz-text-editor form-control" name="newsletter_content"
                                                    data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]'
                                                    placeholder="Type.." data-min-height="150">
                                                        {!! get_setting('newsletter_content', null, $lang) !!}
                                                    </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group pt-2 pb-2">
                                            <label class="form-label"
                                                for="signinSrEmail">{{ translate('Newsletter Image') }}</label>
                                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                        {{ translate('Browse') }}</div>
                                                </div>
                                                <div class="form-control file-amount">{{ translate('Choose File') }}
                                                </div>
                                                <input type="hidden" name="types[]" value="newsletter_image">
                                                <input type="hidden" name="newsletter_image" class="selected-files"
                                                    value="{{ get_setting('newsletter_image') }}">
                                            </div>
                                            <div class="file-preview"></div>
                                        </div>
                                        <div class="text-right pb-2">
                                            <button type="submit"
                                                class="btn btn-primary">{{ translate('Save') }}</button>
                                        </div>
                                    </form>

                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card shadow-none bg-light pt-2">

                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('One Widget') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>{{ translate('Title') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="widget_one">
                                                <input type="text" class="form-control" placeholder="Widget title"
                                                    name="widget_one"
                                                    value="{{ get_setting('widget_one', null, $lang) }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ translate('Links') }}</label>
                                                <div class="widget_one_links_target">
                                                    <input type="hidden" name="types[][{{ $lang }}]"
                                                        value="widget_one_labels">
                                                    <input type="hidden" name="types[]" value="widget_one_links">
                                                    @if (get_setting('widget_one_labels', null, $lang) != null)
                                                        @foreach (json_decode(get_setting('widget_one_labels', null, $lang), true) as $key => $value)
                                                            <div class="row gutters-5">
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label" name="widget_one_labels[]"
                                                                            value="{{ $value }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="http://" name="widget_one_links[]"
                                                                            value="{{ json_decode(get_setting('widget_one_links'), true)[$key] ?? '#' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button"
                                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                                        data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="las la-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="mb-5 w-100">
                                                    <button type="button" class="btn btn-secondary btn-sm"
                                                        data-toggle="add-more" data-content='<div class="row gutters-5">
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="Label" name="widget_one_labels[]">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" placeholder="http://" name="widget_one_links[]">
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="las la-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>' data-target=".widget_one_links_target">
                                                        {{ translate('Add New') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card shadow-none bg-light pt-2">

                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Second Widget') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>{{ translate('Title') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="widget_second">
                                                <input type="text" class="form-control" placeholder="Widget title"
                                                    name="widget_second"
                                                    value="{{ get_setting('widget_second', null, $lang) }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ translate('Links') }}</label>
                                                <div class="widget_second_links_target">
                                                    <input type="hidden" name="types[][{{ $lang }}]"
                                                        value="widget_second_labels">
                                                    <input type="hidden" name="types[]" value="widget_second_links">
                                                    @if (get_setting('widget_second_labels', null, $lang) != null)
                                                        @foreach (json_decode(get_setting('widget_second_labels', null, $lang), true) as $key => $value)
                                                            <div class="row gutters-5">
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label"
                                                                            name="widget_second_labels[]"
                                                                            value="{{ $value }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="http://"
                                                                            name="widget_second_links[]"
                                                                            value="{{ json_decode(get_setting('widget_second_links'), true)[$key] ?? '#' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button"
                                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                                        data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="las la-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"
                                                    data-toggle="add-more" data-content='<div class="row gutters-5">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Label" name="widget_second_labels[]">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="http://" name="widget_second_links[]">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                                    <i class="las la-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>' data-target=".widget_second_links_target">
                                                    {{ translate('Add New') }}
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="card shadow-none bg-light pt-2">

                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Third Widget') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>{{ translate('Title') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="widget_third">
                                                <input type="text" class="form-control" placeholder="Widget title"
                                                    name="widget_third"
                                                    value="{{ get_setting('widget_third', null, $lang) }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ translate('Links') }}</label>
                                                <div class="widget_third_links_target">
                                                    <input type="hidden" name="types[][{{ $lang }}]"
                                                        value="widget_third_labels">
                                                    <input type="hidden" name="types[]" value="widget_third_links">
                                                    @if (get_setting('widget_third_labels', null, $lang) != null)
                                                        @foreach (json_decode(get_setting('widget_third_labels', null, $lang), true) as $key => $value)
                                                            <div class="row gutters-5">
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label" name="widget_third_labels[]"
                                                                            value="{{ $value }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="http://"
                                                                            name="widget_third_links[]"
                                                                            value="{{ json_decode(get_setting('widget_third_links'), true)[$key] ?? '#' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button"
                                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                                        data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="las la-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"
                                                    data-toggle="add-more" data-content='<div class="row gutters-5">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Label" name="widget_third_labels[]">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="http://" name="widget_third_links[]">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                                    <i class="las la-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>' data-target=".widget_third_links_target">
                                                    {{ translate('Add New') }}
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 d-none">
                                <div class="card shadow-none bg-light pt-2">

                                    <div class="card-header">
                                        <h6 class="mb-0">{{ translate('Fourth Widget') }}</h6>
                                    </div>
                                    <ul class="nav nav-tabs nav-fill border-light">
                                        @foreach (\App\Models\Language::all() as $key => $language)
                                            <li class="nav-item">
                                                <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                                                    href="{{ route('website.footer', ['lang' => $language->code]) }}">
                                                    <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}"
                                                        height="11" class="mr-1">
                                                    <span>{{ $language->name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="card-body">
                                        <form action="{{ route('business_settings.update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>{{ translate('Title') }}</label>
                                                <input type="hidden" name="types[][{{ $lang }}]"
                                                    value="widget_fourth">
                                                <input type="text" class="form-control" placeholder="Widget title"
                                                    name="widget_fourth"
                                                    value="{{ get_setting('widget_fourth', null, $lang) }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ translate('Links') }}</label>
                                                <div class="widget_fourth_links_target">
                                                    <input type="hidden" name="types[][{{ $lang }}]"
                                                        value="widget_fourth_labels">
                                                    <input type="hidden" name="types[]" value="widget_fourth_links">
                                                    @if (get_setting('widget_fourth_labels', null, $lang) != null)
                                                        @foreach (json_decode(get_setting('widget_fourth_labels', null, $lang), true) as $key => $value)
                                                            <div class="row gutters-5">
                                                                <div class="col-4">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Label"
                                                                            name="widget_fourth_labels[]"
                                                                            value="{{ $value }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="http://"
                                                                            name="widget_fourth_links[]"
                                                                            value="{{ json_decode(get_setting('widget_fourth_links'), true)[$key] ?? '#' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <button type="button"
                                                                        class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger"
                                                                        data-toggle="remove-parent" data-parent=".row">
                                                                        <i class="las la-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm"
                                                    data-toggle="add-more" data-content='<div class="row gutters-5">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Label" name="widget_fourth_labels[]">
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="http://" name="widget_fourth_links[]">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-soft-danger" data-toggle="remove-parent" data-parent=".row">
                                                                    <i class="las la-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>' data-target=".widget_fourth_links_target">
                                                    {{ translate('Add New') }}
                                                </button>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" id="kt_ecommerce_add_category_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">Update Page</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="card">
                    <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="card shadow-none bg-light">
                                <div class="card-header">
                                    <h6 class="mb-0">{{ translate('Copyright Widget ') }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>{{ translate('Copyright Text') }}</label>
                                        <input type="hidden" name="types[]" value="frontend_copyright_text">
                                        <textarea class="aiz-text-editor form-control" name="frontend_copyright_text"
                                            data-buttons='[["font", ["bold", "underline", "italic"]],["insert", ["link"]],["view", ["undo","redo"]]]'
                                            placeholder="Type.." data-min-height="150">
                                            @php echo get_setting('frontend_copyright_text'); @endphp
                                        </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-5 g-xl-8">
                                <!--begin::Col-->
                                <div class="col-xl-12">
                                    <!--begin::Feeds Widget 1-->
                                    <div class="card mb-5 mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body pb-0">
                                            <!--begin::Header-->
                                            <div class="align-items-center">
                                                <!--begin::User-->
                                                <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10"
                                                    action="{{ route('business_settings.update') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="align-items-center flex-grow-1">
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column mb-5">
                                                            <span
                                                                class="text-gray-900 fs-6 fw-bolder">{{ translate('Social Link Widget') }}</span>
                                                        </div>
                                                        <div class="separator"></div>
                                                        <!--end::Info-->
                                                        <div class="d-flex flex-column mt-5">
                                                            <div class="mb-5 fv-row">
                                                                <label
                                                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5">
                                                                    <span
                                                                        class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">{{ translate('Show Social Links?') }}</span>
                                                                    <span
                                                                        class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                        <input type="hidden" name="types[]"
                                                                            value="show_social_links">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="show_social_links"
                                                                            @if (get_setting('show_social_links') == 'on') checked @endif>
                                                                    </span>
                                                                </label>

                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-column mt-5">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-facebook-f"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="facebook_link">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="http://" name="facebook_link"
                                                                        value="{{ get_setting('facebook_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column mt-5">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-pinterest"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="pinterest_link">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="http://" name="pinterest_link"
                                                                        value="{{ get_setting('pinterest_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column mt-5 d-none">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-twitter"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="twitter_link">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="http://" name="twitter_link"
                                                                        value="{{ get_setting('twitter_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column mt-5">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-instagram"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="instagram_link">
                                                                    <input type="text" placeholder="http://"
                                                                        class="form-control" name="instagram_link"
                                                                        value="{{ get_setting('instagram_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column mt-5 d-none">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-youtube"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="youtube_link">
                                                                    <input type="text" placeholder="http://"
                                                                        class="form-control" name="youtube_link"
                                                                        value="{{ get_setting('youtube_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-column mt-5 d-none">
                                                            <div class="mb-5 fv-row">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text "><i
                                                                                class="lab la-linkedin-in"></i></span>
                                                                    </div>
                                                                    <input type="hidden" name="types[]"
                                                                        value="linkedin_link">
                                                                    <input type="text" placeholder="http://"
                                                                        class="form-control" name="linkedin_link"
                                                                        value="{{ get_setting('linkedin_link') }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="separator"></div>

                                                        <div class="d-flex flex-column mt-5 d-none">
                                                            <label
                                                                class="form-label">{{ translate('Payment Methods Widget') }}</label>
                                                            <!--begin::Dropzone-->
                                                            <div class="dropzone"
                                                                id="kt_ecommerce_add_product_mediaa"
                                                                data-toggle="aizuploader" data-type="image"
                                                                data-multiple="true">
                                                                <!--begin::Message-->
                                                                <div class="dz-message needsclick">
                                                                    <!--begin::Icon-->
                                                                    <i
                                                                        class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <input type="hidden" name="types[]"
                                                                        value="payment_method_images">
                                                                    <input type="hidden" name="payment_method_images"
                                                                        class="selected-files"
                                                                        value="{{ get_setting('payment_method_images') }}">
                                                                    <div class="ms-4">
                                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">
                                                                            {{ translate('Payment Methods') }}.</h3>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                            </div>
                                                            <!--end::Dropzone-->
                                                            <div class="file-preview box sm">
                                                            </div>
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-10">
                                                            <button type="submit" id="kt_ecommerce_add_category_submit"
                                                                class="btn btn-primary">
                                                                <span
                                                                    class="indicator-label">{{ translate('Update') }}</span>
                                                                <span
                                                                    class="indicator-progress">{{ translate('Please wait') }}...
                                                                    <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Header-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feeds Widget 1-->
                                </div>
                                <!--end::Col-->
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection
