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
        <div class="panel panel-primary">
            <div class="panel-heading " style="display: flex;justify-content: space-between;">
                    <h3 class="panel-title">Add Customer</h3>
                    <a class="panel-title fs-4" href="{{URL::to('/all-customer')}}">
                        <i class="bi bi-box-arrow-in-left"style="font-size:24px;color:white"></i>
                    </a>
            </div>
            <div class="panel-body">

            <form role="form" action="{{ route('addCustomer') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control @error('name ') is-invalid @enderror" name="name" placeholder="Enter Name" value="{{old('name')}}">
                    <span class='text-danger'>@error('name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control @error('phone ') is-invalid @enderror" name="phone" placeholder="Enter Phone Number" value="{{old('phone')}}">
                        <span class='text-danger'>@error('phone'){{ $message }} @enderror</span>
                </div>
                
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Enter City"value="{{old('city')}}">
                    <span class='text-danger'>@error('city'){{ $message }} @enderror</span>
                                        </div>
                                        
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email" value="{{old('email')}}">
                    <span class='text-danger'>@error('email'){{ $message }} @enderror</span>
                </div>


                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Enter address" value="{{old('address')}}">
                    <span class='text-danger'>@error('address'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>shopeName</label>
                    <input type="text" class="form-control @error('shopeName') is-invalid @enderror" name="shopeName" placeholder="Enter shopeName" value="{{old('shopeName')}}">
                    <span class='text-danger'>@error('shopeName'){{ $message }} @enderror</span>
                </div>

                
                <div class="form-group">
                    <label>Account Holder Name</label>
                    <input type="text" class="form-control @error('account_holder') is-invalid @enderror" name="account_holder" placeholder="Enter Account Holder Name" value="{{old('account_holder')}}">
                    <span class='text-danger'>@error('account_holder'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Account Number</label>
                    <input type="text" class="form-control @error('account_number') is-invalid @enderror" name="account_number" placeholder="Enter Account Number" value="{{old('account_number')}}">
                    <span class='text-danger'>@error('account_number'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Bank  Name</label>
                    <input type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" placeholder="Enter Bank Name" value="{{old('bank_name')}}">
                    <span class='text-danger'>@error('bank_name'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Bank Branch Name</label>
                    <input type="text" class="form-control @error('bank_branch') is-invalid @enderror" name="bank_branch" placeholder="Enter Bank Branch Name" value="{{old('bank_branch')}}">
                    <span class='text-danger'>@error('bank_branch'){{ $message }} @enderror</span>
                </div>
                <!-- Photo -->
                <div class="form-group my-2">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span>Photo</span>
                        </div>
                        <img id="image" style="width: 100px;height: 100px;object: cover;" /><br />
                        <input type="file" name="photo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);"value="{{old('photo')}}" />
                </div>

                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>

            </form>


            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
    
</div>

@endsection