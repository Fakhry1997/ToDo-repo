<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        #to Retrive all task when we are in homepage
        $tasks=Task::OrderBy('completed_at')
        ->orderBy('id','DESC')
        ->get();


        return view('tasks.index',[
            'tasks'=>$tasks,
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'description'=>'required|max:255'
        ]);
        Task::create([
                'description'=> $request->description,
        ]);
        return redirect()->route('tasks.get.create');
        
    }
    public function update($id){
        $task=Task::where('id',$id)->first();
        $task->completed_at=now();
        $task->save();

        return redirect('/');
    }

    public function delete($id){
        $task=Task::where('id',$id)->first();
        $task->delete();
        return redirect('/');
    }
}
