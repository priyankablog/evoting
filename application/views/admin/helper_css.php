<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/helper_css.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:42:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <title>PVR Admin | Predefined CSS Class</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet"/>
    <link href="assets/css/theme/default.css" rel="stylesheet" id="theme"/>
    <link href="assets/css/essential.css" rel="stylesheet"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><img src="assets/img/icon.png" alt="logo"> PVR Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                <li>
                    <form class="navbar-form full-width">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword for search"/>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell-o"></i>
                        <span class="label">8</span>
                    </a>
                    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                        <li class="dropdown-header">Notifications (5)</li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading">Server Error Reports</h6>
                                    <div class="text-muted f-s-11">3 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt=""/>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">John Smith</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">25 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt=""/>
                                </div>
                                <div class="media-body">
                                    <h6 class="media-heading">Olivia</h6>
                                    <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="text-muted f-s-11">35 minutes ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New User Registered</h6>
                                    <div class="text-muted f-s-11">1 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="media">
                            <a href="javascript:;">
                                <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                <div class="media-body">
                                    <h6 class="media-heading"> New Email From John</h6>
                                    <div class="text-muted f-s-11">2 hour ago</div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="javascript:;">View more</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/img/user-13.jpg" alt=""/>
                        <span class="hidden-xs">Administrator</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        <li><a href="javascript:;">Edit Profile</a></li>
                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                        <li><a href="javascript:;">Calendar</a></li>
                        <li><a href="javascript:;">Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <div class="image">
                        <a href="javascript:;"><img src="assets/img/user-13.jpg" alt=""/></a>
                    </div>
                    <div class="info">
                        Administrator
                        <small>Front end developer</small>
                    </div>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
                <li class="nav-header">Navigation</li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-laptop"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Dashboard v1</a></li>
                        <li><a href="index_v2.html">Dashboard v2</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <span class="badge pull-right">10</span>
                        <i class="fa fa-inbox"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="email_inbox.html">Inbox v1</a></li>
                        <li><a href="email_inbox_v2.html">Inbox v2</a></li>
                        <li><a href="email_compose.html">Compose</a></li>
                        <li><a href="email_detail.html">Detail</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-suitcase"></i>
                        <span>UI Elements <span class="label label-theme m-l-5">V 1.2</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="ui_general.html">General</a></li>
                        <li><a href="ui_typography.html">Typography</a></li>
                        <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                        <li><a href="ui_modal_notification.html">Modal & Notification <span class="label label-theme m-l-5">V 1.2</span></a></li>
                        <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                        <li><a href="ui_media_object.html">Media Object</a></li>
                        <li><a href="ui_buttons.html">Buttons</a></li>
                        <li><a href="ui_icons.html">Icons</a></li>
                        <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                        <li><a href="ui_ionicons.html">Ionicons</a></li>
                        <li><a href="ui_tree.html">Tree View</a></li>
                        <li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
                        <li><a href="ui_social_buttons.html">Social Buttons</a></li>
                        <li><a href="ui_tour.html">Intro JS</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-file-o"></i>
                        <span>Form Stuff <span class="label label-theme m-l-5">V 1.2</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="form_elements.html">Form Elements <span class="label label-theme m-l-5">V 1.2</span></a></li>
                        <li><a href="form_plugins.html">Form Plugins <span class="label label-theme m-l-5">V 1.2</span></a></li>
                        <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                        <li><a href="form_validation.html">Form Validation</a></li>
                        <li><a href="form_wizards.html">Wizards</a></li>
                        <li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
                        <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
                        <li><a href="form_editable.html">X-Editable</a></li>
                        <li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
                        <li><a href="form_summernote.html">Summernote</a></li>
                        <li><a href="form_dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-th"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="table_basic.html">Basic Tables</a></li>
                        <li class="has-sub">
                            <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                            <ul class="sub-menu">
                                <li><a href="table_manage.html">Default</a></li>
                                <li><a href="table_manage_autofill.html">Autofill</a></li>
                                <li><a href="table_manage_buttons.html">Buttons</a></li>
                                <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                                <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                                <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                                <li><a href="table_manage_keytable.html">KeyTable</a></li>
                                <li><a href="table_manage_responsive.html">Responsive</a></li>
                                <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                                <li><a href="table_manage_scroller.html">Scroller</a></li>
                                <li><a href="table_manage_select.html">Select</a></li>
                                <li><a href="table_manage_combine.html">Extension Combination</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-area-chart"></i>
                        <span>Chart</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="chart-flot.html">Flot Chart</a></li>
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-js.html">Chart JS</a></li>
                    </ul>
                </li>
                <li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-map-marker"></i>
                        <span>Map</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="map_vector.html">Vector Map</a></li>
                        <li><a href="map_google.html">Google Map</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-camera"></i>
                        <span>Gallery</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="gallery.html">Gallery v1</a></li>
                        <li><a href="gallery_v2.html">Gallery v2</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cogs"></i>
                        <span>Page Options</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="page_blank.html">Blank Page</a></li>
                        <li><a href="page_with_footer.html">Page with Footer</a></li>
                        <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                        <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                        <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                        <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                        <li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
                        <li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
                        <li><a href="page_full_height.html">Full Height Content</a></li>
                        <li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
                        <li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
                        <li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                        <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                        <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                        <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                        <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                        <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-gift"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="extra_timeline.html">Timeline</a></li>
                        <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                        <li><a href="extra_search_results.html">Search Results</a></li>
                        <li><a href="extra_invoice.html">Invoice</a></li>
                        <li><a href="extra_404_error.html">404 Error Page</a></li>
                        <li><a href="extra_profile.html">Profile Page</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-key"></i>
                        <span>Login & Register</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="login_v2.html">Login v2</a></li>
                        <li><a href="login_v3.html">Login v3</a></li>
                        <li><a href="register_v3.html">Register v3</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-cubes"></i>
                        <span>Version</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="javascript:;">HTML</a></li>
                        <li><a href="javascript:alert('Angular JS Coming Soon.')">ANGULAR JS</a></li>
                    </ul>
                </li>
                <li class="has-sub active">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-medkit"></i>
                        <span>Helper</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="active"><a href="helper_css.html">Predefined CSS Classes</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-align-left"></i>
                        <span>Menu Level</span>
                    </a>
                    <ul class="sub-menu">
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                Menu 1.1
                            </a>
                            <ul class="sub-menu">
                                <li class="has-sub">
                                    <a href="javascript:;">
                                        <b class="caret pull-right"></b>
                                        Menu 2.1
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="javascript:;">Menu 3.1</a></li>
                                        <li><a href="javascript:;">Menu 3.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Menu 2.2</a></li>
                                <li><a href="javascript:;">Menu 2.3</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;">Menu 1.2</a></li>
                        <li><a href="javascript:;">Menu 1.3</a></li>
                    </ul>
                </li>
                <!-- begin sidebar minify button -->
                <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a></li>
                <!-- end sidebar minify button -->
            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
    <!-- end #sidebar -->

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">CSS Helper</a></li>
            <li class="active">Predefined CSS Class</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Predefined CSS Class
            <small>header small text goes here...</small>
        </h1>
        <!-- end page-header -->

        <ul class="nav nav-tabs">
            <li class="active"><a href="#ess-tab" data-toggle="tab"><i class="fa fa-fw fa-cogs"></i> <span
                    class="hidden-xs hidden-sm">Essential</span></a></li>
            <li class=""><a href="#general-tab" data-toggle="tab"><i class="fa fa-fw fa-cogs"></i> <span
                    class="hidden-xs hidden-sm">General</span></a></li>
            <li class=""><a href="#text-font-tab" data-toggle="tab"><i class="fa fa-fw fa-font"></i> <span
                    class="hidden-xs hidden-sm">Text & Font</span></a></li>
            <li class=""><a href="#margin-tab" data-toggle="tab"><i class="fa fa-fw fa-arrows"></i> <span
                    class="hidden-xs hidden-sm">Margin</span></a></li>
            <li class=""><a href="#padding-tab" data-toggle="tab"><i class="fa fa-fw fa-expand"></i> <span
                    class="hidden-xs hidden-sm">Padding</span></a></li>
            <li class=""><a href="#background-tab" data-toggle="tab"><i class="fa fa-fw fa-paint-brush"></i> <span
                    class="hidden-xs hidden-sm">Background</span></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="ess-tab">
                <h4 class="m-t-5 m-b-5">Essential CSS Class</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered text-center text-nowrap">
                        <thead>
                        <tr>
                            <th colspan="17" class="text-center">Essential CSS Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Font Size</th>
                            <th class="text-center">Line Height</th>
                            <th class="text-center">Margin</th>
                            <th class="text-center">Margin Top</th>
                            <th class="text-center">Margin Bottom</th>
                            <th class="text-center">Margin Right</th>
                            <th class="text-center">Margin Left</th>
                            <th class="text-center">Min Height</th>
                            <th class="text-center">Padding</th>
                            <th class="text-center">Padding Top</th>
                            <th class="text-center">Padding Bottom</th>
                            <th class="text-center">Padding Right</th>
                            <th class="text-center">Padding Left</th>
                            <th class="text-center">Height</th>
                            <th class="text-center">Width in Pixel</th>
                            <th class="text-center">Width in Percentage</th>
                            <th class="text-center">Font Weight</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><b>.f-s-0</b> to <b>.f-s-200</b></td>
                            <td><b>.l-h-0</b> to <b>.l-h-200</b></td>
                            <td><b>.m-0</b> to <b>.m-200</b></td>
                            <td><b>.m-t-0</b> to <b>.m-t-200</b></td>
                            <td><b>.m-b-0</b> to <b>.m-b-200</b></td>
                            <td><b>.m-r-0</b> to <b>.m-r-200</b></td>
                            <td><b>.m-l-0</b> to <b>.m-l-200</b></td>
                            <td><b>.m-h-0</b> to <b>.m-h-200</b></td>
                            <td><b>.p-0</b> to <b>.p-200</b></td>
                            <td><b>.p-t-0</b> to <b>.p-t-200</b></td>
                            <td><b>.p-b-0</b> to <b>.p-b-200</b></td>
                            <td><b>.p-r-0</b> to <b>.p-r-200</b></td>
                            <td><b>.p-l-0</b> to <b>.p-l-200</b></td>
                            <td><b>.h-0</b> to <b>.h-200</b></td>
                            <td><b>.w-0</b> to <b>.w-200</b></td>
                            <td><b>.w-in-0</b> to <b>.w-in-200</b></td>
                            <td><b>.f-w-100</b> to <b>.f-w-800</b></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="general-tab">
                <h4 class="m-t-5 m-b-5">General CSS Class</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th colspan="8" class="text-center">General CSS Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Row Space</th>
                            <th class="text-center">Table</th>
                            <th class="text-center">Float</th>
                            <th class="text-center">Border Radius</th>
                            <th class="text-center">Width</th>
                            <th class="text-center">Height</th>
                            <th class="text-center">Vertical Box</th>
                            <th class="text-center">Overflow</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>.row.row-space-0</td>
                            <td>.table-valign-middle</td>
                            <td>.pull-left</td>
                            <td>.no-rounded-corner</td>
                            <td>.width-full (100%)</td>
                            <td>.height-full (100%)</td>
                            <td>.vertical-box</td>
                            <td>.overflow-auto</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-2</td>
                            <td>.table-th-valign-middle</td>
                            <td>.pull-right</td>
                            <td>.rounded-corner</td>
                            <td>.width-lg (600px)</td>
                            <td>.height-lg (600px)</td>
                            <td>.vertical-box-column</td>
                            <td>.overflow-visible</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-4</td>
                            <td>.table-td-valign-middle</td>
                            <td>.pull-none</td>
                            <td></td>
                            <td>.width-md (450px)</td>
                            <td>.height-md (450px)</td>
                            <td>.vertical-box-row</td>
                            <td>.overflow-scroll</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-6</td>
                            <td>.table-valign-top</td>
                            <td></td>
                            <td></td>
                            <td>.width-sm (300px)</td>
                            <td>.height-sm (300px)</td>
                            <td>.vertical-box-cell</td>
                            <td>.overflow-x-hidden</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-8</td>
                            <td>.table-th-valign-top</td>
                            <td></td>
                            <td></td>
                            <td>.width-xs (150px)</td>
                            <td>.height-xs (150px)</td>
                            <td>.vertical-box-inner-cell</td>
                            <td>.overflow-x-visible</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-10</td>
                            <td>.table-td-valign-top</td>
                            <td></td>
                            <td></td>
                            <td>.width-50 (50px)</td>
                            <td>.height-50 (50px)</td>
                            <td></td>
                            <td>.overflow-x-scroll</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-12</td>
                            <td>.table-valign-bottom</td>
                            <td></td>
                            <td></td>
                            <td>.width-100 (100px)</td>
                            <td>.height-100 (100px)</td>
                            <td></td>
                            <td>.overflow-y-hidden</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-14</td>
                            <td>.table-th-valign-bottom</td>
                            <td></td>
                            <td></td>
                            <td>.width-150 (150px)</td>
                            <td>.height-150 (150px)</td>
                            <td></td>
                            <td>.overflow-y-visible</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-16</td>
                            <td>.table-td-valign-bottom</td>
                            <td></td>
                            <td></td>
                            <td>.width-200 (200px)</td>
                            <td>.height-200 (200px)</td>
                            <td></td>
                            <td>.overflow-y-scroll</td>
                        </tr>
                        <tr>
                            <td>.row.row-space-18</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-250 (250px)</td>
                            <td>.height-250 (250px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-20</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-300 (300px)</td>
                            <td>.height-300 (300px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-22</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-350 (350px)</td>
                            <td>.height-350 (350px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-24</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-400 (400px)</td>
                            <td>.height-400 (400px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-26</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-450 (450px)</td>
                            <td>.height-450 (450px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-28</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-500 (500px)</td>
                            <td>.height-500 (500px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.row.row-space-30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-550 (550px)</td>
                            <td>.height-550 (550px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.width-600 (600px)</td>
                            <td>.height-600 (600px)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="text-font-tab">
                <h4 class="m-t-5 m-b-5">Text & Font - Align / Color / Size</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th colspan="5" class="text-center">Text / Font Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Font Size</th>
                            <th class="text-center">Font Weight</th>
                            <th class="text-center">Text Color</th>
                            <th class="text-center">Text Align</th>
                            <th class="text-center">Text Overflow</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>.f-s-8</td>
                            <td>.f-w-100</td>
                            <td>.text-inverse</td>
                            <td>.text-center</td>
                            <td>.text-ellipsis</td>
                        </tr>
                        <tr>
                            <td>.f-s-9</td>
                            <td>.f-w-200</td>
                            <td>.text-primary</td>
                            <td>.text-left</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-10</td>
                            <td>.f-w-300</td>
                            <td>.text-success</td>
                            <td>.text-right</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-11</td>
                            <td>.f-w-400</td>
                            <td>.text-danger</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-12</td>
                            <td>.f-w-500</td>
                            <td>.text-info</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-13</td>
                            <td>.f-w-600</td>
                            <td>.text-warning</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-14</td>
                            <td>.f-w-700</td>
                            <td>.text-white</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-15</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-16</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-17</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-18</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-19</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>.f-s-20</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="margin-tab">
                <h4 class="m-t-5 m-b-5">Margin - All / Top / Right / Bottom / Left</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th colspan="5" class="text-center">Margin Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Margin</th>
                            <th class="text-center">Margin Top</th>
                            <th class="text-center">Margin Right</th>
                            <th class="text-center">Margin Bottom</th>
                            <th class="text-center">Margin Left</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>.m-0</td>
                            <td>.m-t-0</td>
                            <td>.m-r-0</td>
                            <td>.m-b-0</td>
                            <td>.m-l-0</td>
                        </tr>
                        <tr>
                            <td>.m-1</td>
                            <td>.m-t-1</td>
                            <td>.m-r-1</td>
                            <td>.m-b-1</td>
                            <td>.m-l-1</td>
                        </tr>
                        <tr>
                            <td>.m-2</td>
                            <td>.m-t-2</td>
                            <td>.m-r-2</td>
                            <td>.m-b-2</td>
                            <td>.m-l-2</td>
                        </tr>
                        <tr>
                            <td>.m-3</td>
                            <td>.m-t-3</td>
                            <td>.m-r-3</td>
                            <td>.m-b-3</td>
                            <td>.m-l-3</td>
                        </tr>
                        <tr>
                            <td>.m-4</td>
                            <td>.m-t-4</td>
                            <td>.m-r-4</td>
                            <td>.m-b-4</td>
                            <td>.m-l-4</td>
                        </tr>
                        <tr>
                            <td>.m-5</td>
                            <td>.m-t-5</td>
                            <td>.m-r-5</td>
                            <td>.m-b-5</td>
                            <td>.m-l-5</td>
                        </tr>
                        <tr>
                            <td>.m-10</td>
                            <td>.m-t-10</td>
                            <td>.m-r-10</td>
                            <td>.m-b-10</td>
                            <td>.m-l-10</td>
                        </tr>
                        <tr>
                            <td>.m-15</td>
                            <td>.m-t-15</td>
                            <td>.m-r-15</td>
                            <td>.m-b-15</td>
                            <td>.m-l-15</td>
                        </tr>
                        <tr>
                            <td>.m-20</td>
                            <td>.m-t-20</td>
                            <td>.m-r-20</td>
                            <td>.m-b-20</td>
                            <td>.m-l-20</td>
                        </tr>
                        <tr>
                            <td>.m-25</td>
                            <td>.m-t-25</td>
                            <td>.m-r-25</td>
                            <td>.m-b-25</td>
                            <td>.m-l-25</td>
                        </tr>
                        <tr>
                            <td>.m-30</td>
                            <td>.m-t-30</td>
                            <td>.m-r-30</td>
                            <td>.m-b-30</td>
                            <td>.m-l-30</td>
                        </tr>
                        <tr>
                            <td>.m-35</td>
                            <td>.m-t-35</td>
                            <td>.m-r-35</td>
                            <td>.m-b-35</td>
                            <td>.m-l-35</td>
                        </tr>
                        <tr>
                            <td>.m-40</td>
                            <td>.m-t-40</td>
                            <td>.m-r-40</td>
                            <td>.m-b-40</td>
                            <td>.m-l-40</td>
                        </tr>
                        <tr>
                            <td>.m-auto</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="padding-tab">
                <h4 class="m-t-5 m-b-5">Padding - All / Top / Right / Bottom / Left</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th colspan="5" class="text-center">Padding Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Padding</th>
                            <th class="text-center">Padding Top</th>
                            <th class="text-center">Padding Right</th>
                            <th class="text-center">Padding Bottom</th>
                            <th class="text-center">Padding Left</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>.p-0</td>
                            <td>.p-t-0</td>
                            <td>.p-r-0</td>
                            <td>.p-b-0</td>
                            <td>.p-l-0</td>
                        </tr>
                        <tr>
                            <td>.p-1</td>
                            <td>.p-t-1</td>
                            <td>.p-r-1</td>
                            <td>.p-b-1</td>
                            <td>.p-l-1</td>
                        </tr>
                        <tr>
                            <td>.p-2</td>
                            <td>.p-t-2</td>
                            <td>.p-r-2</td>
                            <td>.p-b-2</td>
                            <td>.p-l-2</td>
                        </tr>
                        <tr>
                            <td>.p-3</td>
                            <td>.p-t-3</td>
                            <td>.p-r-3</td>
                            <td>.p-b-3</td>
                            <td>.p-l-3</td>
                        </tr>
                        <tr>
                            <td>.p-4</td>
                            <td>.p-t-4</td>
                            <td>.p-r-4</td>
                            <td>.p-b-4</td>
                            <td>.p-l-4</td>
                        </tr>
                        <tr>
                            <td>.p-5</td>
                            <td>.p-t-5</td>
                            <td>.p-r-5</td>
                            <td>.p-b-5</td>
                            <td>.p-l-5</td>
                        </tr>
                        <tr>
                            <td>.p-10</td>
                            <td>.p-t-10</td>
                            <td>.p-r-10</td>
                            <td>.p-b-10</td>
                            <td>.p-l-10</td>
                        </tr>
                        <tr>
                            <td>.p-15 / .wrapper</td>
                            <td>.p-t-15</td>
                            <td>.p-r-15</td>
                            <td>.p-b-15</td>
                            <td>.p-l-15</td>
                        </tr>
                        <tr>
                            <td>.p-20</td>
                            <td>.p-t-20</td>
                            <td>.p-r-20</td>
                            <td>.p-b-20</td>
                            <td>.p-l-20</td>
                        </tr>
                        <tr>
                            <td>.p-25</td>
                            <td>.p-t-25</td>
                            <td>.p-r-25</td>
                            <td>.p-b-25</td>
                            <td>.p-l-25</td>
                        </tr>
                        <tr>
                            <td>.p-30</td>
                            <td>.p-t-30</td>
                            <td>.p-r-30</td>
                            <td>.p-b-30</td>
                            <td>.p-l-30</td>
                        </tr>
                        <tr>
                            <td>.p-35</td>
                            <td>.p-t-35</td>
                            <td>.p-r-35</td>
                            <td>.p-b-35</td>
                            <td>.p-l-35</td>
                        </tr>
                        <tr>
                            <td>.p-40</td>
                            <td>.p-t-40</td>
                            <td>.p-r-40</td>
                            <td>.p-b-40</td>
                            <td>.p-l-40</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="background-tab">
                <h4 class="m-t-5 m-b-5">Background</h4>
                <p class="m-b-15">
                    All the predefined css classes will override the defined css styling in your classes, UNLESS the
                    <code>!important</code> is declared in your defined css styling.
                </p>
                <div class="table-responsive">
                    <table class="table table-condensed table-th-valign-middle table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th rowspan="2" class="text-center col-md-3">Color Name</th>
                            <th colspan="3" class="text-center">Background Class Name</th>
                        </tr>
                        <tr>
                            <th class="text-center">Lighter</th>
                            <th class="text-center">Normal</th>
                            <th class="text-center">Darker</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>No Background</td>
                            <td> -</td>
                            <td>.no-bg</td>
                            <td> -</td>
                        </tr>
                        <tr>
                            <td>White</td>
                            <td> -</td>
                            <td>.bg-white</td>
                            <td> -</td>
                        </tr>
                        <tr>
                            <td>Silver</td>
                            <td>.bg-silver-lighter</td>
                            <td>.bg-silver</td>
                            <td>.bg-silver-darker</td>
                        </tr>
                        <tr>
                            <td>Black</td>
                            <td>.bg-black-lighter</td>
                            <td>.bg-black</td>
                            <td>.bg-black-darker</td>
                        </tr>
                        <tr>
                            <td>Red</td>
                            <td>.bg-red-lighter</td>
                            <td>.bg-red</td>
                            <td>.bg-red-darker</td>
                        </tr>
                        <tr>
                            <td>Orange</td>
                            <td>.bg-orange-lighter</td>
                            <td>.bg-orange</td>
                            <td>.bg-orange-darker</td>
                        </tr>
                        <tr>
                            <td>Yellow</td>
                            <td>.bg-yellow-lighter</td>
                            <td>.bg-yellow</td>
                            <td>.bg-yellow-darker</td>
                        </tr>
                        <tr>
                            <td>Green</td>
                            <td>.bg-green-lighter</td>
                            <td>.bg-green</td>
                            <td>.bg-green-darker</td>
                        </tr>
                        <tr>
                            <td>Blue</td>
                            <td>.bg-blue-lighter</td>
                            <td>.bg-blue</td>
                            <td>.bg-blue-darker</td>
                        </tr>
                        <tr>
                            <td>Aqua</td>
                            <td>.bg-aqua-lighter</td>
                            <td>.bg-aqua</td>
                            <td>.bg-aqua-darker</td>
                        </tr>
                        <tr>
                            <td>Purple</td>
                            <td>.bg-purple-lighter</td>
                            <td>.bg-purple</td>
                            <td>.bg-purple-darker</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end #content -->

    <!-- begin theme-panel -->
    <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default"
                                      data-click="theme-selector" data-toggle="tooltip" data-trigger="hover"
                                      data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a>
                </li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector"
                       data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a>
                </li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Header Styling</div>
                <div class="col-md-7">
                    <select name="header-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Header</div>
                <div class="col-md-7">
                    <select name="header-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                <div class="col-md-7">
                    <select name="sidebar-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Sidebar</div>
                <div class="col-md-7">
                    <select name="sidebar-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                <div class="col-md-7">
                    <select name="content-gradient" class="form-control input-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Content Styling</div>
                <div class="col-md-7">
                    <select name="content-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">black</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i
                            class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="assets/crossbrowserjs/html5shiv.js"></script>
<script src="assets/crossbrowserjs/respond.min.js"></script>
<script src="assets/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
<script src="assets/plugins/jquery-cookie/js.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="assets/js/app.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-66289183-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-66289183-4');
</script>
</body>

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/helper_css.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:42:10 GMT -->
</html>