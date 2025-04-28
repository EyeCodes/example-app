<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Http\Request;

class loginController extends Controller
{

    public function index(){
        $users = User::all();
        return view('user/register');
    }

    public function create(){
        return view();
    }

    public function register(Request $request){
        $request -> validate([
            'name' =>'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $qry = User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
            ]);

                return redirect('/');
    }

    public function loginform(){
        return view('user/login');
    }
    public function login(Request $request){


        // $request -> validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ]);
        // $credentials = $request->only('email', 'password');

        // $user = User::where('email')->where(bcrypt('password'))->first();
        // if($user){
        //     return redirect('/home');
        // }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Store custom session values
            Session::put('user_name', Auth::user()->name);
            Session::put('login_time', now());
    
            // Flash message (temporary - only available in next request)
            Session::flash('status', 'Logged in successfully!');
    
            return redirect()->intended(route('home'));
        }
    
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');

    }

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login.form');
}

}
