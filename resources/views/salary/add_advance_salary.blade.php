@extends('layout')
@section('main')
<style>
	label{
		width:auto;
	}
</style>



	<div class="row "style="display:flex;justify-content:center;align-item:center;">
					<!-- Basic example -->
				<div class=" col-md-6 col-lg-8 col-xl-10">
					<div class="panel panel-primary">
						<div class="panel-heading " style="display: flex;justify-content: space-between;">
								<h3 class="panel-title">Add Advance Salary</h3>
								<a class="panel-title fs-4" href="{{URL::to('/all-salary')}}"><i class="bi bi-box-arrow-in-left"style="font-size:24px"></i></a>
						</div>
					
						<div class="panel-body">
								<form role="form" action="{{ route('advanceSalary') }}" method="post" enctype="multipart/form-data">
										@csrf
			
										<div class="form-group">
														@php
														$emp =DB::table('employees')->get();
														@endphp
												<label>Employees Name </label>
												<select name="emp_id" id="emp_id"  class="form-control">
														<option disabled="" selected="">Select</option>
													
														@foreach($emp as $row)
														<option value="{{$row->id}}">{{$row->name}}</option>
														@endforeach
														
												</select>
										</div>

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

										<div class="form-group">
											<label>Advance Salary</label>
											<input type="text" class="form-control" name="advanced_salary" id="advanced_salary"
													placeholder="Enter The Year">
										</div>

									
										<button type="submit" class="btn">
												Submit
										</button>
								</form>
						</div>
						<!-- panel-body -->
					</div>
					<!-- panel -->
				</div>
				<!-- col-->
	</div>



 @endsection


