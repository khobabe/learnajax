<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request){
        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return response()->json([
            "success" => true, 
            "msg" => "data inserted successfully"
        ]);
    }
}
