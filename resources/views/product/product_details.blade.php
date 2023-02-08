@extends('layouts.app')
@section('content')
<div id="master-wrapper-content" class="master-wrapper-content">
<div class="breadcrumb_area">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div class="breadcrumb">
    <ul>
        <li>
            <span itemscope itemtype="catagories.html">
            <a href="{{ route('home') }}" itemprop="url">
            <span itemprop="title">Home</span>
            </a>
            </span>
            <span class="delimiter">/</span>
        </li>
        <li>
            <span itemscope itemtype="catagories.html">
            <a href="{{ route('shop') }}" itemprop="url">
            <span itemprop="title">Shop</span>
            </a>
            </span>
            <span class="delimiter">/</span>
        </li>
        <li>
            <strong class="current-item">{{ $product['name'] }}</strong>
        </li>
    </ul>
    </div>
</div>
</div>
</div>
</div>
<div class="master-column-wrapper">
<div class="container">
<div class="row">
<div class="col-sm-12 center-1">
    
    
<!--product breadcrumb-->

<div class="page product-details-page">
    <div class="page-body">
            <form method="post" id="product-details-form" action="">
            <div itemscope itemtype="http://schema.org/Product" data-productid="2253">
                <div class="product-essential section-white">
                    <div class="row row-flex">
                        <div class="col-sm-5">
                        <!--product pictures-->
                        <div>
                            <div class="picture" data-popup="#dialogForImgPopUp" style="float:left;width:100%;">
                                <link rel="image_src" href="images/thumbs/0015902_2-in-1-alarm-lock-for-bike-home-office.jpeg" />
                                <a href="https://www.deshify.com/images/thumbs/0015902_2-in-1-alarm-lock-for-bike-home-office.jpeg" title="2 in 1 alarm lock for Bike, Home &amp; Office" class="cloud-zoom" rel="position: 'right',smoothMove: 3,showTitle: true,titleOpacity: 0,adjustX: 10,adjustY: 30,lensOpacity: 0,tintOpacity: 0,softFocus: false" id="main-product-img-lightbox-anchor-2253">
                                <img alt="2 in 1 alarm lock for Bike, Home &amp; Office &#x98F;&#x9B0; &#x99B;&#x9AC;&#x9BF;" src="{{ $product['image_url'] }}" title="2 in 1 alarm lock for Bike, Home &amp; Office &#x98F;&#x9B0; &#x99B;&#x9AC;&#x9BF;" style="border-width: 0px;" class="cloud-zoom-image cloud-zoom-image-size" width="400" id="main-product-img-lightbox-anchor-2253" />
                                </a>
                                <div style="margin-top: 10px;text-align: left;">
                                    @foreach($product['multi_image'] as $key=> $image)
                                        <div style="display: inline-block;border: 1px solid #BBBB8E;">
                                        <a href="{{ $image['file_url'] }}" rel="lightbox-p"  class="src-zoom-anchor" onclick="return false;" data-halfimgurl="{{ $image['file_url'] }}">
                                        <img src="{{ $image['file_url'] }}" alt="" class="src-zoom-image" style="height:100px; width:100px" />
                                        </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="imgForMobile" id="dialogForImgPopUp" style="display:none;">
                                    <img alt="" src="#" />
                                </div>
                            </div>
                            <script type="text/javascript">
                                var zoomEffect = function () {
                                    $("a.cloud-zoom").imagesLoaded({
                                        done: function ($images) {
                                            var width = $(".cloud-zoom-image-size").width() * 1.1;
                                            var height = $(".cloud-zoom-image-size").height() * 1.2;
                                            $('.cloud-zoom').CloudZoom({ zoomWidth: width, zoomHeight: height });
                                        }
                                    });
                                    //when click on sub item
                                    $('.src-zoom-anchor').on({
                                        'click': function () {
                                            $('.cloud-zoom').each(function () {
                                                $(this).data('zoom').destroy();
                                            });
                                
                                            var aSrc = $(this).attr('href');
                                            var imgSrc = $(this).attr('data-halfimgurl');
                                            $('.cloud-zoom-image').attr('src', imgSrc);
                                            $('.cloud-zoom').attr('href', aSrc);
                                
                                            $("a.cloud-zoom").imagesLoaded({
                                                done: function ($images) {
                                                    var width = $(".cloud-zoom-image-size").width() * 1.1;
                                                    var height = $(".cloud-zoom-image-size").height() * 1.2;
                                                    $('.cloud-zoom').CloudZoom({ zoomWidth: width, zoomHeight: height });
                                                },
                                            });
                                        }
                                    });
                                };
                                
                                var fullScreenPopUp = function () {
                                    $('.imgForMobile').find('img').attr('src', $('.picture').find('.cloud-zoom').attr('href'));
                                    $(".picture").fullScreenPopup({
                                    });
                                };
                                
                                $(document).ready(function () {
                                    if ($(window).width() <= 768) {
                                        fullScreenPopUp();
                                    }
                                    else {
                                        zoomEffect();
                                    }
                                });
                                
                                $(window).resize(function () {
                                    if ($(window).width() <= 768) {
                                        fullScreenPopUp();
                                    }
                                    else {
                                        zoomEffect();
                                    }
                                });
                            </script>
                        </div>
                        </div>
                        <div class="col-sm-7">
                        <div class="row-flex row-overview">
                            <div class="overview col-sm-6">
                                <div class="product-name">
                                    <h1 itemprop="name">
                                        {{ $product['name'] }}
                                    </h1>
                                </div>
                                <!--price -->
                                <div class="prices" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                   @if($product['ecom_price'] > 0 && $product['ecom_price'] != $product['variation']['default_sell_price'])
                                    <div class="product-price">
                                        <label>Price:</label>
                                        <span  itemprop="price" content="600.00" class="price-value-2253" >
                                        ৳ {{ number_format($product['ecom_price'], 0) }}
                                        </span>
                                    </div>
                                    <div class="old-product-price">
                                        <label>Old Price:</label>
                                        <span>&#x9F3; {{ number_format($product['variation']['default_sell_price'], 0) }}</span>
                                    </div>
                                    @else
                                    <div class="product-price">
                                        <label>Price:</label>
                                        <span  itemprop="price" content="600.00" class="price-value-2253" >
                                        ৳ {{ number_format($product['variation']['default_sell_price'], 0) }}
                                        </span>
                                    </div>
                                    @endif
                                    @if(calculateDiscount($product) > 0)
                                    <div class="discount-info" style="margin-top: 7px;">
                                        <label>You Save:</label>
                                        <span id="blink">{{ calculateDiscount($product) }}% off</span>
                                    </div>
                                    @endif
                                    <meta itemprop="priceCurrency" content="BDT" />
                                </div>
                                <script type="text/javascript">
                                    var blink = document.getElementById('blink');
                                    setInterval(function () {
                                    blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
                                    }, 500);
                                </script>
                                <style>
                                    #blink {
                                    font-size: 20px;
                                    font-weight: bold;
                                    font-family: sans-serif;
                                    color: #1c87c9;
                                    transition: 0.4s;
                                    padding:10px;
                                    }
                                </style>
                                <!-- Customer enter price -->
                                <!-- Tier price -->
                                <!--product reviews-->
                                <div class="product-reviews-overview" >
                                    <div class="product-review-box">
                                    <div class="rating">
                                        <div style="width: 0%">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="product-no-reviews">
                                    ( <a href="https://www.deshify.com/productreviews/2253">সর্ব প্রথম পর্যালোচনা যুক্ত করুন</a> )
                                    </div>
                                </div>
                                <div class="product_additional_info_top">
                                    <!--availability-->
                                    <!--SKU, MAN, GTIN, vendor-->
                                    <div class="additional-details">
                                    <div class="sku" >
                                        <span class="label">SKU:</span>
                                        <span class="value" itemprop="sku" id="sku-2253">{{ $product['sku'] }}</span>
                                        <input type="hidden" name="category_id" value="{{ $product['category_id'] }}">
                                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                        <input type="hidden" name="type" value="{{ $product['type'] }}">
                                    </div>
                                    </div>
                                    
                                </div>
                                <div class="short-description">
                                    <h4 class="attr_ttile">Product Description</h4>
                                    {!! $product['product_description'] !!}
                                </div>
                                <!--sample download-->
                                <!--attributes-->
                                @if($product['type'] == 'variable')
                                <strong>Choose Variation : <span class="text-danger">*</span></strong>
                                <div class="attributes">
                                    <dl class="row">
                                    @foreach( $product['variations'] as $v)
                                    <dt id="product_attribute_label_162" class="col-md-3 col-sm-3">
                                        <label class="text-prompt">
                                            <input class="variation" type="radio" name="v" value="{{ $v['id'] }}"> {{ $v['name']}}
                                        </label>
                                        <span class="required hide">*</span>
                                    </dt>
                                    @endforeach
                                    <dd id="product_attribute_input_162">
                                        <ul class="option-list">
                                        </ul>
                                    </dd>
                                    </dl>
                                    <p class="text-danger size-validation"></p>
                                </div>
                                @endif
                                <!--gift card-->
                                <!--rental info-->
                                <!-- cart & wishlist, compare , email button -->
                                <div class="add_to_cart_overview_button">
                                    <div class="add_to_cart_overview_button_content clearfix">
                                    <!--price & add to cart-->
                                    <div class="download-sample-wrapper">
                                        <div class="quantity-panel">
                                            <label class="qty-label" for="addtocart_2253_EnteredQuantity">Quantity:</label>
                                            <div class="quantity-box">
                                                <input class="qty-input" type="number" min="1" max="10" step="1" data-val="true" data-val-required="The Qty field is required." id="addtocart_2253_EnteredQuantity" name="addtocart_2253.EnteredQuantity" value="1" />
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <div class="add-to-cart-panel">
                                                
                                                <input type="button" style="width: 245px;" value="Order Now" class="quick-buy-button btn btn-success btn-lg col-12"/>
                                                <br><br>
                                                <input type="button" style="width: 245px;"  id="add-to-cart-button-2253" class="button-1 add-to-cart-button" value="Add To Cart"/>
                                            </div>
                                        </div>
                                        <div class="divDownload">
                                        </div>
                                    </div>
                                    <!--wishlist, compare, email a friend-->
                                    <div class="overview-buttons">
                                        <a href="#" class="btn" title="Add to Wishlist"><i class="fas fa-heart"></i></a>
                                        <a href="#" class="btn" title="Share to your Friend"><i class="fas fa-share"></i></a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .overview -->
                            <div class="col-sm-6">
                                <div class="side-information">
                                    <div class="contact-no">
                                    <div class="side-title">
                                        <label>
                                        <i class=s fa-phone"></i>
                                        Call :
                                        </label>
                                        <a href="tel:+8801844505504"> + 88 01844 505 504</a>
                                    </div>
                                    </div>
                                    <div class="home-delivery">
                                    <div class="side-title">
                                        <label>
                                        <i class="fas fa-truck" aria-hidden="true"></i>
                                        Inside Dhaka
                                        </label>
                                    </div>
                                    <div class="inside-dhaka">
                                        1-4 working days (Home Delivery)
                                    </div>
                                    </div>
                                    <div class="home-delivery">
                                    <div class="side-title">
                                        <label>
                                        <i class="fas fa-plane" aria-hidden="true"></i>
                                        Out side of dhaka
                                        </label>
                                    </div>
                                    <div class="out-side">
                                        3-7 Working  days
                                    </div>
                                    </div>
                                    <div class="cash-on-delivery">
                                    <div class="side-title">
                                        <label>
                                        <i class="fas fa-handshake-o" aria-hidden="true"></i>
                                        ক্যাশ অন ডেলিভারি
                                        </label>
                                    </div>
                                    </div>
                                    <div class="paymentgetway">
                                    <div class="side-title">
                                        <label>
                                        <i class="fas fa-credit-card" aria-hidden="true"></i>
                                        Payment Getway
                                        </label>
                                    </div>
                                    <div class="payment-icons">
                                        <a href="#">
                                        <img src="https://www.deshify.com/Themes/nopTheme/Content/images/mc.png">
                                        </a>
                                        <a href="#">
                                        <img src="https://www.deshify.com/Themes/nopTheme/Content/images/visa.png">
                                        </a>
                                        <a href="#">
                                        <img src="https://www.deshify.com/Themes/nopTheme/Content/images/dbbl.png">
                                        </a>
                                        <a href="#">
                                        <img src="https://www.deshify.com/Themes/nopTheme/Content/images/bkash.png">
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="product-collateral section-white">
                    <div class="product_page_tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#productspecifications " aria-controls="productspecifications" role="tab" data-toggle="tab">Product Specification</a></li>
                        <li role="presentation"><a href="#productdeliveryandreturnpolicy " aria-controls="productdeliveryandreturnpolicy" role="tab" data-toggle="tab">Delivery & Return Policy</a></li>
                        <li role="presentation"><a href="#productreview" aria-controls="productreview" role="tab" data-toggle="tab">Review</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="productspecifications">
                            <div id="productspecificationsTextBox">
                                Product Specification Here
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="producttags">
                        </div>
                        <div role="tabpanel" class="tab-pane" id="productdeliveryandreturnpolicy">
                            <div class="topic-block">
                                <div class="topic-block-title">
                                    <h2>&#x9B6;&#x9BF;&#x9AA;&#x9BF;&#x982; &#x98F;&#x9AC;&#x982; &#x9B0;&#x9BF;&#x99F;&#x9BE;&#x9B0;&#x9CD;&#x9A8;&#x983;</h2>
                                </div>
                                <div class="topic-block-body">
                                    <p>ডেলিভারি চার্জ: ঢাকা শহরে - ৫০ টাকা এবং ঢাকার বাইরে- ১০০ টাকা।<br />আমরা কার্যদিবসে পণ্য ডেলিভারি করি।<br />আমরা ঢাকা শহরে 1-2 কার্যদিবসের মধ্যে এবং ঢাকার বাইরে 3- 5 কার্যদিবসের মধ্যে পণ্য ডেলিভারি করি।<br /> ঢাকার বাইরে পণ্য ডেলিভারির ক্ষেত্রে গ্রাহককে কাছের কুরিয়ার সার্ভিস অফিস থেকে পণ্য সংগ্রহ করতে হয়।<br />গ্রাহকরা আমাদের অফিস থেকেও পণ্য সংগ্রহ করতে পারেন।<br />প্রাকৃতিক দুর্যোগ বা যে কোনও রাজনৈতিক সঙ্কটের কারণে ডেলিভারি বাধাগ্রস্ত হতে পারে।<br />পণ্য ডেলিভারি করা হবে পুরোপুরি স্টকের পর্যাপ্ততার সাপেক্ষে।<br />আমরা আমাদের গ্রাহককে ক্যাশ অন ডেলিভারি প্রক্রিয়া অফার করি।<br />আপনি আপনার কার্ড থেকে অনলাইনে অর্থ প্রদান করতে পারেন বা বিকাশ, রকেট এবং মোবাইল ব্যাঙ্কের মাধ্যমে অর্থ প্রদান করতে পারেন।<br />ফটোগ্রাফি, আলোর উৎস বা আপনার মনিটর রেজুলেশন এর কারণে পণ্যের রঙ কিছুটা আলাদা হতে পারে ।<br />পণ্যটি কোনভাবে গ্রাহকের দ্বারা ক্ষতিগ্রস্থ হলে তা ফেরত দেওয়া যাবে না।<br />পণ্য ফেরত দিতে আমাদের অভিযোগ বিভাগের সাথে 24 ঘন্টার মধ্যে যোগাযোগ করুন।</p>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="productreview">
                            <div class="product-reviews-overview" >
                                <div class="product-review-box">
                                    <div class="rating">
                                    <div style="width: 0%">
                                    </div>
                                    </div>
                                </div>
                                <div class="product-no-reviews">
                                    ( <a href="https://www.deshify.com/productreviews/2253">সর্ব প্রথম পর্যালোচনা যুক্ত করুন</a> )
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-white">
                        <div class="page_title_area">
                        <h2 class="page_title">
                            <span>Related Products</span>
                        </h2>
                        </div>
                        <!-- <div class="item-grid" id="related_product_list">
                            
                        </div> -->
                        <div class="slider-wrapper product-grid">
                        <div class="item-grid special-product-slider related_product_list">

                        </div>
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
@endsection
@push('js')
    <script src="{{ asset('assets/js/cloud-zoom.1.0.2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/imageload.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/fullscreen.min.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
                                        
           relatedProducts();

           function relatedProducts(){
            let category = $(document).find('input[name="category_id"]').val();
            let id = $(document).find('input[name="product_id"]').val();
            $.ajax({
                url: "{{route('product.related')}}",
                method: "GET",
                data: {category, id},
                success: function(res){
                    if(res.html)
                    {
                        $("div.related_product_list").html(res.html);
                        $('.special-product-slider').slick({
                            speed: 500,
                            dots: false,
                            autoplay: true,
                            infinite: true,
                            slidesToShow: 6,
                            slidesToScroll: 6,
                            autoplaySpeed: 2000,

                            responsive: [
                                {
                                    breakpoint: 1200,
                                    settings: {
                                        slidesToShow: 5,
                                        slidesToScroll: 5,
                                    }
                                },
                                {
                                    breakpoint: 1000,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 4,
                                    }
                                },
                                {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: 3,
                                        slidesToScroll: 3,
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
                                    }
                                },
                                {
                                    breakpoint: 360,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }]
                        });
                    }
                }
            });
           }

        });
    </script>
@endpush