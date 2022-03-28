@extends('frontend.layouts.user_panel')

@section('panel_content')
   <div class="woocommerce-MyAccount-content">
                                            <div class="woocommerce-notices-wrapper"></div>

                                            <p>
                                                The following addresses will be used on the checkout page by default.</p>

                                            <div class="u-columns woocommerce-Addresses col2-set addresses">


                                                <div class="u-column1 col-1 woocommerce-Address">
                                                    <header class="woocommerce-Address-title title">
                                                        <h3>Billing address</h3>
                                                        <a href="{{route('address.add_billing_address')}}"   class="edit">Add</a>
                                                    </header>
                                                    <address>
                 
				 									 
				 @foreach (Auth::user()->addresses as $key => $address)
                    @if($address->type =="billing")
                        <div class="border p-3 pr-5 rounded mb-3 position-relative">
                            <div>
                                <span class="w-50 fw-600">{{ translate('Address') }}:</span>
                                <span class="ml-2">{{ $address->address }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Postal Code') }}:</span>
                                <span class="ml-2">{{ $address->postal_code }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('City') }}:</span>
                                <span class="ml-2">{{ optional($address->city)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('State') }}:</span>
                                <span class="ml-2">{{ optional($address->state)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Country') }}:</span>
                                <span class="ml-2">{{ optional($address->country)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Phone') }}:</span>
                                <span class="ml-2">{{ $address->phone }}</span>
                            </div>
                            @if ($address->set_default)
                                <div class="position-absolute right-0 bottom-0 pr-2 pb-3">
                                    <span class="badge badge-inline badge-primary">{{ translate('Default') }}</span>
                                </div>
                            @endif
                            <div class="dropdown position-absolute right-0 top-0">
                                <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('address.address_edit', $address->id) }}" >
                                        {{ translate('Edit') }}
                                    </a>
                                    @if (!$address->set_default)
                                        <a class="dropdown-item" href="{{ route('addresses.set_default', $address->id) }}">{{ translate('Make This Default') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('addresses.destroy', $address->id) }}">{{ translate('Delete') }}</a>
                                </div>
                            </div>
                        </div>
                @endif
                @endforeach</address>
                                                </div>


                                                <div class="u-column2 col-2 woocommerce-Address">
                                                    <header class="woocommerce-Address-title title">
                                                        <h3>Shipping address</h3>
                                                        <a href="{{route('address.add_shipping_address')}}"  class="edit">Add</a>
                                                    </header>
                                                    <address>
                                                       @foreach (Auth::user()->addresses as $key => $address)
                    @if($address->type =="shipping")
                        <div class="border p-3 pr-5 rounded mb-3 position-relative">
                            <div>
                                <span class="w-50 fw-600">{{ translate('Address') }}:</span>
                                <span class="ml-2">{{ $address->address }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Postal Code') }}:</span>
                                <span class="ml-2">{{ $address->postal_code }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('City') }}:</span>
                                <span class="ml-2">{{ optional($address->city)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('State') }}:</span>
                                <span class="ml-2">{{ optional($address->state)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Country') }}:</span>
                                <span class="ml-2">{{ optional($address->country)->name }}</span>
                            </div>
                            <div>
                                <span class="w-50 fw-600">{{ translate('Phone') }}:</span>
                                <span class="ml-2">{{ $address->phone }}</span>
                            </div>
                            @if ($address->set_default)
                                <div class="position-absolute right-0 bottom-0 pr-2 pb-3">
                                    <span class="badge badge-inline badge-primary">{{ translate('Default') }}</span>
                                </div>
                            @endif
                            <div class="dropdown position-absolute right-0 top-0">
                                <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                    <i class="la la-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('address.address_edit', $address->id) }}" >
                                        {{ translate('Edit') }}
                                    </a>
                                    @if (!$address->set_default)
                                        <a class="dropdown-item" href="{{ route('addresses.set_default', $address->id) }}">{{ translate('Make This Default') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('addresses.destroy', $address->id) }}">{{ translate('Delete') }}</a>
                                </div>
                            </div>
                        </div>
                @endif
                @endforeach</address>
                                                </div>


                                            </div>

                                        </div>

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

            $.post('{{ route('user.new.verify') }}', {_token:'{{ csrf_token() }}', email: email}, function(data){
                data = JSON.parse(data);
                $('.default').removeClass('d-none');
                $('.loading').addClass('d-none');
                if(data.status == 2)
                    AIZ.plugins.notify('warning', data.message);
                else if(data.status == 1)
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
