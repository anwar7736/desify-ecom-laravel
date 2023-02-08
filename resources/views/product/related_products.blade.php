@foreach($products as $key=>$product)
<div class="item-box">
    <div class="product-item" data-productid="2149">
        <div class="picture">
            @if(calculateDiscount($product) > 0)
                <div class="discount-info">
                    {{ calculateDiscount($product) }}% off                
                </div>
            @endif
            <a href="product.html" title="Talking and Dancing Cactus Plush Toys">
            <img alt="Talking and Dancing Cactus Plush Toys, Home &amp; Office  Decoration Show pieces (120 songs &amp; Rechargeable) &#x98F;&#x9B0; &#x99B;&#x9AC;&#x9BF;" src="https://www.deshify.com/images/thumbs/0014936_talking-and-dancing-cactus-plush-toys-home-office-decoration-show-pieces-120-songs-rechargeable_415.jpeg" title="Talking and Dancing Cactus Plush Toys" />
            </a>
        </div>
        <div class="details">
            <h2 class="product-title">
            <a href="product.html">Talking and Dancing Cactus Plush Toys, Home &amp; Office  Decoration Show pieces (120 songs &amp; Rechargeable)</a>
            </h2>
            <div class="add-info">
            <div class="prices">
                <div class="register-prices">
                    <span class="price actual-price">&#x9F3; 850</span>
                    <span class="price old-price">&#x9F3; 1,700</span>
                </div>
                <div class="rating-wrapper">
                    <div class="product-rating-box" title="1 &#x9B0;&#x9BF;&#x9AD;&#x9BF;&#x989;(s)">
                        <div class="rating">
                        <div style="width: 100%">
                        </div>
                        </div>
                    </div>
                    <span class="prime_icon">
                    <img src="https://www.deshify.com/Themes/nopTheme/Content/images/prime_logo.png" alt="">
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
                    
                </div>
                <div class="single_button">
                    <div class="button_icon">
                        <i class="fas fa-retweet"></i>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endforeach