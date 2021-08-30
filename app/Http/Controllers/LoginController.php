<?php

namespace App\Http\Controllers;

use App\Models\Students;
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
            $request->session()->put('student', $student->id);
            return Redirect::route('login-success');
        } catch (Exception $e) {
           return Redirect::route('login')->with('error', 'Email hoặc mật khẩu không chính xác');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('homepage');
    }
}
