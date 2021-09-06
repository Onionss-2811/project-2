<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use App\Models\Majors;
use App\Models\ListGrade;
use Illuminate\Http\Request;

use DB;

class CourseController extends Controller
{
    public function index(){
        $course = Course::all();
        return view('course.index', [
            'course' => $course,
        ]);
    }

    public function create(){
        return view('course.create');
    }

    public function store(Request $request){
        $name = $request->get('name');
        $course = new Course();
        $course->name = $name;
        $course->save();
       return redirect()->route('course.index');
    }

    public function show($id){
        $major = Majors::all();
        $course = Course::all();
        $listGrade = ListGrade::where('id_course', $id)->get();
        return view('course.listGrade', [
            'major' => $major,
            'course' => $course,
            'listGrade'=>$listGrade
        ]);
    }

    public function edit($id){
        $course = Course::find($id);
        return view('course.edit', [
            'course'=>$course
        ]);
    }

    public function update(Request $request, $id){
        $course = Course::find($id);
        $course->name = $request->get('name');
        $course->save();
        return redirect()->route('course.index');
    }

    public function destroy($id){
        Course::find($id)->delete();
        return redirect()->route('course.index');
    }
}
