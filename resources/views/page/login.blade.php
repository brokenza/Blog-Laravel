	
@extends('./layouts/admin_template')

@section('content')
    <div id="page-container" class="fade page-container">
	    <!-- begin login -->
		<div class="login">
		    <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
                <img src="../assets/img/logo-white.png" height="36" class="pull-right" alt="" /> Login Panel
            </div>
		    <!-- end login-brand -->
		    <!-- begin login-content -->
            <div class="login-content">
                <h4 class="text-center m-t-0 m-b-20">Great to have you back!</h4>
                <form action="https://seantheme.com/source-admin/admin/html/index.html" method="POST" name="login_form" class="form-input-flat">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="row m-b-20">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-lime btn-lg btn-block">Sign in to your account</button>
                        </div>
                    </div>
                    <div class="text-center">
                        New here? <a href="extra_register.html" class="text-muted">Create a new account</a>
                    </div>
                </form>
            </div>
		    <!-- end login-content -->
		</div>
		<!-- end login -->
	</div>

    @endsection