<!doctype html>
<html lang="ru">

<head>
    <title>Oculux | Page Blank</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate-css/vivify.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}"/>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/site.min.css') }}">

</head>

<body class="theme-cyan font-montserrat">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar top-navbar">
            <div class="container-fluid">

                <div class="navbar-left">
                </div>

                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </nav>

        <div class="search_div">
            <div class="card">
                <div class="body">
                    <form id="navbar-search" class="navbar-form search-form">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                <a href="javascript:void(0);" class="search_toggle btn btn-danger"><i
                                        class="icon-close"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <span>Search Result <small class="float-right text-muted">About 90 results (0.47 seconds)</small></span>
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5">
                    <tbody>
                        <tr>
                            <td class="w40">
                                <span>01</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Avatar Name"><span>SS</span></div>
                                    <div class="ml-3">
                                        <a href="page-invoices-detail.html" title="">South Shyanne</a>
                                        <p class="mb-0">south.shyanne@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>02</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/xs/avatar2.jpg') }}"
                                        data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                        class="w35 h35 rounded" data-original-title="Avatar Name">
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Zoe Baker</a>
                                        <p class="mb-0">zoe.baker@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>03</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Avatar Name"><span>CB</span></div>
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Colin Brown</a>
                                        <p class="mb-0">colinbrown@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>04</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Avatar Name"><span>KG</span></div>
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Kevin Gill</a>
                                        <p class="mb-0">kevin.gill@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>05</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/xs/avatar5.jpg') }}"
                                        data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                        class="w35 h35 rounded" data-original-title="Avatar Name">
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Brandon Smith</a>
                                        <p class="mb-0">Maria.gill@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>06</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/xs/avatar6.jpg') }}"
                                        data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                        class="w35 h35 rounded" data-original-title="Avatar Name">
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Kevin Baker</a>
                                        <p class="mb-0">kevin.baker@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>07</span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/xs/avatar2.jpg') }}"
                                        data-toggle="tooltip" data-placement="top" title="" alt="Avatar"
                                        class="w35 h35 rounded" data-original-title="Avatar Name">
                                    <div class="ml-3">
                                        <a href="javascript:void(0);" title="">Zoe Baker</a>
                                        <p class="mb-0">zoe.baker@example.com</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href="index.html"><img src="{{ asset('assets/images/icon.svg') }}"
                        alt="Oculux Logo" class="img-fluid logo"><span>Атлант-М Альянс</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i
                        class="lnr lnr-menu icon-close"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="{{ asset('assets/images/user.png') }}" class="user-photo"
                            alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name"
                            data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                            <li><a href="page-profile.html"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="icon-power"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="header">Меню</li>
                        <li><a href="/"><i class="icon-speedometer"></i><span>Справочник</span></a></li>
                        <li><a href="/doc"><i class="icon-diamond"></i><span>Документы</span></a></li>
                        <li><a href="../admin"><i class="icon-rocket"></i><span>Администрирование</span></a></li>
                        <li><a href="../jobportal/index.html"><i class="icon-badge"></i><span>Трям</span></a></li>
                        <li><a href="../landing/index.html"><i class="icon-cursor"></i><span>Трям</span></a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div>

        @yield('content')

    </div>

    <!-- Javascript -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
</body>

</html>
