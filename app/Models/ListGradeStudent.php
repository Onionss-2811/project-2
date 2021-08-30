<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListGradeStudent extends Model
{
    use HasFactory;
    protected $table = 'list_grade_student';//ten bang

    public $primaryKey = 'id';//khoa chinh
}
