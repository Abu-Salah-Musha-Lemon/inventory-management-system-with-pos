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
        <div class="panel panel-info">
            
            <div class="panel-heading " style="display: flex;justify-content: space-between;">
                    <h3 class="panel-title">Edit Customer</h3>
                    <a class="panel-title fs-4" href="{{URL::to('/all-customer')}}">
                        <i class="bi bi-box-arrow-in-left"style="font-size:24px"></i>
                    </a>
            </div>

            <div class="panel-body">

                <form role="form" action="{{ URL::to('/update-customer'.$editUser->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"value="{{$editUser->name}}">
                                                                    <span class='text-danger'>@error('name'){{ $message }} @enderror</span>
                        </div>
                                                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number"value="{{$editUser->phone}}">
                                                                    <span class='text-danger'>@error('phone'){{ $message }} @enderror</span>
                        </div>

                                                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" id="city"  placeholder="Enter City"value="{{$editUser->city}}">
                                                                    <span class='text-danger'>@error('city'){{ $message }} @enderror</span>
                        </div>

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"value="{{$editUser->email}}">
                                                                    <span class='text-danger'>@error('email'){{ $message }} @enderror</span>
                        </div>

                        
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter address"value="{{$editUser->address}}">
                                                                    <span class='text-danger'>@error('address'){{ $message }} @enderror</span>
                        </div>

                    
                        <div class="form-group">
                        <label>Account Holder Name</label>
                        <input type="text" class="form-control" name="account_holder" id="account_holder" value="{{$editUser->account_holder}}" placeholder="Enter Account Holder Name">
                                                            <span class='text-danger'>@error('account_holder'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Account Number</label>
                        <input type="text" class="form-control" name="account_number" id="account_number" value="{{$editUser->account_number}}" placeholder="Enter Account Number">
                                                            <span class='text-danger'>@error('account_number'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Bank  Name</label>
                        <input type="text" class="form-control" name="bank_name" id="bank_name" value="{{$editUser->bank_name}}" placeholder="Enter Bank Name">
                                                            <span class='text-danger'>@error('bank_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label>Bank Branch Name</label>
                        <input type="text" class="form-control" name="bank_branch" id="bank_branch" value="{{$editUser->bank_branch}}" placeholder="Enter Bank Branch Name">
                                                            <span class='text-danger'>@error('bank_branch'){{ $message }} @enderror</span>
                    </div>

                    <!-- Photo -->
                    <div class="form-group my-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                    <span>Photo</span>
                            </div>
                            <img id="image" style="width: 100px;height: 100px;object: cover;"  src="{{ $editUser->photo}}"/><br />
                            <div class="fileUpload btn btn-success waves-effect waves-light" style="margin:10px 0 10px 0">
                                    <span><i class="ion-upload m-r-5"></i>Upload</span>
                                    <input type="file" name="photo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);" />
                            </div>
                            <input type="hidden" name="old_photo" value="{{ $editUser->photo }}">
                        </div>
                    </div>

                        <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>

                </form>


            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>

@endsection