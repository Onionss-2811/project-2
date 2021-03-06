<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ListMarkController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\InstructController;
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
    Route::get('/index', [LoginController::class, 'show'])->name("login-success");
    //

    Route::get('/list_mark/{id}',[LoginController::class, 'view_mark']);
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

    Route::get('/admin/show', [AdminController::class, 'show'])->name('adminShow');

    Route::resource('majors', MajorsController::class);
    Route::resource('course', CourseController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('grade', GradeController::class);
    Route::resource('student', StudentController::class);
    Route::post('/student/create', [StudentController::class, 'importFile'])->name('StudentImportFile');

    Route::resource('mark', MarkController::class);
    Route::post('/mark/create', [MarkController::class, 'importFile'])->name('MarkImportFile');
    Route::post('/mark/search', [MarkController::class, 'search'])->name('SearchStudent');

    Route::get('/list_mark', [ListMarkController::class, 'index'])->name('list_mark');
    Route::post('/list_mark/search', [ListMarkController::class, 'search'])->name('ListMarkSearch');
    Route::post('/list_mark/search_grade', [ListMarkController::class, 'search_grade'])->name('ListMarkGradeSearch');
    Route::get('/list_mark/mark_student/{id}',[ListMarkController::class, 'view_mark']);
    Route::get('/list_mark/mark_grade/{id}',[ListMarkController::class, 'view_mark_grade']);

    Route::get('/instruct', [InstructController::class, 'index'])->name('instruct');
});




