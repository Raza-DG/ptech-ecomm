@extends('backend.layouts.layout')

@section('content')
<style>
.btn-check:active+.btn.btn-primary, .btn-check:checked+.btn.btn-primary, .btn.btn-primary.active, .btn.btn-primary.show, .btn.btn-primary:active:not(.btn-active), .btn.btn-primary:focus:not(.btn-active), .btn.btn-primary:hover:not(.btn-active), .show>.btn.btn-primary{

    background-color: #1f2d1c !important;
}
.btn.btn-primary{
     background-color: #1f2d1c !important;
}
.link-primary{
    color: #1f2d1c !important;
}
    .link-primary:a, .link-primary:focus, .link-primary:hover {
    color: #1f2d1c !important;
}
.form-check.form-check-solid .form-check-input:checked {
    background-color: #1f2d1c;
}

 .links-logo_element {
    display: block;
    width: 175px;
    height: 175px;
    background-image: url(public/assets/frontend/static/logo/icon.svg);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: 50% 50%;
    -webkit-transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    -moz-transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    -ms-transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    -o-transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
    transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
}

</style>
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #ee2525">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <br><br><br><br>

                            <a href="{{ route('home') }}" class="wrap-links-logo" style="text-align: -webkit-center;">
                                <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}" class="h-60px" height="60">
                            </a>
                        <br>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #ffffff;">{{ translate('Welcome to') }}
                            {{ env('APP_NAME') }}</h1>

                            <br>
                        @if (get_setting('system_logo_white') != null)
                            <a href="https://digitalgraphiks.ae" target="_blank" class="wrap-links-logo" style="text-align: -webkit-center;">
                                <img src="{{ static_asset("assets/img/logo_white.svg") }}" class="h-60px" height="60">
                            </a>
                        @endif
                        <!--end::Title-->
                        <!--begin::Description-->

                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->

                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-20">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100" id="kt_sign_in_form" method="POST" role="form"
                            action="{{ route('login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Sign In to {{ env('APP_NAME') }}</h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input
                                    class="form-control form-control-lg form-control-solid {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    type="text" name="email" id="email" autocomplete="off" placeholder="{{ translate('email') }}" />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    @if (env('MAIL_USERNAME') != null && env('MAIL_PASSWORD') != null)
                                        <!--begin::Link-->
                                        <a href="{{ route('password.request') }}"
                                            class="link-primary fs-6 fw-bolder d-none">Forgot Password ?</a>
                                        <!--end::Link-->
                                    @endif
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input type="password"
                                    class="form-control form-control-lg form-control-solid {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required placeholder="{{ translate('Password') }}" />
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <!--end::Input-->
                                <!--begin::Input group-->
                                <div class="fv-row mt-10">
                                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }} />
                                        <span
                                            class="form-check-label fw-bold text-gray-700 fs-6">{{ translate('Remember Me') }}</span>
                                    </label>
                                </div>

                                <!--end::Input group-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg w-100 mb-5" style="background-color: #f51c1c;color:#ffffff">
                                    <span class="indicator-label">Continue</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        @if (env('DEMO_MODE') == 'On')
                            <div class="mt-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>admin@example.com</td>
                                            <td>123456</td>
                                            <td><button class="btn btn-info btn-xs"
                                                    onclick="autoFill()">{{ translate('Copy') }}</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        @endif
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->


@endsection

@section('script')
    <script type="text/javascript">
        function autoFill() {
            $('#email').val('admin@example.com');
            $('#password').val('123456');
        }
    </script>
@endsection
