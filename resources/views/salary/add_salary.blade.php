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
							<h4 class="pull-left page-title">Welcome</h4>
							<ol class="breadcrumb pull-right">
									<li><a href="#">Moltran</a></li>
									<li><a href="#">Mail</a></li>
									<li class="active">Inbox</li>
							</ol>
					</div>
			</div>

			<div class="row "style="display:flex;justify-content:center;align-item:center;">
							<!-- Basic example -->
						<div class=" col-md-6 col-lg-8 col-xl-10">
							<div class="panel panel-primary">
								<div class="panel-heading " style="display: flex;justify-content: space-between;">
										<h3 class="panel-title">Pay due Salary /  Salary</h3>
										<a class="panel-title fs-4" href="{{URL::to('/all-salary')}}"><i class="bi bi-box-arrow-in-left"style="font-size:24px"></i></a>
								</div>
							
								<div class="panel-body">
										<form role="form" action="{{route('storeSalary')}}"  method="post" enctype="multipart/form-data">
												@csrf
											
												@foreach ($Salary as $row)
												<div class="form-group">
														<label>Employees Name </label>
														<p  class="form-control">{{$row->name}}</p>
												</div>
												<input type="hidden" name="emp_id" value="{{$row->emp_id}}">
												@if($row->advanced_salary == '')
													<div class="form-group">
																		
																<label>Month </label>
																<select name="month" id="month"  class="form-control">
																		<option disabled="" selected="">Select</option>
																		<option value="January">January</option>
																		<option value="February">February</option>
																		<option value="March">March</option>
																		<option value="April">April</option>
																		<option value="May">May</option>
																		<option value="Jun">Jun</option>
																		<option value="July">July</option>
																		<option value="August">August</option>
																		<option value="September">September</option>
																		<option value="October">October</option>
																		<option value="November">November</option>
																		<option value="December">December</option>
																		
																		
																</select>
														</div>
														<div class="form-group">
															<label>Year</label>
															<input type="text" class="form-control" name="year" id="year"
																	placeholder="Enter The Year">
														</div>
											@else
													<div class="form-group">
														<label>Month</label>
														<p class="form-control">{{$row->month}}</p>
														<input type="hidden" name="month" value="{{$row->month}}">
													</div>
													<div class="form-group">
														<label>Year</label>
														<p class="form-control" >{{$row->year}}</p>
														<input type="hidden" name="year" value="{{$row->year}}">
													</div>

													<input type="hidden" name="emp_id" value="{{$row->emp_id}}">
													<input type="hidden" name="advanced_salary" value="{{$row->advanced_salary}}">
											@endif
													

												<div class="form-group">
													<label>Salary</label>
														<p class="form-control">{{$row->salary}}</p>
												</div>
												<div class="form-group">
													<label>Advance Salary</label>
													<p class="form-control">{{$row->advanced_salary}}</p>
												</div>

												<div class="form-group">
													<label>Due Salary</label>
													<p class="form-control">{{$row->salary - $row->advanced_salary}}</p>
												</div>
												<div class="form-group">
													<label>Paid Salary</label>
													<input type="text" class="form-control" name="paid_salary" id="paid_salary"
															placeholder="Enter The paid salary ">
															<span class='text-danger'>@error('paid_salary')@message()@enderror</span>
												</div>>
												

												<input type="hidden" name="status" value="success">

												

												<button type="submit" class="btn">
														Submit
												</button>
												@endforeach
										</form>
								</div>
								<!-- panel-body -->
							</div>
							<!-- panel -->
						</div>
						<!-- col-->
			</div>
		
</div>

 @endsection


