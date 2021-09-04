<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

use App\Models\ListMark;
use App\Models\Mark;
use App\Models\Students;
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
        $mark = ListMark::all();
        return view('mark.index',[
            'mark' => $mark,
        ]);
    }

    public function create()
    {
        return view('mark.create');
    }

    public function show()
    {
        return view('mark.form_import');
    }

    public function importFile(Request $request)
    {
        Excel::import(new MarkImport, $request->file);
        return "Imported Successfuly";
    }

    public function edit($id)
    {
        $subject = Subject::all();
        $student = Students::all();
        $type_test = TypeTest::all();
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
