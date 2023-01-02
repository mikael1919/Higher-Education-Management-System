<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;
use App\Models\grades;
use App\Models\assignments;
use App\Models\attendance;

class gradecontroller extends Controller
{
    function insertGrade(Request $req){
        $grades= new grades;
        $grades->description=$req->description;
        $grades->score=$req->score;
        $grades->studentID=$req->studentID;
        $grades->unit=$req->unit;
        $grades->save();
        return redirect('grade');
    }
    function insertGradeApi(Request $req){
        $grades= new grades;
        $grades->description=$req->description;
        $grades->score=$req->score;
        $grades->studentID=$req->studentID;
        $grades->unit=$req->unit;
        if($grades->save()){
            return ['Status 200 OK'=>"Data has been inserted"];
    }
}
    function insertAttendance(Request $req){
        $attendance= new attendance;
        $attendance->date=$req->date;
        $attendance->studentID=$req->studentID;
        $attendance->hours=$req->hours;
        $attendance->unit=$req->unit;
        $attendance->save();
        return redirect('attendance');
    }
    function insertAttendanceApi(Request $req){
        $attendance= new attendance;
        $attendance->date=$req->date;
        $attendance->studentID=$req->studentID;
        $attendance->hours=$req->hours;
        $attendance->unit=$req->unit;
        if($attendance->save()){
        return ['Status 200 OK'=>"Data has been inserted"];

        }
    }
    function insertAssignment(Request $req){
        $assignments= new assignments;
        $assignments->description=$req->description;
        $assignments->deadline=$req->deadline;
        $assignments->unit=$req->unit;
        $assignments->save();
        return redirect('attendance');
    }
    function insertAnnouncement(Request $req){
        $announcement= new announcement;
        $announcement->description=$req->description;
        $announcement->save();
        return redirect('announcement');
    }

}

