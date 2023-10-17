<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// These are basic web pages routes
Route::get('/', [FrontendController::class, 'index']);
Route::get('/about_gts_learning', [FrontendController::class, 'about_gts_learning']);
Route::get('/user_profile', [FrontendController::class, 'user_profile']);
Route::get('/contact_gts_learning', [FrontendController::class, 'contact_gts_learning']);
Route::view('/dashboard', 'dashboard.dashboard')->middleware('perm:2');
Route::get('/all_courses', [FrontendController::class, 'all_courses']);
Route::get('/wish_list_courses', [FrontendController::class, 'wish_list_courses']);
Route::get('/course_detail/{course_id}', [FrontendController::class, 'course_detail']);
Route::get('/my_courses', [FrontendController::class, 'my_courses']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('modules', [CoursesController::class, 'modules_index']);
Route::get('courses', [CoursesController::class, 'course_index']);
Route::get('lessons', [CoursesController::class, 'lessons_index']);
Route::post('lesson/create', [CoursesController::class, 'lesson_store']);
Route::get('all', [FrontendController::class, 'all_courses']);
Route::get('{id}', [FrontendController::class, 'view_course']);
Route::post('course/create', [CoursesController::class, 'course_store']);
Route::post('course/delete', [CoursesController::class, 'course_delete']);
Route::get('course/edit/{id}', [CoursesController::class, 'course_edit'])->name('edit-course');
Route::post('course/update', [CoursesController::class, 'course_update']);

Route::post('module/create', [CoursesController::class, 'modules_create']);
Route::get('module/edit/{id}', [CoursesController::class, 'modules_edit'])->name('edit-module');
Route::post('module/update', [CoursesController::class, 'module_update']);
Route::post('module/delete', [CoursesController::class, 'module_delete']);

Route::middleware(['auth'])->group(function () {
    // These routes will require the user to be already logged in
    Route::get('/view/{title}', [FrontendController::class, 'view_module']);
    Route::get('/start_course/{id}', [FrontendController::class, 'start_course']);

});
