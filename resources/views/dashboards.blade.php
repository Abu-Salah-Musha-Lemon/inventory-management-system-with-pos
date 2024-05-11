
@extends('layout')
@section('main')

<style>
	label{
		width:auto;
	}
</style>

<div class="container">

	<!-- Page-Title -->
	<div class="row">
			<div class="col-sm-12">
					<h4 class="pull-left page-title">welcome</h4>
					<ol class="breadcrumb pull-right">
							<li><a href="#">Moltran</a></li>
							<li><a href="#">Mail</a></li>
							<li class="active">Inbox</li>
					</ol>
			</div>
	</div>

		@php
		$day=date("d-m-y");
		$month=date("M");
		$year=date("Y");
		$totalTodaySale = DB::table('order')->where('order_date',$day)->sum('pay');
		$totalMonthSale = DB::table('order')->where('order_month',$month)->sum('pay');
		$totalYearlySale = DB::table('order')->where('order_year',$year)->sum('pay');
		$totalTodayVat = DB::table('order')->where('order_date',$day)->sum('vat');
		$totalMonthVat = DB::table('order')->where('order_month',$month)->sum('vat');
		$totalYearlyVat = DB::table('order')->where('order_year',$year)->sum('vat');
		$totalOrder = DB::table('order')->sum('total_products');
		$totalProductUnitcost = DB::table('order_details')->sum('unitcost');
		$totalProduct = DB::table('order_details')->sum('unitcost');
	
		@endphp





<div class="row">

	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalTodaySale}}</span>
							Total Sales
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Todays Sales</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	
	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="bi bi-calendar-check"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalMonthSale}}</span>
							Monthly Total Sales
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Monthly Sales</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	
	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalYearlySale}}</span>
							Annual  Sales
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Annual Sales</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	
	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalYearlySale -$totalYearlyVat}}</span>
							Annual  Sales Profit
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Annual Sales Profit</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalTodaySale -$totalTodayVat}}</span>
							Daily  Sales Profit
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Daily Sales Profit</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>

	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalProductUnitcost}}</span>
							unit Cost
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Sales</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>
	@php
	$totalProductStore = DB::table('products')->sum('product_qty');
	@endphp
	<div class="col-md-6 col-sm-6 col-lg-3">
			<div class="mini-stat clearfix bx-shadow">
					<span class="mini-stat-icon bg-danger"><i class="bi bi-cart2"></i></span>
					<div class="mini-stat-info text-right text-muted">
							<span class="counter">{{$totalProductStore}}</span>
							Store Total products
					</div>
					<div class="tiles-progress">
							<div class="m-t-20">
									<h5 class="text-uppercase">Store Total products</h5>
									<div class="progress progress-sm m-0">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
											</div>
									</div>
							</div>
					</div>
			</div>
	</div>


</div>

<div class="row">
    <div class="col-lg-8">
        <div class="portlet"><!-- /portlet heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark text-uppercase">
                    Website Stats
                </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet1" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="website-stats" style="position: relative;height: 320px;"></div>
                            <div class="row text-center m-t-30">
                                <div class="col-sm-4">
                                    <h4 class="counter">86,956</h4>
                                    <small class="text-muted"> Weekly Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="counter">86,69</h4>
                                    <small class="text-muted">Monthly Report</small>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="counter">948,16</h4>
                                    <small class="text-muted">Yearly Report</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /Portlet -->
    </div> <!-- end col -->

    <div class="col-lg-4">
        <div class="portlet"><!-- /portlet heading -->
            <div class="portlet-heading">
                <h3 class="portlet-title text-dark text-uppercase">
                    Website Stats
                </h3>
                <div class="portlet-widgets">
                    <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                    <span class="divider"></span>
                    <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                    <span class="divider"></span>
                    <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="portlet2" class="panel-collapse collapse in">
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="pie-chart">
                                <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                                </div>
                            </div>

                            <div class="row text-center m-t-30">
                                <div class="col-sm-6">
                                    <h4 class="counter">86,956</h4>
                                    <small class="text-muted"> Weekly Report</small>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="counter">86,69</h4>
                                    <small class="text-muted">Monthly Report</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> <!-- /Portlet -->
</div> <!-- end col -->


</div>

</div>


@endsection