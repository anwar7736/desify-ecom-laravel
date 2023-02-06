jQuery(document).ready(function ($) {

    $('#home_latest_collection_product ul.product_list').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: true,
    });




    // Home latest collection brand slider
    $('#home_latest_collection_brand_slider ul').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        dots: false,
    });



    // home page latest news
    // var homeNewsCarouselArrow = $('#home_news_items_slider').parents('.home_latest_news').find('.page_title_area > .page_title_carousel_arrow');

    $('#home_news_items_slider').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        dots: true,
        arrows: false,
        // appendArrows: homeNewsCarouselArrow,
        prevArrow: '<button type="button" class="slick-prev">Prev</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
    });


    //all page checkbox
    $('div.page:not(.product-details-page) input[type="checkbox"]').checkator();

    // all page radiobox
    $('div.page:not(.product-details-page) input[type="radio"], .quick-view-product-details-information input[type="radio"]').checkator();

    // product page
    $('ul.option-list:not(.attribute-squares) input[type="checkbox"], ul.option-list:not(.attribute-squares) input[type="radio"]').checkator();



    // Product page image thumb carousel
    $('#product_page_image_gallery .picture-thumbs').slick({
        slidesToScroll: 1,
        slidesToShow: 4,
        dots: false,
        infinite: false,
        // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
        // nextArrow: '<button type="button" class="slick-next">Next</button>',
    });



    // Product page also purchased carousel
    $('#also_purchased_products_grid .item-grid').slick({

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
        // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
        // nextArrow: '<button type="button" class="slick-next">Next</button>',
    });


    // Product page related product carousel
    $('#related_products_grid .item-grid').slick({

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
        // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
        // nextArrow: '<button type="button" class="slick-next">Next</button>',
    });



    $('#quick-view-modal').on('shown.bs.modal', function (e) {
        $('.quick-view-product-details-information input[type="radio"], .quick-view-product-details-information input[type="checkbox"]').checkator();



        // Product page also purchased carousel
        $('#quick-view-modal .also-purchased-products-grid .item-grid').slick({
            slidesToScroll: 1,
            slidesToShow: 3,
            dots: false,
            infinite: false,
            // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            // nextArrow: '<button type="button" class="slick-next">Next</button>',
        });


        // Product page related product carousel
        $('#quick-view-modal .related-products-grid .item-grid').slick({
            slidesToScroll: 1,
            slidesToShow: 3,
            dots: false,
            infinite: false,
            // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
            // nextArrow: '<button type="button" class="slick-next">Next</button>',
        });



    });



    // Home page best seller
    $('.home-page #home_page_bestseller_slider .item-grid').slick({

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
        // prevArrow: '<button type="button" class="slick-prev">Prev</button>',
        // nextArrow: '<button type="button" class="slick-next">Next</button>',
    });




    // Home page featured product
    $('#home_page_features_product_slider .item-grid').slick({

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
        //prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        //nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
    });


    $(window).on('load', function () {
        $('html').removeClass('loading');
        // $('#Menu_toggle_icon a').trigger('click');
    });

    //var mainMenuPush = true;
    //function mainMenuPushStyle(){

    //    if( $(document.body).width() > 1024 ){
    //        mainMenuPush = true;

    //        $("#main_menu_wrapper").slideReveal({
    //            trigger: $("#Menu_toggle_icon a"),
    //            position: "left",
    //            push: mainMenuPush,
    //            overlay: true,
    //            width: 210,

    //        });

    //        $(window).on('load', function(){
    //          $('#Menu_toggle_icon a').trigger('click');
    //        });
    //    }
    //    else{
    //        mainMenuPush = false;

    //        $("#main_menu_wrapper").slideReveal({
    //            trigger: $("#Menu_toggle_icon a"),
    //            position: "left",
    //            push: mainMenuPush,
    //            overlay: true,
    //            width: 210,
    //        });

    //       $('#master-wrapper-content').removeClass('active_slide').css({'left':'0px', 'width': '100%'});
    //    }
    //}


    //mainMenuPushStyle();


    //$(window).on('resize', function(){
    //    mainMenuPushStyle();
    //});



    $('.sidebar .block .list .sublist-toggle').click(function () {
        $(this).siblings('.sub_list').slideToggle('slow');
        $(this).toggleClass('active');
    });


    // $('header').on('click', '#Menu_toggle_icon', function (e) {
    //     e.preventDefault();
    //     $(this).trigger('click');
    //     // $('#flyout-cart').toggleClass('active');
    // });



    if ($('body > .master-wrapper-page > .admin-header-links').length) {
        var adminLinksHeight = parseInt($('body > .master-wrapper-page > .admin-header-links').innerHeight());
        $(window).scroll(function () {

            var scroll = $(window).scrollTop();

            //>=, not <=
            if (scroll > 35) {
                //clearHeader, not clearheader - caps H
                $("header.header_area").addClass('sticky').css("top", "0");
                //$('#main_menu_wrapper').css('padding-top', '35px');
            }
            else if (scroll <= 35) {
                $("header.header_area").removeClass('sticky');//.css("top", adminLinksHeight+"px");
                //$('#main_menu_wrapper').css('padding-top', '70px');
            }

        });
    }
    else {

        var adminLinksHeight = parseInt($('body > .master-wrapper-page > .header_area').innerHeight());
        $(window).scroll(function () {

            var scroll = $(window).scrollTop();

            //>=, not <=
            if (scroll > adminLinksHeight) {
                //clearHeader, not clearheader - caps H
                $("header.header_area").addClass('sticky').css("top", "0");
            }
            else if (scroll <= adminLinksHeight) {
                $("header.header_area").removeClass('sticky');//.css("top", adminLinksHeight+"px");
            }

        });
    }






}); // doc ready

                                          $("#success-alert").hide();
                                          $("#success-alertSpecifications").hide();
                                    
                                        $(function () {
                                            $("ul.nav-tabs li:first").addClass("active");
                                            $(".tab-content .tab-pane:first").addClass("active");
                                        });
                                    
                                    
                                       function copyToClipboard(element,alertTxt) {
                                          var $temp = $("<input>");
                                          $("body").append($temp);
                                          $temp.val($(element).text()).select();
                                          document.execCommand("copy");
                                           $temp.remove();
                                           showAlert();
                                        }
                                    
                                        function showAlert() {
                                            $("#success-alert").fadeTo(1500, 500).slideUp(500, function () {
                                                $("#success-alert").slideUp(500);
                                            });
                                            $("#success-alertSpecifications").fadeTo(1500, 500).slideUp(500, function () {
                                                $("#success-alertSpecifications").slideUp(500);
                                            });
                                            
                                        }



$(document).ready(function () {
    // show sidebar and overlay
    function showSidebar() {
        sidebar.css('margin-left', '0');

        overlay.show(0, function () {
            overlay.fadeTo('500', 0.5);
        });
    }

    // hide sidebar and overlay
    function hideSidebar() {
        sidebar.css('margin-left', sidebar.innerWidth() * -1 + 'px');

        overlay.fadeTo('500', 0, function () {
            overlay.hide();
        });;
    }

    // selectors
    var sidebar = $('[data-sidebar]');
    var button = $('[data-sidebar-button]');
    var overlay = $('[data-sidebar-overlay]');

    // add height to content area
    overlay.parent().css('min-height', 'inherit');

    // hide sidebar on load
    //sidebar.css('margin-left', sidebar.innerWidth() * -1 + 'px');

    sidebar.show(0, function () {
        sidebar.css('transition', 'all 0.5s ease');
    });

    // toggle sidebar on click
    button.click(function () {
        if (overlay.is(':visible')) {
            hideSidebar();
        } else {
            showSidebar();
        }

        return false;
    });

    // hide sidebar on overlay click
    overlay.click(function () {
        hideSidebar();
    });
});
$(document).ready(function () {
    $('.block .title').click(function () {
        var e = window, a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        var result = { width: e[a + 'Width'], height: e[a + 'Height'] };
        if (result.width < 1001) {
            $(this).siblings('.listbox').slideToggle('slow');
        }
    });
});
$(document).ready(function () {
    $('.footer-block .title').click(function () {
        $(this).toggleClass('expanded');
        var e = window, a = 'inner';
        if (!('innerWidth' in window)) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        var result = { width: e[a + 'Width'], height: e[a + 'Height'] };
        if (result.width < 769) {
            $(this).siblings('.list').slideToggle('slow');
        }
    });
});
function newsletter_subscribe(subscribe) {
    var subscribeProgress = $("#subscribe-loading-progress");
    subscribeProgress.show();
    var postData = {
        subscribe: subscribe,
        email: $("#newsletter-email").val()
    };
    $.ajax({
        cache: false,
        type: "POST",
        url: "/subscribenewsletter",
        data: postData,
        success: function (data) {
            subscribeProgress.hide();
            $("#newsletter-result-block").html(data.Result);
            if (data.Success) {
                $('#newsletter-subscribe-block').hide();
                $('#newsletter-result-block').show();
            } else {
                $('#newsletter-result-block').fadeIn("slow").delay(2000).fadeOut("slow");
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert('Failed to subscribe.');
            subscribeProgress.hide();
        }
    });
}

$(document).ready(function () {
    $('#newsletter-subscribe-button').click(function () {
        newsletter_subscribe('true');
    });
    $("#newsletter-email").keydown(function (event) {
        if (event.keyCode == 13) {
            $("#newsletter-subscribe-button").click();
            return false;
        }
    });
});
$(document).ready(function () {

    $("#flyout_cart_wrapper").slideReveal({
        trigger: $("#topcartlink"),
        position: "right",
        push: false,
        overlay: true,
        width: 270,
        shown: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 1,
                'visibility': 'visible'
            });
        },
        hidden: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        }
    });

    $('header').on('click', '#topcartlink', function (e) {
        e.preventDefault();
    });


    $(document).on('click', '#flyout_cart_wrapper .close, #flyout_cart_wrapper .flyout_cart_wrapper_close_arrow', function () {
        $('#flyout_cart_wrapper').slideReveal("hide");
    });


});
$(document).ready(function () {
    $('.menu-toggle').click(function () {
        //$(this).siblings('.top-menu.mobile').slideToggle('slow');
        $(this).toggleClass('cross');
        $('body').toggleClass('no-scroll');
        $('.top-menu.mobile').toggleClass('show');
        $('#mobileMenuOverlay').toggleClass('show');
        $('ul.ulCog').removeClass('show');
    });
    $('#mobileMenuOverlay').click(function () {
        $('body').toggleClass('no-scroll');
        $('.top-menu.mobile').toggleClass('show');
        $('#mobileMenuOverlay').toggleClass('show');
        $('div.menu-toggle').toggleClass('cross');
    });

    $('.top-menu.mobile .sublist-toggle').click(function () {
        $(this).toggleClass('expand');
        $(this).siblings('.sublist').slideToggle('slow');
    });
    $('#mobileCog').click(function () {
        $(this).siblings('ul.ulCog').toggleClass('show');
        $('div.menu-toggle').removeClass('cross');
        $('body').removeClass('no-scroll');
        $('.top-menu.mobile').removeClass('show');
        $('#mobileMenuOverlay').removeClass('show');
    });
});
$(document).ready(function () {

    $("#flyout_cart_wrapper").slideReveal({
        trigger: $("#topcartlink"),
        position: "right",
        push: false,
        overlay: true,
        width: 270,
        shown: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 1,
                'visibility': 'visible'
            });
        },
        hidden: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        }
    });

    $('header').on('click', '#topcartlink', function (e) {
        e.preventDefault();
    });


    $(document).on('click', '#flyout_cart_wrapper .close, #flyout_cart_wrapper .flyout_cart_wrapper_close_arrow', function () {
        $('#flyout_cart_wrapper').slideReveal("hide");
    });


});
$(document).ready(function () {
    $('#small-searchterms').autocomplete({
        delay: 500,
        minLength: 1,
        source: '/catalog/searchtermautocomplete',
        appendTo: '.search-box',
        select: function (event, ui) {
            $("#small-searchterms").val(ui.item.label);
            setLocation(ui.item.producturl);
            return false;
        }
    })
        .data("ui-autocomplete")._renderItem = function (ul, item) {
            var t = item.label;
            //html encode
            t = htmlEncode(t);
            return $("<li></li>")
                .data("item.autocomplete", item)
                .append("<a><img src='" + item.productpictureurl + "'><span>" + t + "</span></a>")
                .appendTo(ul);
        };
});
$("#small-search-box-form").submit(function (event) {
    if ($("#small-searchterms").val() == "") {
        alert('Please enter some search keyword');
        $("#small-searchterms").focus();
        event.preventDefault();
    }
});
$(document).ready(function () {

    $("#flyout_cart_wrapper").slideReveal({
        trigger: $("#topcartlink"),
        position: "right",
        push: false,
        overlay: true,
        width: 270,
        shown: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 1,
                'visibility': 'visible'
            });
        },
        hidden: function (slider, trigger) {
            $('#flyout_cart_wrapper .flyout_cart_wrapper_close_arrow').css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        }
    });

    $('header').on('click', '#topcartlink', function (e) {
        e.preventDefault();
    });


    $(document).on('click', '#flyout_cart_wrapper .close, #flyout_cart_wrapper .flyout_cart_wrapper_close_arrow', function () {
        $('#flyout_cart_wrapper').slideReveal("hide");
    });


});
AjaxCart.init(false, '.header-links .cart-qty', '.header-links .wishlist-qty', '#flyout-cart', '.cart-sub-total');
$(document).ready(function () {
    $('.home-page-top-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
});


$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
    var windowWidth = $(window).width();
    if (windowWidth > 1000) {
        $('body').css('padding-bottom', $('div.footer').innerHeight() + 10);
    }
});

window.fbAsyncInit = function () {
    FB.init({
        xfbml: true,
        version: 'v3.3'
    });
};

(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));