<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Task;

class TasksController extends Controller
{
    public function store(PostsCreateRequest $request){
        $task = new Task();

        $task->subject = request('subject');
        $task->priority = request('priority');
        $task->dueDate = request('dueDate');
        $task->status = request('status');
        $task->percComplete = request('percComplete');
        $task->modifiedOn = date('Y-m-d '); 

        $task->save();
    }
}
