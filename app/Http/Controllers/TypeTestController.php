<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTest;

class TypeTestController extends Controller
{
    public function index(){
        $typetest = TypeTest::all();
        return view([
            'typetest' => $typetest,
        ]);
    }
}
