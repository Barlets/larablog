<?php

namespace App\Http\Controllers;

use App\Task;
use DB;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        $tasks = Task::incompleted()->get();
        $tasks = Task::incomplete();
        //    app('events')->fire();
        return view('tasks.index', compact('tasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }

}
