<!DOCTYPE html>
<html lang="en">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Analytics &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="{{url('assets/modules/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/fontawesome/css/all.min.css')}}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{url('assets/modules/jqvmap/dist/jqvmap.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/weather-icon/css/weather-icons-wind.min.css')}}">
<link rel="stylesheet" href="{{url('assets/modules/summernote/summernote-bs4.css')}}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.min.css')}}">
<link rel="stylesheet" href="{{url('assets/css/components.min.css')}}">

</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>

                </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Michelle Green</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="fas fa-user-alt"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fa fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.html">CodiePie</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index-2.html">CP</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="nav-link" href="index-0.html">Analytics</a></li>
                            <li><a class="nav-link" href="index-2.html">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Starter</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>

                            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="bootstrap-alert.html">Alert</a></li>
                            <li><a class="nav-link" href="bootstrap-badge.html">Badge</a></li>
                            <li><a class="nav-link" href="bootstrap-breadcrumb.html">Breadcrumb</a></li>
                            <li><a class="nav-link" href="bootstrap-buttons.html">Buttons</a></li>
                            <li><a class="nav-link" href="bootstrap-card.html">Card</a></li>
                            <li><a class="nav-link" href="bootstrap-carousel.html">Carousel</a></li>
                            <li><a class="nav-link" href="bootstrap-collapse.html">Collapse</a></li>
                            <li><a class="nav-link" href="bootstrap-dropdown.html">Dropdown</a></li>
                            <li><a class="nav-link" href="bootstrap-form.html">Form</a></li>
                            <li><a class="nav-link" href="bootstrap-list-group.html">List Group</a></li>
                            <li><a class="nav-link" href="bootstrap-media-object.html">Media Object</a></li>
                            <li><a class="nav-link" href="bootstrap-modal.html">Modal</a></li>
                            <li><a class="nav-link" href="bootstrap-nav.html">Nav</a></li>
                            <li><a class="nav-link" href="bootstrap-navbar.html">Navbar</a></li>
                            <li><a class="nav-link" href="bootstrap-pagination.html">Pagination</a></li>
                            <li><a class="nav-link" href="bootstrap-popover.html">Popover</a></li>
                            <li><a class="nav-link" href="bootstrap-progress.html">Progress</a></li>
                            <li><a class="nav-link" href="bootstrap-table.html">Table</a></li>
                            <li><a class="nav-link" href="bootstrap-tooltip.html">Tooltip</a></li>
                            <li><a class="nav-link" href="bootstrap-typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">CodiePie</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Components</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="components-article.html">Article</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="components-avatar.html">Avatar</a></li>
                            <li><a class="nav-link" href="components-chat-box.html">Chat Box</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="components-empty-state.html">Empty State</a></li>
                            <li><a class="nav-link" href="components-gallery.html">Gallery</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="components-hero.html">Hero</a></li>
                            <li><a class="nav-link" href="components-multiple-upload.html">Multiple Upload</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="components-pricing.html">Pricing</a></li>
                            <li><a class="nav-link" href="components-statistic.html">Statistic</a></li>
                            <li><a class="nav-link" href="components-tab.html">Tab</a></li>
                            <li><a class="nav-link" href="components-table.html">Table</a></li>
                            <li><a class="nav-link" href="components-user.html">User</a></li>
                            <li><a class="nav-link beep beep-sidebar" href="components-wizard.html">Wizard</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>Google Maps</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                            <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                            <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                            <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                            <li><a href="gmaps-marker.html">Marker</a></li>
                            <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                            <li><a href="gmaps-route.html">Route</a></li>
                            <li><a href="gmaps-simple.html">Simple</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                        <ul class="dropdown-menu">
                            <li class="menu-sub-header">Apps</li>
                            <li><a class="nav-link" href="modules-calendar.html">Calendar</a></li>

                            <li class="menu-sub-header">Charts</li>
                            <li><a class="nav-link" href="modules-chartjs.html">ChartJS</a></li>
                            <li><a class="nav-link" href="modules-apex-charts.html">Apex Charts</a></li>
                            <li><a class="nav-link" href="modules-e-charts.html">E Charts</a></li>
                            <li><a class="nav-link" href="modules-c3-charts.html">C3 Charts</a></li>
                            <li><a class="nav-link" href="modules-knob-charts.html">Knob Charts</a></li>
                            <li><a class="nav-link" href="modules-sparkline.html">Sparkline</a></li>
                            <li class="menu-sub-header">Tables</li>
                            <li><a class="nav-link" href="modules-datatables.html">DataTables</a></li>
                            <li><a class="nav-link" href="modules-table-more.html">More</a></li>
                            <li class="menu-sub-header">Font Icons</li>
                            <li><a class="nav-link" href="modules-font-awesome.html">Font Awesome</a></li>
                            <li><a class="nav-link" href="modules-line-icons.html">Line Icons</a></li>
                            <li><a class="nav-link" href="modules-feather-icons.html">Feather Icons</a></li>
                            <li><a class="nav-link" href="modules-ion-icons.html">Ion Icons</a></li>
                            <li><a class="nav-link" href="modules-flag.html">Flag</a></li>
                            <li><a class="nav-link" href="modules-weather-icon.html">Weather Icon</a></li>
                            <li class="menu-sub-header">Other</li>
                            <li><a class="nav-link" href="modules-owl-carousel.html">Owl Carousel</a></li>
                            <li><a class="nav-link" href="modules-sweet-alert.html">Sweet Alert</a></li>
                            <li><a class="nav-link" href="modules-toastr.html">Toastr</a></li>
                            <li><a class="nav-link" href="modules-vector-map.html">Vector Map</a></li>
                        </ul>
                    </li>
                    <li class="menu-header">Pages</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                            <li><a href="auth-login.html">Login</a></li>
                            <li><a href="auth-register.html">Register</a></li>
                            <li><a href="auth-reset-password.html">Reset Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Errors</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="errors-503.html">503</a></li>
                            <li><a class="nav-link" href="errors-403.html">403</a></li>
                            <li><a class="nav-link" href="errors-404.html">404</a></li>
                            <li><a class="nav-link" href="errors-500.html">500</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="features-activities.html">Activities</a></li>
                            <li><a class="nav-link" href="features-post-create.html">Post Create</a></li>
                            <li><a class="nav-link" href="features-posts.html">Posts</a></li>
                            <li><a class="nav-link" href="features-profile.html">Profile</a></li>
                            <li><a class="nav-link" href="features-settings.html">Settings</a></li>
                            <li><a class="nav-link" href="features-setting-detail.html">Setting Detail</a></li>
                            <li><a class="nav-link" href="features-tickets.html">Tickets</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Utilities</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="utilities-contact.html">Contact</a></li>
                            <li><a class="nav-link" href="utilities-invoice.html">Invoice</a></li>
                            <li><a href="utilities-subscribe.html">Subscribe</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
                </ul>
                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="https://getcodiepie.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> Documentation</a>
                </div>
            </aside>
        </div>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                                <i class="fas fa-user-alt"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Admin</h4>
                                </div>
                                <div class="card-body">
                                    10
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-newspaper"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>News</h4>
                                </div>
                                <div class="card-body">
                                    42
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="far fa-file"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Reports</h4>
                                </div>
                                <div class="card-body">
                                    1,201
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Online Users</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="{{url('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{url('js/CodiePie.js')}}"></script>

<!-- JS Libraies -->
<script src="{{url('assets/modules/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('assets/modules/simple-weather/jquery.simpleWeather.min.js')}}"></script>
<script src="{{url('assets/modules/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>

<!-- Page Specific JS File -->
<script src="{{url('js/page/index-0.js')}}"></script>

<!-- Template JS File -->
<script src="{{url('js/scripts.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>