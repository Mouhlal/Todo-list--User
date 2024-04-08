<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function index(){
        return view( 'todo.login' );
    }
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        $xo = [
            'email' => $email ,
            'password' =>$password,
        ];
        Hash::make( $password);
        if(Auth::attempt($xo)){
            $request->session()->regenerate();
            return redirect()->route('todo')->with('yes',"Login with succes");
        }
        else{
            return back()->withErrors([
                'email' =>"email incorrect please try again",
                'password' =>"Password Incorrect Please Try Again"
            ]);
        }
       }

    public function deconnexion(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index')->with('dec',"Deconnected");
    }
    public function sig(){
        return view( "todo.signup" );
    }
    public function connecter(Request $request){
        $a = $request->validate([
            'username' => 'required',
            'email' => 'required|unique:logins',
            'password' => 'required|confirmed'
        ]);
        $a['password'] = Hash::make($request->password);
        login::create($a);
        return to_route('index') ->with("ok","Your Account created with succes");
    }
    public function add(){
        return view( "todo.add" );
    }
    public function store(Request $request) {
        $submit = $request->validate([
            'todo' => 'required',
            'status' => 'required|string',
            'description' => 'required',
        ]);
        $submit['user_id'] = auth()->id();
        Todo::create($submit);
        return redirect()->route('todo')->with('add','Adding with success');
    }
  
    }
