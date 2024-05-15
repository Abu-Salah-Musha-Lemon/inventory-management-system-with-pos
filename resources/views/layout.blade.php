<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Abu Salah Musha Lemon ">
		<link rel="shortcut icon" href="images/favicon_1.ico">
		<title>Genie</title>


		<!-- Base Css Files -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

		<!-- Font Icons -->
		<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
		<link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


		<!-- animate css -->
		<link href="{{asset('css/animate.css')}}" rel="stylesheet" />

		<!-- Waves-effect -->
		<link href="{{asset('css/waves-effect.css')}}" rel="stylesheet">

		<!-- sweet alerts -->
		<link href="{{asset('assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">

		<!-- Plugins css -->
		<link href="{{asset('assets/modal-effect/css/component.css')}}" rel="stylesheet">

		<!-- Custom Files -->
		<link href="{{asset('css/helper.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

		<script src="{{asset('js/modernizr.min.js')}}"></script>

		<!-- DataTables Buttons CSS -->
		<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css"> -->

		<!-- Include DataTables CSS -->
		<link   href="{{ asset('assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">

		<!-- toaster alert  -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
		
	</head>

		<body class="fixed-left">
			
			<!-- Begin page -->
			<div id="wrapper">
			
					<!-- Top Bar Start -->
					<div class="topbar">
							<!-- LOGO -->
							<div class="topbar-left">
									<div class="text-center">
										@php $setting=DB::table('settings')->get(); @endphp
										@foreach($setting as $row)
											<a href="{{URL::to('/')}}" class="logo">
												<img style="width: 50px; height: 50ox; object-fit: cover;border-radius: 50%;padding: 8px;" 
												src="{{asset($row->logo_path)}}"><span>{{$row->name}}</span>
											</a>
										@endforeach
									</div>
							</div>
							<!-- Button mobile view to collapse sidebar menu -->
							<div class="navbar navbar-default" role="navigation">
									<div class="container">
											<div class="">
														<div class="pull-left">
															<button class="button-menu-mobile open-left">
																	<i class="fa fa-bars"></i>
															</button>
															<span class="clearfix"></span>
													</div>
													
													<ul class="nav navbar-nav navbar-right pull-right">
														
															<li class="hidden-xs">
																	<a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
															</li>

															<li class="dropdown">
																	<a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">
																			<!-- <img src="images/avatar-1.jpg" alt="user-img" class="img-circle">  -->
																			<div>{{ Auth::user()->name }}</div>
																	</a>
																	<ul class="dropdown-menu">
																			<li><a href="{{route('profile.edit')}}"><i class="md md-face-unlock"></i>  {{ __('Profile') }}</a></li>
																			<!-- <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li> -->
																			<form method="POST" action="{{ route('logout') }}">
                            						@csrf
																			<li><a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="md md-settings-power"></i>  {{ __('Log Out') }}</a></li>
																			 </form>
																	</ul>
															</li>
													</ul>
											</div>
											<!--/.nav-collapse -->
									</div>
							</div>
					</div>
					<!-- Top Bar End -->


					<!-- ========== Left Sidebar Start ========== -->
					<style>
						.sidebar-inner {
							max-height: 600px; /* Set the maximum height for the sidebar */
							overflow-y: auto; /* Add a vertical scrollbar if needed */
					}
					</style>
					<div class="left side-menu">
							<div class="sidebar-inner slimscrollleft">
									<div class="user-details">
											<div class="pull-left">
													<img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
											</div>
											<div class="user-info">
													<div class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}
																	<span class="caret"></span></a>
															<ul class="dropdown-menu">
																	<li><a href="{{route('profile.edit')}}"><i class="md md-face-unlock"></i>  {{ __('Profile') }}</a></li>
																	<!-- <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li> -->
																	<form method="POST" action="{{ route('logout') }}">
                            						@csrf
																					<li><a href="route('logout')"
																									onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="md md-settings-power"></i>  {{ __('Log Out') }}</a>
																						</li>
																		</form>
															</ul>
													</div>
													<p class="text-muted m-0">Administrator</p>
											</div>
									</div>
									<!--- Divider -->
									<div id="sidebar-menu">
											<ul>
													<li>
															<a href="{{URL::to('dashboards')}}" class="waves-effect"><i class="ion-arrow-graph-up-right"></i><span> Dashboard </span></a>
													</li>
													<li>
															<a href="{{route('pos')}}" class="waves-effect"><i class="ion-cash"></i><span> POS </span></a>
													</li>


													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="md md-add-shopping-cart"></i> <span> Order </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('pendingOrder')}}">Pending Order</a></li>
																	<li ><a href="{{route('paidOrder')}}">All Order Report</a></li>
																	<!-- <li class="active"><a href="{{route('allExpense')}}">All Expense</a></li> -->
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="fa fa-bar-chart-o"></i> <span> Sales Report </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li class="active"><a href="{{route('allSalesReport')}}">All Sales Report</a></li>
																	<li ><a href="{{route('todaySalesReport')}}">Today Sales Report</a></li>
																	<li ><a href="{{route('monthlySalesReport')}}">Monthly Sales Report</a></li>
																	<li ><a href="{{route('yearlySalesReport')}}">Yearly Sales Report</a></li>
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="bi bi-people"></i> <span> Employee </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li class="active"><a href="{{route('employee.add-employee')}}">Add Employee</a></li>
																	<li><a href="{{route('employee.all-employee')}}">All Employee</a></li>
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="bi bi-people"></i> <span> Customer </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li class="active"><a href="{{route('customer.add-customer')}}">Add Customer</a></li>
																	<li><a href="{{route('customer.all-customer')}}">All Customer</a></li>
															</ul>
													</li>
													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="fa fa-truck"></i> <span> Supplier </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li class="active"><a href="{{route('supplier.add-supplier')}}">Add Supplier</a></li>
																	<li><a href="{{route('supplier.all-supplier')}}">All Suppliers</a></li>
															</ul>
													</li>
													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="md md-account-balance-wallet"></i> <span> Salaries </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li class="active"><a href="{{route('salary.add-advance-salary')}}">Add Advance Salaries</a></li>
																
																	<li><a href="{{route('salary.all-salary')}}">All  Salaries</a></li>
															</ul>
													</li>
													
													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="md md-folder-open"></i> <span> Categories </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('addCategories')}}">Add Categories</a></li>
																	<li class="active"><a href="{{route('allCategories')}}">All Categories</a></li>
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="bi bi-basket"></i> <span> Product </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('addProduct')}}">Add Product</a></li>
																	<li class="active"><a href="{{route('updateProductQtyView')}}">Add Products Qty</a></li>
																	<li class="active"><a href="{{route('allProduct')}}">All Products</a></li>
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="md md-attach-money"></i> 💸<span> Expense </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('addExpense')}}">Add Expense</a></li>
																	<li ><a href="{{route('todayExpense')}}">Today Expense</a></li>
																	<li ><a href="{{route('monthlyExpense')}}">Monthly Expense</a></li>
																	<li ><a href="{{route('yearlyExpense')}}">Yearly Expense</a></li>
																	<li class="active"><a href="{{route('allExpense')}}">All Expense</a></li>
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="fa fa-clock-o"></i> <span> Attendance </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('takeAttendance')}}">Take Attendance</a></li>
																	<li ><a href="{{route('allAttendance')}}">All Attendance</a></li>
																	
																
															</ul>
													</li>

													<li class="has_sub">
															<a href="#" class="waves-effect"><i class="bi bi-gear"></i> <span> Setting </span> <span class="pull-right"><i class="md md-add"></i></span></a>
															<ul class="list-unstyled">
																	<li ><a href="{{route('settings.index')}}"><i class="bi bi-gear"></i> Setting </a></li>
															</ul>
													</li>

											</ul>
											<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
							</div>
					</div>
					<!-- Left Sidebar End --> 



					<!-- ============================================================== -->
					<!-- Start main Content here -->
					<!-- ============================================================== -->                      
					<div class="content-page">
						<div class="content">
							<div class="container">

								<!-- Page-Title -->
								<?php
// Define page title and breadcrumb array based on the current page
$pageTitle = "Welcome"; // Default page title
$breadcrumb = array(
    array("text" => "Moltran", "link" => "#"),
    array("text" => "Mail", "link" => "#"),
    array("text" => "Inbox", "link" => "#")
); // Default breadcrumb array

// Function to output breadcrumb HTML
function renderBreadcrumb($breadcrumb) {
    echo '<ol class="breadcrumb pull-right">';
    foreach ($breadcrumb as $item) {
        echo '<li><a href="' . $item['link'] . '">' . $item['text'] . '</a></li>';
    }
    echo '</ol>';
}
?>

								<div class="row">
										<div class="col-sm-12">
												<h4 class="pull-left page-title"><?php echo $pageTitle; ?></h4>
												<ol class="breadcrumb pull-right">
														<li><a href="#"> <?php renderBreadcrumb($breadcrumb); ?></a></li>
														<!-- <li><a href="#">Mail</a></li>
														<li class="active">Inbox</li> -->
												</ol>
										</div>
								</div>

									<!-- Content goes here -->
									@yield('main')

							</div>
						</div>
				</div>
					<!-- ============================================================== -->
					<!-- End main content here -->
					<!-- ============================================================== -->


					

			</div>
			<!-- END wrapper -->


	
			<script>
					var resizefunc = [];
			</script>

			<!-- jQuery -->
			<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<!-- jQuery UI -->
			<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
			<script src="{{asset('js/jquery-ui-1.10.1.custom.min.js')}}"></script>

			<!-- Bootstrap -->
			<script src="{{asset('js/bootstrap.min.js')}}"></script>

			<!-- Waves -->
			<script src="{{asset('js/waves.js')}}"></script>

			<!-- Wow -->
			<script src="{{asset('js/wow.min.js')}}"></script>

			<!-- Nice Scroll -->
			<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

			<!-- Scroll To -->
			<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>

			<!-- Chat -->
			<script src="{{asset('assets/chat/moment-2.2.1.js')}}"></script>

			<!-- jQuery Sparkline -->
			<script src="{{asset('assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

			<!-- Detect Mobile -->
			<script src="{{asset('assets/jquery-detectmobile/detect.js')}}"></script>

			<!-- FastClick -->
			<script src="{{asset('assets/fastclick/fastclick.js')}}"></script>

			<!-- Slimscroll -->
			<script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

			<!-- BlockUI -->
			<script src="{{asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>

			<!-- Notifications -->
			<script src="{{asset('assets/notifications/notify.min.js')}}"></script>
			<script src="{{asset('assets/notifications/notify-metro.js')}}"></script>
			<script src="{{asset('assets/notifications/notifications.js')}}"></script>

			<!-- Sweet Alerts -->
			<script src="{{asset('assets/sweet-alert/sweet-alert.min.js')}}"></script>
			<script src="{{asset('assets/sweet-alert/sweet-alert.init.js')}}"></script>

			<!-- Flot Chart -->
			<script src="{{asset('assets/flot-chart/jquery.flot.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.time.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.resize.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.pie.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.selection.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.stack.js')}}"></script>
			<script src="{{asset('assets/flot-chart/jquery.flot.crosshair.js')}}"></script>


			<!-- Counter-Up -->
			<script src="{{asset('assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
			<script src="{{asset('assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>

			<!-- DataTables -->
			<script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
			<script src="{{asset('assets/datatables/dataTables.bootstrap.js')}}"></script>

			<!-- Toastr for notifications -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
			<!-- Multi select -->

			<script type="text/javascript" src="{{asset('assets/colorpicker/bootstrap-colorpicker.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/jquery-multi-select/jquery.multi-select.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/jquery-multi-select/jquery.quicksearch.js')}}"></script>
			<script type="text/javascript"src="{{asset('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/spinner/spinner.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/select2/select2.min.js')}}" ></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-tagsinput/1.3.6/jquery.tagsinput.min.js"></script>

			<script type="text/javascript" src="{{asset('assets/tagsinput/jquery.tagsinput.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/toggles/toggles.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/timepicker/bootstrap-timepicker.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/timepicker/bootstrap-datepicker.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/colorpicker/bootstrap-colorpicker.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/jquery-multi-select/jquery.multi-select.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/jquery-multi-select/jquery.quicksearch.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" ></script>
			<script type="text/javascript" src="{{asset('assets/spinner/spinner.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/select2/select2.min.js')}}"></script>

			<!-- Modal-Effect -->
			<script src="{{asset('assets/modal-effect/js/classie.js')}}"></script>
			<script src="{{asset('assets/modal-effect/js/modalEffects.js')}}"></script>
			<script>
            jQuery(document).ready(function() {
                    
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();


                //multiselect start

                $('#my_multi_select1').multiSelect();
                $('#my_multi_select2').multiSelect({
                    selectableOptgroup: true
                });

                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                //spinner start
                $('#spinner1').spinner();
                $('#spinner2').spinner({disabled: true});
                $('#spinner3').spinner({value:0, min: 0, max: 10});
                $('#spinner4').spinner({value:0, step: 5, min: 0, max: 200});
                //spinner end

                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });
            });
      </script>

			<!-- Custom Scripts -->
			<script src="{{asset('js/jquery.app.js')}}"></script>
			<script src="{{asset('js/jquery.chat.js')}}"></script>
			<script src="{{asset('js/jquery.todo.js')}}"></script>

			<!-- Other scripts... -->
			<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
				<script>
				$(document).ready(function(){
						var currentUrl = window.location.href;

						// Loop through each link and check if its href matches the current URL
						$('ul.list-unstyled li a').each(function() {
								var linkUrl = $(this).attr('href');
								if (currentUrl.indexOf(linkUrl) !== -1) {
										$(this).parent().addClass('active'); // Add 'active' class to the parent <li> element
								}
						});
				});
				</script>


			<script type="text/javascript">
				$(document).ready(function () {
						$('#datatable').dataTable();
				}); 
			</script>

			<script>
					/* Counter Up */
					jQuery(document).ready(function($) {
							$('.counter').counterUp({
									delay: 100,
									time: 1200
							});
					});
			</script>

			<script>
					/* Image Preview */
					function readURL(input) {
							if (input.files && input.files[0]) {
									var reader = new FileReader();
									reader.onload = function (e) {
											$('#image').attr('src', e.target.result).width(80).height(80);
									};
									reader.readAsDataURL(input.files[0]);
							}
					}
			</script>

			<script>
					/* Toastr Notifications */
					$(document).ready(function () {
							@if(Session::has('message'))
								var type = "{{ Session::get('alert-type', 'info') }}";
								switch(type){
									case 'info':
											toastr.info("{{ Session::get('message') }}");
											break;
									case 'success':
											toastr.success("{{ Session::get('message') }}");
											break;
									case 'warning':
											toastr.warning("{{ Session::get('message') }}");
											break;
									case 'error':
											toastr.error("{{ Session::get('message') }}");
											break;
									}
							@endif
					});
		</script>


  </body>
</html>