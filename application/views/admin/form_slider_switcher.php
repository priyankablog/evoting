<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/form_slider_switcher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:27:31 GMT -->
<!-- Added by HTTrack --><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>PVR Admin | Form Slider + Switcher</title>
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

    <!-- ================== BEGIN PAGE CSS STYLE ================== -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
    <link href="assets/plugins/powerange/powerange.min.css" rel="stylesheet"/>
    <!-- ================== END PAGE CSS STYLE ================== -->

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
                <li class="has-sub active">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-file-o"></i>
                        <span>Form Stuff <span class="label label-theme m-l-5">V 1.2</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="form_elements.html">Form Elements <span class="label label-theme m-l-5">V 1.2</span></a></li>
                        <li><a href="form_plugins.html">Form Plugins <span class="label label-theme m-l-5">V 1.2</span></a></li>
                        <li class="active"><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
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
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret pull-right"></b>
                        <i class="fa fa-medkit"></i>
                        <span>Helper</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="helper_css.html">Predefined CSS Classes</a></li>
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
            <li><a href="javascript:;">Form Stuff</a></li>
            <li class="active">Form Slider + Switcher</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Form Slider + Switcher
            <small>header small text goes here...</small>
        </h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-slider-switcher-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Default Switchery</h4>
                    </div>
                    <div class="panel-body">
                        <h4>Default Switchery</h4>
                        <p>
                            Use the attribute <code>data-render="switchery"</code> to render the switchery switcher,
                            and use the attribute <code>data-theme="default"</code> to set the theme color
                        </p>
                        <p class="m-b-20"><input type="checkbox" data-render="switchery" data-theme="default" checked/>
                        </p>
                        <h5>All Available Options</h5>
                        <ul>
                            <li>theme: <code>data-theme="default"</code></li>
                            <li>secondary color: <code>data-secondary-color="#dfdfdf"</code></li>
                            <li>classname: <code>data-classname="switchery"</code></li>
                            <li>disabled: <code>data-disabled="true"</code></li>
                            <li>disabledOpacity: <code>data-disabled-opacity="0.5"</code></li>
                            <li>speed: <code>data-speed="0.5s"</code></li>
                        </ul>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-slider-switcher-2">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Switchery Theme</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-condensed m-b-0">
                            <thead>
                            <tr>
                                <th class="col-md-1">Swither</th>
                                <th>Data attribute</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="default" checked/></td>
                                <td><code>data-theme="default"</code></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="red" checked/></td>
                                <td><code>data-theme="red"</code></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="blue" checked/></td>
                                <td><code>data-theme="blue"</code></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="purple" checked/></td>
                                <td><code>data-theme="purple"</code></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="orange" checked/></td>
                                <td><code>data-theme="orange"</code></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" data-render="switchery" data-theme="black" checked/></td>
                                <td><code>data-theme="black"</code></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
            <!-- begin col-4 -->
            <div class="col-md-4">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-slider-switcher-3">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Switchery Theme</h4>
                    </div>
                    <div class="panel-body">
                        <h4>Checked & Unchecked Switchery</h4>
                        <p>
                            <input type="checkbox" data-render="switchery" data-theme="default" checked/>
                            <span class="text-muted m-l-5 m-r-20">checked</span>
                            <input type="checkbox" data-render="switchery" data-theme="default"/>
                            <span class="text-muted m-l-5">unchecked</span>
                        </p>
                        <h4>Disabled</h4>
                        <p>
                            <input type="checkbox" data-render="switchery" data-theme="default" data-disabled="true"
                                   checked/>
                            <span class="text-muted m-l-5">checked</span>
                        </p>
                        <p>
                            <input type="checkbox" data-render="switchery" data-theme="orange" data-disabled="true"
                                   checked/>
                            <span class="text-muted m-l-5">unchecked</span>
                        </p>
                        <h4>State</h4>
                        <p>
                            <input type="checkbox" data-render="switchery" data-theme="black" data-id="switchery-state"
                                   checked/>
                            <a href="#" class="btn btn-xs btn-success m-l-5" data-click="check-switchery-state">check
                                state</a>
                        </p>
                        <p>
                            <input type="checkbox" data-render="switchery" data-theme="blue"
                                   data-change="check-switchery-state-text" checked/>
                            <a href="#" class="btn btn-xs btn-primary disabled m-l-5" data-id="switchery-state-text">true</a>
                        </p>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-slider-switcher-4">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Powerange Slider</h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <!-- begin col-4 -->
                            <div class="col-md-4">
                                <h4>Default Powerange</h4>
                                <p>
                                    Use the attribute <code>data-render="poweranger-slider"</code> to render the
                                    switchery powerange slider.
                                </p>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-9 -->
                                    <div class="col-md-9">
                                        <div class="slider-wrapper">
                                            <input type="text" data-render="powerange-slider" data-start="70"/>
                                        </div>
                                    </div>
                                    <!-- end col-9 -->
                                </div>
                                <!-- end row -->
                                <h5>All Available Options</h5>
                                <ul>
                                    <li>decimal: <code>data-decimal="false"</code></li>
                                    <li>disable: <code>data-disable="false"</code></li>
                                    <li>disableOpacity: <code>data-disable-opacity="0.5"</code></li>
                                    <li>hideRange: <code>data-hide-range="false"</code></li>
                                    <li>klass: <code>data-class=""</code></li>
                                    <li>min: <code>data-min="0"</code></li>
                                    <li>max: <code>data-max="100"</code></li>
                                    <li>start: <code>data-min="null"</code></li>
                                    <li>step: <code>data-min="null"</code></li>
                                    <li>vertical: <code>data-vertical="false"</code></li>
                                </ul>
                            </div>
                            <!-- end col-4 -->
                            <!-- begin col-4 -->
                            <div class="col-md-4">
                                <h4>Slider Colors</h4>
                                <p>
                                    Available Classes for powerange slider is <code>red</code>, <code>blue</code>,
                                    <code>purple</code>, <code>orange</code> and <code>black</code>.
                                </p>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-9 -->
                                    <div class="col-md-9">
                                        <div class="slider-wrapper slider-without-range m-b-0">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="90"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range m-b-0 red">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="75"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range m-b-0 blue">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="60"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range m-b-0 purple">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="45"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range m-b-0 orange">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="30"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range black">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-start="15"/>
                                        </div>
                                    </div>
                                    <!-- end col-9 -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col-4 -->
                            <!-- begin col-4 -->
                            <div class="col-md-4">
                                <h4>Horizontal Sliders</h4>
                                <p>
                                    Set the attribute <code>data-vertical="true"</code> in order to render the slider as
                                    horizontal view.
                                </p>
                                <!-- begin row -->
                                <div class="row">
                                    <!-- begin col-9 -->
                                    <div class="col-md-9">
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="90" data-height="180px"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left blue">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="75" data-height="180px"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left purple">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="60" data-height="180px"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left red">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="45" data-height="180px"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left orange">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="30" data-height="180px"/>
                                        </div>
                                        <div class="slider-wrapper slider-without-range slider-vertical m-b-0 pull-left black">
                                            <input type="text" data-render="powerange-slider" data-hide-range="true"
                                                   data-vertical="true" data-start="15" data-height="180px"/>
                                        </div>
                                    </div>
                                    <!-- end col-9 -->
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- end col-4 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end panel -->

            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
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
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/powerange/powerange.min.js"></script>
<script src="assets/js/form_slider_switcher_demo.js"></script>
<script src="assets/js/app.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
        FormSliderSwitcher.init();
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

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/form_slider_switcher.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:27:35 GMT -->
</html>