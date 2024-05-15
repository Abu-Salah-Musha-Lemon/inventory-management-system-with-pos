@extends('layout')
@section('main')



            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-success">
                        
                    <div class="panel-heading " style="display: flex;justify-content: space-between;">
                            <h3 class="panel-title text-white">All Product</h3>
                            <a class="panel-title fs-4" href="{{URL::to('/add-product')}}">
                            <i class="bi bi-bag-plus"style="font-size:24px;color:white;font-weight:800;"></i>
                            </a>
                    </div>
                        <div class="panel-body">
                            <div class="row">
   
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Code</th>
                                                <th>Quantity</th>
                                                <th>Image</th>
                                                <th>Selling Price</th>
                                                <th>Garage</th>
                                                <th>Route</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            @foreach($product as $row)
                                            <tr>
                                                <td>{{$row->product_name}}</td>
                                                <td>{{$row->product_code}}</td>
                                                <td>{{$row->product_qty}}</td>
                                                <td>
                                                <img src="{{ asset($row->product_image) }}" style="width:50px;height:50px;object:cover;">
                                                </td>
                                                <td>{{$row->selling_price}}</td>
                                                <td>{{$row->product_garage}}</td>
                                                <td>{{$row->product_route}}</td>
                                                <td>
                                                    <a href="{{URL::to('/edit-product/'.$row->id)}}" class="btn btn-info btn-sm waves-effect waves-light  m-b-5">Edit</a>
                                                    <a href="{{URL::to('/view-product/'.$row->id)}}" class="btn btn-purple btn-sm waves-effect waves-light m-b-5">view</a>
                                                    <a href="{{URL::to('/delete-product/'.$row->id)}}" class="btn btn-danger btn-sm waves-effect waves-light  m-b-5"id="delete">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    
                                        <tbody>
                                           
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>


@endsection