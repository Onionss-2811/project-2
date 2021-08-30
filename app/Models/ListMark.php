<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListMark extends Model
{
    use HasFactory;
    protected $table = 'list_mark';//ten bang

    public $primaryKey = 'id';//khoa chinh
}
