@extends('layout')
@section('main')



	<div class="row">
			<div class="col-md-12">
					<div class="panel panel-success">
					<div class="panel-heading " style="display: flex;justify-content: space-between;">
									<h3 class="panel-title">All Supplier</h3>
									<a class="panel-title fs-4" href="{{URL::to('/add-supplier')}}">
											<i class="bi bi-person-add"style="font-size:24px;color:white;font-weight:800;"></i>
									</a>
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
																			<th>Shope Name</th>
																			<th>City</th>
																			<th>Action</th>
																	</tr>
															</thead>

													
															<tbody>
																	@foreach($supplier as $row)
																	<tr>
																			<td>{{$row->name}}</td>
																			<td>{{$row->phone}}</td>
																			<td>{{$row->address}}</td>
																			<td>
																					<img src="{{$row->photo}}" style="width:50px;height:50px;object:cover;">
																			</td>
																			<td>{{$row->shopeName}}</td>
																			<td>{{$row->city}}</td>
																			<td>
																				<a href="{{URL::to('/view-supplier'.$row->id)}}" class="btn btn-sm btn-primary btn-custom waves-effect waves-light">view</a>
																					<a href="{{URL::to('/edit-supplier'.$row->id)}}" class="btn btn-sm btn-info btn-custom waves-effect waves-light">Edit</a>
																					<a href="{{URL::to('/delete-supplier'.$row->id)}}" class="btn btn-sm btn-danger btn-custom waves-effect waves-light"id="delete">Delete</a>
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