<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    //
    public function index(){
    	$tasks=Task::all();
    	$error=Task::inComplete();
    	if(!$error)
		return array('mys'=>$tasks);
    }
    public function show($id,$id2){
    	$tasks=Task::find($id);
    	return view('home',compact('tasks'));
    }
    public function pick($id){
    	//$tasks=Task::find($id);
    	$tasks=Task::where('name',$id)->get();
    	//return view('home',compact('tasks'));
    	return $tasks;
    }
}
