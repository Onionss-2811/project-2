<?php

namespace App\Imports;

use App\Models\Mark;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MarkImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mark([
            'id_student' => $row['id_student'],
            'id_subject' => $row['id_subject'],
            'type_test' => $row['type_test'],
            'number_of_test' => $row['number_of_test'],
            'mark' => $row['mark'],
            'id_admin' => $row['id_admin'],
        ]);
    }
}


