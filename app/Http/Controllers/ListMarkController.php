<?php

namespace App\Http\Controllers;

use App\Models\ListMark;
use App\Models\ListGrade;
use App\Models\Mark;
use App\Models\ListGradeStudent;
use Illuminate\Http\Request;

class ListMarkController extends Controller
{
    public function index(){
        return view('list_mark.index');
    }

    public function search(Request $request){
        $code = $request->get('code');
        $student = ListGradeStudent::where('code', $code)->get();
        return view('list_mark.student', [
            'student'=>$student,
        ]);
    }

    public function search_grade(Request $request){
        $name = $request->get('name');
        $grade = ListGrade::where('name', $name)->get();
        return view('list_mark.grade', [
            'grade'=>$grade,
        ]);
    }

    public function view_mark($id){
        $listMark = listMark::where('id_student', $id)->get();
        return view('list_mark.list_mark', [
            'listMark'=>$listMark
        ]);
    }

    public function view_mark_grade($id){
        $listMarkGrade = listMark::where('id_grade', $id)->get();
        return view('list_mark.list_mark_grade', [
            'listMarkGrade'=>$listMarkGrade
        ]);
    }
}
