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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Testimonial</h1>
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
                        <li class="breadcrumb-item text-dark">All Testimonials / Create Testimonial</li>
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

                    <div class="col-md-7">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <div class="col text-md-left">
                                    <h5 class="mb-md-0 h6">{{ translate('Testimonials') }}</h5>
                                </div>
                                <div class="col-md-4">
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
                                                <th>{{ translate('Name') }}</th>
                                                <th>{{ translate('designation') }}</th>
                                                {{-- <th>{{ translate('Image') }}</th> --}}
                                                <th>{{ translate('Status') }}</th>
                                                <th class="text-right">{{ translate('Options') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($testimonials as $key => $testimonial)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $testimonial->getTranslation('name') }}</td>
                                                    <td>{{ $testimonial->getTranslation('designation') }}</td>
                                                    {{-- <td>
                                                        <img src="{{ uploaded_asset($testimonial->image) ?? static_asset('assets/img/placeholder-rect.jpg') }}" alt="{{ translate('testimonial image') }}" class="h-50px">
                                                    </td> --}}
                                                    <td style="text-transform: uppercase">
                                                        <label
                                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid mb-5 d-block">
                                                            <span
                                                                class="form-check-label ms-0 fw-bolder fs-6 text-gray-700 ps-5">
                                                                <input class="form-check-input" onchange="updatestatus(this)" type="checkbox"
                                                                    {{ $testimonial->status == 1 ? 'checked' : '' }} value="{{ $testimonial->id }}">
                                                            </span>
                                                        </label>
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                            href="{{ route('testimonial.edit', ['id' => $testimonial->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                            title="{{ translate('Edit') }}">
                                                            <i class="las la-edit"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                            data-href="{{ route('testimonial.destroy', $testimonial->id) }}"
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
                                    {{ $testimonials->appends(request()->input())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <h5 class="mb-0 h6">{{ translate('Add New Testimonial') }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('testimonial.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Name') }}</label>
                                        <input type="text" placeholder="{{ translate('Name') }}" name="name"
                                            class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Designation') }}</label>
                                        <input type="text" placeholder="{{ translate('Designation') }}" name="designation"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Description') }}</label>
                                            <textarea class="aiz-text-editor"  data-buttons='[["font", ["bold", "underline", "italic", "clear"]],["para", ["ul", "ol", "paragraph"]],["style", ["style"]],["color", ["color"]],["table", ["table"]],["insert", ["link", "picture", "video"]],["view", ["fullscreen", "codeview", "undo", "redo"]]]' name="description"></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Sorting Id') }}</label>
                                        <input type="number" placeholder="0" name="sorting_id" value="1" class="form-control" required>
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
                    </div>

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
            $.post('{{ route('testimonial.status') }}', {
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
