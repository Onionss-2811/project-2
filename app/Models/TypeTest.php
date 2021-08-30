<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTest extends Model
{
    use HasFactory;
    protected $table = 'type_test';//ten bang

    public $primaryKey = 'id';//khoa chinh
}
