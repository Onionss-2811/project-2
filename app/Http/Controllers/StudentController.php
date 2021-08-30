<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListGradeStudent;
use App\Models\Students;
use App\Models\Grade;
use App\Models\Gender;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index()
    {
        $student = ListGradeStudent::all();
        return view('student.index',[
            'student' => $student,
        ]);
    }

    public function create()
    {
        $grade = Grade::all();
        $gender = Gender::all();
        return view('student.create',[
            'grade' => $grade,
            'gender' => $gender,
        ]);
    }

    public function store(Request $request)
    {
        $student = new Students();
        $student->name = $request->get('name');
        $student->gender = $request->get('gender');
        $student->date_birth = $request->get('date_birth');
        $student->id_grade = $request->get('id_grade');
        $student->email = $request->get('email');
        $student->password = $request->get('password');
        $student->save();
        return Redirect::route('student.index');
    }

    public function edit($id)
    {
        $grade = Grade::all();
        $gender = Gender::all();
        $student = ListGradeStudent::find($id);
        return view('student.edit', [
            'student'=>$student,
            'grade' => $grade,
            'gender' => $gender,
        ]);
    }

    public function update(Request $request, $id)
    {
        //

        $student = Students::find($id);
        $student->name = $request->get('name');
        $student->gender = $request->get('gender');
        $student->date_birth = $request->get('date_birth');
        $student->id_grade = $request->get('id_grade');
        $student->email = $request->get('email');
        $student->password = $request->get('password');
        $student->save();
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        Students::find($id)->delete();
        return redirect()->route('student.index');
    }
}
