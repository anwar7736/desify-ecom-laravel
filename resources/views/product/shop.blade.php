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
                    @foreach(\Cache::get('categories', []) as $category)
                    <div class="item-box">
                        <div class="sub-category-item">
                            <div class="picture">
                                <a href="{{ route('shop', ['category'=> $category['id'] ]) }}" title="">
                                <img alt="" src="{{ $category['image_url'] }}" title="" />
                                </a>
                            </div>
                            <h2 class="title">
                                <a href="{{ route('shop', ['category'=> $category['id'] ]) }}" title="Women&#x27;s Watches">
                                    {{ $category['name'] }}
                                </a>
                            </h2>
                        </div>
                    </div>
                    @endforeach
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
                        <option value="a-z">Name: A To Z</option>
                        <option value="z-a">Name: Z To A</option>
                        <option value="created">Created On</option>
                        <option value="l-h">Price: Low To High</option>
                        <option value="h-l">Price: High To Low</option>
                    </select>
                    </div>
                    <div class="product-viewmode">
                    <span>View As</span>
                    </div>
                    <div class="product-page-size">
                    <span>Display</span>
                    <select id="products-pagesize" name="products-pagesize">
                        <option value="25" selected="selected">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
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
                                            min: 0,
                                            max: 70000,
                                            values: [0, 70000],
                                    
                                            slide: function (event, ui) {
                                                var currentMin = ui.values[0];
                                                var currentMax = ui.values[1];
                                                $("#price-current-min").val(currentMin);
                                                $("#price-current-max").val(currentMax);
                                            
                                            },
                                            create: function( event, ui ) {
                                                if ( (0 == 0 && 70000 == 70000) )
                                                {
                                                    $(".filter-section .ajaxfilter-clear-price").hide();
                                                }
                                            },
                                            stop: function (event, ui) {
                                                var currentMin = ui.values[0];
                                                var currentMax = ui.values[1];
                                    
                                                if (0 == currentMin && 70000 == currentMax)
                                                {
                                                    $(".filter-section .ajaxfilter-clear-price").hide();
                                                }
                                                else {
                                                    $(".filter-section .ajaxfilter-clear-price").show();
                                                }
                                                AjaxFilter.setFilter('p');
                                            }
                                        });
                                        
                                        $("#price-current-min").val(0);
                                        $("#price-current-max").val(70000);
                                    
                                    
                                        $('.ajaxfilter-clear-price').click(function (e) {
                                            $("#price-current-min").val(0);
                                            $("#price-current-max").val(70000);
                                    
                                            $("#slider-range").slider("values", 0,0);
                                            $("#slider-range").slider("values", 1,70000);
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
                                            <input type="hidden" value="0" id="min-price" />
                                            <input type="hidden" value="70000" id="max-price" />
                                        </div>
                                        <div class="ajaxfilter-price-section">
                                            <div class="ajaxfilter-price-section">
                                            <input type="text" value="0"
                                                readonly id="price-current-min" name="" />
                                            <input type="text" value="70000"
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
                                            <li class="hide">
                                                <input type="checkbox" name="" value="821" />
                                            </li>
                                            @foreach($brands as $brand)
                                            <li>
                                                <label>
                                                    <input type="checkbox" name="brand[]" class="brand" value="{{ $brand['id'] }}"/> {{ $brand['name'] }}
                                                </label>
                                            </li>
                                            @endforeach
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
    
$(document).on('change', '.brand', function(){
    getProducts();
});

$(document).on('change', '#products-orderby', function(){
    getProducts();
});

$(document).on('change', '#products-pagesize', function(){
    getProducts();
});






function getProducts()
{
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get('category');
    const query = urlParams.get('query');
    const brands = [];
    $("input.brand:checked").each(function(){
        brands.push($(this).val());
    });
    const priceMin = $("input#price-current-min").val();
    const priceMax = $("input#price-current-max").val();
    let paginate = $("#products-pagesize").val();
    let orderBy = $("#products-orderby").val();

    $.ajax({
        url : "{{route('shop')}}",
        method: "GET",
        data: {category, query, priceMin, priceMax, paginate, orderBy, brands},
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