<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gradecontroller;
use App\Http\Controllers\lecview;

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


Route::get('grade', function()
{
    return view('grade');
});
Route::get('attendance', function()
{
    return view('attendance');
});
Route::get('assignment', function()
{
    return view('assignment');
});
Route::get('announcement', function()
{
    return view('announcement');
});
Route::post('grades',[gradecontroller::class,'insertGrade']);
Route::post('attendance',[gradecontroller::class,'insertAttendance']);
Route::post('assignments',[gradecontroller::class,'insertAssignment']);
Route::post('announcement',[gradecontroller::class,'insertAnnouncement']);

Route::get('/',[lecview::class,'show']);
