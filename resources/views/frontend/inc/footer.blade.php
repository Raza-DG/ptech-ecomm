@php
if (Session::has('locale')) {
    $locale = Session::get('locale', Config::get('app.locale'));
} else {
    $locale = 'en';
}
@endphp
<footer class="rey-siteFooter rey-siteFooter--custom">
	<div class="elementor elementor-293" data-elementor-id="293" data-elementor-settings="[]" data-elementor-type="wp-post">
		<div class="elementor-section-wrap">
			<section class="elementor-section elementor-top-section elementor-element elementor-element-a8c3f9d rey-section-stretched elementor-section-full_width rey-flexWrap rey-section-bg--classic elementor-section-gap-default elementor-section-height-default elementor-section-height-default gutter0" data-element_type="section" data-id="a8c3f9d" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-aa811e7 bg-light-gray" data-element_type="column" data-id="aa811e7">
						<div class="elementor-column-wrap--aa811e7 elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-cc5a639 elementor-widget elementor-widget-image" data-element_type="widget" data-id="cc5a639" data-widget_type="image.default">
								<div class="elementor-widget-container">
									<img alt="" class="attachment-full size-full logo-in-footer" data-lazy-src="assets/img/logo.svg" src="assets/img/logo.svg">
									<div class="middle-text">
										<p class="elementor-icon-box-description pb10px"> @php echo get_setting('about_us_description'); @endphp </p>
										<p><strong><a href="mailto:{{ get_setting('contact_email',null,App::getLocale()) }}">{{ get_setting('contact_email',null,App::getLocale()) }}</a></strong></p>
										<p><strong><a href="tel:{{ get_setting('contact_phone',null,App::getLocale()) }}">{{ get_setting('contact_phone',null,App::getLocale()) }}</a></strong></p>
									</div>
									<div class="elementor-widget-container">
										<p class="fw600">
                                            @php
                                                echo get_setting('frontend_copyright_text');
                                            @endphp
                                        </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="w70per">
						<div class="w100per df">
							<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-df86efb" data-element_type="column" data-id="df86efb">
								<div class="elementor-column-wrap--df86efb elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-35cb967 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="35cb967" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h4 class="elementor-heading-title elementor-size-default">{{ get_setting('widget_one',null,App::getLocale()) }}</h4>
										</div>
									</div>
									<div class="elementor-element elementor-element-7f2a452 reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="7f2a452" data-widget_type="reycore-menu.default">
										<div class="elementor-widget-container">
											<div class="rey-element reyEl-menu">
												<div class="reyEl-menu-navWrapper">
													<ul class="reyEl-menu-nav rey-navEl --menuHover-none" id="menu-footer-shop">
                                                        @if (get_setting('widget_one_labels',null,App::getLocale()) != null)
                                                            @foreach (json_decode(get_setting('widget_one_labels',null,App::getLocale()), true) as $key => $value)
                                                                <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1013" id="menu-item-1013">
                                                                    <a href="{{ json_decode( get_setting('widget_one_links'), true)[$key] ?? "#" }}"><span>{{ $value }}</span></a>
                                                                </li>
                                                            @endforeach
                                                        @endif
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-9b25ac9" data-element_type="column" data-id="9b25ac9">
								<div class="elementor-column-wrap--9b25ac9 elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-f11c411 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="f11c411" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h4 class="elementor-heading-title elementor-size-default">{{ get_setting('widget_second',null,App::getLocale()) }}</h4>
										</div>
									</div>
									<div class="elementor-element elementor-element-09ff7ac reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="09ff7ac" data-widget_type="reycore-menu.default">
										<div class="elementor-widget-container">
											<div class="rey-element reyEl-menu">
												<div class="reyEl-menu-navWrapper">
													<ul class="reyEl-menu-nav rey-navEl --menuHover-none" id="menu-footer-help">
                                                        @if (get_setting('widget_second_labels',null,App::getLocale()) != null)
                                                            @foreach (json_decode(get_setting('widget_second_labels',null,App::getLocale()), true) as $key => $value)
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1031" id="menu-item-1031">
                                                                    <a href="{{ json_decode( get_setting('widget_second_links'), true)[$key] ?? "#" }}">{{$value}}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-fb9439e" data-element_type="column" data-id="fb9439e">
								<div class="elementor-column-wrap--fb9439e elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-c79c287 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="c79c287" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h4 class="elementor-heading-title elementor-size-default">{{ get_setting('widget_third',null,App::getLocale()) }}</h4>
										</div>
									</div>
									<div class="elementor-element elementor-element-09ff7ac reyEl-menu--vertical reyEl-menu--cols-1 --icons-start elementor-widget elementor-widget-reycore-menu" data-element_type="widget" data-id="09ff7ac" data-widget_type="reycore-menu.default">
										<div class="elementor-widget-container">
											<div class="rey-element reyEl-menu">
												<div class="reyEl-menu-navWrapper">
													<ul class="reyEl-menu-nav rey-navEl --menuHover-none" id="menu-footer-help">
                                                        @if (get_setting('widget_third_labels',null,App::getLocale()) != null)
                                                            @foreach (json_decode(get_setting('widget_third_labels',null,App::getLocale()), true) as $key => $value)
                                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1031" id="menu-item-1031">
                                                                    <a href="{{ json_decode( get_setting('widget_third_links'), true)[$key] ?? "#" }}">{{ $value }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="w100per">
							<div class="elementor-widget-container tar">
								<p class="fw600">Website by <a href="https://digitalgraphiks.ae/">Digital Graphiks</a></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</footer>

@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
