<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- @include('layouts.head') -->
    <title>@yield("title")</title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
@yield('css')
<!--- Style css -->
<link href="{{asset('assets/css/style.css') }}" rel="stylesheet">

<!--- Style css -->
@if (App::getLocale() == 'en')
    <link href="{{asset('assets/css/ltr.css') }}" rel="stylesheet">
@else
    <link href="{{('assets/css/rtl.css') }}" rel="stylesheet">
@endif

</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

       <!-- @include('layouts.main-header')

        @include('layouts.main-sidebar')-->
        <!--=================================
 header start-->
 <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo-dark.png" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-icon-dark.png"
                        alt=""></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ti-bell"></i>
                        <span class="badge badge-danger notification-status"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong>Notifications</strong>
                            <span class="badge badge-pill badge-warning">05</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">New registered user <small
                                class="float-right text-muted time">Just now</small> </a>
                        <a href="#" class="dropdown-item">New invoice received <small
                                class="float-right text-muted time">22 mins</small> </a>
                        <a href="#" class="dropdown-item">Server error report<small
                                class="float-right text-muted time">7 hrs</small> </a>
                        <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1
                                days</small> </a>
                        <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2
                                days</small> </a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>Quick Links</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
                                <h5>New Task</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>Assign Task</h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>Add Orders</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i>
                                <h5>New Orders</h5>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/profile-avatar.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0">Michael Bean</h5>
                                    <span>michael-bean@mail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a>
                        <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>Messages</a>
                        <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
                        <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span
                                class="badge badge-info">6</span> </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>Settings</a>
                        <a class="dropdown-item" href="#"><i class="text-danger ti-unlock"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!--=================================
 header End-->
 <div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="index.html">Dashboard 01</a> </li>
                            <li> <a href="index-02.html">Dashboard 02</a> </li>
                            <li> <a href="index-03.html">Dashboard 03</a> </li>
                            <li> <a href="index-04.html">Dashboard 04</a> </li>
                            <li> <a href="index-05.html">Dashboard 05</a> </li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">Elements</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions.html">Accordions</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="button.html">Button</a></li>
                            <li><a href="colorpicker.html">Colorpicker</a></li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="lists.html">lists</a></li>
                            <li><a href="modal.html">modal</a></li>
                            <li><a href="nav.html">nav</a></li>
                            <li><a href="nicescroll.html">nicescroll</a></li>
                            <li><a href="pricing-table.html">pricing table</a></li>
                            <li><a href="ratings.html">ratings</a></li>
                            <li><a href="date-picker.html">date picker</a></li>
                            <li><a href="tabs.html">tabs</a></li>
                            <li><a href="typography.html">typography</a></li>
                            <li><a href="popover-tooltips.html">Popover tooltips</a></li>
                            <li><a href="progress.html">progress</a></li>
                            <li><a href="switch.html">switch</a></li>
                            <li><a href="sweetalert2.html">sweetalert2</a></li>
                            <li><a href="touchspin.html">touchspin</a></li>
                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">calendar</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list.html"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo
                                list</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="chat-page.html"><i class="ti-comments"></i><span class="right-nav-text">Chat
                            </span></a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box.html"><i class="ti-email"></i><span class="right-nav-text">Mail
                                box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-pie-chart"></i><span
                                    class="right-nav-text">Charts</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="chart-js.html">Chart.js</a> </li>
                            <li> <a href="chart-morris.html">Chart morris </a> </li>
                            <li> <a href="chart-sparkline.html">Chart Sparkline</a> </li>
                        </ul>
                    </li>

                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font
                                    icon</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
                    <!-- menu item Widgets-->
                    <li>
                        <a href="widgets.html"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>
                            <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                    </li>
                    <!-- menu item Form-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form &
                                    Editor</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="editor.html">Editor</a> </li>
                            <li> <a href="editor-markdown.html">Editor Markdown</a> </li>
                            <li> <a href="form-input.html">Form input</a> </li>
                            <li> <a href="form-validation-jquery.html">form validation jquery</a> </li>
                            <li> <a href="form-wizard.html">form wizard</a> </li>
                            <li> <a href="form-repeater.html">form repeater</a> </li>
                            <li> <a href="input-group.html">input group</a> </li>
                            <li> <a href="toastr.html">toastr</a> </li>
                        </ul>
                    </li>
                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data
                                    table</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="data-html-table.html">Data html table</a> </li>
                            <li> <a href="data-local.html">Data local</a> </li>
                            <li> <a href="data-table.html">Data table</a> </li>
                        </ul>
                    </li>
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
                    <!-- menu item Custom pages-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom
                                    pages</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="projects.html">projects</a> </li>
                            <li> <a href="project-summary.html">Projects summary</a> </li>
                            <li> <a href="profile.html">profile</a> </li>
                            <li> <a href="app-contacts.html">App contacts</a> </li>
                            <li> <a href="contacts.html">Contacts</a> </li>
                            <li> <a href="file-manager.html">file manager</a> </li>
                            <li> <a href="invoice.html">Invoice</a> </li>
                            <li> <a href="blank.html">Blank page</a> </li>
                            <li> <a href="layout-container.html">layout container</a> </li>
                            <li> <a href="error.html">Error</a> </li>
                            <li> <a href="faqs.html">faqs</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Authentication-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-id-badge"></i><span
                                    class="right-nav-text">Authentication</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="login.html">login</a> </li>
                            <li> <a href="register.html">register</a> </li>
                            <li> <a href="lockscreen.html">Lock screen</a> </li>
                        </ul>
                    </li>
                    <!-- menu item maps-->
                    <li>
                        <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span>
                            <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
                    </li>
                    <!-- menu item timeline-->
                    <li>
                        <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span>
                        </a>
                    </li>
                    <!-- menu item Multi level-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi
                                    level Menu</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level
                                    item 1<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="auth" class="collapse">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level
                                            item 1.1<div class="pull-right"><i class="ti-plus"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <ul id="login" class="collapse">
                                            <li>
                                                <a href="javascript:void(0);" data-toggle="collapse"
                                                    data-target="#invoice">level item 1.1.1<div class="pull-right"><i
                                                            class="ti-plus"></i></div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <ul id="invoice" class="collapse">
                                                    <li> <a href="#">level item 1.1.1.1</a> </li>
                                                    <li> <a href="#">level item 1.1.1.2</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">level item 1.2</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level
                                    item 2<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="error" class="collapse">
                                    <li> <a href="#">level item 2.1</a> </li>
                                    <li> <a href="#">level item 2.2</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================



        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0"> Dashboard</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">Visitors</p>
                                    <h4>65,650</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> 81% lower
                                growth
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">Orders</p>
                                    <h4>656</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> Total sales
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-dollar highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">Revenue</p>
                                    <h4>$65656</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-calendar mr-1" aria-hidden="true"></i> Sales Per Week
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-primary">
                                        <i class="fa fa-twitter highlight-icon" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">Followers</p>
                                    <h4>62,500+</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                <i class="fa fa-repeat mr-1" aria-hidden="true"></i> Just Updated
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Orders Status widgets-->
            <div class="row">
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <!-- action group -->
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                                    all</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Market summary</h5>
                            <h4>$50,500 </h4>
                            <div class="row mt-20">
                                <div class="col-4">
                                    <h6>Apple</h6>
                                    <b class="text-info">+ 82.24 % </b>
                                </div>
                                <div class="col-4">
                                    <h6>Instagram</h6>
                                    <b class="text-danger">- 12.06 % </b>
                                </div>
                                <div class="col-4">
                                    <h6>Google</h6>
                                    <b class="text-warning">+ 24.86 % </b>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline2" class="scrollbar-x text-center"></div>
                    </div>
                </div>
                <div class="col-xl-8 mb-30">
                    <div class="card h-100">
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                                    all</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-block d-md-flexx justify-content-between">
                                <div class="d-block">
                                    <h5 class="card-title">Site Visits Growth </h5>
                                </div>
                                <div class="d-flex">
                                    <div class="clearfix mr-30">
                                        <h6 class="text-success">Income</h6>
                                        <p>+584</p>
                                    </div>
                                    <div class="clearfix  mr-50">
                                        <h6 class="text-danger"> Outcome</h6>
                                        <p>-255</p>
                                    </div>
                                </div>
                            </div>
                            <div id="morris-area" style="height: 320px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 mb-30">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Customer Feedback </h5>
                            <div class="row mb-30">
                                <div class="col-md-6">
                                    <div class="clearfix">
                                        <p class="mb-10 float-left">Positive</p>
                                        <i class="mb-10 text-success float-right fa fa-arrow-up"> </i>
                                    </div>
                                    <div class="progress progress-small">
                                        <div class="skill2-bar bg-success" role="progressbar" style="width: 70%"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="mt-10 text-success">8501</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="clearfix">
                                        <p class="mb-10 float-left">Negative</p>
                                        <i class="mb-10 text-danger float-right fa fa-arrow-down"> </i>
                                    </div>
                                    <div class="progress progress-small">
                                        <div class="skill2-bar bg-danger" role="progressbar" style="width: 30%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="mt-10 text-danger">3251</h4>
                                </div>
                            </div>
                            <div class="chart-wrapper" style="width: 100%; margin: 0 auto;">
                                <div id="canvas-holder">
                                    <canvas id="canvas3" width="550"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="tab nav-border" style="position: relative;">
                                <div class="d-block d-md-flex justify-content-between">
                                    <div class="d-block w-100">
                                        <h5 class="card-title">Best Sellers</h5>
                                    </div>
                                    <div class="d-block d-md-flex nav-tabs-custom">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="months-tab" data-toggle="tab"
                                                    href="#months" role="tab" aria-controls="months"
                                                    aria-selected="true"> Months</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="year-tab" data-toggle="tab" href="#year"
                                                    role="tab" aria-controls="year" aria-selected="false">Year
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="months" role="tabpanel"
                                        aria-labelledby="months-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/05.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">Supercharge your motivation</h6>
                                                <p class="sm-mb-5 d-block">I truly believe Augustine’s words are
                                                    true. </p>
                                                <span class="mb-0">by - <b class="text-info">PotenzaUser</b></span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-primary mb-0"><b>45,436</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-secondary mb-0"><b>$05,236</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">Helen keller a teller seller</h6>
                                                <p class="sm-mb-5 d-block">We also know those epic stories,
                                                    those modern.</p>
                                                <span class="mb-0">by - <b class="text-warning">WebminUser</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-success mb-0"><b>23,462</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0"><b>$166</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">The other virtues practice</h6>
                                                <p class="sm-mb-5 d-block">One of the most difficult aspects of
                                                    achieving. </p>
                                                <span class="mb-0">by - <b class="text-danger">TheCorps</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-warning mb-0"><b>5,566</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-info mb-0"><b>$4,126</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/04.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">You will begin to realise</h6>
                                                <p class="sm-mb-5 d-block">Remind yourself you have nowhere to
                                                    go except. </p>
                                                <span class="mb-0">by - <b class="text-success">PGSinfotech</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-dark mb-0"><b>5,446</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-success mb-0"><b>$436</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab">
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/09.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">Walk out 10 years into</h6>
                                                <p class="sm-mb-5 d-block">Understanding the price and having
                                                    the willingness to pay. </p>
                                                <span class="mb-0">by - <b class="text-danger">TheZayka</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-dark mb-0"><b>12,549</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="theme-color mb-0"><b>$1,656</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/06.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">Step out on to the path</h6>
                                                <p class="sm-mb-5 d-block">Success to you and then pull it out
                                                    when you are.</p>
                                                <span class="mb-0">by - <b class="text-info">CarDealer</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-primary mb-0"><b>1,366</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-secondary mb-0"><b>$4,536</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row mb-30">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/07.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">Briefly imagine that you</h6>
                                                <p class="sm-mb-5 d-block">Motivators for your personality and
                                                    your personal goals. </p>
                                                <span class="mb-0">by - <b class="text-success">SamMartin</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-success mb-0"><b>465</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-danger mb-0"><b>$499</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2 col-sm-6">
                                                <img class="img-fluid" src="images/blog/08.jpg" alt="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <h6 class="mb-0 sm-mt-5">You continue doing what</h6>
                                                <p class="sm-mb-5 d-block">The first thing to remember about
                                                    success is that. </p>
                                                <span class="mb-0">by - <b class="text-warning">Cosntro</b>
                                                </span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-warning mb-0"><b>4,456</b></h5>
                                                <span>Sales</span>
                                            </div>
                                            <div class="col-md-2 col-sm-6 col-6 sm-mt-20">
                                                <h5 class="text-info mb-0"><b>$6,485</b></h5>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Selling Items</h5>
                            <ul class="list-unstyled">
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/01.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Car dealer <span class="float-right text-danger">
                                                    8,561</span> </h6>
                                            <p>Automotive WordPress Theme </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative clearfix">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/02.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Webster <span class="float-right text-warning">
                                                    6,213</span> </h6>
                                            <p>Multi-purpose HTML5 Template </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li class="mb-20">
                                    <div class="media">
                                        <div class="position-relative">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/03.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">The corps <span class="float-right text-success">
                                                    2,926</span> </h6>
                                            <p> Multi-Purpose WordPress Theme </p>
                                        </div>
                                    </div>
                                    <div class="divider dotted mt-20"></div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="position-relative clearfix">
                                            <img class="img-fluid mr-15 avatar-small" src="images/item/04.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-0">Sam martin <span
                                                    class="float-right text-warning">6,213 </span></h6>
                                            <p>Personal vCard Resume WordPress Theme </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="card h-100">
                        <div class="btn-group info-drop">
                            <button type="button" class="dropdown-toggle-split text-muted" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="text-primary ti-reload"></i>Refresh</a>
                                <a class="dropdown-item" href="#"><i class="text-secondary ti-eye"></i>View
                                    all</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Site Visits Growth </h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-danger">Income</h6>
                                    <p class="text-danger">+584</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-info">Outcome</h6>
                                    <p class="text-info">-255</p>
                                </div>
                            </div>
                            <div id="morris-line" style="height: 320px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="p-4 text-center bg" style="background: url(images/bg/01.jpg);">
                            <h5 class="mb-70 text-white position-relative">Michael Bean </h5>
                            <div class="btn-group info-drop">
                                <button type="button" class="dropdown-toggle-split text-white" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="ti-more"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="text-primary ti-files"></i> Add
                                        task</a>
                                    <a class="dropdown-item" href="#"><i class="text-dark ti-pencil-alt"></i>
                                        Edit Profile</a>
                                    <a class="dropdown-item" href="#"><i class="text-success ti-user"></i> View
                                        Profile</a>
                                    <a class="dropdown-item" href="#"><i class="text-secondary ti-info"></i>
                                        Contact Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center position-relative">
                            <div class="avatar-top">
                                <img class="img-fluid w-25 rounded-circle " src="images/team/13.jpg" alt="">
                            </div>
                            <div class="row">
                                <div class="col-sm-4 mt-30">
                                    <b>Files Saved</b>
                                    <h4 class="text-success mt-10">1582</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>Memory Used </b>
                                    <h4 class="text-danger mt-10">58GB</h4>
                                </div>
                                <div class="col-sm-4 mt-30">
                                    <b>Spent Money</b>
                                    <h4 class="text-warning mt-10">352,6$</h4>
                                </div>
                            </div>
                            <div class="divider mt-20"></div>
                            <p class="mt-30">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                            <p class="mt-10">michael@webmin.com</p>
                            <div class="social-icons color-icon mt-20">
                                <ul>
                                    <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="social-github"><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a>
                                    </li>
                                    <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calendar-main mb-30">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-12 sm-mb-30">
                                <a href="#" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-block m-t-20">
                                    <i class="fa fa-plus pr-2"></i> Create New
                                </a>
                                <div id="external-events" class="m-t-20">
                                    <br>
                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                    <div class="external-event bg-success fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>New Theme Release
                                    </div>
                                    <div class="external-event bg-info fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>My Event
                                    </div>
                                    <div class="external-event bg-warning fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>Meet manager
                                    </div>
                                    <div class="external-event bg-danger fc-event">
                                        <i class="fa fa-circle mr-2 vertical-middle"></i>Create New theme
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="calendar"></div>
                        <div class="modal" tabindex="-1" role="dialog" id="event-modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body p-20"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-event">Create
                                            event</button>
                                        <button type="button" class="btn btn-danger delete-event"
                                            data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Add Category -->
                        <div class="modal" tabindex="-1" role="dialog" id="add-category">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Add a category</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body p-20">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Category Name</label>
                                                    <input class="form-control form-white" placeholder="Enter name"
                                                        type="text" name="category-name" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="control-label">Choose Category Color</label>
                                                    <select class="form-control form-white"
                                                        data-placeholder="Choose a color..." name="category-color">
                                                        <option value="success">Success</option>
                                                        <option value="danger">Danger</option>
                                                        <option value="info">Info</option>
                                                        <option value="primary">Primary</option>
                                                        <option value="warning">Warning</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success save-category"
                                            data-dismiss="modal">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            <!--@include('layouts.footer')-->
            <!-- Footer opened -->
 <footer class="bg-white p-4">
      <div class="row">
        <div class="col-md-6">
          <div class="text-center text-md-left">
              <p class="mb-0"> &copy; Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span>. <a href="#"> Webmin </a> All Rights Reserved. </p>
          </div>
        </div>
        <div class="col-md-6">
          <ul class="text-center text-md-right">
            <li class="list-inline-item"><a href="#">Terms & Conditions </a> </li>
            <li class="list-inline-item"><a href="#">API Use Policy </a> </li>
            <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
          </ul>
        </div>
      </div>
    </footer>
<!-- Footer closed -->

        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    <!--@include('layouts.footer-scripts')-->
<!-- jquery -->
<script src="{{asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{asset('assets/js/custom.js') }}"></script>

</body>

</html>
