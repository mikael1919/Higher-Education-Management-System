<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authenticationCont;
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
//Route::get('/login', [authenticationCont::class,'showLoginForm'])->name('login');
//Route::get('/login', [authenticationCont::class,'login'])->name('login.submit');
//Route::group(['middleware' => ['studentSession']], function(){
  //  Route::match(['get','post'], 'account', [authenticationCont::class,'account']);
    //inside here we will pass all our student routes
    //if the student logs in he or she will be able to see all his details
//});
//Route::get('/student', [authenticationCont::class,'studentLogin']);
//Route::get('/logout', [authenticationCont::class,'studentLogout']);
//Route::post('/student-login', [authenticationCont::class,'LoginStudent']);
Route::get('/view_grade', [authenticationCont::class,'view_grade']);
Route::get('/viewprofile', [authenticationCont::class,'viewprofile']);
Route::get('/changepassword', [authenticationCont::class,'changepassword']);
Route::get('/account', [authenticationCont::class,'account']);
Route::get('/login', [authenticationCont::class,'studentLogin']);
Route::get('/dasboard', [authenticationCont::class,'dasboard']);
Route::get('/accounts', [authenticationCont::class,'accounts']);
Route::get('/grade', [authenticationCont::class,'grade']);
