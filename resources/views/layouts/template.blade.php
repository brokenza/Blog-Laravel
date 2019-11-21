<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Laravel Demo Application | Blank Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
	<link href="{{ asset("/assets/plugins/jquery-ui/jquery-ui.min.css")}}" rel="stylesheet" />
	<link href="{{ asset("/assets/plugins/bootstrap/bootstrap-4.1.1/css/bootstrap.min.css")}}" rel="stylesheet" />
	<link href="{{ asset("/assets/plugins/font-awesome/5.1/css/all.css")}}" rel="stylesheet" />
	<link href="{{ asset("/assets/css/animate.min.css")}}" rel="stylesheet" />
	<link href="{{ asset("/assets/css/style.min.css")}}" rel="stylesheet" />


  <link href="{{ asset("/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css")}}" rel="stylesheet" />

	<script src="{{ asset("/assets/plugins/pace/pace.min.js")}}"></script>

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
	<!-- end #page-loader -->
	<div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
	<!-- begin #page-container -->

		<!-- begin #header -->
    <!-- Header -->
    <!-- begin #header -->


<div id="header" class="header navbar navbar-primary navbar-fixed-top">
  <!-- begin container-fluid -->
  <div class="container-fluid">
    <!-- begin mobile sidebar expand / collapse button -->
    <div class="navbar-header">
      <a href="index.html" class="navbar-brand"><img src="../assets/img/logo.png" class="logo" alt="" /> Laravel App</a>
      <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- end mobile sidebar expand / collapse button -->

    <!-- begin navbar-right -->
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle has-notify" data-click="toggle-notify">
          <i class="fa fa-bell"></i>
        </a>
        <ul class="dropdown-menu dropdown-notification pull-right">
                        <li class="dropdown-header">Notifications (5)</li>
                        <li class="notification-item">
                            <a href="javascript:;">
                                <div class="media"><i class="fa fa-exclamation-triangle"></i></div>
                                <div class="message">
                                    <h6 class="title">Server Error Reports</h6>
                                    <div class="time">3 minutes ago</div>
                                </div>
                                <div class="option" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="unread" data-container="body">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </a>
                        </li>
                        <li class="notification-item">
                            <a href="javascript:;">
                                <div class="media"><img src="../assets/img/user_1.jpg" alt="" /></div>
                                <div class="message">
                                    <h6 class="title">Solvia Smith</h6>
                                    <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="time">25 minutes ago</div>
                                </div>
                                <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </a>
                        </li>
                        <li class="notification-item">
                            <a href="javascript:;">
                                <div class="media"><img src="../assets/img/user_2.jpg" alt="" /></div>
                                <div class="message">
                                    <h6 class="title">Olivia</h6>
                                    <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                    <div class="time">35 minutes ago</div>
                                </div>
                                <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </a>
                        </li>
                        <li class="notification-item">
                            <a href="javascript:;">
                                <div class="media"><i class="fa fa-user-plus media-object"></i></div>
                                <div class="message">
                                    <h6 class="title"> New User Registered</h6>
                                    <div class="time">1 hour ago</div>
                                </div>
                                <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </a>
                        </li>
                        <li class="notification-item">
                            <a href="javascript:;">
                                <div class="media bg-success"><i class="fa fa-credit-card"></i></div>
                                <div class="message">
                                    <h6 class="title"> New Item Sold</h6>
                                    <div class="time">2 hour ago</div>
                                </div>
                                <div class="option read" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="read" data-container="body">
                                    <i class="fa fa-circle"></i>
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
          <span class="image"><img src="./assets/img/avatar.jpg" alt="" /></span>
          <span class="hidden-xs">{{Session::get('userLogin.name')}}</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu pull-right">
          <li><a href="javascript:;">Edit Profile</a></li>
          <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
          <li><a href="javascript:;">Calendar</a></li>
          <li><a href="javascript:;">Setting</a></li>
          <li class="divider"></li>
          <li><a href="logins">Log Out</a></li>
        </ul>
      </li>
    </ul>
    <!-- end navbar-right -->
  </div>
  <!-- end container-fluid -->
</div>
<!-- end #header -->

		<!-- end #header -->

		<!-- begin #sidebar -->
    <!-- begin #sidebar -->
<div id="sidebar" class="sidebar sidebar-light sidebar-highlight-primary">
  <!-- begin sidebar scrollbar -->
  <div data-scrollbar="true" data-height="100%">
    <!-- begin sidebar nav -->
    <ul class="nav">
        <li class="nav-user">
            <div class="image">
                <img src="./assets/img/avatar.jpg" alt="" />
            </div>
            <div class="info">
                <div class="name dropdown">
                    <a href="javascript:;" data-toggle="dropdown">{{Session::get('userLogin.name')}} <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:;">Edit Profile</a></li>
                                <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li><a href="javascript:;">Calendar</a></li>
                                <li><a href="javascript:;">Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;">Log Out</a></li>
                            </ul>
                </div>
                <div class="position">Front End Designer</div>
            </div>
        </li>
      <li class="nav-header">Navigation</li>
      <li class="has-sub {{ (request()->is('home')) ? 'active' : '' }}">
        <a href="./home">
          <span class="badge pull-right">10</span>
          <i class="fa fa-inbox"></i>
          <span>Main</span>
        </a>
      </li>
<!--       <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-home"></i>
            <span>Dashboard <span class="label label-theme m-l-3">NEW</span></span>
          </a>
          <ul class="sub-menu">
              <li><a href="index.html">Dashboard v1</a></li>
              <li><a href="index_v2.html">Dashboard v2</a></li>
              <li><a href="index_v3.html">Dashboard v3</a></li>
              <li><a href="index_v4.html">Dashboard v4 <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
          </ul>
      </li>
      <li>
        <a href="bootstrap_4.html">
            <div class="icon-img"><img src="../assets/img/bootstrap-4.png" alt="" /></div>
            <span>Bootstrap 4</span>
          </a>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
          <span class="badge pull-right">10</span>
          <i class="fa fa-inbox"></i>
          <span>Email</span>
        </a>
        <ul class="sub-menu">
            <li><a href="email_inbox.html">Inbox</a></li>
            <li><a href="email_compose.html">Compose</a></li>
            <li><a href="email_detail.html">Detail</a></li>
        </ul>
      </li>
      <li>
        <a href="widgets.html">
            <i class="fa fa-gem"></i>
            <span>Widgets</span>
          </a>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-suitcase"></i>
            <span>UI Elements</span>
        </a>
        <ul class="sub-menu">
          <li><a href="ui_general.html">General</a></li>
          <li><a href="ui_typography.html">Typography</a></li>
          <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
          <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
          <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
          <li><a href="ui_media_object.html">Media Object</a></li>
          <li><a href="ui_buttons.html">Buttons</a></li>
          <li><a href="ui_font_awesome.html">Font Awesome</a></li>
          <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
          <li><a href="ui_ionicons.html">Ionicons</a></li>
        </ul>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-file"></i>
            <span>Form Stuff</span>
        </a>
        <ul class="sub-menu">
          <li><a href="form_elements.html">Form Elements</a></li>
          <li><a href="form_plugins.html">Form Plugins</a></li>
          <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
          <li><a href="form_validation.html">Form Validation</a></li>
          <li><a href="form_wizards.html">Wizards</a></li>
          <li><a href="form_wysiwyg.html">WYSIWYG</a></li>
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
            <i class="fa fa-envelope"></i>
            <span>Email Template <span class="label label-theme m-l-3">NEW</span></span>
        </a>
        <ul class="sub-menu">
          <li><a href="email_newsletter.html" target="_blank">Newsletter Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
          <li><a href="email_system.html" target="_blank">System Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
          <li><a href="email_billing.html" target="_blank">Billing Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
        </ul>
      </li>
      <li class="has-sub">
          <a href="javascript:;">
              <b class="caret pull-right"></b>
              <i class="fa fa-map-marker"></i>
              <span>Maps</span>
          </a>
        <ul class="sub-menu">
          <li><a href="map_vector.html">Vector Map</a></li>
          <li><a href="map_google.html">Google Map</a></li>
        </ul>
      </li>
      <li class="has-sub">
          <a href="javascript:;">
            <b class="caret pull-right"></b>
              <i class="fa fa-chart-area"></i>
            <span>Chart</span>
        </a>
        <ul class="sub-menu">
            <li><a href="chart_flot.html">Flot Chart</a></li>
            <li><a href="chart_morris.html">Morris Chart</a></li>
          <li><a href="chart_js.html">Chart JS</a></li>
        </ul>
      </li>
      <li>
        <a href="calendar.html">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
        </a>
      </li>
      <li class="has-sub">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-file"></i>
            <span>Pages</span>
        </a>
        <ul class="sub-menu">
              <li><a href="extra_gallery.html">Gallery</a></li>
            <li><a href="extra_timeline.html">Timeline</a></li>
          <li><a href="extra_search_results.html">Search Results</a></li>
          <li><a href="extra_invoice.html">Invoice</a></li>
            <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
          <li><a href="extra_404_error.html">404 Error Page</a></li>
          <li><a href="extra_login.html">Login Page</a></li>
          <li><a href="extra_register.html">Register Page</a></li>
        </ul>
      </li> -->
      <li class="has-sub 
        {{ 
          (request()->is('user')) ? 'active' : '' || 
          (request()->is('role')) ? 'active' : '' ||
          (request()->is('permission')) ? 'active' : ''
        }}">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-cogs"></i>
            <span>Users,Roles,Permissions</span>
        </a>
                 <ul class="sub-menu">
                        <li class="{{ (request()->is('user')) ? 'active' : '' }}"><a href="./user">User</a></li>
                        <li class="{{ (request()->is('role')) ? 'active' : '' }}"><a href="./role">Role</a></li>
                        <li class="{{ (request()->is('permission')) ? 'active' : '' }}"><a href="./permission">Permission</a></li>
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
      <li>
        <a href="/logout">
            <i class="fa fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>

      </li>
      <li class="divider has-minify-btn">
                    <!-- begin sidebar minify button -->
                    <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i></a>
                    <!-- end sidebar minify button -->
      </li>
    </ul>
    <!-- end sidebar nav -->
  </div>
  <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
      <!-- Main content -->
      <!-- <section class="content"> -->
          <!-- Your Page Content Here -->
          @yield('content')
            <!-- Footer -->
         <!--  @include('Layouts/footer') -->
            <!-- end #footer -->
		</div>
		<!-- end #content -->

		<!-- begin #sidebar-right -->

		<!-- end #sidebar-right -->
	</div>
	<!-- end page container -->


	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ asset("/assets/plugins/jquery/jquery-3.3.1.min.js")}}"></script>
	<script src="{{ asset("/assets/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
	<script src="{{ asset("/assets/plugins/bootstrap/bootstrap-4.1.1/js/bootstrap.bundle.min.js")}}"></script>

	<script src="{{ asset("/assets/plugins/slimscroll/jquery.slimscroll.min.js")}}"></script>
	<script src="{{ asset("/assets/plugins/jquery-cookie/jquery.cookie.js")}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset("/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js")}}"></script>
    <script src="{{ asset("/assets/js/demo.min.js")}}"></script>
    <script src="{{ asset("/assets/js/apps.min.js")}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.init();
		});
	</script>

</body>
</html>
