<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $table = 'marks';//ten bang

    protected $fillable = ['id_student', 'id_subject', 'type_test', 'number_of_test', 'mark', 'id_admin'];

    public $primaryKey = 'id';//khoa chinh
}
