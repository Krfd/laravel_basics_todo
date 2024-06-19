<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function display() {
        return view('todo')->with('todos', Todo::all());
    }

    public function create(Request $request) {
        $todo = new Todo();
        $todo->content = $request->content;
        $todo->status = "pending";
        $todo->save();

        return redirect()->route('home')->with('success', "Added a new task successfully");
    }
}
