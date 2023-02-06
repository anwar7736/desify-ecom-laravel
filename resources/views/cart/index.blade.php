@extends('layouts.app')
@section('content')
<div id="master-wrapper-content" class="master-wrapper-content">
<div class="master-column-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 center-1">
                <div class="page shopping-cart-page">
                <div class="page-title shoppingCartTitle">
                    <h1>Shopping cart</h1>
                    <button id="clearCart" name="clearCart" class="button-1 checkout-button btn btn-danger" onclick="AjaxCart.deleteproduct_allitemscart()">
                    Clear all
                    </button>
                </div>
                <div class="page-body">
                    <div class="order-summary-content">
                        <form method="post" enctype="multipart/form-data" id="shopping-cart-form" action="/cart" novalidate="novalidate">
                            <div class="table-wrapper">
                            <table class="cart">
                                <colgroup>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                    <col>
                                    <col width="1">
                                    <col width="1">
                                    <col width="1">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="sku">
                                        SKU
                                        </th>
                                        <th class="product-picture">
                                        Image
                                        </th>
                                        <th class="product">
                                        Product(s)
                                        </th>
                                        <th class="unit-price">
                                        Price
                                        </th>
                                        <th class="quantity">
                                        Qty.
                                        </th>
                                        <th class="subtotal">
                                        Total
                                        </th>
                                        <th class="remove-from-cart">
                                        Remove
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="sku">
                                        <label class="td-title">SKU:</label>
                                        <span class="sku-number"></span>
                                        </td>
                                        <td class="product-picture">
                                        <a href="product.html"><img alt="Picture of COLLAGEN PLUS VIT E CREAM" src="https://www.deshify.com/images/thumbs/0010231_collagen-plus-vit-e-cream_80.jpeg" title=""></a>
                                        </td>
                                        <td class="product">
                                        <a href="/product.html" class="product-name">COLLAGEN PLUS VIT E CREAM</a>
                                        <div class="product-unit-price sm-device">
                                            ৳ 165 / Price Per Unit
                                        </div>
                                        </td>
                                        <td class="unit-price">
                                        <label class="td-title">Price:</label>
                                        <span class="product-unit-price">৳ 165</span>
                                        </td>
                                        <td class="quantity">
                                        <label class="td-title">Qty.:</label>
                                        <div class="qty-wrapper">
                                            <a href="#">
                                            <i class="fa fa-plus"></i>
                                            </a>
                                            <input id="itemquantity38385" name="itemquantity38385" type="number" value="2" class="qty-input">
                                            <a>
                                            <i class="fa fa-minus"></i>
                                            </a>
                                        </div>
                                        </td>
                                        <td class="subtotal">
                                        <label class="td-title">Total:</label>
                                        <span class="product-subtotal">৳ 330</span>
                                        </td>
                                        <td class="remove-from-cart">
                                        <label class="td-title">Remove:</label>
                                        <button type="button" id="btnDeleteItem" value="38385" style="border:none; background:none"><i class="fa fa-trash-o delete" style="font-size:20px;"></i></button>
                                        <span style="display:none">
                                            <div class="checkator_holder checkbox" style="width: 0px; height: 0px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                                <input type="checkbox" name="removefromcart" value="38385" id="38385" class="checkator_source" style="opacity: 0; margin: 0px;">
                                                <div id="checkator_38385" class="checkator_element checkbox"></div>
                                            </div>
                                        </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="cart-options">
                            <div class="common-buttons">
                                <input type="submit" name="updatecart" value="Update shopping cart" id="update-cart-button" class="button-2 update-cart-button">
                                <input type="submit" name="continueshopping" value="Continue shopping" class="button-2 continue-shopping-button">
                            </div>
                            <div class="selected-checkout-attributes">
                            </div>
                            </div>
                            <div class="cart-footer">
                            <div class="cart-collaterals">
                                <div class="deals">
                                </div>
                            </div>
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
                                                <span id="subtotal-value" class="value-summary">৳ 330</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping-cost" style="display: none;">
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
                                                <span id="cart-total-onepage" class="cart-total-onepage-css value-summary"><strong>৳ 330</strong></span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="checkout-buttons">
                                    <input type="button" value="Order Now" class="button-1 checkout-button">
                                </div>
                                <div class="addon-buttons">
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>
<div id="fb-root"></div>

<div class="fb-customerchat" attribution=setup_tool page_id="1895552304025470" theme_color="#20cef5">
</div>
@endsection