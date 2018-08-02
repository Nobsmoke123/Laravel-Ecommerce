@extends('layouts.admin-ui')

@section('content')
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN THEME PANEL -->
			<!-- END THEME PANEL -->
			<!-- BEGIN PAGE BAR -->
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<a href="index.html">LogRedeem</a>
						<i class="fa fa-circle"></i>
					</li>
					<li>
						<a href="#">Admin</a>
						<i class="fa fa-circle"></i>
					</li>
					<li>
						<span>Customers</span>
					</li>
				</ul>
			</div>
			<!-- END PAGE BAR -->
			<!-- BEGIN PAGE TITLE-->
			<h3 class="page-title"> 
				Customers List
				<small></small>
			</h3>
			
			<!-- END PAGE TITLE-->
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light bordered">
						<div class="portlet-title">
							<div class="caption font-dark">
								<i class="icon-puzzle font-dark"></i>
								<span class="caption-subject bold uppercase">Users</span>
								
							</div>
							<div class="tools"> </div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th class="text-center"> First Name </th>
										<th class="text-center"> Last Name</th>
										<th class="text-center"> Email </th>
										<th class="text-center"> Phone </th>
										<th class="text-center"> Address </th>
										<th class="text-center"> City </th>
										<!-- <th class="text-center"> Edit </th>
										<th class="text-center"> Delete</th> -->
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $user->first_name }}</td>
                                            <td class="text-center">{{ $user->last_name }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->phone }}</td>
                                            <td class="text-center">{{ $user->address }}</td>
                                            <td class="text-center">{{ $user->city }}</td>
                                            <!-- <td class="text-center"><a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
											<td class="text-center"><a href="#" class="btn btn-danger" ><i class="fa fa-trash"></i></a></td> -->
                                        </tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
		<!-- END CONTENT BODY -->
	</div>
	<!-- END CONTENT -->
@endsection