<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // echo"<pre>";
        // var_dump($row);
        // print_r($row);
        return new Employee([
            'name'        => $row['name'],
            'email'       => $row['email'], 
            'phone'       => $row['phone'], 
            'address'     => $row['address'],
            'experience'  => $row['experience'],
            'salary'      => $row['salary'],
            'vacation'    => $row['vacation'],
            'city'        => $row['city'],
            'nid'         => $row['nid'],
            'photo'       => $row['photo'],
            // 'password'  => Hash::make($row[10]),
        ]);
    }
}
