@extends('backend.layouts.app')

<style>
    .ic2t {
        font-family: 'c2t' !important;
    }

</style>
<link rel="stylesheet" href="{{ static_asset('assets/frontend/static/fonts/style.css') }}">

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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Contact Us</h1>
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
                    <li class="breadcrumb-item text-dark">Contact Us Page Edit</li>
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
                <h2 class="fw-600">{{ translate('Contact Page Settings') }}</h2>
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
                            <h6 class="mb-0">{{ translate('Contact Page') }}</h6>
                        </div>
                        <div class="card-body">
                            <!--begin::Notice-->
                            {{-- <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6 mb-10">
                                {{ translate('We have limited banner height to maintain UI. We had to crop from both left & right side in view for different devices to make it responsive. Before designing banner keep these points in mind.') }}
                            </div> --}}
                            <!--end::Notice-->
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>{{ translate('Text') }}</label>
                                    <div class="home-slider-target">
                                            <div class="row gutters-5 mt-5">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_from">
                                                        <input type="text" class="form-control" placeholder="Text" name="contact_us_from" value="{{ get_setting('contact_us_from', null, $lang)}}">
                                                    </div>
                                                </div>
                                                @if (json_decode(get_setting('contact_us_type', null, $lang)) != null)
                                                    @foreach (json_decode(get_setting('contact_us_type', null, $lang)) as $type_of_query)
                                                        <div class="col-md-4 mt-2">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_type">
                                                                    <input type="text" class="form-control" placeholder="Text" name="contact_us_type[]" value="{{ $type_of_query }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-auto">
                                                            <div class="form-group">
                                                                <button type="button" class="mt-1 btn btn-icon btn-circle btn-sm btn-light-danger" data-toggle="remove-parent" data-parent=".row">
                                                                    <i class="las la-times"></i>
                                                                </button>
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
                                                        <div class="col-md">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_type">
                                                                    <input type="text" class="form-control" placeholder="Text" name="contact_us_type[]" >
                                                                </div>
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
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">{{ translate('Update') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>



                    {{-- Contact Us --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Contact Us') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5 mb-3">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="main_heading">
                                                <input type="text" class="form-control" placeholder="Heading" name="main_heading" value="{{ get_setting('main_heading') }}">
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

                    {{-- Map iframe --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Map Iframe') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mt-5 mb-3">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="map_url">
                                                <input type="text" class="form-control" placeholder="map" name="map_url" value="{{ get_setting('map_url') }}">
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

                    {{-- Customer Servie --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Customer Service') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mb-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_one">
                                                <input type="text" class="form-control" placeholder="Heading" name="contact_us_widget_one" value="{{ get_setting('contact_us_widget_one') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_one_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="contact_us_widget_one_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('contact_us_widget_one_description',null,$lang) ?? "" !!}
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



                    {{-- Press Contact --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Press Contact') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mb-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_second">
                                                <input type="text" class="form-control" placeholder="Heading" name="contact_us_widget_second" value="{{ get_setting('contact_us_widget_second') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_second_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="contact_us_widget_second_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('contact_us_widget_second_description',null,$lang) ?? "" !!}
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



                    {{-- Address --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Address') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mb-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_third">
                                                <input type="text" class="form-control" placeholder="Heading" name="contact_us_widget_third" value="{{ get_setting('contact_us_widget_third') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_third_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="contact_us_widget_third_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('contact_us_widget_third_description',null,$lang) ?? "" !!}
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


                    {{-- Can We Help ? --}}
                    <div class="card pt-5">
                        <div class="card-header">
                            <h4 class="mb-0">{{ translate('Can We Help ?') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('business_settings.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row gutters-5 mb-5">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_fourth">
                                                <input type="text" class="form-control" placeholder="Heading" name="contact_us_widget_fourth" value="{{ get_setting('contact_us_widget_fourth') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <div class="d-flex flex-column">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <input type="hidden" name="types[][{{ $lang }}]" value="contact_us_widget_fourth_description">
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="contact_us_widget_fourth_description" placeholder="Description" data-min-height="150">
                                                            {!! get_setting('contact_us_widget_fourth_description',null,$lang) ?? "" !!}
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



                </div>
            </div>
        </div>
    </div>
</div>

@endsection
