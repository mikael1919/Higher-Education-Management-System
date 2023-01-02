<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\lecturers;

class lecview extends Controller 
{
 function show()
 {
    $data= lecturers::all();
     return view('lecturerhome',compact('data'));
 }
}
