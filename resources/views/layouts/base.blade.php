<!doctype html>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Laravel Test">

    <title>Laravel </title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="stylesheet" href="/css/main.css" rel="preload">

        <![endif]-->
        <link rel="icon" type="image/png" href="/img/favicon.png" rel="preload">
        <link href="//fonts.googleapis.com/css?family=Montserrat:500,800" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">

        <title>
            @yield('title')
        </title>
</head>
<body data-components="form @yield('body_components')">


<div class="page-wrap @yield('page_class')">

    <div class="page-wrap__overlay js-flyout-close"></div>


    <div class="page-main" role="main">

        <div class="section section--xsm section--light u-hide@xlr">
            <div class="container">
                <div class="flex flex-justify-center">
                    <a href="{{route('home.index')}}" class="page-header__logo">
                        LOGO
                    </a>
                </div>
                @include('partials.menu')
            </div>
        </div>

        @section('content')

            <div class="section section--default">
                <div class="container">
                    @yield('content_header')
                    @yield('breadcrumbs')
                </div>
            </div>

            @include('partials.errors')
            @include('partials.success')
            @include('partials.messages')

            <div class="section section--default">
                <div class="container">
                    @yield('content_body')
                </div>
            </div>
        @show

        @section('footer')
        @show
    </div>


</div>

{{--@include('cookieConsent::index')--}}

<script type="text/javascript">
    window.app = window.app || {};
    app.variables = {
        assetsPath: '/'
    };
</script>

<script type="text/javascript" src="/js/main.js"></script>

@stack('javascript')


</body>
</html>
