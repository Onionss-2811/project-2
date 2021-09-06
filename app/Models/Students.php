<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';//ten bang

    protected $fillable = ['code','name', 'gender', 'date_birth', 'id_grade', 'email', 'password'];

    public $primaryKey = 'id';//khoa chinh
}
