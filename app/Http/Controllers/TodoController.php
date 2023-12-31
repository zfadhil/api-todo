<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return response()->json($todo);
    }

    public function store(Request $request){
        $request -> validate([
            'todo_content' => 'required|max:255',
            'statuss' => 'required'
        ]);

        $todo = Todo::create($request->all());
        return new TodoResource($todo);
    }

    public function update(Request $request, $id){
        $request -> validate([
            'todo_content' => 'required|max:255',
            'statuss' => 'required'
        ]);

        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        return new TodoResource($todo);
    }

    public function delete($id){
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return response()->json([
            'message' => "data successfully deleted"
        ]);
    }
}
