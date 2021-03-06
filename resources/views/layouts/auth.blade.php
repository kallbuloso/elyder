<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <!-- Title and Meta -->
        ...
        <!-- END Title and Meta -->

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        ...
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS go here -->

        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

            GENERIC

                'enable-cookies'                            Remembers active color theme between pages (when set through color
                                                            theme helper Codebase() -> uiHandleTheme())

            SIDEBAR & SIDE OVERLAY

                'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
                'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
                'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
                'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
                'sidebar-inverse'                           Dark themed sidebar

                'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
                'side-overlay-o'                            Visible Side Overlay by default

                'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native
                                                            scrolling (screen width > 991px)

            HEADER

                ''                                          Static Header if no class is added
                'page-header-fixed'                         Fixed Header

            HEADER STYLE

                ''                                          Classic Header style if no class is added
                'page-header-modern'                        Modern Header style
                'page-header-inverse'                       Dark themed Header (works only with classic Header style)
                'page-header-glass'                         Light themed Header with transparency by default
                                                            (absolute position, perfect for light images underneath - solid light background
                                                            on scroll if the Header is also set as fixed)
                'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                            (absolute position, perfect for dark images underneath - solid dark background
                                                            on scroll if the Header is also set as fixed)

            MAIN CONTENT LAYOUT

                ''                                          Full width Main Content if no class is added
                'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
                'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
            -->
        <div id="page-container">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                ...
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                ...
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                ...
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                ...
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer">
                ...
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/codebase.min.js"></script>

        <!-- Page JS Plugins + Page JS Code -->
    </body>
</html>