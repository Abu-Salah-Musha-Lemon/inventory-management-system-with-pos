@extends('layout')
@section('main')


	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-success">
				<div class="panel-heading"style="display: flex;justify-content: space-between;align-items: center;">
					<h3 class="panel-title text-white">All Customer</h3>
					<a class="panel-title fs-4" href="{{URL::to('/add-customer')}}">
							<i class="bi bi-person-add"style="font-size:24px;color:white;font-weight:800;"></i>
					</a>
				</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="datatable" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>Image</th>
													<th>Name</th>
													<th>Phone</th>
													<th>City</th>
													
												
													<th>Action</th>
													
											</tr>
										</thead>

							
										<tbody>
												@foreach($customer as $row)
												<tr>
														<td>
																<img src="{{$row->photo}}" style="width:50px;height:50px;object:cover;">
														</td>
														<td>{{$row->name}}</td>
														<td>{{$row->phone}}</td>
														<td>{{$row->city}}</td>
														
													
														<td>
															<a href="{{URL::to('/view-customer'.$row->id)}}" class="btn btn-custom  btn-primary"><i class="bi bi-eye fs-2"></i></a>
															<a href="{{URL::to('/edit-customer'.$row->id)}}" class="btn btn-custom btn-info"><i class="bi bi-pencil-square fs-2"></i></a>
															<a href="{{URL::to('/delete-customer'.$row->id)}}" class="btn btn-custom  btn-danger"id="sa-warning"><i class="bi bi-trash fs-2"></i></a>
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

	</div> <!-- End Row -->



@endsection