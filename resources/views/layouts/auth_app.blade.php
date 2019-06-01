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

    {{--@include('partials.plugin.header')--}}

    {{--@yield('banner')--}}
    <main>
        <div class="peers ai-s fxw-nw h-100vh">
            {{--side image--}}
            <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv"
                 style="background-image:url(/assets/static/images/bg.jpg);background-color:pink;">
                <div class="pos-a centerXY">
                    <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">
                        <img class="pos-a centerXY"
                             src="/assets/static/images/logo.png"
                             alt=""></div>
                </div>
            </div>
            {{-- login panel --}}
            @yield('content')
        </div>

    </main>
    ]
    {{--@include('partials.plugin.footer')--}}
</div>


<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/theme.js"></script>
<script type="text/javascript" src="/js/bundle.js"></script>
</body>
</html>