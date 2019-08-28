<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $show = [
            'practicar',
            'estudiar'
        ];
        return response()->json( ["tasks" => $show]);    
    }

    public function show($new){
        $tasks = [$new]; 
        return response()->json( ["tasks" => $tasks]);
    }

    public function store(){
        return response()->json( ["show message"=>"Se guardo la tarea correctamente" ]);
    }
}
