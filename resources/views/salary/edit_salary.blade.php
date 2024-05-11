@extends('layout')
@section('main')

<div class="container">

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="pull-left page-title">welcome</h4>
    </div>
</div>

<div class="row">
    <!-- Basic example -->
    <div class="col-xl-6 col-lg-6 col-md-8 col-12 m-auto">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Edit Salaries</h3>
            </div>
            <div class="panel-body">

                <form role="form" action="{{ URL::to('update-salary'.$editUser->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="Enter Name"value="{{ $editUser->name }}">
                    </div>

                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Enter email"value="{{ $editUser->email }}">
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone"
                            placeholder="Enter Phone Number"value="{{ $editUser->phone }}">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            placeholder="Enter address"value="{{ $editUser->address }}">
                    </div>

                    <div class="form-group">
                        <label>Type</label><br>
                        <select class="form-control" name="type" id="type">
                            <option value="{{ $editUser->type }}">{{ $editUser->type }}</option>
                            <!-- Add other options as needed -->
                        </select>
                    </div>

                    <div class="form-group">
                        <label>shopeName</label>
                        <input type="text" class="form-control" name="shopeName" id="shopeName"
                            value="{{ $editUser->shopeName }}" placeholder="Enter shopeName">
                    </div>

                    <div class="form-group">
                        <label>Account Holder Name</label>
                        <input type="text" class="form-control" name="account_holder" id="account_holder"
                            value="{{ $editUser->account_holder }}" placeholder="Enter Account Holder Name">
                    </div>
                    <div class="form-group">
                        <label>Account Number</label>
                        <input type="text" class="form-control" name="account_number" id="account_number"
                            value="{{ $editUser->account_number }}" placeholder="Enter Account Number">
                    </div>
                    <div class="form-group">
                        <label>Bank Name</label>
                        <input type="text" class="form-control" name="bank_name" id="bank_name"
                            value="{{ $editUser->bank_name }}" placeholder="Enter Bank Name">
                    </div>
                    <div class="form-group">
                        <label>Bank Branch Name</label>
                        <input type="text" class="form-control" name="bank_branch" id="bank_branch"
                            value="{{ $editUser->bank_branch }}" placeholder="Enter Bank Branch Name">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="city" id="city"
                            placeholder="Enter City"value="{{ $editUser->city }}">
                    </div>

                    <div class="form-group">
                        <img id="image"src="{{ $editUser->photo}}"style="width:100px;height:100px;object:cover;" /><br>
                        <label>Photo</label>
                        <input type="file" name="photo" id="photo" accept="image/*" class="upload"
                            onchange="readURL(this);">
                                                                    </div>
                                                                    <img type="hidden" id="old_photo" name='old_photo' value="{{ $editUser->photo }}"/><br>
                                                                    <input type="hidden" name="photo" value="{{ $editUser->photo }}">

                    <button type="submit" class="btn">Update</button>

                </form>


            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div>
    @endsection
