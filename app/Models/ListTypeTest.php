<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListTypeTest extends Model
{
    use HasFactory;
    protected $table = 'list_type_test';//ten bang

    public $primaryKey = 'id';//khoa chinh
}
