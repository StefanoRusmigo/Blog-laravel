<?php

namespace App\Http\Controllers;

use App\Task;

class TasksConstroller extends Controller
{
    public function index(){
    $tasks = Task::all();
    return view('welcome',compact('tasks'));
    }

    public function show(Task $task){ //Task::find(wildcard)
   
	  return view('tasks.show',compact('task'));

    }
}
