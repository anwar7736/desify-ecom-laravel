@foreach($products as $product)
    <div class="item-box rowBorder">
    <div class="product-item">
    <div class="picture">
    @if(calculateDiscount($product) > 0)
    <div class="discount-info">
        {{ calculateDiscount($product) }}% off
    </div>
    @endif
    <a href="{{ route('product.show', $product['id']) }}" title="">
    <img alt="Picture of Electric Egg Beater Or Mixer" src="{{ $product['image_url'] }}" title="" />
    </a>
    </div>

    <div class="details">
    <h2 class="product-title">
    <a href="{{ route('product.show', $product['id']) }}">{{ $product['name'] }}</a>
    </h2>
    <div class="add-info">
    <div class="prices">
        @if($product['ecom_price'] > 0 && $product['ecom_price'] != $product['variation']['default_sell_price'])
        <div class="register-prices">
            <span class="price actual-price">৳ {{ number_format($product['ecom_price'],0) }}</span>
            <span class="price old-price">&#x9F3;
            {{ number_format($product['variation']['default_sell_price'],0) }}</span>
        </div>
        @else
        <div class="register-prices">
            <span class="price actual-price">
                ৳ {{ number_format($product['variation']['default_sell_price'],0) }} 
            </span>
        </div>
         @endif
        <div class="rating-wrapper">
            <div class="product-rating-box"
                title="0 review(s)">
                <div class="rating">
                    <div style="width: 0%">
                    </div>
                </div>
            </div>
            <span class="prime_icon">
                <img src="assets/images/prime_logo.png" alt="">
            </span>
        </div>
    </div>
    <div class="buttons clearfix">
        <div class="single_button add-to-cart-btn">
            <div class="btn btn-default">
                <div class="button_icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <input type="button" value="Order Now" class="button-2 product-box-add-to-cart-button" data-product="{{ $product['id'] }}"/> 
            </div>
        </div>

        <div class="single_button">
            <div class="button_icon">
                <i class="fas fa-heart"></i>
            </div>
            <input type="button" value="Add to wishlist" title="Add to wishlist" class="button-2 add-to-wishlist-button"/>
        </div>
        <div class="single_button">
            <div class="button_icon">
                <i class="fas fa-retweet"></i>
            </div>
            <input type="button" value="Add to compare list" title="Add to compare list" class="button-2 add-to-compare-list-button"/>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
@endforeach
