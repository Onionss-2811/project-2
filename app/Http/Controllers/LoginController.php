<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\ListGradeStudent;
use App\Models\ListMark;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }


    public function loginProsess(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $student = Students::where('email', $email)->where('password', $password)->firstOrFail();
            // dd($student);
            $request->session()->put('student', $student->id);
            return Redirect::route('login-success');
            } catch (Exception $e) {
           return Redirect::route('login')->with('error', 'Email hoặc mật khẩu không chính xác');
        }
    }

    public function show(Request $request){
        $id_student = $request->session()->get('student');
        $student = ListGradeStudent::find($id_student);
        // dd($student);
        return view('student-view.index', [
            'students' => $student,
        ]);
    }

    public function view_mark($id){
        $listMark = listMark::where('id_student', $id)->get();
        return view('student-view.list_mark', [
            'listMark'=>$listMark
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('homepage');
    }
}
