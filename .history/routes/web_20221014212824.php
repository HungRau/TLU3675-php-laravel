<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; //add

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student-manage', 'App\Http\Controllers\StudentController@get_all_student');

// Route::get('student-edit/', function () {
//     return view('student_edit');
// });
Route::get('/student-edit/{id}', 'App\Http\Controllers\StudentController@edit');
