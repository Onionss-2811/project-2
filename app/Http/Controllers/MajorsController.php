<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    public function index(){
        $majors = Majors::all();
        return view('majors.index', [
            'majors' => $majors,
        ]);
    }

    public function create(){
        return view('majors.create');
    }

    public function store(Request $request){
        $name = $request->get('name');
        $majors = new Majors();
        $majors->name = $name;
        $majors->save();
       return redirect()->route('majors.index');
    }

    public function edit($id){
        $majors = Majors::find($id);
        return view('majors.edit', [
            'majors'=>$majors
        ]);

    }

    public function update(Request $request, $id){
        $majors = Majors::find($id);
        $majors->name = $request->get('name');
        $majors->save();
        return redirect()->route('majors.index');
    }

    public function destroy($id){
        Majors::find($id)->delete();
        return redirect()->route('majors.index');
    }
}
