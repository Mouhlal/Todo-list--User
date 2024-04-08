<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Todo2Controller extends Controller
{
    public function todo(){
        $user = Auth::user();
        $todo=Todo::where('user_id',$user->id)->get();
        return view('todo.mytodo', compact('todo'));
    }
    public function destroy($id){
        Todo::findOrFail($id)->delete();
        return redirect()->route( 'todo') ->with('danger','Task deleted!');
    }
    public function edit($id){
        $todo = Todo::findOrFail($id);
        return view('todo.edit',compact('todo'));
    }
    public function update(Request $request , $id){
        Todo::findOrFail($id)->update($request->all());
        return redirect()->route('todo')->with('up','Task updated!');
    }
}

