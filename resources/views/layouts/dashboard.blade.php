<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.css">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
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

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed ">

        <x-sideoverlay></x-sideoverlay>

        <x-sidebar></x-sidebar>

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="header_search_on">
                        <i class="fa fa-search"></i>
                    </button>
                    <!-- END Open Search Section -->

                    <!-- Layout Options (used just for demonstration) -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary"
                            id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </button>
                        <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                            <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                            <h6 class="dropdown-header">Color Themes</h6>
                            <div class="row no-gutters text-center mb-5">
                                <div class="col-2 mb-5">
                                    <a class="text-default" data-toggle="theme" data-theme="default"
                                        href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-elegance" data-toggle="theme"
                                        data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-pulse" data-toggle="theme"
                                        data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-flat" data-toggle="theme"
                                        data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-corporate" data-toggle="theme"
                                        data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-2 mb-5">
                                    <a class="text-earth" data-toggle="theme"
                                        data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <h6 class="dropdown-header">Header</h6>
                            <div class="row gutters-tiny text-center mb-5">
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary"
                                        data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                </div>
                                <div class="col-6">
                                    <button type="button"
                                        class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10"
                                        data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                </div>
                            </div>
                            <h6 class="dropdown-header">Sidebar</h6>
                            <div class="row gutters-tiny text-center mb-5">
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                        data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                        data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                </div>
                            </div>
                            <div class="d-none d-xl-block">
                                <h6 class="dropdown-header">Main Content</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10"
                                    data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="row gutters-tiny text-center">
                                <div class="col-6">
                                    <a class="dropdown-item mb-0" href="be_layout_api.html">
                                        <i class="si si-chemistry mr-5"></i> Layout API
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="dropdown-item mb-0" href="be_ui_color_themes.html">
                                        <i class="fa fa-paint-brush mr-5"></i> Color Themes
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Layout Options -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary"
                            id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-user d-sm-none"></i>
                            <span class="d-none d-sm-inline-block">J. Smith</span>
                            <i class="fa fa-angle-down ml-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-200"
                            aria-labelledby="page-header-user-dropdown">
                            <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                            <a class="dropdown-item" href="be_pages_generic_profile.html">
                                <i class="si si-user mr-5"></i> Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="be_pages_generic_inbox.html">
                                <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                <span class="badge badge-primary">3</span>
                            </a>
                            <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                <i class="si si-note mr-5"></i> Invoices
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"
                                data-action="side_overlay_toggle">
                                <i class="si si-wrench mr-5"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="op_auth_signin.html">
                                <i class="si si-logout mr-5"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Notifications -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary"
                            id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-flag"></i>
                            <span class="badge badge-primary badge-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right min-width-300"
                            aria-labelledby="page-header-notifications">
                            <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                            <ul class="list-unstyled my-20">
                                <li>
                                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                        <div class="ml-5 mr-15">
                                            <i class="fa fa-fw fa-check text-success"></i>
                                        </div>
                                        <div class="media-body pr-10">
                                            <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                            <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                        <div class="ml-5 mr-15">
                                            <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="media-body pr-10">
                                            <p class="mb-0">Please check your payment info since we can’t validate
                                                them!</p>
                                            <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                        <div class="ml-5 mr-15">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </div>
                                        <div class="media-body pr-10">
                                            <p class="mb-0">Web server stopped responding and it was automatically
                                                restarted!</p>
                                            <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                        <div class="ml-5 mr-15">
                                            <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                        </div>
                                        <div class="media-body pr-10">
                                            <p class="mb-0">Please consider upgrading your plan. You are running out
                                                of space.</p>
                                            <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                        <div class="ml-5 mr-15">
                                            <i class="fa fa-fw fa-plus text-primary"></i>
                                        </div>
                                        <div class="media-body pr-10">
                                            <p class="mb-0">New purchases! +$250</p>
                                            <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                                <i class="fa fa-flag mr-5"></i> View All
                            </a>
                        </div>
                    </div>
                    <!-- END Notifications -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout"
                        data-action="side_overlay_toggle">
                        <i class="fa fa-tasks"></i>
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form action="be_pages_generic_search.html" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-secondary" data-toggle="layout"
                                    data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="content">
                @yield('content')
                {{-- <div class="row invisible" data-toggle="appear">
                    <!-- Row #1 -->
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-bag fa-3x text-body-bg-dark"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                                </div>
                                <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000"
                                        data-to="780">0</span></div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-xl-3">
                        <a class="block block-link-shadow text-right" href="javascript:void(0)">
                            <div class="block-content block-content-full clearfix">
                                <div class="float-left mt-10 d-none d-sm-block">
                                    <i class="si si-users fa-3x text-body-bg-dark"></i>
                                </div>
                                <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                            </div>
                        </a>
                    </div>
                    <!-- END Row #1 -->
                </div> --}}
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-left">
                    2022 © PT. Sinar Metrindo Perkasa
                </div>
                {{-- <div class="float-left">
                    <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy;
                    <span class="js-year-copy"></span>
                </div> --}}
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
    {{-- <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
            <div class="modal-content rounded">
                <div class="block block-rounded block-transparent mb-0 bg-pattern"
                    style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                    <div class="block-header justify-content-end">
                        <div class="block-options">
                            <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                                Skip Intro
                            </a>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false"
                            data-infinite="false">
                            <div class="pb-50">
                                <div class="row justify-content-center text-center">
                                    <div class="col-md-10 col-lg-8 justify-content-center">
                                        <i class="si si-fire fa-4x text-primary"></i>
                                        <img src="{{ url('assets/images/logo-simetri.png') }}" alt="" class="d-flex justify-content-center h-50 w-50 mb-1">
                                        <h3 class="font-size-h2 font-w300 mt-20">Welcome to E-HRD</h3>
                                        <p class="text-muted">
                                            This is a modal you can show to your users when they first sign in to their
                                            dashboard. It is a great place to welcome and introduce them to your
                                            application and its functionality.
                                        </p>
                                        <button type="button"
                                            class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5"
                                            onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                            Key features <i class="fa fa-arrow-right ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- END Onboarding Modal -->


    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="assets/js/codebase.core.min.js"></script>

    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_pages_dashboard.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
</body>

</html>
