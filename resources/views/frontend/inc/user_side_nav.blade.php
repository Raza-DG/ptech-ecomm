<div class="woodmart-my-account-sidebar">
    <h3 class="woocommerce-MyAccount-title entry-title">
        My account </h3>

    <nav class="woocommerce-MyAccount-navigation">
        <ul>
            <li
                class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard {{ areActiveRoutes(['dashboard']) }}">
                <a href="{{ route('dashboard') }}">{{ translate('Dashboard') }}</a>
            </li>
            <li
                class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders {{ areActiveRoutes(['purchase_history.index']) }}">
                <a href="{{ route('purchase_history.index') }}">{{ translate('Orders') }}</a>
            </li>
            <li
                class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders {{ areActiveRoutes(['wishlists.index']) }}">
                <a href="{{ route('wishlists.index') }}">{{ translate('Wish List') }}</a>
            </li>


            <li
                class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address {{ areActiveRoutes(['address']) }}  {{ areActiveRoutes(['address.add_billing_address']) }}  {{ areActiveRoutes(['address.address_edit']) }}">
                <a href="{{ route('address') }}">Addresses</a>
            </li>
            <li
                class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account {{ areActiveRoutes(['profile']) }}">
                <a href="{{ route('profile') }}">Account details</a>
            </li>
            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                <a href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </nav>

</div><!-- .woodmart-my-account-sidebar -->
