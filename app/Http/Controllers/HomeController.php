<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("HomeView");
    }

    public function store(Request $request){
        $subject = $request->subject;
        $section = $request->section;
        $description = $request->description;
        $units = $request->units;
        $day = $request->day;
        $time = $request->time;

        return view('HomeView', compact('subject', 'section', 'description', 'units', 'day', 'time'));
    }

}
