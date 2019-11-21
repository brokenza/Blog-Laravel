@extends('Layouts/login_template')

@section('content')
<div id="page-container" class="fade page-container">
	    <!-- begin login -->
		<div class="login">
		    <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
                <img src="{{ asset("/assets/img/logo-white.png")}}" height="36" class="pull-right" alt="" /> Login
            </div>
		    <!-- end login-brand -->
		    <!-- begin login-content -->
            <div class="login-content">
                <h4 class="text-center m-t-0 m-b-20">WELCOME</h4>
                <form action="logins" method="post" class="form-input-flat">
                {{ csrf_field() }}
                    <div class="form-group">
                        
                        <input type="text" name="Username"  class="form-control input-lg" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="Password" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="row m-b-20">
                        <div class="col-lg-12">
                            <button type="submit" value="login_click" class="btn btn-success btn-lg btn-block btn-submit">เข้าสู่ระบบ</button>
                        </div>
                    </div>
                    <div class="text-center">
                        Version 1.00 <!-- <a href="extra_register.html" class="text-muted">สมัครสมาชิก</a> -->
                    </div>
                </form>
            </div>
		    <!-- end login-content -->
		</div>
		<!-- end login -->
    </div>
    
    <script type="text/javascript">


    </script>
@endsection
