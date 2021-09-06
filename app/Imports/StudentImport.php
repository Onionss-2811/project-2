<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'code' => $row['code'],
            'name' => $row['name'],
            'gender' => $row['gender'],
            'date_birth' => $row['date_birth'],
            'id_grade' => $row['id_grade'],
            'email' => $row['email'],
            'password' => $row['password'],
        ]);
    }
}
