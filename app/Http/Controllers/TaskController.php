<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;
use Validator;

class TaskController extends Controller
{
    public function index(){
        // $show = [
        //     [
        //         'id'=> 1, 
        //         'name'=>'practicar', 
        //         'descrption'=>'practicar muchos todos los días'
        //     ],
        //     [
        //         'id'=> 2, 
        //         'name'=>'estudiar', 
        //         'descrption'=>'estudiar un poco'
        //     ],
        //     [
        //         'id'=> 3, 
        //         'name'=>'limpiar', 
        //         'descrption'=>'limpiar el codigo/refactorizar'
        //     ],
        // ];

        $tasks = task::get();
        return response()->json( ["tasks" => $tasks]);    
    }

    public function show($id){
        $tasks = Task::where('id', $id)->get(); 
        //tasks = Task::find($id);
        if (!isset($tasks)){
            return response()->json( ["message"=> "Task not finded"] );
        }
        return response()->json( ["tasks" => $tasks]);
    }

    public function store( Request $request){
        
        //return response()->json( ["show message"=>"Se guardo la tarea correctamente" ]);
        $validator = Validator::make($request->all(),[
            'name'=> 'required|unique:tasks'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $task = new Task;

        $task->name = $request-> name;
        $task->description = $request-> description;
        $task->priority = $request-> priority;
        $task->status = $request-> status;

        $task->save();
        return response()->json( ["tasks" => $task]);
    }
}
