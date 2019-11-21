@extends('./Layouts/template')
@section('content')
			

<h1 class="page-header">Employee Page <small>header small text goes here...</small></h1>
<!-- end page-header -->

<p>
		<button type="button" class="btn btn-success m-b-5"> New Employee</button>
</p>

<div class="row">
	<!-- begin col-8 -->
	{{-- <div class="col-lg-1"></div> --}}
	<div class="col-lg-12">
		<!-- begin panel -->
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">List employees</h4>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover  table-td-valign-middle">
					<thead>
						<tr class="primary">
							<th>Product code</th>
							<th class="text-center">Delivery</th>
							<th class="text-center">Admin</th>
							<th class="text-center">Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>43902112</td>
							<td class="text-center">28/9/2015</td>
							<td class="text-center"><img src="../assets/img/user_1.jpg" width="20" class="rounded-corner" alt="" /></td>
							<td class="text-center ">RECEIVED</td>
							<td class="text-center" width="15%">
									<a href="javascript:;" class="btn  btn-icon  btn-danger" ><i class="fa fa-times"></i></a>
									<a href="javascript:;" class="btn  btn-icon  btn-purple" ><i class="fa fa-edit"></i></a>
									<a href="javascript:;" class="btn  btn-icon btn-success" ><i class="fa fa-share"></i></a>
								</td>
						</tr>
						<tr>
							<td>29012923</td>
							<td class="text-center">27/9/2015</td>
							<td class="text-center"><img src="../assets/img/user_2.jpg" width="20" class="rounded-corner" alt="" /></td>
							<td class="text-center">RECEIVED</td>
							<td class="text-center" width="15%">
									<a href="javascript:;" class="btn  btn-icon  btn-danger" ><i class="fa fa-times"></i></a>
									<a href="javascript:;" class="btn  btn-icon  btn-purple" ><i class="fa fa-edit"></i></a>
									<a href="javascript:;" class="btn  btn-icon btn-success" ><i class="fa fa-share"></i></a>
								</td>
						</tr>
						<tr>
								<td>29012923</td>
								<td class="text-center">27/9/2015</td>
								<td class="text-center"><img src="../assets/img/user_2.jpg" width="20" class="rounded-corner" alt="" /></td>
								<td class="text-center">RECEIVED</td>
								<td class="text-center" width="15%">
									<a href="javascript:;" class="btn  btn-icon  btn-danger" ><i class="fa fa-times"></i></a>
									<a href="javascript:;" class="btn  btn-icon  btn-purple" ><i class="fa fa-edit"></i></a>
									<a href="javascript:;" class="btn  btn-icon btn-success" ><i class="fa fa-share"></i></a>
								</td>
							</tr>

					</tbody>
				</table>
			</div>
		</div>
		<!-- end panel -->
	</div>
	<!-- end col-8 -->
	<!-- end col-4 -->
</div>
		
            <!-- begin #footer -->
            <div id="footer" class="footer">
                <span class="pull-right">
                    <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                        <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                    </a>
                </span>
                &copy; 2018 <b>Source Admin</b> All Right Reserved
            </div>
@endsection