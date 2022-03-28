@extends('frontend.layouts.user_panel')

@section('panel_content')

<h3> Account Details</h3>
<form  action="{{ route('user.profile.update') }}" method="post">
		@csrf		 

                                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                                    <label for="account_first_name">Name&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="name" autocomplete="given-name" value="{{ Auth::user()->name }}" required>
                                                </p>
                                                <p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                                    <label for="account_last_name">Phone&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="phone" autocomplete="family-name" value="{{ Auth::user()->phone }}">
                                                </p>
                                                <div class="clear"></div>

                                                
                                                <div class="clear"></div>

                                                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                    <label for="account_email">Email address&nbsp;<span class="required">*</span></label>
                                                   <input type="email" class="form-control" placeholder="{{ translate('Your Email')}}" name="email" value="{{ Auth::user()->email }}" required autocomplete="off"/>
                                                </p>

                                                <fieldset>
                                                    <legend>Password change</legend>

                                                 
                                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                        <label for="password_1">New password (leave blank to leave unchanged)</label>
                                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="new_password" id="new_password" autocomplete="off">
                                                    </p>
                                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                        <label for="password_2">Confirm new password</label>
                                                        <input type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="confirm_password" id="confirm_password" autocomplete="off">
                                                    </p>
                                                </fieldset>
                                                <div class="clear"></div>


                                                <p>
                                                  <button type="submit" class="woocommerce-Button button" name="save_account_details" value="Save changes">Save changes</button>
                                                </p>

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
