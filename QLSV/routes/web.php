<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
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
Route::get('/dssv', function () {
    return view('dssv');
});
Route::get('/test', function () {
    $dssv = DB::table('students')->get();
    return $dssv;
});

Route::get('/student/all',[StudentController::class,'index']);

Route::get('/students',[StudentController::class,'getStudents']);