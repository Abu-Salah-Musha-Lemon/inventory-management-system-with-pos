<?php

namespace App\Http\Controllers;

use App\Models\advanceSalary;
use Illuminate\Http\Request;
use DB;

class AdvanceSalaryController extends Controller
{
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salary.add_advance_salary');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = array();
        $data['emp_id']=$request->emp_id;
        $data['month']=$request->month;
       
        $data['year']=$request->year;
        $data['advanced_salary']=$request->advanced_salary;
        // print_r($data);
        $advanceSalaries = DB::table('advance_salary')->insert($data);
        $notification = array(
            'message' => 'Advance Salary added ',
            'alert-type' => 'success'
        );
        return redirect()->route('salary.all-salary')->with($notification);
    }


}
