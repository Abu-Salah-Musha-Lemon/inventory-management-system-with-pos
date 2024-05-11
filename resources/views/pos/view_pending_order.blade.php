
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
                    <h4 class="pull-left page-title">Invoice</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Invoice</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <h4>Invoice</h4>
                        </div> -->
                        <div class="panel-body" id='invoice'>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 class="text-right">Stoke Genie</h4>
                                    
                                </div>
                                <div class="pull-right">
                                    <h4>Invoice # <br>
                                        @if($order->order_status=='success')
                                            <strong>{{$order->order_date}}</strong>
                                        @else
                                            <strong>{{date('d D M Y')}}</strong>
                                        @endif
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    
                                    <div class="pull-left m-t-30">
                                        <address>
                                            Name: <strong class="text-uppercase" style="text-transform:sentence">{{$order->name}}</strong>
                                            <Address>Address: {{$order->address}}</Address>
                                            City: <span class="text-uppercase">{{$order->city}} </span> <br>
                                            <abbr title="Phone">Phone:</abbr> {{$order->phone}}
                                            </address>
                                    </div>
                                    
                                    <div class="pull-right m-t-30">
                                        <p><strong>Order Date: </strong>{{$order->order_date}}</p>
                                        <p class="m-t-10"><strong>Order Status: </strong> 
                                        @if($order->order_status=='success')
                                            <span class="label label-success ">Success</span>
                                        @else
                                            <span class="label label-pink">Pending</span>
                                        
                                        @endif
                                        </p>
                                        <p class="m-t-10"><strong>Order ID: </strong> {{$order->id}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-h-50"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table m-t-30">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item</th>
                                                    
                                                    <th>Quantity</th>
                                                    <th>Unit Cost</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $sl=1;
                                                @endphp
                                                @foreach($orderDetails as $row)
                                                <tr>
                                                    <td>{{$sl++}}</td>
                                                    <td>{{$row->product_name}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->unitcost}}</td>
                                                    <td>{{$row->quantity*$row->unitcost}}</td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">

                                <div class="col-md-3">
                                    <p class="text-right"><b>Payment Method:</b> {{$order->payment_status}} ৳</p>
                                    <p class="text-right"><b>Paid:</b> {{$order->pay}} ৳</p>
                                    <p class="text-right"><b>Due:</b> {{$order->due}} ৳</p>
                                </div>
                                <div class="col-md-3 col-md-offset-9">
                                    <p class="text-right"><b>Sub-total:</b> {{$order->sub_total}} ৳</p>
                                    <!-- <p class="text-right">Discout: 12.9%</p> -->
                                    <p class="text-right">Total Qty: {{$order->total_products}}</p>
                                    <p class="text-right">Tax: {{$order->vat}}</p>
                                    <hr>
                                    <h3 class="text-right">Total : {{$order->total}}</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print">
                                <div class="pull-right">
                                    @if($order->order_status=='success')
                                    <button type="submit"class="btn btn-inverse waves-effect waves-light" id="printPi" ><i class="fa fa-print"></i></button>
                                    @else
                                    <a href="{{URL::to('/paid/'.$order->id)}}" class="btn btn-primary waves-effect waves-light">Submit</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



        </div> <!-- container -->

        <script>
            // Custom print function
            function printElement(elementId) {
                let element = document.getElementById(elementId);
                if (element) {
                    let body = document.body.innerHTML;
                    let content = element.innerHTML;
                    document.body.innerHTML = content;
                    window.print();
                    document.body.innerHTML = body;
                } else {
                    console.error("Element with ID '" + elementId + "' not found.");
                }
            }


 document.getElementById('printPi').addEventListener('click', function() {
                    printElement('invoice'); // Change 'element1' to the ID of the element you want to print
                });
            
               
           
        </script>

@endsection