@extends('layout')
@section('main')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
				<div class="panel-heading"style="display: flex;justify-content: space-between;align-items: center;">
						<h3 class="panel-title text-white">All Categories</h3>
						<a class="panel-title fs-4" href="{{URL::to('/add-product-categories')}}">
								<i class="bi bi-bag-plus-fill"style="font-size:24px;color:white;font-weight:800;"></i>
						</a>
					</div>
					<div class="panel-body">

						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<table id="dataTable" class="table table-striped table-bordered">
										<thead>
												<tr>
														<th>Categories Name</th>
														<th>Action</th>
												</tr>
										</thead>
												@foreach($view as $row)
												<tr>
													<td>{{$row->categories_name}}</td>
													<td>
														<style>
															.fsc{
																font-size:20px;
																margin: 0;
																padding:0;
															}
														</style>
														<a href="{{URL::to('/edit-product-categories/'.$row->id)}}" class="btn btn-info btn-custom waves-effect waves-light m-b-5 fs-2"><i class="bi bi-pencil-square  fsc"></i></a>
														<a href="{{URL::to('/delete-product-categories/'.$row->id)}}" class="btn btn-danger btn-custom waves-effect waves-light m-b-5 fs-2"id="delete"><i class="bi bi-trash3 fsc"></i></a>
													</td>
												</tr>
												@endforeach
								
										<tbody>
								</table>

							</div>
						</div><!-- End Row -->
					</div>
				</div>
			</div>
			
		</div> 
@endsection