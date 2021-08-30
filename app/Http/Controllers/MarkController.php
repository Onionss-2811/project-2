<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\ListMark;
use App\Models\Mark;
use App\Models\Students;
use App\Models\Subject;
use App\Models\TypeTest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        return view('mark.index');
    }

    public function create()
    {
        return view('mark.create');
    }
}
