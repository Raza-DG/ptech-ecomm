<div class="col-12 col-md-7 col-lg-6">
    <div class="checkout-order-review">

        <h3 id="order_review_heading">Your order</h3>

        <div id="order_review" class="woocommerce-checkout-review-order">
            <div class="woodmart-table-wrapper">
                <table class="shop_table woocommerce-checkout-review-order-table">
                    <thead>
                        <tr>
                            <th class="product-name">{{ translate('Product') }}</th>
                            <th class="product-total">{{ translate('Subtotal') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($carts as $key => $cartItem)
                            @php
                                $product = \App\Models\Product::find($cartItem['product_id']);
                                $product_stock = $product->stocks->where('variant', $cartItem['variation'])->first();
                                $total = $total + ($cartItem['price'] + $cartItem['tax']) * $cartItem['quantity'];
                                $product_name_with_choice = $product->getTranslation('name');
                                if ($cartItem['variation'] != null) {
                                    $product_name_with_choice = $product->getTranslation('name') . ' - ' . $cartItem['variation'];
                                }
                            @endphp
                            <tr class="cart_item requires-shipping--true">
                                <td class="product-name">
                                    {{ $product_name_with_choice }} &nbsp; <strong
                                        class="product-quantity">&times;&nbsp;{{ $cartItem['quantity'] }}</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">
                                            </span>{{ single_price(($cartItem['price'] + $cartItem['tax']) * $cartItem['quantity']) }}</bdi></span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                        <tr class="cart-subtotal">
                            <th>{{ translate('Tax') }}</th>
                            <td><span class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">
                                        </span>{{ single_price($cartItem['tax']) }}</bdi></span></td>
                        </tr>



                        <tr class="order-total">
                            <th>{{ translate('Total') }}</th>
                            <td><strong><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol"></span>{{ single_price($total) }}</bdi></span></strong>
                            </td>
                        </tr>


                    </tfoot>
                </table>
            </div><!-- .woodmart-table-wrapper -->
            <div id="payment" class="woocommerce-checkout-payment">
                <ul class="wc_payment_methods payment_methods methods">
                    @if (get_setting('credit_card') == 1)
                        <li class="wc_payment_method payment_method_limepay">
                            <input id="payment_method_limepay" type="radio" class="input-radio" name="payment_method"
                                value="limepay" checked='checked' data-order_button_text="" />

                            <label for="payment_method_limepay">
                                Credit Card <img src="{{ static_asset('assets-ecom/images/card-icons-list.svg') }}"
                                    alt="Credit Card" /> </label>
                            <div class="payment_box payment_method_limepay">
                                <p>Pay securely by Credit/Debit Card.</p>
                            </div>
                        </li>
                    @endif
                    @if (get_setting('paypal_payment') == 1)
                        <li class="wc_payment_method payment_method_paypal">
                            <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method"
                                value="paypal" data-order_button_text="Proceed to PayPal" />

                            <label for="payment_method_paypal">
                                PayPal <img
                                    src="{{ static_asset('assets-ecom/images/icons/Solutions-graphics-1-184x80.jpg') }}"
                                    alt="PayPal acceptance mark" /><a href="#" class="about_paypal" target="_blank"
                                    rel="noopener">What is PayPal?</a> </label>
                            <div class="payment_box payment_method_paypal" style="display:none;">
                                <p>Pay via PayPal; you can pay with your credit card if you don&#8217;t have a PayPal
                                    account.</p>
                            </div>
                        </li>
                    @endif
                    @if (get_setting('cash_payment') == 1)
                        @php
                            $digital = 0;
                            $cod_on = 1;
                            foreach ($carts as $cartItem) {
                                $product = \App\Models\Product::find($cartItem['product_id']);
                                if ($product['digital'] == 1) {
                                    $digital = 1;
                                }
                                if ($product['cash_on_delivery'] == 0) {
                                    $cod_on = 0;
                                }
                            }
                        @endphp
                        @if ($digital != 1 && $cod_on == 1)
                            <li class="wc_payment_method cash_on_delivery">
                                <input id="cash_on_delivery" type="radio" class="input-radio" name="payment_method"
                                    value="cash_on_delivery" data-order_button_text="Proceed to COD" />

                                <label for="cash_on_delivery">
                                    {{ translate('Cash on Delivery') }}
                                </label>
                                <div class="payment_box cash_on_delivery" style="display:none;">
                                    <p>{{ translate('Pay with cash upon delivery.') }}</p>
                                </div>
                            </li>
                        @endif
                    @endif

                </ul>
                <div class="form-row place-order">
                    <noscript>
                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the
                        <em>Update Totals</em> button before placing your order. You may be charged more than the amount
                        stated above if you fail to do so. <br /><button type="submit" class="button alt"
                            name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                    </noscript>

                    <div class="woocommerce-terms-and-conditions-wrapper">
                        <div class="woocommerce-privacy-policy-text">
                            <p>Your personal data will be used to process your order, support your experience throughout
                                this website, and for other purposes described in our<a href="#"
                                    class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                        </div>
                        <div class="woocommerce-terms-and-conditions"
                            style="display: none; max-height: 200px; overflow: auto;">
                            <h3><span style="font-weight: 400">Conditions of Use</span></h3>
                            <ol>
                                <li><strong> Using this website Means You Agree to These Terms.</strong></li>
                            </ol>
                            <p><span style="font-weight: 400">Please read these Terms of Use. By using this website, you
                                    accept these Terms of Use. These are an agreement between you and and govern your
                                    use of this website.</span></p>
                            <h1></h1>
                            <ol start="2">
                                <li><span style="font-weight: 400"><strong> Explanation</strong> </span></li>
                            </ol>
                            <h1></h1>
                            <ol start="27">
                                <li><strong> Additional Information Required by Law</strong></li>
                            </ol>
                        </div>
                        <p class="form-row validate-required pb20px">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                <input type="checkbox"
                                    class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                    name="terms" id="terms" />
                                <span class="woocommerce-terms-and-conditions-checkbox-text">I have read and agree to
                                    the website <a href="#" class="woocommerce-terms-and-conditions-link"
                                        target="_blank">terms and conditions</a></span>&nbsp;<span
                                    class="required">*</span>
                            </label>
                            <input type="hidden" name="terms-field" value="1" />
                        </p>
                    </div>


                    <button type="submit" class="button alt" name="woocommerce_checkout_place_order"
                        id="place_order" value="Place order" data-value="Place order">Place order</button>

                    <input type="hidden" id="woocommerce-process-checkout-nonce"
                        name="woocommerce-process-checkout-nonce" value="f83fa310b9" /><input type="hidden"
                        name="_wp_http_referer" value="/checkout/" />
                </div>
            </div>
        </div>


    </div>
</div>
