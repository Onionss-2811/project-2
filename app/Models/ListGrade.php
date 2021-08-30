<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListGrade extends Model
{
    use HasFactory;
    protected $table = 'list_grade';//ten bang

    public $primaryKey = 'id';//khoa chinh
}
