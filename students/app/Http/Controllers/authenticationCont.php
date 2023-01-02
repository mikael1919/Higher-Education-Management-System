<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authenticationCont extends Controller
{
    public function grade(){
        return view("students.grade");
    }
    
    public function accounts(){
        return view("students.accounts");
    }
    public function view_grade(){
        return view("students.view_grade");
    }
    public function dasboard(){
        return view("students.dasboard");
    }
    public function account(){
        return view("students.account");
    }
    public function login(){
        return view("auth.login");
    }
    public function viewprofile(){
        return ("auth.viewprofile");
    }
    public function index(){
        return view("auth.index");
    }
    public function studentLogin(Request $request)
    {
        return view('login');
    }
    /*public function LoginStudent(Request $request){
        if($request->isMethod('post'))
        {
            $student = $request->all();
            $studentCount = Roll::where(['username'=> $student['username'],
            'password'=> $student['password']])->count();
            
            if($studentCount > 0){
                Session::put('studentSession', $student['username']);
                Flash::success('Welcome' .$student['username']);
                return redirect('/account');
            }else
            {
                Flash::error('Your Username or Password is Incorrect!');
                return redirect('/student');//login page
            }


        }
    }
/*
    public function account()
    {
        if(Session::has('studentSession')){
            $student = Admission::all();
        
        }else{
            return redirect('/student')->with('error', 'please login to access');
        }
        return view('students.account', compact('student'));
    }
}*/
/*class authenticationCont extends Controller
{
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'user_type' => 'required'
        ]);

        // Check the user type
        if ($request->user_type == "Student") {
            // Query the database for the student's record
            $student = DB::table('students')
                ->where('student_no', $request->username)
                ->where('password', $request->password)
                ->first();

            if ($student) {
                // If the record is found, log the student in and redirect them to the dashboard
                $request->session()->put('logged_in', true);
                $request->session()->put('student_id', $student->student_id);
                return redirect('/student/dashboard');
            } else {
                // If the record is not found, display an error message
                return redirect('/access_denied');
            }
        } else if ($request->user_type == "Administrator") {
            // Query the database for the administrator's record
            $administrator = DB::table('users')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->where('user_type', 'Administrator')
                ->first();

            if ($administrator) {
                // If the record is found, log the administrator in and redirect them to the dashboard
                $request->session()->put('logged_in', true);
                $request->session()->put('user_id', $administrator->user_id);
                return redirect('/admin/dashboard');
            } else {
                // If the record is not found, display an error message
                return redirect('/access_denied');
            }
        } else if ($request->user_type == "Instructor") {
            // Query the database for the instructor's record
            $instructor = DB::table('users')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->where('user_type', 'Instructor')
                ->first();

            if ($instructor) {
                // If the record is found, log the instructor in and redirect them to the dashboard
                $request->session()->put('logged_in', true);
                $request->session()->put('user_id',
                $instructor->user_id);
                return redirect('/instructor/dashboard');
            } else {
                // If the record is not found, display an error message
                return redirect('/access_denied');
            }
        }
    }*/
}
