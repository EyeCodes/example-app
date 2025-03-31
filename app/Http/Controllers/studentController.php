<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students as STUD;

class studentController extends Controller
{
    public function index(){
        return view('students/add_student');
    }
    public function get($id){
        $qry=STUD::where('studno', $id)->first();
        dd($qry);
    }

    public function store(Request $request){
        $qry = STUD::insert([
        'fname' => $request->fname,
        'mname' => $request->mname,
        'lname' => $request->lname,
        'suffix' => $request->suffix,
        'gender' => $request->gender,
        'birthdate' => $request->birthdate

        ]);

        if($qry){
            // return redirect()->action([HomeController::class, 'student/add_student']);
            return redirect('/')->with('status', 'Registered Succesfully');
        }
    }
}
