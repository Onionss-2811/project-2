<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\ListTypeTest;
use App\Models\TypeTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    public function index(){
        $subject = ListTypeTest::all();
        return view('subject.index',[
            'subject' => $subject,
        ]);
    }

    public function create(){
        $typetest = TypeTest::all();
        return view('subject.create',[
            'typetest' => $typetest,
        ]);
    }

    public function store(Request $request){
       $subject = new Subject();
        $subject->short_name = $request->get('short_name');
        $subject->name = $request->get('name');
        $subject->type_test = $request->get('type_test');
        $subject->save();
        return Redirect::route('subject.index');
    }

    public function edit($id){
        $typetest = TypeTest::all();
        $subject = ListTypeTest::find($id);
        return view('subject.edit', [
            'subject'=>$subject,
            'typetest' => $typetest,
        ]);
    }

    public function update(Request $request,$id){

        $subject = Subject::find($id);
        $subject->short_name = $request->get('short_name');
        $subject->name = $request->get('name');
        $subject->type_test = $request->get('type_test');
        $subject->save();
        return redirect()->route('subject.index');
    }

    public function destroy($id){
        Subject::find($id)->delete();
        return redirect()->route('subject.index');
    }
}
