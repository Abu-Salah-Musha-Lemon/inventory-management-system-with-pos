<?php

namespace App\Http\Controllers;

use App\Models\Exports;
use Illuminate\Http\Request;
use Excel;
class ExportsController extends Controller
{
    public function monthlySalesReport() 
    {
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }


}
