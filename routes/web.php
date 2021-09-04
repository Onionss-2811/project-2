<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckLoginAdmin;
use Illuminate\Support\Facades\Route;

// home page
Route::get('/', function (){return view('homepage');})->name('homepage');

// login students
Route::get('/login', [LoginController::class, 'login'])->name("login");
Route::post('/login-process', [LoginController::class, 'loginProsess'])->name("login-process");
Route::get('/logout', [LoginController::class, 'logout'])->name("logout");

//
Route::middleware([CheckLogin::class])->group(function (){
    // login-success
    Route::get('/index', function (){return view('student-view.index');})->name("login-success");
});

// login admin
Route::get('/login_admin', [LoginAdminController::class, 'login_admin'])->name("login-admin");
Route::post('/login_admin_process', [LoginAdminController::class, 'login_admin_prosess'])->name("login-admin-process");
Route::get('/logout_admin', [LoginAdminController::class, 'logout_admin'])->name("logout-admin");
//
Route::middleware([CheckLoginAdmin::class])->group(function (){
    // login-success
    Route::get('/view-admin', function (){return view('admin.index');})->name('view-admin');
    // process
    Route::resource('admin', AdminController::class);
    Route::resource('majors', MajorsController::class);
    Route::resource('course', CourseController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('grade', GradeController::class);
    Route::resource('student', StudentController::class);
    Route::post('/student/create', [StudentController::class, 'importFile'])->name('StudentImportFile');


    Route::resource('mark', MarkController::class);
    Route::post('/mark/import_file', [MarkController::class, 'importFile'])->name('importFile');
});




