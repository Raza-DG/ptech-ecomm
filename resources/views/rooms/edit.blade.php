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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Room</h1>
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
                    <li class="breadcrumb-item text-dark">Room Edit</li>
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
                            href="{{ route('room.edit', ['id' => $room->id, 'lang' => $language->code]) }}">
                            <img src="{{ static_asset('assets/img/flags/' . $language->code . '.png') }}" height="11"
                                class="mr-1">
                            <span>{{ $language->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <br>
            <form class="form d-flex flex-column flex-lg-row gap-7 gap-lg-10" action="{{ route('rooms.update',$room->id) }}" method="POST" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                <input type="hidden" name="lang" value="{{ $lang }}">
                @csrf
                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>{{translate('Room Information')}}</h2>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Top Bar Show / Hide') }}</label>
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                    <span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                        <input class="form-check-input" name="top_bar" type="checkbox" {{$room->top_bar == 1 ? "checked" : ""}} value="1">
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Room Name') }}</label>
                                <input type="text" placeholder="{{ translate('Name') }}" id="name" name="name" class="form-control mb-2" value="{{$room->getTranslation("name",$lang)}}" required>
                                <div class="text-muted fs-7">{{translate('A Room name is required and recommended to be unique')}}.
                                </div>

                            </div>

                            <!--begin::Input group-->
                        </div>
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Room Slug') }}</label>
                                <input type="text" placeholder="{{ translate('slug') }}" id="slug" name="slug" class="form-control mb-2" value="{{$room->slug}}" >
                                <div class="text-muted fs-7">{{translate('A Room slug is required and recommended to be unique')}}.
                                </div>
                            </div>
                            <!--begin::Input group-->
                        </div>
                        <!--end::Card header-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Room Page Category') }}</label>

                                <select class="form-select mb-2" data-control="select2" data-hide-search="false" data-placeholder="Select an option" id="page_category_id" name="page_category_id" data-live-search="true" required>
                                    <option disabled selected value="">{{translate("Select Page Category")}}</option>
                                    @foreach(App\Models\PageCategory::all() as $cat)
                                        <option  value="{{ $cat->id }}" @if($room->page_category_id == $cat->id) selected @endif>{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!--begin::Input group-->
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Menu') }}</label>
                                <select name="menu_id" class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" required>
                                    <option disabled selected value="">{{translate("Select Menu")}}</option>
                                    @foreach(\App\Models\Menu::where('menu_id',1)->where('parent_id', 0)->where('status','!=', 1)->get() as $menu)
                                        <option  value="{{ $menu->id }}" {{$room->menu_id == $menu->id ? "selected" : ""}}>{{ $menu->getTranslation("name") }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--begin::Input group-->
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Relative Rooms') }}</label>
                                <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" name="relative_ids[]" id="relative_ids" multiple  required>
                                    @foreach(App\Models\Room::whereNotIn('id',[$room->id])->get() as $relative)
                                        <option  value="{{ $relative->id }}" @if ($room->relative_ids != null && in_array($relative->id, json_decode($room->relative_ids, true))) selected @endif>{{ $relative->getTranslation("name") }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!--begin::Input group-->
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Relative Limit') }}</label>
                                <input type="text" placeholder="{{ translate('Relative Limit') }}" id="relative_limit" name="relative_limit" class="form-control mb-2" value="{{$room->relative_limit}}" required>
                            </div>
                            <!--begin::Input group-->
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <label class="required form-label">{{ translate('Relative Image Text') }}</label>
                                <input type="text" placeholder="{{ translate('Relative Image Text') }}" id="relative_text" name="relative_text" class="form-control mb-2" value="{{$room->relative_text}}" required>
                            </div>
                            <!--begin::Input group-->
                        </div>

                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="fv-row mb-2">
                                <label class="form-label">{{ translate('Relative Slider Image') }}</label>
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                    data-toggle="aizuploader" data-type="image">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <input type="hidden" name="relative_image" value="{{$room->relative_image}}" class="selected-files" >
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to upload.')}}</h3>
                                            <span class="fs-7 fw-bold text-gray-400">{{translate('Room Slider Image')}}</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                                <div class="file-preview box sm">
                                </div>


                            </div>
                        </div>
                        {{-- <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <label class="form-label">{{ translate('Description') }}</label>
                                <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description[]" placeholder="Description"  data-min-height="150"></textarea>
                            </div>
                        </div> --}}
                        <div class="description-room">
                            @if ($room->description != "null" && $room->description != null)
                                @foreach (json_decode($room->getTranslation("description",$lang),true) as $key => $description)
                                    <div class="row gutters-5 mt-5">
                                        <!--begin::Media-->
                                        <div class="col-md-4">
                                            <div class="card card-flush py-4">
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-2">
                                                        <label class="form-label">{{ translate('Image') }}</label>
                                                        <!--begin::Dropzone-->
                                                        <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                                            data-toggle="aizuploader" data-type="image" data-multiple="true">
                                                            <!--begin::Message-->
                                                            <div class="dz-message needsclick">
                                                                <!--begin::Icon-->
                                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                <!--end::Icon-->
                                                                <!--begin::Info-->
                                                                {{-- @dd(json_decode($room->images,true)[$key]) --}}
                                                                <input type="hidden" name="images[]" value="{{json_decode($room->images,true)[$key]}}" class="selected-files" >
                                                                <div class="ms-4">
                                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to upload.')}}</h3>
                                                                    <span class="fs-7 fw-bold text-gray-400">{{translate('Room Images')}}</span>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                        </div>
                                                        <!--end::Dropzone-->
                                                        <div class="file-preview box sm">
                                                        </div>


                                                    </div>
                                                </div>
                                                <!--end::Card header-->
                                            </div>
                                        </div>
                                        <!--end::Media-->
                                        <div class="col-md-3">
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Button Text') }}</label>
                                                    <input type="text" placeholder="{{ translate('Button Text') }}" name="button[]" class="form-control mb-2" value="{{json_decode($room->button,true)[$key]}}" >
                                                </div>
                                                <!--begin::Input group-->
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Button Link') }}</label>
                                                    <input type="text" placeholder="{{ translate('http//') }}" name="link[]" class="form-control mb-2" value="{{json_decode($room->link,true)[$key]}}" >
                                                </div>
                                                <!--begin::Input group-->
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
                                            <div class="card-body pt-0">
                                                <div class="mb-5 fv-row">
                                                    <label class="form-label">{{ translate('Description') }}</label>
                                                    <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description[]" placeholder="Description"  data-min-height="150"> {{$description}} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5 fv-row">
                                <button type="button" class="btn btn-secondary btn-sm mt-5" data-toggle="add-more" onclick="adddescription()">
                                    {{ translate('Add New') }}
                                </button>
                            </div>
                        </div>
                    </div>

                    <!--begin::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h3>{{translate('Media')}}</h3>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="form-label">{{ translate('Slider Button') }}</label>
                                    <input type="text" placeholder="{{ translate('Slider Button') }}" id="slider_btn" name="slider_btn" class="form-control mb-2" value="{{$room->slider_btn}}">
                                </div>

                                <!--begin::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="form-label">{{ translate('Slider Button Link') }}</label>
                                    <input type="text" placeholder="{{ translate('Slider Button Link') }}" id="slider_btn_link" name="slider_btn_link" class="form-control mb-2" value="{{$room->slider_link}}">
                                </div>
                                <!--begin::Input group-->

                            <!--begin::Input group-->
                            <div class="fv-row mb-2">
                                <label class="form-label">{{ translate('Slider') }}</label>
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                    data-toggle="aizuploader" data-type="image" data-multiple="true">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <input type="hidden" name="sliders" value="{{ $room->sliders }}" class="selected-files" >
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to
                                                upload.')}}</h3>
                                            <span class="fs-7 fw-bold text-gray-400">{{translate('Room sliders')}}</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                                <div class="file-preview box sm">
                                </div>


                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Media-->
                    <!--end::General options-->
                    <div class="d-flex justify-content-end">

                        <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                            <span class="indicator-label">{{ translate('Update') }}</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
                <!--end::Main column-->
            </form>
        </div>
        <!--end::Container-->
    </div>
</div>

@endsection


@section('script')
    <script>
        function adddescription() {
            $('.description-room').append($('#description').html());
            AIZ.plugins.textEditor();
        }
    </script>
    <script id="description" type="text/template">
        <div class="row gutters-5 mt-5">
            <!--begin::Media-->
            <div class="col-md-3">
                <div class="card card-flush py-4">
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="fv-row mb-2">
                            <label class="form-label">{{ translate('Image') }}</label>
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_ecommerce_add_product_mediaa"
                                data-toggle="aizuploader" data-type="image" data-multiple="true">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <!--begin::Icon-->
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <input type="hidden" name="images[]" class="selected-files" >
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">{{translate('Drop files here or click to upload.')}}</h3>
                                        <span class="fs-7 fw-bold text-gray-400">{{translate('Room Images')}}</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                            <div class="file-preview box sm">
                            </div>


                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
            </div>
            <!--end::Media-->
            <div class="col-md-4">
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-5 fv-row">
                        <label class="form-label">{{ translate('Button Text') }}</label>
                        <input type="text" placeholder="{{ translate('Button Text') }}" name="button[]" class="form-control mb-2"  >
                    </div>
                    <!--begin::Input group-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-5 fv-row">
                        <label class="form-label">{{ translate('Button Link') }}</label>
                        <input type="text" placeholder="{{ translate('http//') }}" name="link[]" class="form-control mb-2" >
                    </div>
                    <!--begin::Input group-->
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
                <div class="card-body pt-0">
                    <div class="mb-5 fv-row">
                        <label class="form-label">{{ translate('Description') }}</label>
                        <textarea class="aiz-text-editor" data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description[]" placeholder="Description"  data-min-height="150"> </textarea>
                    </div>
                </div>
            </div>
        </div>
    </script>


@endsection
