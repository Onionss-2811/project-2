<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructController extends Controller
{
    public function index(){
        return view('instruct.index');
    }
}
