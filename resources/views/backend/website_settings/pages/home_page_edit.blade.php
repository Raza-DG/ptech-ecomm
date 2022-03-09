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
        'icon-c2t-limpieza_01' => 'e68b'
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

                    {{-- Home Slider --}}
                    <div class="card mt-5">
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
                    <div class="card">
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
                    <div class="card">
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
                    <div class="card">
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
                                                <div class="col-md-2 mb-5">
                                                    <div class="d-flex flex-column">
                                                        <input type="hidden" name="types[]" value="advantage_icon">
                                                        <select class="form-select mb-2 ic2t"
                                                            data-hide-search="false"
                                                            data-placeholder="Select an Icon" name="advantage_icon[]"
                                                            data-live-search="true">
                                                            <option value="">Icon</option>
                                                            @foreach (jt_get_font_icons() as $icon_key => $icon)
                                                                @php
                                                                    $ico = '&#x' . $icon . ';';
                                                                @endphp
                                                                <option value="{{ $icon_key }}" {{json_decode(get_setting('advantage_icon'), true)[$key] == $icon_key ? "selected" : "" }}>
                                                                    {{ mb_convert_encoding($ico, 'UTF-8', 'HTML-ENTITIES') }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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
                                            <div class="col-md-2 mb-5">
                                                <div class="d-flex flex-column">
                                                    <input type="hidden" name="types[]" value="advantage_icon">
                                                    <select class="form-select mb-2 ic2t"
                                                        data-hide-search="false"
                                                        data-placeholder="Select an Icon" name="advantage_icon[]"
                                                        data-live-search="true">
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
                    <div class="card">
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
                    <div class="card d-none">
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

                                <div class="fv-row mb-2">
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
