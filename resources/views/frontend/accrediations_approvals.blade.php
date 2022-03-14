@extends('frontend.layouts.app')
<link href="{{static_asset("assets/frontend/css/accrediation-approval.css")}}" media="all" rel="stylesheet">
@section('content')
<!-- .rey-siteHeader -->
<div class="rey-siteContent --tpl-template-builder-php main-div accrediation-aprovals" id="content">
    <section class="common-sections about-bg-gray" data-element_type="section" data-id="9161df8">
        <div class="elementor-widget-container">
            <p class="elementor-heading-title elementor-size-default">HOME/ <span class="text-red">{{ get_setting('accrediation_heading') }} {{ get_setting('accrediation_heading2') }}</span></p>
        </div>
    </section>
    <div class="rey-siteContainer rey-pbTemplate main-holder-div">
        <div class="rey-siteRow">
            <main class="rey-siteMain rey-filterSidebar" id="main">
                <div class="elementor elementor-1032" data-elementor-id="1032" data-elementor-settings="[]" data-elementor-type="wp-post">
                    <div class="elementor-section-wrap">
                        <section class="common-sections sim-content-section accrediaion-approvals-section">
                            <h1 class="jumbo-h Futura_Extra_Black italic">
                                {{ get_setting('accrediation_heading') }}
                                <br>
                                {{ get_setting('accrediation_heading2') }}
                            </h1>
                        </section>
                        <section class="common-sections" data-element_type="section" data-id="6167dae">
                            <div class="df sm-fl-d-column certificates-main-div">
                                @if (get_setting('accrediation_images') != null)
                                    @foreach (json_decode(get_setting('accrediation_images'), true) as $key => $value)
                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4175219" data-element_type="column" data-id="4175219">
                                            <div class="elementor-column-wrap--4175219 elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-82e66f4 elementor-widget elementor-widget-image" data-element_type="widget" data-id="82e66f4" data-widget_type="image.default">
                                                    <div class="elementor-widget-container" style="position:relative;">
                                                        <img alt="" class="attachment-large size-large" src="{{ uploaded_asset(json_decode(get_setting('accrediation_images2'), true)[$key]) ?? " " }}">
                                                        <div class="text-over">
                                                            <h3 class="heading-on-red-box read-bold Futura_Extra_Black italic text-red fz22px tal">{{ json_decode(get_setting('accrediation_title'), true)[$key] ?? " " }}</h3>
                                                            <br>
                                                            <h3 class="heading-on-red-box read-bold Futura_Extra_Black italic text-red fz22px tal">{{ json_decode(get_setting('accrediation_title2'), true)[$key] ?? " " }}</h3>
                                                        </div>
                                                        <div class="red-overlay"><img alt="current symbol" class="current-symbol" src="{{uploaded_asset($value)}}"></div>
                                                    </div><br>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </section>
                    </div>
                </div>
            </main><!-- .rey-siteMain -->
        </div>
    </div><!-- .rey-siteContainer -->
</div><!-- .rey-siteContent -->
@endsection
