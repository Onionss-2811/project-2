<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
