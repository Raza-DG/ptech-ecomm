@extends('backend.layouts.app')

@php

function jt_get_font_icons()
{
    return [
        'icon-c2t-transfer_towerplaza' => 'e9da',
        'icon-c2t-wifi_towerplaza' => 'e9db',
        'icon-c2t-agua_cafe_towerplaza' => 'e900',
        'icon-c2t-albornoz_towerplaza' => 'e901',
        'icon-c2t-almuadas_towerplaza' => 'e902',
        'icon-c2t-babysister_towerplaza' => 'e903',
        'icon-c2t-billar_towerplaza' => 'e904',
        'icon-c2t-botique_towerplaza' => 'e905',
        'icon-c2t-caja_fuerta_towerplaza' => 'e906',
        'icon-c2t-camara_seguridad_towerplaza' => 'e907',
        'icon-c2t-climatizacion_towerplaza' => 'e908',
        'icon-c2t-cobertura_towerplaza' => 'e909',
        'icon-c2t-conserges_towerplaza' => 'e90a',
        'icon-c2t-entrada_salida_towerplaza' => 'e90b',
        'icon-c2t-galan_plancha_towerplaza' => 'e90c',
        'icon-c2t-golf_towerplaza' => 'e90d',
        'icon-c2t-habitaciones_comunicadas_towerplaza' => 'e90e',
        'icon-c2t-hotel_towerplaza' => 'e90f',
        'icon-c2t-lavanderia_towerplaza' => 'e910',
        'icon-c2t-medico_towerplaza' => 'e911',
        'icon-c2t-minibar_towerplaza' => 'e912',
        'icon-c2t-minibus_towerplaza' => 'e913',
        'icon-c2t-musica_towerplaza' => 'e914',
        'icon-c2t-nespresso_towerplaza' => 'e915',
        'icon-c2t-parking_electrico_towerplaza' => 'e916',
        'icon-c2t-pet_freindly_towerplaza' => 'e917',
        'icon-c2t-pet_juguete_towerplaza' => 'e918',
        'icon-c2t-reunion_towerplaza' => 'e919',
        'icon-c2t-sala_lectura_towerplaza' => 'e91a',
        'icon-c2t-servicio_towerplaza' => 'e91b',
        'icon-c2t-spa_1_towerplaza' => 'e91c',
        'icon-c2t-spa_2_towerplaza' => 'e91d',
        'icon-c2t-tenis_towerplaza' => 'e91e',
        'icon-c2t-tv_towerplaza' => 'e91f',
        'icon-c2t-accesoplaya_01' => 'e600',
        'icon-c2t-ducha_01' => 'e601',
        'icon-c2t-ducha_02' => 'e602',
        'icon-c2t-ducha_03' => 'e603',
        'icon-c2t-jacuzzi_01' => 'e604',
        'icon-c2t-jacuzzi_02' => 'e605',
        'icon-c2t-jacuzzi_03' => 'e606',
        'icon-c2t-piscina_01' => 'e607',
        'icon-c2t-piscina_02' => 'e608',
        'icon-c2t-piscinachillout_01' => 'e609',
        'icon-c2t-piscinacubierta_01' => 'e60a',
        'icon-c2t-airecondicionado_01' => 'e60b',
        'icon-c2t-albornoz_01' => 'e60c',
        'icon-c2t-amenities_01' => 'e60d',
        'icon-c2t-animacion_01' => 'e60e',
        'icon-c2t-animacion_02' => 'e60f',
        'icon-c2t-balcon_01' => 'e611',
        'icon-c2t-bar_01' => 'e613',
        'icon-c2t-bar_02' => 'e614',
        'icon-c2t-bar_03' => 'e615',
        'icon-c2t-bar_04' => 'e616',
        'icon-c2t-bar_05' => 'e617',
        'icon-c2t-bilingue_01' => 'e618',
        'icon-c2t-billar_01' => 'e619',
        'icon-c2t-buggy_01' => 'e61a',
        'icon-c2t-cafe_01' => 'e61b',
        'icon-c2t-cajafuerte_01' => 'e61c',
        'icon-c2t-calefacion_01' => 'e61d',
        'icon-c2t-cama_01' => 'e61e',
        'icon-c2t-cama_02' => 'e61f',
        'icon-c2t-camabalinesa_01' => 'e620',
        'icon-c2t-cambiomoneda_01' => 'e621',
        'icon-c2t-cambiomoneda_02' => 'e622',
        'icon-c2t-cartarestaurante_01' => 'e623',
        'icon-c2t-champan_01' => 'e624',
        'icon-c2t-check_01' => 'e625',
        'icon-c2t-check_02' => 'e626',
        'icon-c2t-ciclo_01' => 'e627',
        'icon-c2t-ciclo_02' =>  "e628",
        "icon-c2t-ciclogaraje_01" =>  "e629",
        'icon-c2t-coche_01' => 'e62a',
        'icon-c2t-coche_02' => 'e62b',
        'icon-c2t-cuna_01' => 'e62c',
        'icon-c2t-desayuno_01' => 'e62d',
        'icon-c2t-dvd_01' => 'e62e',
        'icon-c2t-espejoaumento_01' => 'e62f',
        'icon-c2t-excursiones_01' => 'e630',
        'icon-c2t-excursiones_02' => 'e631',
        'icon-c2t-futbol_01' => 'e632',
        'icon-c2t-gimnasio_01' => 'e633',
        'icon-c2t-gimnasio_02' => 'e634',
        'icon-c2t-golf_01' => 'e635',
        'icon-c2t-guardaequipaje_01' => 'e636',
        'icon-c2t-habitacionamplia_01' => 'e637',
        'icon-c2t-hamaca_01' => 'e638',
        'icon-c2t-hamaca_02' => 'e639',
        'icon-c2t-hilomusical_01' => 'e63a',
        'icon-c2t-hipica_01' => 'e63b',
        'icon-c2t-info_01' => 'e63c',
        'icon-c2t-jardin_01' => 'e63d',
        'icon-c2t-jardin_02' => 'e63e',
        'icon-c2t-juegos_01' => 'e63f',
        'icon-c2t-lavanderia_01' => 'e640',
        'icon-c2t-masaje_01' => 'e641',
        'icon-c2t-medico_01' => 'e642',
        'icon-c2t-mesa_01' => 'e643',
        'icon-c2t-minibar_01' => 'e644',
        'icon-c2t-minusvalidos_01' => 'e645',
        'icon-c2t-nevera_01' => 'e646',
        'icon-c2t-padel_01' => 'e647',
        'icon-c2t-persona_01' => 'e648',
        'icon-c2t-persona_02' => 'e649',
        'icon-c2t-persona_03' => 'e64a',
        'icon-c2t-persona_04' => 'e64b',
        'icon-c2t-pinpong_01' => 'e64c',
        'icon-c2t-plantaprimera_01' => 'e64d',
        'icon-c2t-prensa_01' => 'e64e',
        'icon-c2t-puntointernet_01' => 'e64f',
        'icon-c2t-recepcion_01' => 'e650',
        'icon-c2t-restaurante_01' => 'e651',
        'icon-c2t-restaurante_02' => 'e652',
        'icon-c2t-salaconferencias_01' => 'e653',
        'icon-c2t-sauna_01' => 'e654',
        'icon-c2t-secador_01' => 'e655',
        'icon-c2t-serviciohabitaciones_01' => 'e656',
        'icon-c2t-sofa_01' => 'e657',
        'icon-c2t-taxi_01' => 'e658',
        'icon-c2t-te_01' => 'e659',
        'icon-c2t-te_02' => 'e65a',
        'icon-c2t-telefono_01' => 'e65b',
        'icon-c2t-television_01' => 'e65c',
        'icon-c2t-tenis_01' => 'e65d',
        'icon-c2t-terraza_01' => 'e65e',
        'icon-c2t-terraza_02' => 'e65f',
        'icon-c2t-tienda_01' => 'e660',
        'icon-c2t-toalla_01' => 'e661',
        'icon-c2t-transfer_01' =>  'e662',
        'icon-c2t-vistaciudad_01' => 'e663',
        'icon-c2t-vistaciudad_02' => 'e664',
        'icon-c2t-vistalateral_01' => 'e665',
        'icon-c2t-vistalateral_02' => 'e666',
        'icon-c2t-vistamar_01' => 'e667',
        'icon-c2t-voley_01' => 'e668',
        'icon-c2t-wifi_01' => 'e669',
        'icon-c2t-zapatillas_01' => 'e66a',
        'icon-c2t-zonalectura_01' => 'e66b',
        'icon-c2t-bar_06' => 'e66c',
        'icon-c2t-cajafuerte_02' => 'e66d',
        'icon-c2t-cama_03' => 'e66e',
        'icon-c2t-cama_04' => 'e66f',
        'icon-c2t-fumar_01' => 'e670',
        'icon-c2t-parqueinfantil_01' => 'e671',
        'icon-c2t-reuniones_01' => 'e672',
        'icon-c2t-reuniones_02' => 'e673',
        'icon-c2t-reuniones_03' => 'e674',
        'icon-c2t-reuniones_04' => 'e675',
        "icon-c2t-reuniones_05" => 'e676',
        'icon-c2t-reuniones_06' => 'e677',
        'icon-c2t-reuniones_07' => 'e678',
        'icon-c2t-reuniones_08' => 'e679',
        'icon-c2t-solarium_01' => 'e67a',
        'icon-c2t-reuniones_09' => 'e67b',
        'icon-c2t-cojin_01' => 'e67c',
        'icon-c2t-despertador_01' => 'e67d',
        'icon-c2t-despertador_02' => 'e67e',
        'icon-c2t-espejo_01' => 'e67f',
        'icon-c2t-excursion_03' => 'e680',
        'icon-c2t-familia_01' => 'e681',
        'icon-c2t-fax_01' => 'e682',
        'icon-c2t-friocalor_01' => 'e683',
        'icon-c2t-fumar_02' => 'e684',
        'icon-c2t-fumar_03' => 'e685',
        'icon-c2t-futbol_02' => 'e686',
        'icon-c2t-gluten_01' => 'e687',
        'icon-c2t-gluten_02' => 'e688',
        'icon-c2t-grill_01' => 'e689',
        'icon-c2t-guarderia_01' => 'e68a',
        'icon-c2t-limpieza_01' => 'e68b',
        'icon-c2t-agua_2' => 'e9d6'
    ];
}

@endphp

<style>
    .ic2t {
        font-family: 'c2t' !important;
    }

</style>
<link rel="stylesheet" href="{{ static_asset('assets/frontend/static/fonts/style.css') }}">

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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Room Facilities</h1>
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
                        <li class="breadcrumb-item text-dark">All Rooms Facilities / Create Rooms Facility</li>
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
                                    <h5 class="mb-md-0 h6">{{ translate('Rooms Facilities') }} - {{$room->name}}</h5>
                                </div>
                                <div class="col-md-4">
                                    <form class="" id="sort_sliders" action="" method="GET">
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
                                                <th>{{ translate('Image') }}</th>
                                                <th class="text-right">{{ translate('Options') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roomfacilities as $key => $roomfacility)
                                                <tr>
                                                    <td>{{ ($key+1) + ($roomfacilities->currentPage() - 1) * $roomfacilities->perPage() }}</td>
                                                    <td>{{ $roomfacility->name }}</td>
                                                    <td>
                                                        <img src="{{ uploaded_asset($roomfacility->image) ?? static_asset("assets/img/placeholder-rect.jpg") }}" alt="{{ translate('roomfacility image') }}" class="h-50px">
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-soft-primary btn-icon btn-circle btn-sm"
                                                            href="{{ route('roomfacility.edit', ['id' => $roomfacility->id, 'lang' => env('DEFAULT_LANGUAGE')]) }}"
                                                            title="{{ translate('Edit') }}">
                                                            <i class="las la-edit"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                                            data-href="{{ route('roomfacility.destroy', $roomfacility->id) }}"
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
                                    {{ $roomfacilities->appends(request()->input())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card card-flush">
                            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                <h5 class="mb-0 h6">{{ translate('Add New Room Facilities') }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('roomfacilities.store') }}" method="POST">
                                    @csrf
                                    <input type="text" name="room_id" value="{{$room->id}}" class="form-control d-none">
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Name') }}</label>
                                        <input type="text" placeholder="{{ translate('Name') }}" name="name"
                                            class="form-control" autofocus>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Sub Name') }}</label>
                                        <input type="text" placeholder="{{ translate('Sub Name') }}" name="decription"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Sorting Id') }}</label>
                                        <input type="number" placeholder="0" name="sorting_id" class="form-control">
                                    </div>
                                    <div class="form-group mb-5">
                                        <div class="d-flex flex-column">
                                            <select class="form-select mb-2 ic2t" data-hide-search="false" data-placeholder="Select an Icon" name="icon" data-live-search="true" >
                                                <option value="">Icon</option>
                                                @foreach (jt_get_font_icons() as $icon_key => $icon)
                                                    @php
                                                        $ico = '&#x' . $icon . ';';
                                                    @endphp
                                                    <option value="{{ $icon_key }}">
                                                        {{ mb_convert_encoding($ico, 'UTF-8', 'HTML-ENTITIES') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name">{{ translate('Image') }}</label>
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
        function sort_sliders(el) {
            $('#sort_sliders').submit();
        }
        $(".ic2t").focus(function(){
            $(this).css('font-size','30px');
        });
        $(".ic2t").focusout(function(){
            $(this).css('font-size','10px');
        });
    </script>
@endsection
