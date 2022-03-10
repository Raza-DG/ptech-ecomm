@extends('frontend.layouts.app')
@php
if (Session::has('locale')) {
    $lang = Session::get('locale', Config::get('app.locale'));
} else {
    $lang = 'en';
}
@endphp
<style>
    .text-part div{
        color: #4c4c4c;
        font-size: 16px;
        /* font-weight: 600; */
        padding: 2px 0;
    }
</style>
@section('content')

    <!-- .rey-siteHeader -->
    <div class="rey-siteContent main-div --tpl-template-builder-php" id="content">
        <section class="common-sections about-bg-gray" data-element_type="section" data-id="9161df8">
            <div class="elementor-widget-container">
                <p class="elementor-heading-title elementor-size-default">HOME/ <span class="text-red">ABOUT US</span></p>
            </div>
        </section>
        <div class="rey-siteContainer rey-pbTemplate main-holder-div">
            <div class="rey-siteRow">
                <main class="rey-siteMain rey-filterSidebar" id="main">
                    <div class="elementor elementor-1032" data-elementor-id="1032" data-elementor-settings="[]" data-elementor-type="wp-post">
                        <div class="elementor-section-wrap common-sections">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-9161df8 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default pt20px" data-element_type="section" data-id="9161df8" style="text-align:center;">
                                <img alt="ISO" class="circular-iso-img" src="{{uploaded_asset(get_setting('about_our_story_image'))}}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-eleme	nt elementor-element-8d7b482" data-element_type="column" data-id="8d7b482">
                                        <div class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="dd31e89" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="text-red pt60px mb0">{{ get_setting('about_our_story') }}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-55f2920 u-links-anim-ul elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="55f2920" data-widget_type="text-editor.default">
                                                <div class="text-part text-responsive" style="width:100%;max-width:700px;margin:auto;padding:0px 0px 0px 0px;">
                                                    <div class="elementor-widget-container">
                                                        <br>
                                                        {!! get_setting('about_our_story_description',null,$lang) ?? "" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><br>
                            <br>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-6167dae elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="6167dae">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4175219" data-element_type="column" data-id="4175219">
                                        <div class="elementor-column-wrap--4175219 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-82e66f4 elementor-widget elementor-widget-image" data-element_type="widget" data-id="82e66f4" data-widget_type="image.default">
                                                <div class="elementor-widget-container"><img alt="" class="attachment-large size-large" src="{{uploaded_asset(get_setting('about_our_mission_image'))}}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c16c300 aic" data-element_type="column" data-id="c16c300">
                                        <div class="elementor-column-wrap--c16c300 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="dd31e89" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <br>
                                                    <h2 class="text-red pt60px mb0 fz22px">{{ get_setting('about_our_mission') }}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-39e40ef u-links-anim-ul elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="39e40ef" data-widget_type="text-editor.default">
                                                <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                    <div class="elementor-widget-container">
                                                        {!! get_setting('about_our_mission_description',null,$lang) ?? "" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><br>
                            <br>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-9161df8 elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="9161df8" style="text-align:center;">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d7b482" data-element_type="column" data-id="8d7b482">
                                        <div class="elementor-column-wrap--8d7b482 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5910655 u-links-anim-ul elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="5910655" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <h3><span class="text-red futura_medium_condensed_bt">{{get_setting("about_our_strength")}}</span></h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-14c2e0f u-links-anim-ul elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="14c2e0f" data-widget_type="text-editor.default">
                                                <div class="text-part text-responsive" style="width:100%;max-width:700px;margin:auto;padding:0px 0px 0px 0px;">
                                                    <div class="elementor-widget-container">
                                                        {!! get_setting('about_our_strength_description',null,$lang) ?? "" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><br>
                            <br>
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-6167dae elementor-section-boxed elementor-section-gap-default elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="6167dae">
                                <div class="elementor-container elementor-column-gap-default col-reverse-sm">
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c16c300" data-element_type="column" data-id="c16c300">
                                        <div class="elementor-column-wrap--c16c300 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dd31e89 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="dd31e89" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="text-red pt60px mb0 fz22px">{{ get_setting('about_quality_policy') }}</h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-39e40ef u-links-anim-ul elementor-widget elementor-widget-text-editor" data-element_type="widget" data-id="39e40ef" data-widget_type="text-editor.default">
                                                <div class="text-part" style="width:100%;padding:0px 0px 0px 0px;">
                                                    <div class="elementor-widget-container">
                                                        {!! get_setting('about_quality_policy_description',null,$lang) ?? "" !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4175219" data-element_type="column" data-id="4175219">
                                        <div class="elementor-column-wrap--4175219 elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-82e66f4 elementor-widget elementor-widget-image" data-element_type="widget" data-id="82e66f4" data-widget_type="image.default">
                                                <div class="elementor-widget-container"><img alt="" class="attachment-large sm-pb30px size-large" src="{{uploaded_asset(get_setting('about_quality_policy_image'))}}"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section><br>
                            <br>
                        </div>
                    </div>
                </main><!-- .rey-siteMain -->
            </div>
        </div><!-- .rey-siteContainer -->
    </div><!-- .rey-siteContent -->

@endsection

@section('script')
    <script>
        $(document).ready(function(){

            $(".js-open-moretext").click(function(){
                $(this).hide();
                $(".js-close-moretext").show();
                $(".moretext-module").addClass("open");
            });
            $(".js-close-moretext").click(function(){
                $(this).hide();
                $(".js-open-moretext").show();
                $(".moretext-module").removeClass("open");
            });
           // $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
               // $('#section_featured').html(data);
                //AIZ.plugins.slickCarousel();
            //});
           // $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
              //  $('#section_best_selling').html(data);
               // AIZ.plugins.slickCarousel();
          //  });
           // $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
             //   $('#auction_products').html(data);
             //   AIZ.plugins.slickCarousel();
            //});
            //$.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
               // $('#section_home_categories').html(data);
            //    AIZ.plugins.slickCarousel();
          //  });
          // $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
              //  $('#section_best_sellers').html(data);
            //    AIZ.plugins.slickCarousel();
            //});
        });
    </script>
@endsection
