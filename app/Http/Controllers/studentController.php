<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students as STUD;
use Illuminate\Contracts\Session\Session;

class studentController extends Controller
{
    public function home(){
        $students = STUD::all();
        return view('students/add_student', compact('students'));
    }
    public function get($id){
        $qry=STUD::where('id', $id)->first();
        dd($qry);
    }

    public function store(Request $request){

        $request -> validate([
            'fname'=> 'required|max:50',
            'lname'=> 'required|max:50',
            'gender'=>'required',
            'birthdate' => 'required'
        ]);

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

    public function update(Request $request, $id){

        $request -> validate([
            'fname'=> 'required|max:50',
            'lname'=> 'required|max:50',
            'gender'=>'required',
            'birthdate' => 'required'
        ]);
        $update = STUD::where('id', $id)->update([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'suffix' => $request->suffix,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate
        ]);

        return redirect('/');
    }

    public function updateView($id){
        $students =STUD::where('id', $id)->first();
        return view('students/update_student', compact('students'));
    }

    public function delete($id){
$qry = STUD::where('id', $id)->delete();
 return redirect('/');
    }
}
