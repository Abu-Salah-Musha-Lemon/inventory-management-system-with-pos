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
                            <h3 class="panel-title">Add Product</h3>
                            <a class="panel-title fs-4" href="{{URL::to('/all-product')}}">
                                <i class="bi bi-box-arrow-in-left"style="font-size:24px"></i>
                            </a>
                    </div>
                <div class="panel-body">

                        <form role="form" action="{{ URL::to('/insert-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control @error('product_name') @enderror" name="product_name" placeholder="Enter Name" value="{{old('product_name')}}">
																		<span class='text-danger'>@error('product_name'){{ $message }}@enderror</span>
																		
																	</div>

                                <div class="form-group">
                                    @php
                                    $cat =DB::table('categories')->get();
                                    @endphp
                                    <label>Categories Name</label>
																		
                                    <select name="cat_id" id="cat_id"  class="form-control">
                                            <option disabled="" selected="">Select</option>
                                        
                                            @foreach($cat as $row)
                                            <option value="{{$row->id}}">{{$row->categories_name}}</option>
                                            @endforeach
                                            
                                    </select>
																		<span class='text-danger'>@error('cat_id'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    @php
                                    $sup =DB::table('suppliers')->get();
                                    @endphp
                                    <label>Suppliers Name </label>
                                    <select name="sup_id"   class="form-control">
                                            <option disabled="" selected="">Select</option>
                                        
                                            @foreach($sup as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                            
                                    </select>
																		<span class='text-danger'>@error('sup_id'){{ $message }}@enderror</span>

                                </div>

                                <div class="form-group">
                                    <label>Product Code</label>
                                    <input type="text" class="form-control" name="product_code" placeholder="Enter Product Code">
																		<span class='text-danger'>@error('product_code'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product Quantity</label>
                                    <input type="text" class="form-control" name="product_qty" placeholder="Enter Product Quantity">
																		<span class='text-danger'>@error('product_qty'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product Garage</label>
                                    <input type="text" class="form-control" name="product_garage" placeholder="Enter Product Garage">
																		<span class='text-danger'>@error('product_garage'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product Route</label>
                                    <input type="text" class="form-control" name="product_route" placeholder="Enter Product Route">
																		<span class='text-danger'>@error('product_route'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product Buying Date</label>
                                    <input type="date" class="form-control" name="buy_date" placeholder="Enter Product Buying Date">
																		<span class='text-danger'>@error('buy_date'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product Expire Date</label>
                                    <input type="date" class="form-control" name="expire_date" placeholder="Enter Product Expire Date">
																		<span class='text-danger'>@error('expire_date'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product  Buying Prize</label>
                                    <input type="number" class="form-control" name="buying_price" placeholder="Enter Product  Buying Prize">
																		<span class='text-danger'>@error('buying_price'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label>Product  Selling Prize</label>
                                    <input type="number" class="form-control" name="selling_price" placeholder="Enter Product  Selling Prize">
																		<span class='text-danger'>@error('selling_price'){{ $message }}@enderror</span>
                                </div>

                                <!-- Photo -->
                                <div class="form-group my-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span>Photo</span>
                                        </div>
                                        <img id="image" style="width: 100px;height: 100px;object: cover;" /><br />
                                        <input type="file" name="photo" id="photo" accept="image/*" class="upload" class="form-control" onchange="readURL(this);" />
																				<span class='text-danger'>@error('photo'){{ $message }}@enderror</span>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light w-sm m-b-5">Submit</button>

                            </form>


                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div> <!-- col-->
            </div>

@endsection