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
						<span>Settings</span>
					</li>
				</ul>
			</div>
			<!-- END PAGE BAR -->
			<!-- BEGIN PAGE TITLE-->
			<h3 class="page-title"> 
				System Settings
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
								<span class="caption-subject bold uppercase">Settings</span>
								
							</div>
							<div class="tools"> </div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
									<tr>
										<th class="text-center"> Coupon </th>
										<th class="text-center"> Dollar Value </th>
										<th class="text-center"> Euro Value </th>
                                        <th class="text-center"> Vat </th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center"> Delete </th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($settings as $setting)
                                        <tr>
                                            <td class="text-center"> {{ $setting->coupon }}</td>
                                            <td class="text-center"> {{ $setting->dollar_to_naira }} </td>
                                            <td class="text-center"> {{ $setting->euro_to_naira }} </td>
                                            <td class="text-center"> {{ $setting->vat }} </td>
                                            <td class="text-center"> <a href="#" class="btn btn-info"> <i class="fa fa-edit"></i></a></td>
                                            <td class="text-center"> <a href="#" class="btn btn-danger"> <i class="fa fa-trash"></i></a> </td>
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

	@if(session('status'))
		<script src="{{ asset('assets/jquery.min.js') }}" type="text/javascript"></script>
		<script>
			var UIToastr = function() {
				return {
					init: function() {
						var t, o = -1,
							e = 0,
							n = function() {
								var t = ["Hello, some notification sample goes here", '<div><input class="form-control input-small" value="textbox"/>&nbsp;<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">Check this out</a></div><div><button type="button" id="okBtn" class="btn blue">Close me</button><button type="button" id="surpriseBtn" class="btn default" style="margin: 0 8px 0 8px">Surprise me</button></div>', "Did you like this one ? :)", "Totally Awesome!!!", "Yeah, this is the Metronic!", "Explore the power of App. Purchase it now!"];
								return o++, o === t.length && (o = 0), t[o]
							};
						$(document).ready(function() {
							var o = "info",
								a = "{{ session('status')}}",
								i = "Admin Notification",
								s = 1000,
								r = 1000,
								l = 5000,
								c = 1000,
								u = 'swing',
								h = 'linear',
								p = 'fadeIn',
								d = 'fadeOut',
								v = e++;
							toastr.options = {
									closeButton: true,
									debug: false,
									positionClass: "toast-top-right",
									onclick: null
								},
								$("#addBehaviorOnToastClick").prop("checked") && (toastr.options.onclick = function() {
									alert("You can perform some custom action after a toast goes away")
								}),
								s.length && (toastr.options.showDuration = s),
								r.length && (toastr.options.hideDuration = r),
								l.length && (toastr.options.timeOut = l),
								c.length && (toastr.options.extendedTimeOut = c),
								u.length && (toastr.options.showEasing = u),
								h.length && (toastr.options.hideEasing = h),
								p.length && (toastr.options.showMethod = p),
								d.length && (toastr.options.hideMethod = d),
								a, $("#toastrOptions").text("Command: toastr[" + o + ']("' + a + (i ? '", "' + i : "") + '")\n\ntoastr.options = ' + JSON.stringify(toastr.options, null, 2));
							var m = toastr[o](a, i);
							$("#clearlasttoast").click(function() { toastr.clear(t) })
						}), $("#cleartoasts").click(function() { toastr.clear() })
					}
				}
				}();

			$(document).ready(function() { UIToastr.init() });
		</script>
	@endif
@endsection