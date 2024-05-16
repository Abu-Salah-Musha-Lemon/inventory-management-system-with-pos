<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Abu Salah Musha Lemon ">
		<link rel="shortcut icon" href="images/favicon_1.ico">
		<title>Genie</title>

        <link rel="shortcut icon" href="images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <!-- Base Css Files -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('css/waves-effect.css')}}" rel="stylesheet">

        <!-- Custom Files -->
        <link href="{{asset('css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
				<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

				<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

				<link   href="{{ asset('assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
				<!-- Include DataTables CSS -->
				<link   href="{{ asset('assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">

        <script src="js/modernizr.min.js"></script>
				<style>
        /* Custom class to hide scrollbar when not scrolling */
        .hide-scrollbar {
            overflow: hidden;
        }
    </style>
    </head>



    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
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

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="#" alt="" class="thumb-md img-circle">
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
                                     onclick="event.preventDefault();this.closest('form').submit();"><i class="md md-settings-power"></i>  {{ __('Log Out') }}</a>
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
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Blank Page</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active">Blank Page</li>
                                </ol>
                            </div>
                        </div>

                    
						@yield('main');


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © Moltran.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                   
                    </ul>  
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/waves.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}" ></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/jquery-blockui/jquery.blockUI.js')}}"></script>
        <!-- DataTables -->
        <script src="{{asset('assets/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/datatables/dataTables.bootstrap.js')}}"></script>

        <!-- Toastr for notifications -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('js/jquery.app.js')}}"></script>
				<script>
       window.addEventListener("scroll", function() {
            console.log("Scroll event detected!");
            var scrollBar = document.body;
            // Check if scrolling is happening
            if (scrollBar.scrollTop > 0) {
                console.log("Scrolling detected!");
                // Add the class to hide scrollbar
                scrollBar.classList.add("hide-scrollbar");
            } else {
                // Remove the class to show scrollbar
                scrollBar.classList.remove("hide-scrollbar");
            }})
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
									case 'danger':
											toastr.warning("{{ Session::get('message') }}");
											break;
									case 'error':
											toastr.error("{{ Session::get('message') }}");
											break;
									}
							@endif
					});
		</script>
		<script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>
	
	</body>
</html>