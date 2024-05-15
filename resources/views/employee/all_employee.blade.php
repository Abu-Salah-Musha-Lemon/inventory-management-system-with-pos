@extends('layout')
@section('main')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				
			<div class="panel-heading " style="display: flex;justify-content: space-between;">
					<h3 class="panel-title text-white">All Employees</h3>
					<div class="div" style="display: flex; justify-content: space-between;">
							<a class="panel-title fs-4" href="{{ URL::to('/add-employee') }}">
									<i class="bi bi-person-add" style="font-size:24px;color:white;font-weight:800;"></i>
							</a>
							<div class="export import float-right" style="display: flex; justify-content: space-between;">
									<a class="panel-title fs-4" href="{{ route('export') }}">
											<i class="bi bi-cloud-download" style="font-size:24px;color:white;font-weight:800;"></i>
									</a>
									<form action="{{ route('import') }}" method="post" enctype='multipart/form-data'>
											@csrf
											<div class="fileUpload btn btn-info waves-effect waves-light">
													<span style="font-size:20px"><i class="bi bi-cloud-upload"></i></span>
													<input type="file" class="upload"name="employee">
											</div>
											
									</form>
							</div>
					</div>

			</div>
				<div class="panel-body">
					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Name</th>
										<th>Phone</th>
										<th>Address</th>
										<th>Image</th>
										<th>Salary</th>
										<th>Action</th>
									</tr>
								</thead>

							
								<tbody>
									@foreach($employees as $row)
									<tr>
										<td>{{$row->name}}</td>
										<td>{{$row->phone}}</td>
										<td>{{$row->address}}</td>
										<td>
											<img src="{{$row->photo}}" style="width:50px;height:50px;object:cover;">
										</td>
										<td>{{$row->salary}}</td>
										<td style="display: flex;gap: 4px;">
											<a href="{{URL::to('/edit-employee'.$row->id)}}"class="btn btn-sm btn-info btn-custom waves-effect waves-light m-b-5 p-b-0"><i class="bi bi-pencil-square"style="font-size: 25px;"></i></a>
											<a href="{{URL::to('/view-employee'.$row->id)}}"class="btn btn-sm btn-primary btn-custom waves-effect waves-light m-b-5 p-b-0"><i class="bi bi-cast"style="font-size: 25px;"></i></a>
											<a href="{{URL::to('/delete-employee'.$row->id)}}"class="btn btn-sm btn-danger btn-custom waves-effect waves-light m-b-5 p-b-0"><i class="bi bi-trash3"style="font-size: 25px;"></i></a>
											
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
							
					</div>
				</div>
			</div>
			
		</div>
	</div>


@endsection