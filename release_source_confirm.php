<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AbsoluteAdmin - A Responsive Boostrap 3 Admin Dashboard</title>
    <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme"/>
    <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- FullCalendar Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/fullcalendar/fullcalendar.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-------------------------------------------------------------+
  <body> Helper Classes:
---------------------------------------------------------------+
  '.sb-l-o' - Sets Left Sidebar to "open"
  '.sb-l-m' - Sets Left Sidebar to "minified"
  '.sb-l-c' - Sets Left Sidebar to "closed"

  '.sb-r-o' - Sets Right Sidebar to "open"
  '.sb-r-c' - Sets Right Sidebar to "closed"
---------------------------------------------------------------+
 Example: <body class="example-page sb-l-o sb-r-c">
 Results: Sidebar left Open, Sidebar right Closed
--------------------------------------------------------------->

<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
            <span class="panel-title">主题选择</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>

                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                    <form id="toolbox-sidebar-skin">
                        <h4 class="mv20">Sidebar Skins</h4>

                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>

                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class="mv20">Layout Options</h4>

                        <div class="form-group">
                            <div class="radio-custom mb5">
                                <input type="radio" id="fullwidth-option" checked name="layout-option">
                                <label for="fullwidth-option">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class="form-group mb20">
                            <div class="radio-custom radio-disabled mb5">
                                <input type="radio" id="boxed-option" name="layout-option" disabled>
                                <label for="boxed-option">Boxed Layout
                                    <b class="text-muted">(Coming Soon)</b>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15">
                <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
            </div>
        </div>
    </div>
</div>
<!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id="main">

    <!-----------------------------------------------------------------+
       ".navbar" Helper Classes:
    -------------------------------------------------------------------+
       * Positioning Classes:
        '.navbar-static-top' - Static top positioned navbar
        '.navbar-static-top' - Fixed top positioned navbar

       * Available Skin Classes:
         .bg-dark    .bg-primary   .bg-success
         .bg-info    .bg-warning   .bg-danger
         .bg-alert   .bg-system
    -------------------------------------------------------------------+
      Example: <header class="navbar navbar-fixed-top bg-primary">
      Results: Fixed top navbar with blue background
    ------------------------------------------------------------------->

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
        <div class="navbar-branding">
            <a class="navbar-brand" href="dashboard.html">
                <b>Absolute</b>Admin
            </a>
            <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown menu-merge hidden-xs">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                    <span class="caret caret-tp"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="hidden-xs">
                <a class="request-fullscreen toggle-active" href="#">
                    <span class="ad ad-screen-full fs18"></span>
                </a>
            </li>
        </ul>
        <form class="navbar-form navbar-left navbar-search alt" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search..." value="Search...">
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <div class="navbar-btn btn-group">
                    <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
                        <span class="ad ad-wand"></span>
                    </a>
                </div>
            </li>
            <li class="dropdown menu-merge">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                        <span class="fa fa-bell-o fs14 va-m"></span>
                        <span class="badge badge-danger">9</span>
                    </button>
                    <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                                <span class="panel-title fw600"> Recent Activity</span>
                                <button class="btn btn-default light btn-xs pull-right" type="button"><i
                                        class="fa fa-refresh"></i></button>
                            </div>
                            <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-tags"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Michael</b> Added to his store:
                                            <a href="#">Ipod</a>
                                        </div>
                                        <div class="timeline-date">1:25am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-tags"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Sara</b> Added his store:
                                            <a href="#">Notebook</a>
                                        </div>
                                        <div class="timeline-date">3:05am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-usd"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Software</a>
                                        </div>
                                        <div class="timeline-date">4:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-usd"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Apple</a>
                                        </div>
                                        <div class="timeline-date">7:45am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-usd"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Software</a>
                                        </div>
                                        <div class="timeline-date">4:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-success">
                                            <span class="fa fa-usd"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Apple</a>
                                        </div>
                                        <div class="timeline-date">7:45am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-tags"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Michael</b> Added his store:
                                            <a href="#">Ipod</a>
                                        </div>
                                        <div class="timeline-date">8:25am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-system">
                                            <span class="fa fa-fire"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Admin</b> created invoice for:
                                            <a href="#">Software</a>
                                        </div>
                                        <div class="timeline-date">4:15am</div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-tags"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <b>Sara</b> Added to his store:
                                            <a href="#">Notebook</a>
                                        </div>
                                        <div class="timeline-date">3:05am</div>
                                    </li>
                                </ol>

                            </div>
                            <div class="panel-footer text-center p7">
                                <a href="#" class="link-unstyled"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown menu-merge">
                <div class="navbar-btn btn-group">
                    <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                    <span class="ad ad-radio-tower fs14 va-m"></span> </button>
                    <div class="dropdown-menu dropdown-persist w375 animated animated-shorter fadeIn" role="menu">
                        <div class="panel mbn">
                            <div class="panel-menu">
                                <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                    <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                                    <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                                    <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                                </div>
                            </div>
                            <div class="panel-body panel-scroller scroller-navbar pn">
                                <div class="tab-content br-n pn">
                                    <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-user text-info"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Tyler Durden - 16 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">Apple Ipod</a> - 4 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-comment text-system"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Comment
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Mike - I loved your article!
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response text-right"> Moderate?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-star text-warning"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Review
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Sammy Hilton - 4 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-user text-info"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Registration
                                                    <small class="text-muted"></small>
                                                </h5>
                                                Michael Sober - 7 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Approve?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-remove"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-usd text-alert"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Invoice
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">Apple Ipod</a> - 4 hours ago

                                            </div>
                                            <div class="media-right">
                                                <div class="media-response single">#518358</div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="media-left" href="#"> <span
                                                    class="glyphicon glyphicon-shopping-cart text-success"></span> </a>

                                            <div class="media-body">
                                                <h5 class="media-heading">New Order
                                                    <small class="text-muted"></small>
                                                </h5>
                                                <a href="#">Apple Ipod</a> - 4 hours ago
                                            </div>
                                            <div class="media-right">
                                                <div class="media-response"> Confirm?</div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-check text-success"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-default btn-xs light">
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Courtney Faught
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">Joe Gibbons
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                scelerisque.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Courtney Faught
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">Joe Gibbons
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/2.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <span class="media-status online"></span>
                                                <h5 class="media-heading">Courtney Faught
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                soltudino.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <span class="media-status offline"></span>
                                                <h5 class="media-heading">Joe Gibbons
                                                    <small> - 12:30am</small>
                                                </h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin commodo.
                                            </div>
                                            <div class="media-right">
                                                <a href="#">
                                                    <img class="media-object" alt="64x64"
                                                         src="assets/img/avatars/1.jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                                        <ul class="media-list" role="menu">
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">Article
                                                        <small class="text-muted">- 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading mv5">Article
                                                        <small> - 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">Article
                                                        <small class="text-muted">- 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/4.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading mv5">Article
                                                        <small class="text-muted">- 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/5.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">Article
                                                        <small class="text-muted">- 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/2.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading mv5">Article
                                                        <small> - 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="media-left" href="#"> <img src="assets/img/avatars/3.jpg"
                                                                                     class="mw40" alt="avatar"> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">Article
                                                        <small class="text-muted">- 08/16/22</small>
                                                    </h5>
                                                    Last Updated 36 days ago by
                                                    <a class="text-system" href="#"> Max </a>
                                                </div>
                                            </li>
                                        </ul>
                                        <table class="table table-striped hidden">
                                            <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr>
                                                <td>Sussy</td>
                                                <td>Watcher</td>
                                                <td>@thehawk</td>
                                            </tr>
                                            <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>Sussy</td>
                                                <td>Watcher</td>
                                                <td>@thehawk</td>
                                            </tr>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr>
                                                <td>Sussy</td>
                                                <td>Watcher</td>
                                                <td>@thehawk</td>
                                            </tr>
                                            <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-center p7">
                                <a href="#" class="link-unstyled"> View All </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown menu-merge">
             
            </li>
            <li class="menu-divider hidden-xs">
                <i class="fa fa-circle"></i>
            </li>
            <li class="dropdown menu-merge">
                <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                    <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
                    <span class="hidden-xs pl15"> Michael .R </span>
                    <span class="caret caret-tp hidden-xs"></span>
                </a>
                <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                    <li class="dropdown-header clearfix">
                        <div class="pull-left ml10">
                            <select id="user-status">
                                <optgroup label="Current Status:">
                                    <option value="1-1">Away</option>
                                    <option value="1-2">Offline</option>
                                    <option value="1-3" selected="selected">Online</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="pull-right mr10">
                            <select id="user-role">
                                <optgroup label="Logged in As:">
                                    <option value="1-1">Client</option>
                                    <option value="1-2">Editor</option>
                                    <option value="1-3" selected="selected">Admin</option>
                                </optgroup>
                            </select>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-envelope"></span> Messages
                            <span class="label label-warning">2</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-user"></span> Friends
                            <span class="label label-warning">6</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-bell"></span> Notifications </a>
                    </li>
                    <li class="list-group-item">
                        <a href="#" class="animated animated-short fadeInUp">
                            <span class="fa fa-gear"></span> Settings </a>
                    </li>
                    <li class="dropdown-footer">
                        <a href="#" class="">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- End: Header -->

    <!-----------------------------------------------------------------+
       "#sidebar_left" Helper Classes:
    -------------------------------------------------------------------+
       * Positioning Classes:
        '.affix' - Sets Sidebar Left to the fixed position

       * Available Skin Classes:
         .sidebar-dark (default no class needed)
         .sidebar-light
         .sidebar-light.light
    -------------------------------------------------------------------+
       Example: <aside id="sidebar_left" class="affix sidebar-light">
       Results: Fixed Left Sidebar with light/white background
    ------------------------------------------------------------------->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Start: Sidebar Left Content -->
        <div class="sidebar-left-content nano-content">

            <!-- Start: Sidebar Header -->
            <header class="sidebar-header">

                <!-- Sidebar Widget - Author -->
                <div class="sidebar-widget author-widget">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="assets/img/avatars/3.jpg" class="img-responsive">
                        </a>

                        <div class="media-body">
                            <div class="media-links">
                                <a href="#" class="sidebar-menu-toggle">用户菜单 -</a> 
								<a href="pages_login(alt).html">退出系统</a>
                            </div>
                            <div class="media-author">Michael Richards</div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget - Menu (slidedown) -->
                <div class="sidebar-widget menu-widget">
                    <div class="row text-center mbn">
                        <div class="col-xs-4">
                            <a href="login.html" class="text-primary" data-toggle="tooltip" data-placement="top"
                               title="首页">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top"
                               title="数据发布">
                                <span class="fa fa-desktop"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top"
                               title="数据溯源">
                                <span class="fa fa-gears"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget - Search (hidden) -->
                <div class="sidebar-widget search-widget hidden">
                    <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                        <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                    </div>
                </div>

            </header>
            <!-- End: Sidebar Header -->

            <!-- Start: Sidebar Menu -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">菜单</li>
                <li>
                    <a class="accordion-toggle menu-open" href="#">
                        <span class="fa fa-diamond"></span>
                        <span class="sidebar-title">数据发布</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="release_setting_environment.php">
                                <span class="fa fa-cube"></span>系统配置</a>
                        </li>
                        <li>
                            <a href="release_message.php">
                                <span class="fa fa-desktop"></span>流转信息概览</a>
                        </li>
                        <li class="active">
                            <a href="release_source_confirm.php">
                                <span class="fa fa-columns"></span>确认发布源信息</a>
                        </li>
                        <li>
                            <a href="release_change_schema.php">
                                <span class="fa fa-dot-circle-o"></span>更改表结构</a>
                        </li>
						<li>
                            <a href="release_choose_target.php">
                                <span class="fa fa-dot-circle-o"></span>选择发布对象</a>
                        </li>
						<li>
                            <a href="release_data.php">
                                <span class="fa fa-dot-circle-o"></span>导出数据</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <span class="sidebar-title">数据溯源</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="find_message.html">
                                <span class="glyphicon glyphicon-shopping-cart"></span> 流转信息概览
                            </a>
                        </li>
                        <li>
                            <a href="find_data.html">
                                <span class="glyphicon glyphicon-tags"></span>导入数据</a>
                        </li>
                        <li>
                            <a href="find_result.html">
                                <span class="fa fa-money"></span>溯源</a>
                        </li>
                    </ul>
                </li>
				<li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicon glyphicon-check"></span>
                        <span class="sidebar-title">用户信息</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="admin_forms-elements.html">
                                <span class="glyphicon glyphicon-shopping-cart"></span>用户信息概览</a>
                        </li>
                        <li>
                            <a href="admin_forms-widgets.html">
                                <span class="glyphicon glyphicon-calendar"></span>密码修改</a>
                        </li>
                    </ul>
                </li>
                <!-- sidebar resources -->


                <!-- sidebar bullets -->
                
                <!-- sidebar progress bars -->
                
            </ul>
            <!-- End: Sidebar Menu -->

            <!-- Start: Sidebar Collapse Button -->
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
            <!-- End: Sidebar Collapse Button -->

        </div>
        <!-- End: Sidebar Left Content -->

    </aside>
    <!-- End: Sidebar Left -->

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar-Dropdown -->
        <div id="topbar-dropmenu" class="alt">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-primary light">
                        <span class="glyphicon glyphicon-inbox text-muted"></span>
                        <span class="metro-title">Messages</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-info light">
                        <span class="glyphicon glyphicon-user text-muted"></span>
                        <span class="metro-title">Users</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-success light">
                        <span class="glyphicon glyphicon-headphones text-muted"></span>
                        <span class="metro-title">Support</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-system light">
                        <span class="glyphicon glyphicon-facetime-video text-muted"></span>
                        <span class="metro-title">Videos</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-warning light">
                        <span class="fa fa-gears text-muted"></span>
                        <span class="metro-title">Settings</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-alert light">
                        <span class="glyphicon glyphicon-picture text-muted"></span>
                        <span class="metro-title">Pictures</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Start: Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="dashboard.html">数据溯源系统</a>
                    </li>
                    <li class="crumb-icon">
                        <a href="dashboard.html">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                    </li>
                    <li class="crumb-link">
                        <a href="index.html">首页</a>
                    </li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- begin: .tray-center --> 
			<div id="tray-center">
				<p>数据库选择</p>
				<div class="mw1000 center-block">

            <!-- Begin: Content Header -->
            <div class="content-header">
              <h1><strong> 确认发布源信息</strong></h1>
              <p class="lead">在此界面您可以确认发布源单位的相关信息</p>
            </div>

            <!-- Begin: Admin Form -->
            <div class="admin-form">

              <div class="panel heading-border">
                <div class="panel-body bg-light">
                  <form method="post" action="" id="form-ui">
                    <div class="section-divider mb40" id="spy1">
                      <span>数据发布源信息</span>
                    </div>
                    <!-- .section-divider -->

                    <!-- Basic Inputs -->
                    <div class="row">
                      <div class="col-md-8">
                        <div class="section">
                          <label class="field">
                            <input type="text" name="from" id="from" class="gui-input" placeholder="Input Data Id">
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field">
                            <input type="text" name="from" id="from" class="gui-input" placeholder="Nessary" disabled>
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Input Icons -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="填入数据源标题">
                            <label for="firstname" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field append-icon">
                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="填入该数据源关键字">
                            <label for="firstname" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="Disabled with icon" disabled>
                            <label for="firstname" class="field-icon">
                              <i class="fa fa-user"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Input Formats -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="url" name="website" id="website" class="gui-input" placeholder="请填入发布时间">
                            <label for="website" class="field-icon">
                              <i class="fa fa-globe"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="email" name="email" id="email" class="gui-input" placeholder="联系方式">
                            <label for="email" class="field-icon">
                              <i class="fa fa-envelope"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4 hidden">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone input">
                            <label for="mobile" class="field-icon">
                              <i class="fa fa-phone-square"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <input type="search" name="s" id="s" class="gui-input" placeholder="Disabled Search input" disabled>
                            <label for="s" class="field-icon">
                              <i class="fa fa-search"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Multi Selects -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field select">
                            <select id="country" name="country">
                              <option value="">请选择数据源文件类型</option>
                              <option value="AL">.txt</option>
                              <option value="DZ">.word</option>
							 <option value="DZ">自定义</option>
                            </select>
                            <i class="arrow"></i>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field select">
                            <select id="selectID" name="selectID">
                              <option value="">请选择数据源文件类型</option>
                              <option value="1">军事</option>
                              <option value="2">科研</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field select">
                            <select id="selectID" name="selectID" disabled>
                              <option value="">Select with double arrows</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                            </select>
                            <i class="arrow double"></i>
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- Text Areas -->
                    <div class="row">
                      <div class="col-md-8">
                        <div class="section">
                          <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="注释"></textarea>
                            <label for="comment" class="field-icon">
                              <i class="fa fa-comments"></i>
                            </label>
                            <span class="input-footer">
                              <strong>Hint:</strong>请输入对数据源的注释</span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Disabled Text area" disabled></textarea>
                            <label for="comment" class="field-icon">
                              <i class="fa fa-comments"></i>
                            </label>
                            <span class="input-footer">
                              <strong>Hint:</strong>Don't be negative or off topic!</span>
                          </label>
                        </div>
                      </div>
                    </div>
<!-- .section-divider -->

                    <!-- tooltips --><!-- .section-divider -->

                    <!-- File Uploaders -->
                    <!-- File Uploaders2 -->
                    
                    <!-- File Uploaders3 -->
                    <div class="row">
                      <div class="col-md-12"> </div>
                      <div class="col-md-12 hidden-xs">
                        <div class="section">
                          <label class="field prepend-icon append-button file disabled">
                            <span class="button btn-primary" >Choose File</span>
                            <input type="file" class="gui-file" name="file4" id="file4" onChange="document.getElementById('uploader4').value = this.value;" disabled>
                            <input type="text" class="gui-input" id="uploader4" placeholder="Disabled File Select">
                            <label class="field-icon">
                              <i class="fa fa-upload"></i>
                            </label>
                          </label>
                        </div>
                      </div>
                    </div>
<!-- .section-divider -->

                    <!-- Form Addons -->
                    
                    <!-- Radios and Checkboxes -->
                    
                    <!-- .section-divider -->

                    <!-- end .section row section -->

                    <!-- .section-divider -->

                    <div class="section row"> <!-- end .colm section -->
                      <!-- end .colm section -->
                      <!-- end .colm section -->

                      <!-- end .colm section -->
                    </div>
                    <!-- end .section row section -->

                    <!-- Ratings Widget -->
                    <div class="section-divider mb40" style="margin-top: 60px;" id="spy7">
                      <span>Review &amp; Rating Widget</span>
                    </div>
                    <div class="section row">
                      <div class="col-md-6 pr40 border-right">
                        <span class="rating block">
                          <span class="lbl-text">Customization</span>
                          <input class="rating-input" id="r5" type="radio" name="custom" checked>
                          <label class="rating-star" for="r5">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r4" type="radio" name="custom">
                          <label class="rating-star" for="r4">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r3" type="radio" name="custom">
                          <label class="rating-star" for="r3">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r2" type="radio" name="custom">
                          <label class="rating-star" for="r2">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="r1" type="radio" name="custom">
                          <label class="rating-star" for="r1">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                        <span class="rating block">
                          <span class="lbl-text">Reliability</span>
                          <input class="rating-input" id="rr5" type="radio" name="reliable">
                          <label class="rating-star" for="rr5">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rr4" type="radio" name="reliable" checked>
                          <label class="rating-star" for="rr4">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rr3" type="radio" name="reliable">
                          <label class="rating-star" for="rr3">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rr2" type="radio" name="reliable">
                          <label class="rating-star" for="rr2">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rr1" type="radio" name="reliable">
                          <label class="rating-star" for="rr1">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                        <span class="rating block">
                          <span class="lbl-text">Relevance</span>
                          <input class="rating-input" id="rx5" type="radio" name="relevance">
                          <label class="rating-star" for="rx5">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rx4" type="radio" name="relevance">
                          <label class="rating-star" for="rx4">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rx3" type="radio" name="relevance" checked>
                          <label class="rating-star" for="rx3">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rx2" type="radio" name="relevance">
                          <label class="rating-star" for="rx2">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="rx1" type="radio" name="relevance">
                          <label class="rating-star" for="rx1">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                      </div>
                      <!-- end  section -->

                      <div class="col-md-6 hidden-xs pl40">
                        <span class="rating block">
                          <span class="lbl-text">Our products</span>
                          <input class="rating-input" id="five-stars" type="radio" name="product-rate">
                          <label class="rating-star" for="five-stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="four-stars" type="radio" name="product-rate">
                          <label class="rating-star" for="four-stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="three-stars" type="radio" name="product-rate" checked>
                          <label class="rating-star" for="three-stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="two-stars" type="radio" name="product-rate">
                          <label class="rating-star" for="two-stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="one-star" type="radio" name="product-rate">
                          <label class="rating-star" for="one-star">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                        <span class="rating block">
                          <span class="lbl-text">Support team</span>
                          <input class="rating-input" id="5stars" type="radio" name="support-rate">
                          <label class="rating-star" for="5stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="4stars" type="radio" name="support-rate">
                          <label class="rating-star" for="4stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="3stars" type="radio" name="support-rate">
                          <label class="rating-star" for="3stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="2stars" type="radio" name="support-rate" checked>
                          <label class="rating-star" for="2stars">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="1star" type="radio" name="support-rate">
                          <label class="rating-star" for="1star">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                        <span class="rating block">
                          <span class="lbl-text">Response time</span>
                          <input class="rating-input" id="5s" type="radio" name="response-rate">
                          <label class="rating-star" for="5s">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="4s" type="radio" name="response-rate">
                          <label class="rating-star" for="4s">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="3s" type="radio" name="response-rate">
                          <label class="rating-star" for="3s">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="2s" type="radio" name="response-rate">
                          <label class="rating-star" for="2s">
                            <i class="fa fa-star"></i>
                          </label>
                          <input class="rating-input" id="1s" type="radio" name="response-rate" checked>
                          <label class="rating-star" for="1s">
                            <i class="fa fa-star"></i>
                          </label>
                        </span>
                      </div>
                      <!-- end  section -->
                    </div>
                    <!-- end .section row  section -->

                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Buttons</span>
                    </div>
                    <!-- .tagline -->

                    <div class="section button-list hidden">
                      <button class="button">
                        <i class="fa fa-align-left"></i>
                      </button>
                      <button class="button">
                        <i class="fa fa-align-justify"></i>
                      </button>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-right"></i>
                      </a>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-right"></i>
                      </a>
                      <button class="button btn-primary">
                        <i class="fa fa-align-left"></i>
                      </button>
                      <button class="button btn-primary">
                        <i class="fa fa-align-justify"></i>
                      </button>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-right"></i>
                      </a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <input type="submit" value="Button normal" class="button">
                      <button class="button btn-primary">Button primary</button>
                      <a href="javascript:;" class="button btn-rounded">Button rounded</a>
                      <a href="javascript:;" class="button btn-primary btn-rounded">Primary rounded</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <input type="submit" value="Pushed normal" class="button pushed">
                      <button class="button pushed btn-primary">Pushed primary</button>
                      <a href="javascript:;" class="button pushed btn-rounded">Pushed round</a>
                      <a href="javascript:;" class="button pushed btn-primary btn-rounded">Pushed round</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <button class="button button-left">Button Left</button>
                      <button class="button button-right">Button right</button>
                      <a href="javascript:;" class="button btn-primary button-left">Primary Left</a>
                      <a href="javascript:;" class="button btn-primary button-right">Primary Right</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <button class="button btn-pointed button-left">Pointed Left</button>
                      <button class="button btn-pointed button-right">Pointed right</button>
                      <a href="javascript:;" class="button btn-pointed btn-primary button-left">Pointed Left</a>
                      <a href="javascript:;" class="button btn-pointed  btn-primary button-right">Pointed Right</a>
                    </div>
                    <!-- end section -->

                    <div class="section-divider hidden">
                      <span class="bg-light">Simple Pricing Grid</span>
                    </div>
                    <!-- .tagline -->

                    <!-- Pricing Tables -->
                    <div class="section row hidden">
                      <div class="col-md-6">
                        <div class="section">
                          <div class="price-box">
                            <h4><sup>$</sup>29
                              <span class="per-month">/month</span>
                            </h4>
                            <h5>Starter</h5>
                            <div class="spacer mt20 mb20"></div>
                            <p>For those looking for something simple to get started.</p>
                            <div class="spacer mt20 mb20"></div>
                            <a href="#" class="button block pushed expand"> Learn more </a>
                          </div>
                          <!-- end .price-box section -->

                        </div>
                        <!-- end .section section -->
                      </div>
                      <!-- end .colm section -->

                      <div class="col-md-6">
                        <div class="section">
                          <div class="price-box selected-box">
                            <div class="ribbon-large">
                              <div class="ribbon-inner">POPULAR</div>
                            </div>
                            <h4><sup>$</sup>179
                              <span class="per-month">/month</span>
                            </h4>
                            <h5>Professional</h5>
                            <div class="spacer mt20 mb20"></div>
                            <p>For large enterprises selling over one million plus a year.</p>
                            <div class="spacer mt20 mb20"></div>
                            <a href="#" class="button btn-primary block pushed expand"> Learn more </a>
                          </div>
                          <!-- end .price-box section -->

                        </div>
                        <!-- end .section section -->
                      </div>
                      <!-- end .colm section -->

                    </div>
                    <!-- end section row section -->

                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Google Map</span>
                    </div>
                    <!-- .tagline -->

                    <!-- Google Map -->
                    <div class="section hidden">
                      <div class="map-container">
                        <div id="map_canvas"></div>
                      </div>
                      <!-- end .map-container -->
                    </div>
                    <!-- end .section -->

                    <!-- Notifications + Progress Bars -->
                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Notifications + Progress Bars</span>
                    </div>
                    <div class="section hidden">
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete (warning)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">80% Complete (danger)</span>
                        </div>
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong>You successfully read this important alert message.</div>
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Heads up!</strong>This alert needs your attention, but it's not super important.</div>
                      <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Warning!</strong>Better check yourself, you're not looking too good.</div>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh snap!</strong>Change a few things up and try submitting again.</div>
                    </div>
                    <!-- end .section section -->

                    <!-- end .form-body section -->
                    <div class="panel-footer hidden">
                      <button type="submit" class="button btn-primary">Proceed to confirm</button>
                    </div>
                    <!-- end .form-footer section -->
                  </form>
                </div>
              </div>

            </div>

          </div>
				
			</div>
			<!-- end: .tray-center -->
         
        </section>
        <!-- End: Content -->

        <!-- Begin: Page Footer -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">数据溯源系统</span>
                </div>
                <div class="col-md-6 text-right">
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-arrow-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- End: Page Footer -->

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- HighCharts Plugin -->
<script src="vendor/plugins/highcharts/highcharts.js"></script>

<!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
<script src="vendor/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

<!-- FullCalendar Plugin + moment Dependency -->
<script src="vendor/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="vendor/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Theme Javascript -->
<script src="assets/js/utility/utility.js"></script>
<script src="assets/js/demo/demo.js"></script>
<script src="assets/js/main.js"></script>

<!-- Widget Javascript -->
<script src="assets/js/demo/widgets.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {

        "use strict";

        // Init Demo JS
        Demo.init();


        // Init Theme Core
        Core.init();


        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            // mobile: true,
            onStart: function () {
                // Do something before AdminPanels runs
            },
            onFinish: function () {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps(); // function below
            },
            onSave: function () {
                $(window).trigger('resize');
            }
        });


        // Init plugins for ".calendar-widget"
        // plugins: FullCalendar
        //
        $('#calendar-widget').fullCalendar({
            // contentHeight: 397,
            editable: true,
            events: [{
                title: 'Sony Meeting',
                start: '2015-05-1',
                end: '2015-05-3',
                className: 'fc-event-success',
            }, {
                title: 'Conference',
                start: '2015-05-11',
                end: '2015-05-13',
                className: 'fc-event-warning'
            }, {
                title: 'Lunch Testing',
                start: '2015-05-21',
                end: '2015-05-23',
                className: 'fc-event-primary'
            },
            ],
            eventRender: function (event, element) {
                // create event tooltip using bootstrap tooltips
                $(element).attr("data-original-title", event.title);
                $(element).tooltip({
                    container: 'body',
                    delay: {
                        "show": 100,
                        "hide": 200
                    }
                });
                // create a tooltip auto close timer
                $(element).on('show.bs.tooltip', function () {
                    var autoClose = setTimeout(function () {
                        $('.tooltip').fadeOut();
                    }, 3500);
                });
            }
        });


        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        var taskWidget = $('div.task-widget');
        var taskItems = taskWidget.find('li.task-item');
        var currentItems = taskWidget.find('ul.task-current');
        var completedItems = taskWidget.find('ul.task-completed');

        // Init jQuery Sortable on Task Widget
        taskWidget.sortable({
            items: taskItems, // only init sortable on list items (not labels)
            handle: '.task-menu',
            axis: 'y',
            connectWith: ".task-list",
            update: function (event, ui) {
                var Item = ui.item;
                var ParentList = Item.parent();

                // If item is already checked move it to "current items list"
                if (ParentList.hasClass('task-current')) {
                    Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                if (ParentList.hasClass('task-completed')) {
                    Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }

            }
        });

        // Custom Functions to handle/assign list filter behavior
        taskItems.on('click', function (e) {
            e.preventDefault();
            var This = $(this);
            var Target = $(e.target);

            if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                This.remove();
                return;
            }

            if (Target.parents('.task-handle').length) {
                // If item is already checked move it to "current items list"
                if (This.hasClass('item-checked')) {
                    This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                // Otherwise move it to the "completed items list"
                else {
                    This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }
            }

        });


        var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

        // Chart data
        var seriesData = [{
            name: 'Phones',
            data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
        }, {
            name: 'Notebooks',
            data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }, {
            name: 'Desktops',
            data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
        }, {
            name: 'Music Players',
            data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
        }];

        var ecomChart = $('#ecommerce_chart1');
        if (ecomChart.length) {
            ecomChart.highcharts({
                credits: false,
                colors: highColors,
                chart: {
                    backgroundColor: 'transparent',
                    className: '',
                    type: 'line',
                    zoomType: 'x',
                    panning: true,
                    panKey: 'shift',
                    marginTop: 45,
                    marginRight: 1,
                },
                title: {
                    text: null
                },
                xAxis: {
                    gridLineColor: '#EEE',
                    lineColor: '#EEE',
                    tickColor: '#EEE',
                    categories: ['Jan', 'Feb', 'Mar', 'Apr',
                        'May', 'Jun', 'Jul', 'Aug',
                        'Sep', 'Oct', 'Nov', 'Dec'
                    ]
                },
                yAxis: {
                    min: 0,
                    tickInterval: 5,
                    gridLineColor: '#EEE',
                    title: {
                        text: null,
                    }
                },
                plotOptions: {
                    spline: {
                        lineWidth: 3,
                    },
                    area: {
                        fillOpacity: 0.2
                    }
                },
                legend: {
                    enabled: true,
                    floating: false,
                    align: 'right',
                    verticalAlign: 'top',
                    x: -15
                },
                series: seriesData
            });
        }

        // Widget VectorMap
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function () {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E8E8E8'
                        },
                        hover: {
                            "fill-opacity": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgInfo, bgPrimaryLr, bgSuccessLr, bgWarningLr];
                var colors2 = [bgInfo, bgPrimary, bgSuccess, bgWarning];
                $.each(states, function (i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                        .each(function (i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        }

    });
</script>
<!-- END: PAGE SCRIPTS -->

</body>

</html>