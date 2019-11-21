<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Laravel Demo Application | Login Page</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" /> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
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

	<!-- begin #page-container -->

		<!-- begin #header -->
    <!-- Header -->
		<!-- end #header -->

		<!-- begin #sidebar -->
  
		<!-- end #sidebar -->

		<!-- begin #content -->

			<!-- begin breadcrumb -->
      <!-- Main content -->
      <!-- <section class="content"> -->
          <!-- Your Page Content Here -->
          @yield('content')

            <!-- begin #footer -->
            <!-- Footer -->
        
            <!-- end #footer -->

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
