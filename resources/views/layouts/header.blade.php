<header class="header_area">
<div class="header_top container">
    <div class="row">
        <div class="col-md-12 divHeader">
            <div class="menu-toggle">
            <span class="bar bar1">&nbsp;</span>
            <span class="bar bar2">&nbsp;</span>
            <span class="bar bar3">&nbsp;</span>
            </div>
            <div class="header-logo">
            <a href="{{ route('home') }}">
            <img class="img-responsive header_logo" title="" alt="Deshify"
                src="{{ asset('images/thumbs/0002659.png') }}">
            </a>
            </div>
            <div class="header-upper">
            <div class="header-links-wrapper">
                <div class="header-links header-links-root">
                    <div class="dropdown header_user_links header_dropwown_link">
                        <a class="dropdown-toggle" id="header_user_links" aria-haspopup="true"
                        aria-expanded="true">
                        <span class="customer-name single-line">Hi, login</span>
                        <span>My account</span>
                        <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="header_user_links">
                        <li><a href="login.html" class="ico-register">Log in</a></li>
                        </ul>
                    </div>
                    <div class="shopping_cart_area">
                        <div class="shopping_cart">
                        <div id="topcartlink">
                            <a href="cart.html" class="ico-cart">
                            <span class="cart_icon">
                            <i class="fas fa-shopping-cart"></i>
                            </span>
                            <span class="cart-qty">{{ getTotalCart() }} Items</span>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="search-box store-search-box">
            <div class="search_box_area">
                <div class="search_box" aria-labelledby="search_box_dropdown">
                    <form class="small-search-box-form"
                     onSubmit="return false">
                        <input type="text" class="search-box-text" id="small-searchterms"
                        autocomplete="off" name="q" onkeypress="handle(event)" placeholder="Search product..." autofocus/>
                        <span class="button_submit">
                        <input type="button"  onClick="searchProduct()" class="button-1 search-box-button" value="Search" />
                        <i class="fas fa-search"></i>
                        </span>
                    </form>
                </div>
            </div>
            </div>
            <div class="mobile-header-links">
            <div id="mobileCog">
                <i class="fas fa-cog"></i>
            </div>
            <ul class="ulCog">
                <li>
                    <div class="header-links header-links-root">
                        <div class="dropdown header_user_links header_dropwown_link">
                        <a class="dropdown-toggle" id="header_user_links" aria-haspopup="true"
                            aria-expanded="true">
                        <span class="customer-name single-line">Hi, login</span>
                        <span>My account</span>
                        <i class="fas fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="header_user_links">
                            <li><a href="login.html" class="ico-register">Log in</a></li>
                        </ul>
                        </div>
                        <div class="shopping_cart_area">
                        <div class="shopping_cart">
                            <div id="topcartlink">
                                <a href="cart.html" class="ico-cart">
                                <span class="cart_icon">
                                <i class="fas fa-shopping-cart"></i>
                                </span>
                                <span class="cart-qty">0 Items</span>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>
<div class="header-menu">
    <ul class="top-menu desktop">
        <li class="top-menu-categories">
            <a href="#">
            Categories
            &nbsp;
            <i class="fas fa-angle-down"></i>
            </a>
            <ul>
                @foreach(\Cache::get('categories', []) as $category)
                <li class=" inactive">
                    <a href="{{ route('shop', ['category'=>$category['id'] ]) }}">
                        {{ $category['name'] }}
                     @if(!empty($category['subcategories']))
                        <i class="fas fa-angle-right"></i>
                     @endif
                    </a>
                    <div class="sublist-toggle">
                        <span class="more-icon"></span>
                    </div>
                    @if(!empty($category['subcategories']))
                    <ul class="sublist first-level">
                        @foreach($category['subcategories'] as $subcategory)
                        <li class=" inactive">
                            <a href="{{ route('shop', ['category'=>$subcategory['id'] ]) }}">
                                {{ $subcategory['name'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Daily Deals</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Men&#x27;s Watches</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Hot Sales</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Offer Zone</a>
        </li>
    </ul>
    <div id="modelContent"></div>
    <ul class="top-menu mobile">
        @foreach(\Cache::get('categories', []) as $category)
        <li class=" inactive">
            <a href="{{ route('shop', ['category'=>$category['id'] ]) }}">
            {{ $category['name'] }}
            
                <i class="fas fa-angle-right"></i>
          
            </a>
            <div class="sublist-toggle">            
            @if(!empty($category['subcategories']))
                <span class="more-icon"></span>  
            @endif
            </div>
            @if(!empty($category['subcategories']))
                <ul class="sublist first-level">
                    @foreach($category['subcategories'] as $subcategory)
                        <li class=" inactive">
                            <a href="{{ route('shop', ['category'=>$subcategory['id'] ]) }}">
                                {{ $subcategory['name'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
        @endforeach
        <li class="custom-item">
            <a href="javascript:void(0)">Daily Deals</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Men&#x27;s Watches</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Hot Sales</a>
        </li>
        <li class="custom-item">
            <a href="javascript:void(0)">Offer Zone</a>
        </li>
    </ul>
</div>
</header>
<script>
    function handle(e)
    {
        let query = e.target.value;
        if(query.length > 0)
        {
            if(e.which === 13)
            {
                location.href = "shop?query="+query;
            }
            else return;
        }
    }

    function searchProduct()
    {
        let query = $('input[name="q"]').val();
        if(query.length > 0)
        {
            location.href = "shop?query="+query;
        }
        else return;
    }
</script>