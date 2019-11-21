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
      <li class="has-sub {{ (request()->is('user')) ? 'active' : '' }}">
        <a href="javascript:;">
            <b class="caret pull-right"></b>
            <i class="fa fa-cogs"></i>
            <span>Users,Roles,Permissions</span>
        </a>
                 <ul class="sub-menu">
                        <li class="{{ (request()->is('user')) ? 'active' : '' }}"><a href="./user">User</a></li>
                        <li><a href="/role">Role</a></li>
                        <li><a href="/permission">Permission</a></li>
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
