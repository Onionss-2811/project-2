<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListGradeStudent;
use App\Models\Students;
use App\Models\Grade;
use App\Models\Gender;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\CursorPaginator;

use Excel;

use App\Imports\StudentImport;

class StudentController extends Controller
{
    public function index()
    {
        $students = ListGradeStudent::paginate(5);
        return view('student.index',[
            'students' => $students,
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
        $student->code = $request->get('code');
        $student->name = $request->get('name');
        $student->gender = $request->get('gender');
        $student->date_birth = $request->get('date_birth');
        $student->id_grade = $request->get('id_grade');
        $student->email = $request->get('email');
        $student->password = $request->get('password');
        $student->save();
        return Redirect::route('student.index');
    }

    public function importFile(Request $request)
    {
        Excel::import(new StudentImport, $request->file);
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
        $student->code = $request->get('code');
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
