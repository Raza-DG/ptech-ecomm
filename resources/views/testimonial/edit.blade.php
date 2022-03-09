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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Testimonial</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route("admin.dashboard") }}" class="text-muted text-hover-primary">Home</a>
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
                    <li class="breadcrumb-item text-dark">Testimonial Edit</li>
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
            <!--begin::Post-->
            <ul class="nav nav-tabs nav-fill border-light">
                @foreach (\App\Models\Language::all() as $key => $language)
                    <li class="nav-item">
                        <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3"
                            href="{{ route('testimonial.edit', ['id' => $testimonial->id, 'lang' => $language->code]) }}">
                            <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}" height="11"
                                class="mr-1">
                            <span>{{ $language->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <br>
            <div class="col-md-12">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <h5 class="mb-0 h6">{{ translate('Edit Testimonial') }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('testimonial.update',$testimonial->id) }}" method="POST">
                            <input name="_method" type="hidden" value="PATCH">
                            <input type="hidden" name="lang" value="{{ $lang }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">{{ translate('Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}" name="name"
                                    class="form-control" value="{{$testimonial->getTranslation("name")}}" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">{{ translate('Designation') }}</label>
                                <input type="text" placeholder="{{ translate('Designation') }}" name="designation"
                                    class="form-control" value="{{$testimonial->getTranslation("designation")}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">{{ translate('Description') }}</label>
                                    <textarea class="aiz-text-editor"  data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description">
                                        {{ $testimonial->getTranslation('description') }}
                                    </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">{{ translate('Sorting Id') }}</label>
                                <input type="number" placeholder="0" name="sorting_id" value="{{$testimonial->sorting_id}}" class="form-control" required >
                            </div>
                            <div class="form-group mb-3 d-none">
                                <label for="name">{{ translate('Image') }}
                                    </label>
                                <div class="input-group" data-toggle="aizuploader" data-type="image">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="image" value="{{$testimonial->getTranslation("image")}}" class="selected-files">
                                </div>
                                <div class="file-preview box sm">
                                </div>
                            </div>
                            <div class="form-group mb-3 text-right">
                                <button type="submit" class="btn btn-primary">{{ translate('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
</div>

@endsection
