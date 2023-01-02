<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel_IOFactory;
class fredCont extends Controller
{
    public function grade(){
        return view("students.grade");
    }
}
