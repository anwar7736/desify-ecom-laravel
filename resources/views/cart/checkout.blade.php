@extends('layouts.app')
@section('content')
<div class="master-column-wrapper">
<div class="container">
    <div class="row">
        <div class="col-sm-12 center-1">
            <div class="page checkout-page">
            <div class="page-title">
                <h1>Checkout</h1>
            </div>
            <div class="page-body checkout-data">
                <div class="opc" id="checkout-steps">
                    <div class="step-title">
                        <h2 class="title">Billing address</h2>
                    </div>
                    <div class="step a-item">
                        <form action="">
                        <div id="checkout-billing-load">
                            <div class="checkout-data">
                                <div class="section new-billing-address">
                                    <div class="enter-address">
                                    <div class="edit-address">
                                        <div class="inputs">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" id="fullName" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="Address">Address</label>
                                            <input type="text" id="Address" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="City">City</label>
                                            <input type="text" id="City" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="step-title">
                        <h2 class="title">Shipping address</h2>
                    </div>
                    <div class="step a-item">
                        <form action="">
                        <div id="checkout-billing-load">
                            <div class="checkout-data">
                                <div class="section new-billing-address">
                                    <div class="enter-address">
                                    <div class="edit-address">
                                        <div class="inputs">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" id="fullName" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="Address">Address</label>
                                            <input type="text" id="Address" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                        <div class="inputs">
                                            <label for="City">City</label>
                                            <input type="text" id="City" >
                                            <span class="required">
                                            *
                                            </span>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div id="opc-shipping_method">
                    <div class="step-title">
                        <h2 class="title">Shipping method</h2>
                    </div>
                    <div id="checkout-step-shipping-method" class="step a-item">
                        <form action="">
                        <div id="checkout-shipping-method-load">
                            <div class="checkout-data">
                                <div class="section shipping-method">
                                    <ul class="method-list">
                                    <li>
                                        <div class="method-name">
                                            <div class="checkator_holder radio" style="width: 13px; height: 13px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                                <input id="shippingoption_1" type="radio" class="shippingMethod checkator_source" name="shippingoption"  style="opacity: 0; margin: 0px;">
                                                <div id="checkator_shippingoption_1" class="checkator_element radio">
                                                </div>
                                            </div>
                                            <label for="shippingoption_1">Inside Dhaka (৳ 60)</label>
                                        </div>
                                        <div class="method-description">
                                            1-3 Business Days
                                        </div>
                                    </li>
                                    <li>
                                        <div class="method-name">
                                            <div class="checkator_holder radio" style="width: 13px; height: 13px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                                <input id="shippingoption_2" type="radio" class="shippingMethod checkator_source" name="shippingoption" style="opacity: 0; margin: 0px;">
                                                <div id="checkator_shippingoption_2" class="checkator_element radio">
                                                </div>
                                            </div>
                                            <label for="shippingoption_2">Outside Dhaka (৳ 120)</label>
                                        </div>
                                        <div class="method-description">
                                            2-4 Business days
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div id="opc-payment_method" class="">
                    <div class="step-title">
                        <h2 class="title">Payment method</h2>
                    </div>
                    <div id="checkout-step-payment-method" class="step a-item">
                        <form action="" id="co-payment-method-form" novalidate="novalidate">
                        <div id="checkout-payment-method-load">
                            <div class="checkout-data">
                                <div class="section payment-method">
                                    <ul class="method-list" id="payment-method-block">
                                    <li>
                                        <div class="method-name">
                                            <div class="payment-logo">
                                                <label for="paymentmethod_0">
                                                <img src="https://www.deshify.com/plugins/Payments.CashOnDelivery/logo.jpg" alt="Cash On Delivery (COD)">
                                                </label>
                                            </div>
                                            <div class="payment-details">
                                                <div class="checkator_holder radio" style="width: 13px; height: 13px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                                <input id="paymentmethod_0" type="radio" name="paymentmethod" value="Payments.CashOnDelivery" class="paymentmethodrdo checkator_source" onchange="PaymentMethod.paymentChecker()" style="opacity: 0; margin: 0px;">
                                                <div id="checkator_paymentmethod_0" class="checkator_element radio"></div>
                                                </div>
                                                <label for="paymentmethod_0">Cash On Delivery (COD)</label>
                                                <div class="payment-description">Pay by "Cash on delivery"</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="method-name">
                                            <div class="payment-logo">
                                                <label for="paymentmethod_1">
                                                <img src="https://www.deshify.com/plugins/Payments.SSLCommerz/logo.png" alt="SSLWireless / SSLCommerz">
                                                </label>
                                            </div>
                                            <div class="payment-details">
                                                <div class="checkator_holder radio" style="width: 13px; height: 13px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                                <input id="paymentmethod_1" type="radio" name="paymentmethod" value="Payments.SSLCommerz" class="paymentmethodrdo checkator_source" onchange="PaymentMethod.paymentChecker()" style="opacity: 0; margin: 0px;">
                                                <div id="checkator_paymentmethod_1" class="checkator_element radio"></div>
                                                </div>
                                                <label for="paymentmethod_1">SSLWireless / SSLCommerz</label>
                                                <div class="payment-description">You will be redirected to SSLCommerzpayment website to complete the payment</div>
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div id="ocp-confirm_order">
                    <div class="step-title">
                        <h2 class="title">Confirm order</h2>
                    </div>
                    <div class="cart-footer">
                        <div class="totals">
                        <style>
                            @media all and (max-width: 1000px) {
                            .html-shopping-cart-page body {
                            padding-bottom: 119px;
                            }
                            .html-shopping-cart-page .header-menu .top-menu {
                            padding-bottom: 109px;
                            }
                            .html-shopping-cart-page #scroll {
                            bottom: 125px;
                            }
                            .html-shopping-cart-page #fb-root .fb_dialog {
                            bottom: 125px !important;
                            }
                            .html-shopping-cart-page #fb-root .fb_dialog_content iframe {
                            bottom: 70px !important;
                            }
                            }
                        </style>
                        <div class="total-info total-info-root">
                            <table class="cart-total">
                                <tbody>
                                    <tr class="order-subtotal">
                                    <td class="cart-total-left">
                                        <label>Sub-Total:</label>
                                    </td>
                                    <td class="cart-total-right">
                                        <span id="subtotal-value" class="value-summary">৳ 165</span>
                                    </td>
                                    </tr>
                                    <tr class="shipping-cost">
                                    <td class="cart-total-left">
                                        <label>Shipping:</label>
                                    </td>
                                    <td class="cart-total-right">
                                        <span id="shipping-value" class="value-summary wow">৳ 0</span>
                                    </td>
                                    </tr>
                                    <tr class="order-total">
                                    <td class="cart-total-left">
                                        <label>Total:</label>
                                    </td>
                                    <td class="cart-total-right">
                                        <span id="cart-total-onepage" class="cart-total-onepage-css value-summary"><strong>৳ 165</strong></span>
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="buttons" id="confirm-order-buttons-container">
                    <input type="button" id="confirm-orderBS" class="button-1 confirm-order-next-step-button" value="Confirm">
                    <span class="please-wait" id="confirm-order-please-wait" style="display: none;">Submitting order information...</span>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection