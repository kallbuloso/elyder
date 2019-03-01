<!DOCTYPE html>
<!--[if lte IE 9]> <html lang="{{ str_replace('-', '_', app()->getLocale()) }}" class="lt-ie10 lt-ie10-msg no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="{{ str_replace('-', '_', app()->getLocale()) }}" class="no-focus"> <!--<![endif]-->
    @include('partials._head')
    <body>
    {{-- <div id="page-loader" class="show"></div> --}}
    <div id="app" style="display:none">
        @yield('content')
    </div>    
        <!-- Codebase Core JS -->
        {{-- @asset('assets/js/core/bootstrap.bundle.min.js') --}}
        @asset('assets/js/core/jquery.min.js')
        
        <script src="/js/app.js" type="text/javascript"></script>
        @asset('assets/js/core/jquery.slimscroll.min.js')
        @asset('assets/js/core/jquery.scrollLock.min.js')
        @asset('assets/js/core/jquery.appear.min.js')
        @asset('assets/js/core/jquery.countTo.min.js')
        @asset('assets/js/core/js.cookie.min.js')
        @asset('assets/js/codebase.js')
        <!-- Custom Scripts -->
        @stack('scripts')
        <!-- End Custom Scripts -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('sweet::alert')  
        
    </body>
</html>