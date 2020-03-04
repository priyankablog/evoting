<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:26:35 GMT -->
<!-- Added by HTTrack -->
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <title>PVR Admin | Form Elements</title>
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

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="assets/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet"/>
    <!-- ================== END PAGE LEVEL STYLE ================== -->
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
                        <li class="active"><a href="form_elements.html">Form Elements <span class="label label-theme m-l-5">V 1.2</span></a></li>
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
            <li class="active">Form Elements</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Form Elements
            <small>header small text goes here...</small>
        </h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
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
                        <h4 class="panel-title">Input Types</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Default Input</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Default input"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Disabled Input</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Disabled input" disabled/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Select (multiple)</label>
                                <div class="col-md-9">
                                    <select multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Textarea</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" placeholder="Textarea" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Checkbox</label>
                                <div class="col-md-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=""/>
                                            Checkbox Label 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value=""/>
                                            Checkbox Label 2
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Inline Checkbox</label>
                                <div class="col-md-9">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""/>
                                        Checkbox Label 1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value=""/>
                                        Checkbox Label 2
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Radio Button</label>
                                <div class="col-md-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option1" checked/>
                                            Radio option 1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2"/>
                                            Radio option 2
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Inline Radio Button</label>
                                <div class="col-md-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadios" value="option1" checked/>
                                        Radio option 1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadios" value="option2"/>
                                        Radio option 2
                                    </label>
                                </div>
                            </div>
                            <div class="form-group has-success has-feedback">
                                <label class="col-md-3 control-label">Input with Success</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"/>
                                    <span class="fa fa-check form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-warning has-feedback">
                                <label class="col-md-3 control-label">Input with Warning</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"/>
                                    <span class="fa fa-warning form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group has-error has-feedback">
                                <label class="col-md-3 control-label">Input with Error</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"/>
                                    <span class="fa fa-times form-control-feedback"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Submit</label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-sm btn-success">Submit Button</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-2">
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
                        <h4 class="panel-title">Input Sizes, Input Group</h4>
                    </div>
                    <div class="panel-body">
                        <h4 class="m-t-0">Input Sizing</h4>
                        <input class="form-control input-lg" type="text" placeholder=".input-lg"/>
                        <p></p>
                        <input class="form-control" type="text" placeholder="Default input"/>
                        <p></p>
                        <input class="form-control input-sm" type="text" placeholder=".input-sm"/>
                        <p></p>
                        <select class="form-control input-lg">
                            <option>.input-lg</option>
                        </select>
                        <p></p>
                        <select class="form-control">
                            <option>default input</option>
                        </select>
                        <p></p>
                        <select class="form-control input-sm">
                            <option>.input-sm</option>
                        </select>
                        <h4 class="m-t-20">Input Group</h4>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username"/>
                        </div>
                        <p></p>
                        <div class="input-group">
                            <input type="text" class="form-control"/>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control"/>
                            <span class="input-group-addon">.00</span>
                        </div>
                        <p></p>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="checkbox"/>
                                </span>
                            <input type="text" class="form-control" placeholder="Checkbox add on"/>
                        </div>
                        <p></p>
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <input type="radio"/>
                                </span>
                            <input type="text" class="form-control" placeholder="Radio button add on"/>
                        </div>
                        <p></p>
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary">Action</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control"/>
                            <div class="input-group-btn">
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <button type="button" class="btn btn-success">Action</button>
                            </div>
                        </div>
                        <h4 class="m-t-20">Input Group Sizing</h4>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username"/>
                        </div>
                        <p></p>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username"/>
                        </div>
                        <p></p>
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
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
                        <h4 class="panel-title">Default Style</h4>
                    </div>
                    <div class="panel-body">
                        <form action="#" method="POST">
                            <fieldset>
                                <legend>Legend</legend>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                           placeholder="Password"/>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/> Check me out
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                                <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-4">
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
                        <h4 class="panel-title">Form Horizontal</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="POST">
                            <fieldset>
                                <legend>Legend</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Email address</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" placeholder="Enter email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" class="form-control" placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"/> Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                                        <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-12 -->
            <div class="col-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
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
                        <h4 class="panel-title">Inline Form</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-inline" action="#" method="POST">
                            <div class="form-group m-r-10">
                                <input type="email" class="form-control" id="exampleInputEmail2"
                                       placeholder="Enter email"/>
                            </div>
                            <div class="form-group m-r-10">
                                <input type="password" class="form-control" id="exampleInputPassword2"
                                       placeholder="Password"/>
                            </div>
                            <div class="checkbox m-r-10">
                                <label>
                                    <input type="checkbox"/> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary m-r-5">Sign in</button>
                            <button type="submit" class="btn btn-sm btn-default">Register</button>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-6">
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
                        <h4 class="panel-title">CSS Checkbox <span class="label label-success">NEW</span></h4>
                    </div>
                    <div class="alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        CSS Checkbox is not supported in older browser.
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">CSS Checkbox</label>
                                <div class="col-md-9">
                                    <div class="checkbox checkbox-css">
                                        <input type="checkbox" id="checkbox_css_1" value="" checked/>
                                        <label for="checkbox_css_1">
                                            CSS Checkbox Label 1
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-css checkbox-success">
                                        <input type="checkbox" id="checkbox_css_2" value=""/>
                                        <label for="checkbox_css_2">
                                            CSS Checkbox Label 1
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Inline CSS Checkbox</label>
                                <div class="col-md-9">
                                    <div class="checkbox checkbox-css checkbox-inline checkbox-inverse">
                                        <input type="checkbox" value="" id="inline_css_checkbox_1" checked/>
                                        <label for="inline_css_checkbox_1">
                                            Checkbox Label 1
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-css checkbox-inline checkbox-warning">
                                        <input type="checkbox" value="" id="inline_css_checkbox_2"/>
                                        <label for="inline_css_checkbox_2">
                                            Checkbox Label 2
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">&nbsp;</label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-sm btn-inverse">Submit Button</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->
            <!-- begin col-6 -->
            <div class="col-md-6">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-7">
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
                        <h4 class="panel-title">CSS Radio Button <span class="label label-success">NEW</span></h4>
                    </div>
                    <div class="alert alert-warning fade in">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        CSS Radio Button is not supported in older browser.
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-md-3 control-label">CSS Radio Button</label>
                                <div class="col-md-9">
                                    <div class="radio radio-css">
                                        <input type="radio" name="cssRadio" id="cssRadio1" value="option1" checked/>
                                        <label for="cssRadio1">
                                            Radio option 1
                                        </label>
                                    </div>
                                    <div class="radio radio-css radio-success">
                                        <input type="radio" name="cssRadio" id="cssRadio2" value="option2"/>
                                        <label for="cssRadio2">
                                            Radio option 2
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">CSS Inline Radio Button</label>
                                <div class="col-md-9">
                                    <div class="radio radio-css radio-inline radio-inverse">
                                        <input type="radio" name="radioInlineCss" id="radio_inline_css_1"
                                               value="option1" checked/>
                                        <label for="radio_inline_css_1">
                                            Radio option 1
                                        </label>
                                    </div>
                                    <div class="radio radio-css radio-inline radio-danger">
                                        <input type="radio" name="radioInlineCss" id="radio_inline_css_2"
                                               value="option2"/>
                                        <label for="radio_inline_css_2">
                                            Radio option 2
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">&nbsp;</label>
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-sm btn-inverse">Submit Button</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->

            <!-- begin col-6 -->
            <div class="col-md-12">
                <!-- begin panel -->
                <div class="panel panel-inverse" data-sortable-id="form-stuff-7">
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
                        <h4 class="panel-title">Awesome bootstrap checkbox <span class="label label-success">V 1.2</span></h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>
                                        Basic
                                    </legend>
                                    <p>
                                        Supports bootstrap brand colors: <code>.checkbox-primary</code>, <code>.checkbox-info</code>
                                        etc.
                                    </p>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Default
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Success
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">
                                            Info
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox5" type="checkbox" checked="">
                                        <label for="checkbox5">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-danger">
                                        <input id="checkbox6" type="checkbox" checked="">
                                        <label for="checkbox6">
                                            Check me out
                                        </label>
                                    </div>
                                    <p>Checkboxes without label text</p>
                                    <div class="checkbox">
                                        <input type="checkbox" id="singleCheckbox1" value="option1"
                                               aria-label="Single checkbox One">
                                        <label></label>
                                    </div>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" id="singleCheckbox2" value="option2" checked=""
                                               aria-label="Single checkbox Two">
                                        <label></label>
                                    </div>
                                    <p>Inline checkboxes</p>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label for="inlineCheckbox1"> Inline One </label>
                                    </div>
                                    <div class="checkbox checkbox-success checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox2" value="option1" checked="">
                                        <label for="inlineCheckbox2"> Inline Two </label>
                                    </div>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox3" value="option1">
                                        <label for="inlineCheckbox3"> Inline Three </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>
                                        Circled
                                    </legend>
                                    <p>
                                        <code>.checkbox-circle</code> for roundness.
                                    </p>
                                    <div class="checkbox checkbox-circle">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">
                                            Simply Rounded
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-info checkbox-circle">
                                        <input id="checkbox8" type="checkbox" checked="">
                                        <label for="checkbox8">
                                            Me too
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-md-4">
                                <fieldset>
                                    <legend>
                                        Radio
                                    </legend>
                                    <p>
                                        Supports bootstrap brand colors: <code>.radio-primary</code>, <code>.radio-danger</code>
                                        etc.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio1" value="option1"
                                                       checked="">
                                                <label for="radio1">
                                                    Small
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="radio1" id="radio2" value="option2">
                                                <label for="radio2">
                                                    Big
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio2" id="radio3" value="option1">
                                                <label for="radio3">
                                                    Next
                                                </label>
                                            </div>
                                            <div class="radio radio-danger">
                                                <input type="radio" name="radio2" id="radio4" value="option2"
                                                       checked="">
                                                <label for="radio4">
                                                    One
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Radios without label text</p>
                                    <div class="radio">
                                        <input type="radio" id="singleRadio1" value="option1" name="radioSingle1"
                                               aria-label="Single radio One">
                                        <label></label>
                                    </div>
                                    <div class="radio radio-success">
                                        <input type="radio" id="singleRadio2" value="option2" name="radioSingle1"
                                               checked="" aria-label="Single radio Two">
                                        <label></label>
                                    </div>
                                    <p>Inline radios</p>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                               checked="">
                                        <label for="inlineRadio1"> Inline One </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                        <label for="inlineRadio2"> Inline Two </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-6 -->

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

<!-- Mirrored from pvradmin.palanivelayudam.net/pvradmin/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 09:26:36 GMT -->
</html>