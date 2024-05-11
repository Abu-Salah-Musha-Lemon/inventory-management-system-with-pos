<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShowAutoSize;

class EmployeeExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function headings(): array
    // {
    //     return [`name`, `email`, `phone`, `address`, `experience`, `photo`, `salary`, `vacation`, `city`, `nid`]; // Add your column names here
    // }
    public function collection()
    {
        return Employee::all();
    }
//     public function actions(Request $request)
// {
//     return [
//         (new DownloadExcel)->only(`name`, `email`, `phone`, `address`, `experience`, 
//         `photo`, `salary`, `vacation`, `city`, `nid`),
//     ];
// }
    public function headings():array {
        return [`name`, `email`, `phone`, `address`, `experience`, `photo`, `salary`, `vacation`, `city`, `nid`];
    }
}
