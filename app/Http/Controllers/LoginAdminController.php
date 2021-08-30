<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginAdminController extends Controller
{
    public function login_admin(){
        return view('login-admin.login');
    }


    public function login_admin_prosess(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');
        try {
            $admin = Admin::where('email', $email)->where('password', $password)->firstOrFail();
            $request->session()->put('admin', $admin->id);
            return Redirect::route('view-admin');
        } catch (Exception $e) {
           return Redirect::route('login-admin')->with('error', 'Email hoặc mật khẩu không chính xác');
        }
    }

    public function logout_admin(Request $request)
    {
        $request->session()->flush();
        return Redirect::route('login-admin');
    }
}
