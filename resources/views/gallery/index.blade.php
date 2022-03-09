@extends('backend.layouts.app')
@section('content')
    @php
    $lang = Session::get('locale') ?? env('DEFAULT_LANGUAGE');
    @endphp


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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Gallery</h1>
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
                        <li class="breadcrumb-item text-dark">All Gallery / Create Gallery</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <div class="col text-md-left">
                                    <h5 class="mb-md-0 h6">{{ translate('Gallery') }}</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-primary" href="{{ route('gallery.create') }}">Add New Gallery</a>
                                </div>
                                <div class="col-md-2">
                                    <form class="" id="sort_testimonial" action="" method="GET">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control" id="search" name="search"
                                                @isset($sort_search) value="{{ $sort_search }}" @endisset
                                                placeholder="{{ translate('Type name & Enter') }}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ translate('Title') }}</th>
                                                <th>{{ translate('Name') }}</th>

                                                <th class="text-right">{{ translate('Options') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($galleries as $key => $gallery)

                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $gallery->getTranslation('title') }}</td>
                                                    <td>{{ $gallery->getTranslation('name') }}</td>
                                                    <td class="text-right">
                                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                            href="{{ route('gallery.edit', ['id' => $gallery->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                            title="{{ translate('Edit') }}">
                                                            <i class="las la-edit"></i>
                                                        </a>

                                                        <a href="#"
                                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                            data-href="{{ route('gallery.destroy', $gallery->id) }}"
                                                            title="{{ translate('Delete') }}">
                                                            <i class="las la-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="aiz-pagination">
                                    {{ $galleries->appends(request()->input())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-5">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <h5 class="mb-0 h6">{{ translate('Add New Special Offer') }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('specialoffer.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Title') }}</label>
                                        <input type="text" placeholder="{{ translate('Title') }}" name="title"
                                            class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Price') }}</label>
                                        <input type="text" placeholder="{{ translate('Price') }}" name="price"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Discount Price') }}</label>
                                        <input type="text" placeholder="{{ translate('Discount Price') }}" name="discount_price"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Unit') }}</label>
                                        <input type="text" placeholder="{{ translate('Unit') }}" name="unit"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="description">{{ translate('Description') }}</label>
                                            <textarea class="aiz-text-editor"  data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Sorting Id') }}</label>
                                        <input type="number" placeholder="0" name="sorting_id" value="1" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label for="name">{{ translate('Image') }}
                                            </label>
                                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                                    {{ translate('Browse') }}</div>
                                            </div>
                                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                            <input type="hidden" name="image" class="selected-files">
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
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection

@section('script')

    <script type="text/javascript">
        $('#type').on('change', function() {
            //alert();
            if ($('#type').val() == 'category') {
                $('#category_row').css('display', 'block');
                $('#brand_row').css('display', 'none');
                $('#custom_row').css('display', 'none');
            } else if ($('#type').val() == 'brand') {
                $('#category_row').css('display', 'none');
                $('#brand_row').css('display', 'block');
                $('#custom_row').css('display', 'none');

            } else if ($('#type').val() == 'custom') {
                console.log($('#type').val());
                $('#category_row').css('display', 'none');
                $('#brand_row').css('display', 'none');
                $('#custom_row').css('display', 'block');
            }
            AIZ.plugins.bootstrapSelect('refresh');
        });

        function updatestatus(el) {
            if (el.checked) {
                var status = 1;
            } else {
                var status = 0;
            }
            $.post('{{ route('specialoffer.status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function(data) {
                if (data == 1) {
                    AIZ.plugins.notify('success', '{{ translate('Published testimonial updated successfully') }}');
                } else {
                    AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                }
            });
        }


        function sort_testimonial(el) {
            $('#sort_testimonial').submit();
        }
    </script>
@endsection
