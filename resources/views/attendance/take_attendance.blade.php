@extends('layout')
@section('main')

<style>
	label{
		width:auto;
	}
</style>


	<div class="row "style="display:flex;justify-content:center;align-item:center;">
				<!-- Basic example -->
		<div class=" col-md-6 col-lg-10 col-xl-10">
			<div class="panel panel-info">
					<div class="panel-heading " style="display: flex;justify-content: space-between;">
									<h3 class="panel-title">Take Attendance</h3>
									{{date('d/m/y')}}
									<a class="panel-title fs-4" href="{{URL::to('/all-attendance')}}">
											<i class="bi bi-box-arrow-in-left"style="font-size:24px"></i>
									</a>
					</div>
					<div class="panel-body">

						<form action="{{ route('attendanceEmployee') }}" method="post" enctype="multipart/form-data">
																		@csrf
							<table id="datatable" class="table table-striped table-bordered">
											<thead>
													<tr>
															<th>Name</th>
															<th>Phone</th>
															<th>Image</th>    
															<th>Action</th>    
															
													</tr>
											</thead>

														
													@foreach($employees as $row)                             
											<tbody>

													<tr>
															<td>{{$row->name}}</td>
															<td>{{$row->phone}}</td>
															
															<td>
																	<img src="{{$row->photo}}" style="width:50px;height:50px;object:cover;">
															</td>
															
															<td>
																	<input type="radio" name="attendance[{{$row->id}}]"  id="attendance" value="Present" placeholder="Absent" required> Present <br>
																	<input type="radio" name="attendance[{{$row->id}}]"  id="attendance" value="Absent" placeholder="Present" required>Absent
																	
																	<input type="hidden" name="user_id" value="{{$row->id}}">
																	<input type="hidden" name="att_date" value="{{date('d/m/y')}}">
																	<input type="hidden" name="att_year" value="{{date('Y')}}">
															</td>
													</tr>
													
											</tbody>
											@endforeach
									</table>
									<button type="submit" class="btn btn-success">Submit</button>
							</form>

					</div><!-- panel-body -->
			</div> <!-- panel -->
	</div> <!-- col-->
</div>
@endsection