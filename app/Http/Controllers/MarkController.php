<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\ListMark;
use App\Models\Mark;
use App\Models\Students;
use App\Models\ListGradeStudent;
use App\Models\Subject;
use App\Models\TypeTest;
use App\Models\Admin;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use Excel;

use App\Imports\MarkImport;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class MarkController extends Controller
{
    public function index()
    {
        $mark = ListMark::paginate(5);
        return view('mark.index',[
            'marks' => $mark,
        ]);
    }

    public function create(Request $request)
    {
        $subject = Subject::all();
        $type_test = TypeTest::where('id','!=',3)->get();
        $code = $request->get('code');
        $student = ListGradeStudent::where('code', $code)->get();
        return view('mark.create_mark_student', [
            'student'=>$student,
            'subject' => $subject,
            'type_test' => $type_test,
        ]);
    }

    public function search(Request $request){

    }

    public function store(Request $request)
    {
        $mark = new Mark();
        $mark->id_student = $request->get('id_student');
        $mark->id_subject = $request->get('id_subject');
        $mark->type_test = $request->get('type_test');
        $mark->number_of_test = $request->get('number_of_test');
        $mark->mark = $request->get('mark');
        $mark->id_admin = $request->get('id_admin');
        $mark->save();
        return Redirect::route('mark.index');
    }

    public function importFile(Request $request)
    {
        Excel::import(new MarkImport, $request->file);
        return Redirect::route('mark.index');
    }

    public function edit($id)
    {
        $subject = Subject::all();
        $student = Students::all();
        $type_test = TypeTest::where('id','!=',3)->get();
        $admin = Admin::all();
        $mark = ListMark::find($id);
        return view('mark.edit', [
            'student'=>$student,
            'subject' => $subject,
            'type_test' => $type_test,
            'mark' => $mark,
            'admin' => $admin,
        ]);
    }

    public function update(Request $request, $id)
    {
        //

        $mark = Mark::find($id);
        $mark->id_student = $request->get('id_student');
        $mark->id_subject = $request->get('id_subject');
        $mark->type_test = $request->get('type_test');
        $mark->number_of_test = $request->get('number_of_test');
        $mark->mark = $request->get('mark');
        $mark->id_admin = $request->get('id_admin');
        $mark->save();
        return redirect()->route('mark.index');
    }

}
