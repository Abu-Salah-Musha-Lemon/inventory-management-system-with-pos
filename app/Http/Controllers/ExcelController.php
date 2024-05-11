<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function export() 
    {
        return Excel::download(new EmployeeExport, 'users.xlsx');
    }

		public function import(Request $request) 
		{
				Excel::import(new EmployeeImport, $request->file('employee'));
				
				return redirect('/all-employee')->with('success', 'All good!');
		}

}
