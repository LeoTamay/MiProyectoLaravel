<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

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

    public function show($new){
        $tasks = [$new]; 
        return response()->json( ["tasks" => $tasks]);
    }

    public function store(){
        return response()->json( ["show message"=>"Se guardo la tarea correctamente" ]);
    }
}
