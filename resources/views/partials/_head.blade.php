<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>"{{config('template.title')}} | @yield('title_header', config('app.name'))"</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="@yield('description', 'Description')">
        <meta name="author" content="@yield('author', 'Amaral karl')">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="@yield('title_header', 'Title')">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:description" content="@yield('description', 'Description')">
        <meta property="og:type" content="@yield('og-type', 'eletrônica, tecnologia, software, computação, áudio, vídeo')">
        <meta property="og:url" content="@yield('og-url', Request::url())">
        <meta property="og:image" content="@yield('og-image', Request::url())">
        <!-- Custom Meta -->
        @stack('meta')
        <!-- End Custom Meta -->

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{config('template.shortcut_icon')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{config('template.icon')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{config('template.apple_touch_icon')}}">
        <!-- END Icons -->
        <!-- Custom Stylesheet -->
        @stack('stylesheet')
        <!-- End Custom Stylesheet -->
        
        <!-- Base framework -->
        @asset('assets/css/codebase.css', 'css-main')

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
         {{-- @asset('assets/css/themes/corporate.min.css','css-main')  --}}
         {{-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> --}}
        <!-- END Stylesheets -->
    </head>