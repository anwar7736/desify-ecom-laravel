<!DOCTYPE html>
<html class="{{request()->is('/') ? 'html-home-page' : ''}} loading">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>@yield('title', 'Deshify')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('lib/jquery-ui-themes/smoothness/jquery-ui-1.10.3.custom.min.css') }}" rel="stylesheet" type="text/css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/fm.checkator.jquery.css') }}" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans:400,600,700"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/stylesheet.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/grid.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('lib/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <style>
        .minishoppingCartRemoveitemIcon {
        width: 15px;
        float: right;
        margin-top: 24px;
        text-align: right;
        cursor: pointer;
        }
    </style>
    @yield('css')
</head>

<body>
<div class="master-wrapper-page">
<div id="mobileMenuOverlay" class="mobile-menu-overlay"></div>
    @include('layouts.header')
    @yield('content')
</div>
    @include('layouts.footer')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.validate.unobtrusive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/public.common.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/public.ajaxcart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.slidereveal.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/fm.checkator.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/custome.js') }}" type="text/javascript"></script>
    <a href="#" id="scroll" style="display: none;"><i class="fas fa-arrow-up"></i></a>
    @stack('js')

</body>


</html>