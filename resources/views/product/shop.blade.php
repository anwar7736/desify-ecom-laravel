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
                            <a href="{{ route('home') }}" title="Home">Home</a>
                            <span class="delimiter">/</span>
                        </li>
                            <li>
                                    <strong class="current-item">Shop</strong>
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
                <div class="page category-page">
                <div class="page-body">
                    <div class="category-grid sub-category-grid">
                        <div class="item-grid">
                            <div class="item-box">
                            <div class="sub-category-item">
                                <div class="picture">
                                    <a href="#" title="Women&#x27;s Watches ">
                                    <img alt="Women&#x27;s Watches" src="https://www.deshify.com/images/thumbs/default-image_450.png" title="Women&#x27;s Watches " />
                                    </a>
                                </div>
                                <h2 class="title">
                                    <a href="#" title="Women&#x27;s Watches">
                                    Women&#x27;s Watches
                                    </a>
                                </h2>
                            </div>
                            </div>
                            <div class="item-box">
                            <div class="sub-category-item">
                                <div class="picture">
                                    <a href="#" title="">
                                    <img alt="Laptop Table  Kids study Table" src="https://www.deshify.com/images/thumbs/default-image_450.png" title="Laptop Table &amp; Kids study Table" />
                                    </a>
                                </div>
                                <h2 class="title">
                                    <a href="#" title="Laptop Table &amp; Kids study Table ">
                                    Laptop Table &amp; Kids study Table
                                    </a>
                                </h2>
                            </div>
                            </div>
                            <div class="item-box">
                            <div class="sub-category-item">
                                <div class="picture">
                                    <a href="https://www.deshify.com/new-products" title="New Products ">
                                    <img alt="New Products" src="https://www.deshify.com/images/thumbs/default-image_450.png" title="New Products " />
                                    </a>
                                </div>
                                <h2 class="title">
                                    <a href="https://www.deshify.com/new-products" title="New Products">
                                    New Products
                                    </a>
                                </h2>
                            </div>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.sub-category-grid .item-grid').slick({
                                speed: 800,
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
                                        breakpoint: 1001,
                                        settings: "unslick"
                                    }
                                ]
                            });
                        });
                    </script>
                    <div class="section-white">
                        <div class="product-selectors">
                            <div class="product-sorting">
                            <select id="products-orderby" name="products-orderby">
                                <option selected="selected" value="">Position</option>
                                <option value="">Name: A To Z</option>
                                <option value="">Name: Z To A</option>
                                <option value="">Price: Low To High</option>
                                <option value="">Created On</option>
                            </select>
                            </div>
                            <div class="product-viewmode">
                            <span>View As</span>
                            </div>
                            <div class="product-page-size">
                            <span>Display</span>
                            <select id="products-pagesize" name="products-pagesize" onchange="setLocation(this.value);">
                                <option value="#">80</option>
                                <option value="#">100</option>
                                <option selected="selected" value="#">120</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="section-white">
                            <form id="ajaxfilter-form" action="#">
                                <div class="ajax-filter-section">
                                    <div>
                                        <div id="price-filter-section">
                                        <script>
                                            $(function () {
                                            
                                                $("#slider-range").slider({
                                                    range: true,
                                                    min: 450,
                                                    max: 2800,
                                                    values: [450, 2800],
                                            
                                                    slide: function (event, ui) {
                                                        var currentMin = ui.values[0];
                                                        var currentMax = ui.values[1];
                                                        $("#price-current-min").val(currentMin);
                                                        $("#price-current-max").val(currentMax);
                                                    },
                                                    create: function( event, ui ) {
                                                        if ( (450 == 450 && 2800 == 2800) )
                                                        {
                                                            $(".filter-section .ajaxfilter-clear-price").hide();
                                                        }
                                                    },
                                                    stop: function (event, ui) {
                                                        var currentMin = ui.values[0];
                                                        var currentMax = ui.values[1];
                                            
                                                        if (450 == currentMin && 2800 == currentMax)
                                                        {
                                                            $(".filter-section .ajaxfilter-clear-price").hide();
                                                        }
                                                        else {
                                                            $(".filter-section .ajaxfilter-clear-price").show();
                                                        }
                                                        AjaxFilter.setFilter('p');
                                                    }
                                                });
                                                $("#price-current-min").val(450);
                                                $("#price-current-max").val(2800);
                                            
                                            
                                                $('.ajaxfilter-clear-price').click(function (e) {
                                                    $("#price-current-min").val(450);
                                                    $("#price-current-max").val(2800);
                                            
                                                    $("#slider-range").slider("values", 0,450);
                                                    $("#slider-range").slider("values", 1,2800);
                                                    AjaxFilter.setFilter('p');
                                                });
                                            
                                            });
                                            
                                            
                                        </script>
                                        <div class="filter-section">
                                            <div class="title">
                                                <span class="ajaxfilter-title" style="float:left">Filter By Price</span>
                                                <a class="ajaxfilter-clear-price" style="float:right;">Remove</a>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="ajaxfilter-section">
                                                <input type="hidden" value="BDT" id="currency-symbol" name="" />
                                                <div class="ajaxfilter-price-range-section">
                                                    <div class="price-min" style="float: left">
                                                    <span>plugin.widgets.productfilter.pricerangefilter.min:</span>
                                                    <span class="price-range-min">BDT450</span>
                                                    </div>
                                                    <div class="price-max" style="float: right">
                                                    <span>plugin.widgets.productfilter.pricerangefilter.max:</span>
                                                    <span class="price-range-max">BDT2800</span>
                                                    </div>
                                                </div>
                                                <div id="slider-range">
                                                    <input type="hidden" value="450" id="min-price" />
                                                    <input type="hidden" value="2800" id="max-price" />
                                                </div>
                                                <div class="ajaxfilter-price-section">
                                                    <div class="ajaxfilter-price-section">
                                                    <input type="text" value="450"
                                                        readonly id="price-current-min" name="" />
                                                    <input type="text" value="2800"
                                                        readonly id="price-current-max" name="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div id="specification-filter-section">
                                        <div class="specification-section">
                                            <div class="filter-section">
                                                <div class="title">
                                                    <span class="ajaxfilter-title" style="float:left">Brand Name</span>
                                                </div>
                                                <div class="ajaxfilter-section">
                                                    <ul>
                                                    <li>
                                                        <input type="checkbox" name="" value="821" />
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" name="" value="823"/>
                                                        <label for="">SKMEI</label>
                                                    </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="product-grid">
                            <div class="item-grid grid_4 all_product">

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

</div>
@endsection
@push('js')
<script>
    $(document).ready(function(){
        getProducts();
        function getProducts()
        {
            $.ajax({
                url : "{{route('shop')}}",
                method: "GET",
                dataType: "JSON",
                success: function(res)
                {
                    if(res.success)
                    {
                        if(res.html)
                        {
                            $("div.all_product").html(res.html);
                        }
                    }
                }
            });
        }
    })
</script>
@endpush