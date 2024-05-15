@extends('layout')
@section('main')
<style>
	label{
		width:auto;
	}
</style>


				<div class="row "style="display:flex;justify-content:center;align-item:center;">
							<!-- Basic example -->
							<div class=" col-md-6 col-lg-6 col-xl-10">
									<div class="panel panel-success">
											<div class="panel-heading " style="display: flex;justify-content: space-between;">
															<h3 class="panel-title text-white">Setting</h3>
											</div>
											<div class="panel-body">
													<!-- Input system  -->

													<form action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
															@csrf
													
															<div class="row"> 
																	<div class="col-md-12"> 
																			<div class="form-group"> 
																							<label for="field-1" class="control-label">Name</label> 
																							<input type="text" class="form-control" name='name' > 
																			</div>
																			<span class="text-danger">@error('name'){{$message}}@enderror</span> 
																	</div> 
															</div>
															

															<div class="row"> 
																	<div class="col-md-12"> 
																			<!-- Photo -->
																			<div class="form-group my-2">
																					<div class="input-group mb-3">
																									<div class="input-group-prepend">
																											<span>Logo</span>
																									</div>
																									<img id="image" style="width: 100px;height: 100px;object: cover; " /><br />
																									<!-- <input type="file" name="logo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);" /> -->
																									<input type="hidden" name="logo">
																									<div class="fileUpload btn btn-purple waves-effect waves-light" style="margin-top:10px">
																										<span><i class="ion-upload m-r-5"></i>Upload</span>
																										<input type="file" name="logo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);">
																								</div>
																					</div>
																					<span class="text-danger">@error('name'){{$message}}@enderror</span>
																	</div>
															</div> 

															<button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
													</form>
											</div><!-- panel-body -->
									</div> <!-- panel -->
								</div> <!-- col-->
					</div>

					<div class="row ">
							<!-- View setting  -->
							<div class=" col-md-6 col-lg-12 col-xl-12">
								<div class="panel panel-success">
										
										<div class="panel-body">
												
											@php $view = DB::table('settings')->get(); @endphp
											@foreach($view as $row)
													<div class="row"> 
															<div class="col-md-12"> 
																	<div class="form-group"> 
																					<label for="field-1" class="control-label">Name</label> 
																					<input type="text" class="form-control" name='name' value='{{$row->name}}'disabled> 
																	</div> 
																	
															</div> 
													</div>
													

													<div class="row"> 
															<div class="col-md-12"> 
																	<!-- Photo -->
																	<div class="form-group my-2">
																			<div class="input-group mb-3">
																							<div class="input-group-prepend">
																									<span>Logo</span>
																							</div>
																							<img id="image" style="width: 100px; height: 100px; object-fit: cover;" src="{{ asset($row->logo_path) }}" />

																			</div>
																			
															</div>
													</div> 

											@endforeach		

										</div>
								</div>


@endsection