<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects=Project::all();
        return view('projects.index',compact('projects'));
    }

    public function create(){
        return view('projects.create');
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
        return view('projects.edit');
    }

    public function update(Request $request,Project $projects){
        $projects->update::$request->all();
        return redirect()->route('route.index')->with('success','data updated successfully');
    }
     public function destroy(Request $request,Project $projects){
        $projects->delete::$request->all();
        return redirect()->route('route.index')->with('success','data delete successfully');
    }


}
