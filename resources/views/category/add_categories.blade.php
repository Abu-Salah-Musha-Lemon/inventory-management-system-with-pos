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
                    <div class="panel panel-info">
                    <div class="panel-heading " style="display: flex;justify-content: space-between;">
                            <h3 class="panel-title text-white">Add Categories</h3>
                            <a class="panel-title fs-4" href="{{URL::to('/all-product-categories')}}">
                                <i class="bi bi-box-arrow-in-left"style="font-size:24px"></i>
                            </a>
                    </div>
                        <div class="panel-body">

                        <form role="form" action="{{ URL::to('/insert-product-categories') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Categories name</label>
                                    <input type="text" class="form-control" name="categories_name" placeholder="Enter Name Categories"value="{{old('categories_name')}}">
                                </div>
                                <span class='text-danger'>@error('categories_name'){{ $message }} @enderror</span>
								<br>
                                <button type="submit" class="btn btn-success">Submit</button>

                            </form>


                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->
            </div>

@endsection