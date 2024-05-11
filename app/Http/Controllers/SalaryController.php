<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advanceSalaries = DB::table('employees')
            ->leftJoin('advance_salary', 'advance_salary.emp_id', '=', 'employees.id')
            ->leftJoin('salaries', 'salaries.emp_id', '=', 'employees.id')
            ->select(
                'employees.id as emp_id',
                'employees.name',
                'employees.phone',
                'employees.photo',
                'employees.salary',
                'advance_salary.advanced_salary',
                'salaries.status'
            )
            ->get();
    
        return view('salary.all_salary', compact('advanceSalaries'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $Salary = DB::table('employees')
        ->leftJoin('advance_salary', 'advance_salary.emp_id', '=', 'employees.id')
        ->leftJoin('salaries', 'salaries.emp_id', '=', 'employees.id')
        ->select('employees.id as emp_id', 'employees.name', 'employees.phone', 'employees.photo', 'employees.salary','salaries.status', 'advance_salary.*')
        ->where('employees.id',$id)
        ->get();
        // echo"<pre>"; print_r($Salary);
        return view('salary.add_salary',compact('Salary'));
        
        
    }

    /**
     * Store a newly created resource in storage.
     */

    public function storeSalary(Request $request)
    {
        // Validate the form data if necessary
        $request->validate([
            'paid_salary' => 'required|numeric',
        ]);
    
        // Retrieve form data
        // $name = $request->name;
        // $emp_id = $request->emp_id;
        // $month = $request->month;
        // $year = $request->year;
        // $paid_salary = $request->paid_salary;
    
        // Calculate due salary
        // $salaryDetails = DB::table('employees')
        //     ->leftJoin('advance_salary', 'advance_salary.emp_id', '=', 'employees.id')
        //     ->select('employees.salary', 'advance_salary.advanced_salary')
        //     ->where('employees.id', $emp_id)
        //     ->where('advance_salary.month', $month)
        //     ->where('advance_salary.year', $year)
        //     ->first();
    
        //     if ($salaryDetails) {
        //         $due_salary = $salaryDetails->salary - $salaryDetails->advanced_salary;
        //     } else {
        //         // Handle the case where no salary details are found
        //         // For example, set $due_salary to a default value or show an error message
        //         $due_salary = 0; // Set a default value
        //     }
    
        // Insert data into the database
        // DB::table('salaries')->insert([
        //     'emp_id' => $emp_id,
        //     'month' => $month,
        //     'year' => $year,
        //     'paid_salary' => $paid_salary,
        //     'due_salary' => $due_salary,
        // ]);

        $data = array();
        $data['emp_id'] = $request->emp_id;
        $data['month'] = $request->month;
        $data['year'] = $request->year;
        // $data['status'] = $request->status; // Corrected spelling to 'status'
        $data['advanced_salary'] = $request->advanced_salary;
        $data['paid_salary'] = $request->paid_salary;
        echo "<pre>";
        print_r($data);
        // $data['due_salary'] = $request->due_salary; // Corrected variable name
        // $SalaryStore = DB::table('salaries')->insert($data); // Corrected method call to `table`
        
    
        // Redirect the user to a relevant page
        // return redirect('all-salary');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
