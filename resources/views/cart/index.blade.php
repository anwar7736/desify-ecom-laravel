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
    <button id="clearCart" name="clearCart" class="button-1 checkout-button btn btn-danger">
    Clear all
    </button>
</div>
<div class="page-body">
    <div class="order-summary-content">
        <form method="post" enctype="multipart/form-data" id="shopping-cart-form" action="/cart" novalidate="novalidate" onsubmit="return false">
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
                        <th class="product">
                        variations(s)
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
                    @php 
                        $sub_total = 0;
                    @endphp
                    @forelse($cart as $key=>$item)
                    @php 
                        $sub_total += calculate_row_total($item);
                    @endphp
                    <tr>
                        <td class="sku">
                        <label class="td-title">SKU:</label>
                            <span class="sku-number">{{ $item['sku'] }}</span>
                        </td>
                        <td class="product-picture">
                        <a href="{{ route('product.show', $key) }}">
                            <img alt="" src="{{ $item['image'] }}" title="">
                        </a>
                        </td>
                        <td class="product">
                        <a href="{{ route('product.show', $key) }}" class="product-name">
                            {{ $item['name'] }}
                        </a>

                        <div class="product-unit-price sm-device hide">
                            ৳ 165 / Price Per Unit
                        </div>
                        </td>
                        <style>     
                            .validation{
                                display: flex;
                                /* align-items:center; */
                                flex-wrap: wrap;
                                min-width: 200px !important;
                                min-height: 70px;
                            }
                            label.validation-label{
                                display: inline-block !important; 
                            }
                            .validation .d-flex{
                                display: flex; 
                                align-items: center;
                            }
                            td.subtotal{
                                min-width: 60px !important;
                            }
                        </style>
                        <td class="validation variation_section_{{$key}}">
                                    @if($item['type'] == 'variable')
                                    @foreach($item['sizes'] as $s)
                                    <div class="d-flex">
                                    
                                    <label class="validation-label" style="display: inline-block !important;">
                                        <input type="radio" class="variation" name="size[{{ $key }}]" id="red{{ $s['id'] }}"  {{$item['size'] == $s['id'] ? 'checked' : ''}} class="size col-md-3" value="{{ $s['id'] }}">
                                        {{ $s['name'] }}
                                    <label>
                                    </div>
                                    @endforeach
                                    @endif
                                    @if($item['type'] == 'variable' && empty($item['size']))
                                        <span class="text-danger size-validation">Size is required!</span>
                                    @endif  
                                    <br/>                    
                                    <span class="text-danger stock-alert hide"></span>
                           
                            
                        </td>
                        <td class="unit-price">
                        <label class="td-title">Price:</label>
                        @if($item['regular_price'] > 0)
                        <span class="product-unit-price">
                            ৳ {{ number_format($item['regular_price'], 0)}}
                        </span>
                        @else
                        <span class="product-unit-price">
                            ৳ {{ number_format($item['default_price'], 0)}}
                        </span>
                        @endif
                        </td>
                        <td class="quantity">
                        <label class="td-title">Qty.:</label>
                        <div class="qty-wrapper">
                            <a href="#" class="hide">
                            <i class="fa fa-plus"></i>
                            </a>
                            <input id="itemquantity38385" name="itemquantity38385" type="number" value="{{ $item['quantity'] }}" class="qty-input">
                            <a class="hide">
                            <i class="fa fa-minus"></i>
                            </a>
                        </div>
                        </td>
                        <td class="subtotal">
                        <label class="td-title">Total:</label>
                        <span class="product-subtotal">৳ {{ calculate_row_total($item) }}</span>
                        </td>
                        <td class="remove-from-cart">
                        <label class="td-title">Remove:</label>
                        <input type="hidden" name="item_id" value="{{ $key }}">
                        <input type="hidden" name="v" value="{{ $item['size'] }}">
                        <button type="button" id="btnDeleteItem" value="38385" style="border:none; background:none"><i class="fas fa-trash" style="font-size:20px;"></i></button>
                        </form>
                        <span style="display:none">
                            <div class="checkator_holder checkbox" style="width: 0px; height: 0px; margin: 0px 0px 0px -20px; float: none; display: block;">
                                <input type="checkbox" name="removefromcart" value="38385" id="38385" class="checkator_source" style="opacity: 0; margin: 0px;">
                                <div id="checkator_38385" class="checkator_element checkbox"></div>
                            </div>
                        </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="7">
                            <strong style="color:red !important">Your cart is empty!</strong>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            </div>
            <div class="cart-options">
            <div class="common-buttons">
                <input type="button" name="updatecart" value="Update shopping cart" id="update-cart-button" class="button-2 update-cart-button hide">
                <input type="button" name="continueshopping" value="Continue shopping" class="button-2 continue-shopping-button" onclick="location.href='/shop'">
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
                                <span id="subtotal-value" class="value-summary">৳ {{ $sub_total }}</span>
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
                                <span id="cart-total-onepage" class="cart-total-onepage-css value-summary"><strong>৳ {{ $sub_total }}</strong></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="checkout-buttons">
                    <input type="button" value="Order Now" class="button-1 checkout-button go-to-checkout">
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