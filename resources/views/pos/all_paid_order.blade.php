@extends('layout')
@section('main')



    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-success text-info">
                
                <div class="panel-heading " style="display: flex;justify-content: space-between;">
                        <div class="div">
                        <h3 class="panel-title">All Paid Order </h3>
                        <!-- <h3 class="btn btn-info"><a class="panel-title fs-4" href="{{URL::to('/today-paid')}}" value="Today">Today Paid Details</h3>
                        <h3 class="btn btn-warning"><a class="panel-title fs-4" href="{{URL::to('/monthly-paid')}}" value="Today">Monthly Paid Details</h3>
                        <h3 class="btn btn-danger"><a class="panel-title fs-4" href="" value="Today">Yearly Paid Details</h3> -->
                        
                        
                        </div>
                        <a class=" fs-4" href="{{URL::to('/pos')}}" value="This Month">
                            <i class="bi bi-bag-plus-fill"style="font-size:24px;color:white;font-weight:800;"></i>
                        </a>
                </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>sl</th>
                                        <th>Name</th>
                                        <th>Order Date</th>
                                        <th>Total Products</th>
                                        <!-- <th>Quantity</th> -->
                                        <th>Payment Status</th>
                                        <th>Due</th>
                                        <th>Order Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php 
                                $sl =1;
                                @endphp
                                    @foreach($success->reverse() as $row)
                                    <tr>
                                        <td>{{$sl++}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->order_date}}</td>
                                        <td>{{$row->total_products}}</td>
                                        

                                        <td>{{$row->pay}}</td>
                                        <td>{{$row->due}}</td>
                                        <td><span class="label label-success">{{$row->order_status}}</span></td>
                                        
                                        <td>
                                            <a href="{{URL::to('/view-order/'.$row->id)}}" class="btn btn-info btn-sm waves-effect waves-light w-sm m-b-5">view</a>
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