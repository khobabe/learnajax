<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Task extends Model
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
