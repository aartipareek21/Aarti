<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
     public function index(){
        $projects=Project::all();
        return view('tasks.index',compact('projects'));
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string',
            'price'=>'required',
            'due_date'=>'required',
            'desc'=>'required'
        ]);

        Project::create($request->all());

    return redirect()->route('route.index')->with('success','data insert successfully');
    }

    public function edit(Request $request)
    {
        return view('tasks.edit');
    }

    public function update(Request $request,Task $tasks){
        $tasks->update::$request->all();
        return redirect()->route('route.index')->with('success','data updated successfully');
    }
     public function destroy(Request $request,Task $tasks){
        $tasks->delete::$request->all();
        return redirect()->route('route.index')->with('success','data delete successfully');
    }
}
