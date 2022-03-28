@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="woocommerce-notices-wrapper"></div>
    <form method="post" action="{{ route('addresses.store') }}">
        @csrf
        <h3>Billing address</h3>
        <div class="woocommerce-address-fields">
            <div class="woocommerce-address-fields__field-wrapper">
                <input id="type" name="type" type="hidden" value="billing">

                <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10"><label
                        for="billing_first_name" class="">{{ translate('First name') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span
                        class="woocommerce-input-wrapper"><input type="text" class="input-text " name="first_name"
                            id="first_name" placeholder="" value="" autocomplete="given-name" required></span></p>

                <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20"><label
                        for="billing_last_name" class="">{{ translate('Last name') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span
                        class="woocommerce-input-wrapper"><input type="text" class="input-text " name="last_name"
                            id="last_name" placeholder="" value="" autocomplete="family-name" required></span></p>


                <p class="form-row form-row-first validate-required" id="first_name_field" data-priority="10"
                    style="width: 100%;">
                    <label for="billing_first_name" class="">{{ translate('Address') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                        <textarea class="form-control mb-3" placeholder="{{ translate('Type Address') }}" rows="2" name="address"
                            required></textarea>
                    </span>
                </p>



                <p class="form-row form-row-wide" id="billing_company_field" data-priority="30">
                    <label for="billing_company" class="">{{ translate('Country') }}&nbsp; <abbr
                            class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                        <select class="form-control " data-live-search="true"
                            data-placeholder="{{ translate('Select your country') }}" name="country_id" required>
                            <option value="">{{ translate('Select your country') }}</option>
                            @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </span>
                </p>




                <p class="form-row address-field validate-required form-row-wide" id="billing_address_1_field"
                    data-priority="50">
                    <label for="billing_address_1" class="">{{ translate('State') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper">
                        <select class="form-control mb-3" data-live-search="true" name="state_id" required>

                        </select></span>
                </p>


                <p class="form-row address-field validate-required validate-postcode form-row-wide"
                    id="billing_postcode_field" data-priority="90"
                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                    <label for="billing_postcode" class="">{{ translate('City') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span
                        class="woocommerce-input-wrapper"><select class="form-control mb-3" data-live-search="true"
                            name="city_id" required>

                        </select></span>
                </p>



                <p class="form-row address-field validate-required validate-postcode form-row-wide"
                    id="billing_postcode_field" data-priority="90"
                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                    <label for="billing_postcode" class="">{{ translate('Postal code') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span
                        class="woocommerce-input-wrapper"><input type="text" class="form-control mb-3"
                            placeholder="{{ translate('Your Postal Code') }}" name="postal_code" value=""
                            required></span>
                </p>



                <p class="form-row address-field validate-required validate-postcode form-row-wide"
                    id="billing_postcode_field" data-priority="90"
                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                    <label for="billing_postcode" class="">{{ translate('Phone') }}&nbsp;<abbr
                            class="required" title="required">*</abbr></label><span
                        class="woocommerce-input-wrapper"><input type="text" class="form-control mb-3"
                            placeholder="{{ translate('+971') }}" name="phone" value="" required></span>
                </p>




                <p>
                    <button type="submit" class="btn btn-sm btn-primary">{{ translate('Save') }}</button>
                </p>


            </div>
    </form>
@endsection

@section('modal')
    @include('frontend.partials.address_modal')
@endsection

@section('script')
    <script type="text/javascript">
        $('.new-email-verification').on('click', function() {
            $(this).find('.loading').removeClass('d-none');
            $(this).find('.default').addClass('d-none');
            var email = $("input[name=email]").val();

            $.post('{{ route('user.new.verify') }}', {
                _token: '{{ csrf_token() }}',
                email: email
            }, function(data) {
                data = JSON.parse(data);
                $('.default').removeClass('d-none');
                $('.loading').addClass('d-none');
                if (data.status == 2)
                    AIZ.plugins.notify('warning', data.message);
                else if (data.status == 1)
                    AIZ.plugins.notify('success', data.message);
                else
                    AIZ.plugins.notify('danger', data.message);
            });
        });
    </script>

    @if (get_setting('google_map') == 1)
        @include('frontend.partials.google_map')
    @endif
@endsection
