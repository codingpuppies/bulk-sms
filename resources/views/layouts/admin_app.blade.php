<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <style></style>
    <link href="/css/theme.css" rel="stylesheet">
    <link href="/css/theme/index.css" rel="stylesheet">
</head>
<body class="app">
<div id="app">
    <div id="loader">
        <div class="spinner"></div>
    </div>

    {{--@include('partials.pvectorMap `lugin.header')--}}

    @include('partials.sidebar')

    {{--@yield('banner')--}}

    <div class="page-container">
        @include('partials.header')
        @yield('content')
        @include('partials.footer')
    </div>
    {{--@include('partials.plugin.footer')--}}
</div>


<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/theme.js"></script>
<script type="text/javascript" src="/js/bundle.js"></script>
</body>
</html>