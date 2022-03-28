@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="woocommerce-MyAccount-content">
        <div class="woocommerce-notices-wrapper"></div>
        <p>
            Hello <strong>{{ Auth::user()->name }}</strong>, ( <a href="{{ route('logout') }}">Log out</a> )</p>

        <p>
            From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping
                and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>
        <div class="woodmart-my-account-links">
            <div class="dashboard-link">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </div>
            <div class="orders-link">
                <a href="{{ route('purchase_history.index') }}">Orders</a>
            </div>
            <div class="edit-address-link">
                <a href="{{ route('address') }}">Addresses</a>
            </div>
            <div class="edit-account-link">
                <a href="{{ route('profile') }}">Account details</a>
            </div>
            <div class="customer-logout-link">
                <a href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(function($) {
                $('.wc_pip_view_invoice').attr('target', '_blank');
            });
        </script>
    </div>
@endsection
