<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\ListRole;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    // public function login(){
    //     return view('admin.login');
    // }

    public function index(){
        return view('admin.index');
    }
    public function show(){
        $admin = ListRole::all();
        return view('admin.show',[
            'admin' => $admin,
        ]);
    }

    public function create(){
        $role = Role::all();
        return view('admin.create',[
            'role' => $role,
        ]);
    }

    public function store(Request $request){
       $admin = new Admin();
       $admin->role = $request->get('role');
       $admin->name = $request->get('name');
       $admin->email = $request->get('email');
       $admin->password = $request->get('password');
       $admin->save();
       return Redirect::route('admin.index');


    }

    public function edit($id){
        $role = Role::all();
        $admin = ListRole::find($id);
        return view('admin.edit', [
            'admin'=>$admin,
            'role' => $role,
        ]);
    }

    public function update(Request $request,$id){
        $admin = Admin::find($id);
        $admin->role = $request->get('role');
        $admin->name = $request->get('name');
        $admin->email = $request->get('email');
        $admin->password = $request->get('password');
        $admin->save();
        return redirect()->route('admin.index');
    }

    public function destroy($id){
        Admin::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
