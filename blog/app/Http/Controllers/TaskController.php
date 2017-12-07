<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //

    public function index($id){
    	
    	$ass=Task::find($id);

 return view('aa',compact('ass')); 

 
    }
    public function second(){
    	$uses=Task::all();
 return view('uses',compact('uses'));
    }
}
