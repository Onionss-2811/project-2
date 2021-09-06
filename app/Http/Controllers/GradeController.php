<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListGrade;
use App\Models\ListGradeStudent;
use App\Models\Students;
use App\Models\Gender;
use App\Models\Grade;
use App\Models\Course;
use App\Models\Majors;
use Illuminate\Support\Facades\Redirect;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = ListGrade::all();
        return view('grade.index',[
            'grade' => $grade,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors = Majors::all();
        $courses = Course::all();
        return view('grade.create',[
            'majors' => $majors,
            'courses' => $courses,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade->name = $request->get('name');
        $grade->id_course = $request->get('id_course');
        $grade->id_majors = $request->get('id_majors');
        $grade->save();
        return Redirect::route('grade.index');
    }


    public function show($id){
        $grade = Grade::all();
        $gender = Gender::all();
        $listGradeStudent = ListGradeStudent::where('id_grade', $id)->get();
        return view('grade.listStudent', [
            'grade' => $grade,
            'gender' => $gender,
            'listGradeStudent'=>$listGradeStudent
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $majors = Majors::all();
        $courses = Course::all();
        $grade = ListGrade::find($id);
        return view('grade.edit', [
            'grade'=>$grade,
            'majors' => $majors,
            'courses' => $courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $grade = Grade::find($id);
        $grade->name = $request->get('name');
        $grade->id_course = $request->get('id_course');
        $grade->id_majors = $request->get('id_majors');
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grade::find($id)->delete();
        return redirect()->route('grade.index');
    }
}
