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
            <h4 class="pull-left page-title">welcome</h4>
        </div>
    </div>

    <div class="row"style="display:flex;justify-content:center;align-item:center;">
        <!-- Basic example -->
        <div class="col-xl-10 col-lg-8 col-md-6 col-12 m-auto">
            <div class="panel panel-info">
                

            <div class="panel-heading " style="display: flex;justify-content: space-between;">
                        <h3 class="panel-title text-white">Change Name & Logo</h3>
                        <a class="panel-title fs-4" href="{{URL::to('/view-setting')}}">
                            <i class="bi bi-box-arrow-in-left"style="font-size:24px;color:white;"></i>
                        </a>
                </div>

                <div class="panel-body">

                <form role="form" action="{{ URL::to('update-setting'.$editUser->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"value="{{$editUser->name}}">
                            <span class='text-danger'>@error('name'){{ $message }} @enderror</span>
                        </div>

                    <!-- Photo -->
                        <div class="form-group my-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                        <span>Photo</span>
                                </div>
                                <img id="image" style="width: 100px;height: 100px;object: cover;"  src="{{ $editUser->photo}}"/><br />
                                <input type="file" name="photo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);" />
                                <input type="hidden" name="old_photo" value="{{ $editUser->photo }}">
                            </div>
                        </div>

                        <button type="submit" class="btn">Update</button>

                    </form>


                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
</div>

@endsection