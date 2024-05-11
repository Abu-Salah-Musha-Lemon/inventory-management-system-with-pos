@extends('layout')
@section('main')
<style>
	label{
		width:auto;
	}
</style>
<div id="setting" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
			<form action="{{URL::to('edit-setting')}}" method="get" enctype="multipart/form-data">
				
					<div class="modal-content"> 
							<div class="modal-header"> 
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
									<h4 class="modal-title">Setting</h4> 
							</div> 
							<div class="modal-body"> 
									<div class="row"> 
										@foreach($settings as $row)
											<div class="col-md-12"> 
													<div class="form-group"> 
															<label for="field-1" class="control-label">Name</label> 
															<input type="text" class="form-control" name='name' value="{{$row->name}}"> 
													</div> 
											</div> 
									</div> 
									<div class="row"> 
											<div class="col-md-12"> 
														<!-- Photo -->
													<div class="form-group my-2">
																	<div class="input-group mb-3">
																			<div class="input-group-prepend">
																				<span>Photo</span>
																			</div>
																			<img id="image" style="width: 100px;height: 100px;object: cover;" /><br />
																			<input type="file" name="photo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);" />
																			<input type="hidden" name="old_photo" value="{{ $row->logo }}">
																	</div>
													</div>
											</div> 

									</div> 
							</div>
							@endforeach
							<div class="modal-footer"> 
									<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button> 
									<button type="submit" class="btn btn-info waves-effect waves-light">Save</button> 
							</div> 
					</div>
			</form>
    </div>
</div><!-- /.modal -->

<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="pull-left page-title">Inbox</h4>
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
        <div class="panel panel-success">
            <div class="panel-heading " style="display: flex;justify-content: space-between;">
                    <h3 class="panel-title">Setting</h3>
                    <a class="panel-title fs-4" href="">
                        <i class="bi bi-box-arrow-in-left"style="font-size:24px;color:white;"></i>
                    </a>
                    <button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#setting">Responsive Modal</button>
            </div>
            <div class="panel-body">
                @foreach($settings as $row)
                                        @if($row->id ==1)
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"value="{{$row->name}}" disabled>
                    </div>
                    <!-- Photo -->
                    <div class="form-group my-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                    <span>Photo</span>
                            </div>
                            <img id="image" style="width: 100px;height: 100px;object: cover;"  src="{{ $row->logo}}"/><br />
                            
                        </div>
                  @endif
                @endforeach
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>


@endsection