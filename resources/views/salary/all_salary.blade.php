@extends('layout')
@section('main')


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            <div class="panel-heading " style="display: flex;justify-content: space-between;">
                    <h3 class="panel-title">All Salary </h3>
            </div>
                <div class="panel-body">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>id </th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Image</th>
                                        <th>Salary</th>
                                        <th>Salary Status </th>
                                        <th>Advance Salary</th>
                                        <th>Due Salary </th>
                                        <th>Action </th>
                                        
                                    </tr>
                                </thead>                

                                    <tbody>
                                        @foreach($advanceSalaries as $row)
                                        <tr>
                                            <td>{{$row->emp_id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->phone}}</td>
                                                <td><img src="{{$row->photo}}" style="width:50px;height:50px;object:cover;"></td>
                                                <td>{{$row->salary}}</td>
                                                <td>{{$row->advanced_salary}}</td>
                                                @if($row->status =='success')
                                                <td> <span class="label label-success">Paid</span></td>
                                                @else
                                                <td> <span class="label label-danger">due</span></td>
                                                @endif
                                                <td>{{$row->salary - $row->advanced_salary}}</td>
                                                <td>
                                                        <a href="{{URL::to('/add-salary/'.$row->emp_id)}}" class="btn btn-sm btn-info">Payment</a>
                                                        <a href="{{URL::to('/edit-supplier/'.$row->emp_id)}}" class="btn btn-sm btn-info">view</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                </tbody>

                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>


@endsection