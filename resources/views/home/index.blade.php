@extends('layouts.app')
@section('content')
<div id="flyout_cart_wrapper" class="flyout_cart_wrapper">
<div class="flyout_cart_wrapper_close_arrow"><i class="fas fa-angle-left"></i></div>
<div id="flyout-cart" class="flyout-cart">
<div class="mini-shopping-cart">
<div class="mini-shopping-cart">
    <div class="count">
    <span>
    <span class="cart_icon">
    <i class="fas fa-shopping-cart"></i>
    </span>
    <a href="/cart">1 item(s)</a>            </span>
    <span>
    <a href="#" class="close">Close</a>
    </span>
    </div>
    <div class="items">
    <div class="item first">
        <div class="minishoppingCartRemoveitemIcon">
            <span class="removeMiniShoppingCartItem">
            <i class="fas fa-trash" aria-hidden="true"></i>
            </span>
        </div>
        <div class="picture">
            <a href="/collagen-plus-vit-e-cream" title="Show details for COLLAGEN PLUS VIT E CREAM">
            <img alt="Picture of COLLAGEN PLUS VIT E CREAM" src="https://www.deshify.com/images/thumbs/0010231_collagen-plus-vit-e-cream_70.jpeg" title="Show details for COLLAGEN PLUS VIT E CREAM">
            </a>
        </div>
        <div class="product">
            <div class="name">
                <a href="/collagen-plus-vit-e-cream">COLLAGEN PLUS VIT E CREAM</a>
            </div>
            <div class="price">Unit price: <span>৳ 165</span></div>
            <div class="quantity">Quantity: <span>1</span></div>
        </div>
    </div>
    </div>
    <div class="totals">Sub-Total: <strong>৳ 165</strong></div>
    <div class="buttons">
    <input type="button" style="width:250px;" value="Checkout" class="button-1 checkout-button">
    </div>
</div>
</div>
</div>
</div>
<div class="mobile-footer-nav">
<div class="header-links onlyformobile footer-nav-inner">
<ul>
<li>
    <a href="index.html">
    <svg class="svg-icon" viewBox="0 0 20 20">
        <path
            d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z">
        </path>
    </svg>
    <p>Home</p>
    </a>
</li>
<li>
    <a href="cart.html">
    <svg class="svg-icon" viewBox="0 0 20 20">
        <path fill="none"
            d="M17.696,9.368H2.305c-0.189,0-0.367,0.092-0.478,0.245c-0.11,0.155-0.141,0.352-0.08,0.532l2.334,6.918c0.081,0.238,0.305,0.4,0.556,0.4h10.735c0.253,0,0.478-0.162,0.557-0.402l2.323-6.917c0.062-0.179,0.03-0.376-0.079-0.531C18.062,9.459,17.886,9.368,17.696,9.368z M14.95,16.287H5.062l-1.938-5.743h13.753L14.95,16.287z">
        </path>
        <path fill="none"
            d="M6.345,7.369c0.325,0,0.588-0.263,0.588-0.588c0-1.691,1.376-3.067,3.067-3.067c1.691,0,3.067,1.376,3.067,3.067c0,0.325,0.264,0.588,0.588,0.588c0.326,0,0.589-0.263,0.589-0.588c0-2.34-1.904-4.243-4.244-4.243c-2.34,0-4.244,1.903-4.244,4.243C5.757,7.106,6.02,7.369,6.345,7.369z">
        </path>
    </svg>
    <p>
        <span class="cart-qty">(0) Item(s)</span>
    </p>
    </a>
</li>
<li>
    <a href="login.html">
    <span class="notification-icon-wrapper">
        <span></span>
        <svg class="svg-icon" viewBox="0 0 20 20">
            <path
                d="M14.38,3.467l0.232-0.633c0.086-0.226-0.031-0.477-0.264-0.559c-0.229-0.081-0.48,0.033-0.562,0.262l-0.234,0.631C10.695,2.38,7.648,3.89,6.616,6.689l-1.447,3.93l-2.664,1.227c-0.354,0.166-0.337,0.672,0.035,0.805l4.811,1.729c-0.19,1.119,0.445,2.25,1.561,2.65c1.119,0.402,2.341-0.059,2.923-1.039l4.811,1.73c0,0.002,0.002,0.002,0.002,0.002c0.23,0.082,0.484-0.033,0.568-0.262c0.049-0.129,0.029-0.266-0.041-0.377l-1.219-2.586l1.447-3.932C18.435,7.768,17.085,4.676,14.38,3.467 M9.215,16.211c-0.658-0.234-1.054-0.869-1.014-1.523l2.784,0.998C10.588,16.215,9.871,16.447,9.215,16.211 M16.573,10.27l-1.51,4.1c-0.041,0.107-0.037,0.227,0.012,0.33l0.871,1.844l-4.184-1.506l-3.734-1.342l-4.185-1.504l1.864-0.857c0.104-0.049,0.188-0.139,0.229-0.248l1.51-4.098c0.916-2.487,3.708-3.773,6.222-2.868C16.187,5.024,17.489,7.783,16.573,10.27">
            </path>
        </svg>
    </span>
    <p>Notification</p>
    </a>
</li>
<li>
    <a href="login.html" class="ico-register">
    <svg class="svg-icon" viewBox="0 0 20 20">
        <path fill="none" d="M14.023,12.154c1.514-1.192,2.488-3.038,2.488-5.114c0-3.597-2.914-6.512-6.512-6.512
            c-3.597,0-6.512,2.916-6.512,6.512c0,2.076,0.975,3.922,2.489,5.114c-2.714,1.385-4.625,4.117-4.836,7.318h1.186
            c0.229-2.998,2.177-5.512,4.86-6.566c0.853,0.41,1.804,0.646,2.813,0.646c1.01,0,1.961-0.236,2.812-0.646
            c2.684,1.055,4.633,3.568,4.859,6.566h1.188C18.648,16.271,16.736,13.539,14.023,12.154z M10,12.367
            c-2.943,0-5.328-2.385-5.328-5.327c0-2.943,2.385-5.328,5.328-5.328c2.943,0,5.328,2.385,5.328,5.328
            C15.328,9.982,12.943,12.367,10,12.367z"></path>
    </svg>
    <p>My account</p>
    </a>
</li>
</ul>
</div>
</div>

<div id="master-wrapper-content" class="master-wrapper-content">
<div class="master-column-wrapper">
<div class="page home-page">
<div class="page-body">
    <div class="home_slider_section">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section class="home_page_category_grid_area">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page_title_area">
                                <h2 class="page_title">
                                    <span>Our Product Categories</span>
                                </h2>
                            </div>

                            <div class="category-grid home_page_category_grid clearfix">
                                <div class="item_grid row popular_category_section">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <link href="assets/css/grid.css" rel="stylesheet" />
                <link href="assets/css/slick.css" rel="stylesheet" />
                <link href="assets/css/style.css" rel="stylesheet" />

                <div class="home-page-product">
                    <!--Category Panel-->
                    <div class="slider-title">
                        <h2 class="category-title">New Arrival</h2>
                        <a href="{{ route('shop') }}" class="shop-more">
                            Shop More
                        </a>
                    </div>
                        
                    <div class="slider-wrapper product-grid">
                        <div class="item-grid special-product-slider new_arrival">

                        </div>
                    </div>
                </div>
                <div class="home-page-product">
                    <!--Category Panel-->
                    <div class="slider-title">
                        <h2 class="category-title">Best Deal</h2>
                        <a href="{{ route('shop') }}" class="shop-more">
                            Shop More
                        </a>
                    </div>
                    <div class="slider-wrapper product-grid">
                        <div class="item-grid special-product-slider2 best_deal">

                        </div>
                    </div>
                </div>

                <!-- <script type="text/javascript">
                    $(document).ready(function () {
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
                    });
                </script> -->

                <div class="home-page-product">
                    <!--Category Panel-->
                    <div class="slider-title">
                        <h2 class="category-title">Featured Product</h2>
                        <a href="{{ route('shop') }}" class="shop-more">
                            Shop More
                        </a>
                    </div>
                    <div class="slider-wrapper product-grid">
                        <div class="item-grid special-product-slider3 featured_item">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        $.ajax({
            url: "{{route('home')}}",
            method: "GET",
            success: function(res){
                newArrival();
                if(res.slider)
                {
                    $("div.home_slider_section").html(res.slider);
                    $(".home-page-top-slider").slick({
                        dots: true,
                        arrows: false,
                        infinite: true,
                        speed: 500,
                        fade: true,
                        cssEase: 'linear'
                    });
                }

                if(res.category)
                {
                    $("div.popular_category_section").html(res.category);
                }
            }
        });

        function newArrival()
        {
            $.ajax({
                url: "{{route('product.new')}}",
                method: "GET",
                success: function(res){
                    bestDeal();
                    if(res.html)
                    {
                        $("div.new_arrival").html(res.html);
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

        function bestDeal()
        {
            $.ajax({
                url: "{{route('product.best')}}",
                method: "GET",
                success: function(res){
                    featuredItem();
                    if(res.html)
                    {
                        $("div.best_deal").html(res.html);
                        $('.special-product-slider2').slick({
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

        function featuredItem()
        {
            $.ajax({
                url: "{{route('product.featured')}}",
                method: "GET",
                success: function(res){
                    if(res.html)
                    {
                        $("div.featured_item").html(res.html);
                        $('.special-product-slider3').slick({
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